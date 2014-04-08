<?php
$q[] = "How do I specify to use the TCP network for MPI messages?";

$anchor[] = "tcp-btl";

$a[] = "In general, you specify that the [tcp] BTL component should be
used.  However, note that you should _also_ specify that the [self]
BTL component should be used.  [self] is for loopback communication
(i.e., when an MPI process sends to itself), and is technically a
different communication channel than TCP.  For example:

" . faqcode("mpirun --mca btl tcp,self ...") . "

Failure to specify the [self] BTL may result in Open MPI being unable
to complete send-to-self scenarios (meaning that your program will run
fine until a process tries to send to itself).

Note that if the [tcp] BTL is available at run time (which it should
be on most POSIX-like systems), Open MPI should automatically use it
by default (ditto for [self]).  Hence, it's _usually_ unnecessary to
specify these options on the [mpirun] command line.  They are
typically only used when you want to be absolutely positively
definitely sure to use the specific BTL.

If you are using a high-speed network (such as Myrinet or InfiniBand),
<a href=\"#tcp-auto-disable\">be sure to also see this FAQ entry.</a>";

/////////////////////////////////////////////////////////////////////////

$q[] = "But wait -- I'm using a high-speed network.  Do I have to
disable the TCP BTL?";

$anchor[] = "tcp-auto-disable";

$a[] = "No.  Following the so-called \"Law of Least Astonishment\",
Open MPI assumes that if you have both a TCP network and at least one
high-speed network (such as Myrinet or InfiniBand), you will likely
only want to use the high-speed network(s) for MPI message passing.
Hence, the [tcp] BTL component will sense this and automatically
deactivate itself.

That being said, Open MPI may still use TCP for setup and teardown
information -- so you'll see traffic across your TCP network during
startup and shutdwon of your MPI job.  This is normal and does not
affect the MPI message passing channels.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I know what MCA parameters are available for tuning MPI performance?";

$anchor[] = "tcp-params";

$a[] = "The [ompi_info] command can display all the parameters
available for the [tcp] BTL component (i.e., the component that uses
TCP for MPI communications):

" . faqcode("ompi_info <strong>--param btl tcp</strong>") . "

<font color=\"red\"><strong>NOTE:</strong></font> Starting with the
Open MPI 1.7 series, you [ompi_info] will only show a few MCA
parameters by default.  You will need to specify [--level 9] to show
_all_ MCA parameters.  For example:

" . faqcode("ompi_info --param btl tcp <strong>--level 9</strong>") . "

";

/////////////////////////////////////////////////////////////////////////

$q[] = "Does Open MPI use the TCP loopback interface?";

$anchor[] = "tcp-loopback";

$a[] = "Usually not.

In general message passing usage, there are two scenarios where using
the TCP loopback interface could be used:

<ol>
<li>Sending a message from one process to itself</li>
<li>Sending a message from one process to another process on the same
machine</li>
</ol>

The TCP BTL does not handle \"send-to-self\" scenarios in Open MPI;
indeed, it is not even capable of doing so.  Instead, the [self] BTL
component is used for all send-to-self MPI communications (this allows
all Open MPI BTL components to avoid special case code for
send-to-self scenarios).  The [self] component uses its own mechanisms
for send-to-self scenarios; it does not use network interfaces.

When sending to processes on the same machine, Open MPI will default
to using the shared memory (<tt>sm</tt>) BTL.  If the user has
deactivated this BTL, depending on what other BTL components are
available, it is possible that the TCP BTL will be chosen for message
passing to processes on the same node, in which case the TCP lookback
device will likely be used.  But this is not the default; either
shared memory has to fail to startup properly or the user must
specifically request not to use the shared memory BTL.";

/////////////////////////////////////////////////////////////////////////

$q[] = "I have multiple TCP networks on some/all of my cluster nodes.  Which ones will Open MPI use?";

$anchor[] = "tcp-multi-network";

$a[] = "In general, Open MPI will greedily use all TCP networks that
it finds per its <a href=\"#tcp-routability\">reachability
computations</a>.

To change this behavior, you can either specifically include certain
networks or specifically exclude certain networks.  See <a
href=\"#tcp-selection\">this FAQ entry</a> for more details.
";

/////////////////////////////////////////////////////////////////////////

$c1 = array();
$o1 = array();
$c1[] = "perl -e 'die$!=113'";
$o1[] = "No route to host at -e line 1.";
$c1[] = "perl -e 'die$!=104'";
$o1[] = "Connection reset by peer at -e line 1.";

$q[] = "I'm getting TCP-related errors.  What do they mean?";

$anchor[] = "tcp-connection-errors";

$a[] = "TCP-related errors are usually reported by Open MPI in a
message similar to these:

<faqcode>
btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect] connect() failed with errno=113
mca_btl_tcp_frag_send: writev failed with errno=104 
</faqcode>

If an error number is displayed with no explanation string, you can
see what that specific error number means on your operating system
with the following command (the following example was run on Linux;
results may be different on other operating systems):

" . faqcode($c1, $o1) . "

Two types of errors are commonly reported to the Open MPI user's
mailing list:

<ul>

<li> *No route to host:* These types of errors _usually_ mean that
there are multiple TCP interfaces available and they do not obey Open
MPI's assumptions about routability.  See these two FAQ items for more
information:

<ul>
<li> <a href=\"#tcp-routabiliy\">Open MPI's routability assumptions</a></li>
<li> <a href=\"#tcp-selection\">How to force specific TCP interfaces</a></li>
</ul></li>

<li> *Connection reset by peer:* These types of errors _usually_ occur
after MPI_INIT has completed, and typically indicate that an MPI
process has died unexpectedly (e.g., due to a seg fault).  The
specific error message indicates that a peer MPI process tried to
write to the now-dead MPI process and failed.</li>

</ul>";

/////////////////////////////////////////////////////////////////////////

global $shell_font;
global $shell;
$ss = "$shell_font$shell";

$q[] = "How do I tell Open MPI which TCP interfaces / networks to use?";

$anchor[] = "tcp-selection";

$a[] = "In some parallel environments, it is not uncommon to have
multiple TCP interfaces on each node -- for example, one TCP network
may be \"slow\" and used for control information such as a batch
scheduler, a networked filesystem, and/or interactive logins.  Another
TCP network (or networks) may be \"fast\" and be intended for parallel
applications to use during their runs.  As another example, some
operating systems may also have virtual interfaces for communicating
with virtual machines.

Unless otherwise specified, Open MPI will greedily use all \"up\" TCP
networks that it can find and try to connect to all peers _upon
demand_ (i.e., Open MPI does not open sockets to all of its MPI peers
during [MPI_INIT] -- see <A HREF=\"#tcp-sockets\">this FAQ entry</A>
for more details).  Hence, if you want MPI jobs to not use specific
TCP networks -- or not use any TCP networks at all -- then you need to
tell Open MPI.

*NOTE:* Aggressively using all \"up\" interfaces can cause problems in
some cases.  For example, if you have a machine with a local-only
interface (e.g., the loopback device, or a virtual-machine bridge
device that can only be used _on that machine_, and cannot be used to
communicate with MPI processes on other machines), you will likely
need to tell Open MPI to ignore these networks.  Open MPI usually
ignores loopback devices by default, but *other local-only devices
must be manually ignored.* Users have reported cases where RHEL6
automatically installed a \"virbr0\" device for Xen virtualization.
This interface was automatically given an IP address in the
192.168.1.0/24 subnet and marked as \"up\".  Since Open MPI saw this
192.168.1.0/24 \"up\" interface in all MPI processes on all nodes, it
assumed that that network was usable for MPI communications.  This is
obviously incorrect, and it led to MPI applications hanging when they
tried to send or receive MPI messages.

<ol>
<li>To disable Open MPI from using TCP for MPI communications, the
[tcp] MCA parameter should be set accordingly.  You can either
_exclude_ the TCP component or _include_ all other components.
Specifically:

<faqcode>
# This says to exclude the TCP BTL component 
# (implicitly including all others)
$ss mpirun <font color=red><strong>--mca btl ^tcp</strong></font> ...

# This says to include only the listed BTL components
# (tcp is not listed, and therefore will not be used)
$ss mpirun <font color=red><strong>--mca btl self,sm,openib</strong></font> ...
</faqcode>

<li>If you want to use TCP for MPI communications, but want to
restrict it from certain networks, use the [btl_tcp_if_include] or
[btl_tcp_if_exclude] MCA parameters (only one of the two should be
set).  The values of these parameters can be a comma-delimited list of
network interfaces.  For example:

<faqcode>
# This says to not use the eth0 and lo interfaces.
# (an implicitly use all the rest)  Per the description
# above, TCP loopback and all local-only devices *must*
# be included if the exclude list is specified.
$ss mpirun <font color=red><strong>--mca btl_tcp_if_exclude lo,eth0</strong></font> ...

# This says to only use the eth1 and eth2 interfaces
# (and implicitly ignore the rest)
$ss mpirun <font color=red><strong>--mca btl_tcp_if_include eth1,eth2</strong></font> ...
</faqcode>
</li>

<li>Starting in the Open MPI v1.5 series, you can specify subnets in the
include or exclude lists in CIDR notation.  For example:

<faqcode>
# Only use the 192.168.1.0/24 and 10.10.0.0/16 subnets for MPI
# communications:
$ss mpirun <font color=red><strong>--mca btl_tcp_if_include 192.168.1.0/24,10.10.0.0/16</strong></font> ...
</faqcode>

<font color=red><strong>NOTE:</strong></font> If you use the
[btl_tcp_if_include] and [btl_tcp_if_exclude] MCA parametes to shape
the behavior of the TCP BTL for MPI communications, you may also
need/want to investigate the corresponding MCA parameters
[oob_tcp_if_include] and [oob_tcp_if_exclude], which are used to shape
non-MPI TCP-based communication (e.g., communications setup and
coordination during MPI_INIT and MPI_FINALIZE).

</ol>

Note that Open MPI will still use TCP for control messages, such as
data between [mpirun] and the MPI processes, rendezvous information
during [MPI_INIT], etc.  To disable TCP altogether, you also need to
disable the [tcp] component from the OOB framework.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Does Open MPI open a bunch of sockets during MPI_INIT?";

$anchor[] = "tcp-sockets";

$a[] = "Although Open MPI is likely to open multiple TCP sockets
during [MPI_INIT], the tcp BTL component *does not open one socket per
MPI peer process during <code>MPI_INIT</code>.*  Open MPI opens
sockets as they are required -- so the first time a process sends a
message to a peer and there is a TCP connection between the two, Open
MPI will automatically open a new socket.

Hence, you should not have scalability issues with running large
numbers of processes (e.g., running out of per-process file
descriptors) if your parallel application is sparse in its
communication with peers.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How does Open MPI know which TCP addresses are routable to each other in Open MPI 1.2?";

$anchor[] = "tcp-routability";

$a[] = "This is a fairly complicated question -- there can be
ambiguity when hosts have multiple TCP NICs and/or there are multiple
TCP networks that are not routable to each other in a single MPI job.

It is important to note that Open MPI's atomic unit of routing is a
_process_ -- not an IP address.  Hence, Open MPI makes connections
between _processes_, not nodes (these processes are almost always on
remote nodes, but it's still better to think in terms of _processes_,
not _nodes_).

Specifically, since OMPI can span multiple TCP networks, each MPI
process may be able to use multiple IP addresses to each to each other
MPI process (and vice versa).  So for each process, Open MPI needs to
determine which IP address -- if any - to use to connect to a peer MPI
process.

For example, say that you have a cluster with 16 nodes on a private
ethernet network.  One of these nodes doubles as the head node for the
cluster and therefore has 2 ethernet NICs -- one to the external
network and one to the internal cluster network.  But since 16 is a
nice number, you also want to use it for computation as well.  So when
you mpirun spanning all 16 nodes, OMPI has to figure out to _not_ use
the external NIC on the head node and only use the internal NIC.

To explain what happens, we need to explain some of what happens in
MPI_INIT.  Even though Open MPI only makes TCP connections between
peer MPI processes upon demand (see <a href=\"#tcp-sockets\">this FAQ
entry</a>), each process publishes its TCP contact information which
is then made available to all processes.  Hence, every process knows
the TCP address(es) and corresponding port number(s) to contact every
other process.

But keep in mind that these addresses may span multiple TCP networks
and/or not be routable to each other.  So when a connection is
requested, the TCP BTL component in Open MPI creates pairwise
combinations of all the TCP addresses of the localhost to all the TCP
addresses of the peer process, looking for a match.

A \"match\" is defined by the following rules:

<ol>
<li> If the two IP addresses match after the subnet mask is applied,
     assume that they are mutually routable and allow the connection</li>
<li> If the two IP addresses are public, assume that they are mutually
     routable and allow the connection</li>
<li> Otherwise, the connection is disallowed (this is not an error --
     we just disallow this connection on the hope that some other
     device can be used to make a connection)</li>
</ol>

These rules tend to cover the following scenarios:

<ul>
<li>A cluster on a private network with a head node that has a NIC on
the private network and the public network</li>
<li> Clusters that have all public addresses</li>
</ul>

These rules do _not_ cover the following cases:

<ul>
<li>Running an MPI job that spans public and private networks</li>
<li>Running an MPI job that spans a bunch of private networks with
narrowly-scoped netmasks, such as nodes that have IP addresses
192.168.1.10 and 192.168.2.10 with netmasks of 255.255.255.0 (i.e.,
the network fabric makes these two nodes be routable to each other,
even though the netmask implies that they are on different
subnets).</li>
</ul>";

/////////////////////////////////////////////////////////////////////////

$q[] = "How does Open MPI know which TCP addresses are routable to each other in Open MPI 1.3 (and beyond)?";

$anchor[] = "tcp-routability-1.3";

$a[] = "The 1.3 series assumptions about routability are much different than
in the 1.2 series assumption.  In the 1.3 series, we assume that
all interfaces are routable as long as they have the same address
family, IPv4 or IPv6.  We use graph theory and give each possible
connection a weight depending on the quality of the connection.  This
allows the library to select the best connections between nodes.  This
method also supports striping but prevents more than one connection to
any interface.

The quality of the connection is defined as follows, with a higher
number meaning better connection.  Note that when giving a weight to a
connection consisting of a private address and a public address, it will
give it the weight of PRIVATE_DIFFERENT_NETWORK.

<faqcode>
            NO_CONNECTION = 0
PRIVATE_DIFFERENT_NETWORK = 1
PRIVATE_SAME_NETWORK      = 2
PUBLIC_DIFFERENT_NETWORK  = 3
PUBLIC_SAME_NETWORK       = 4
</faqcode>


At this point, an example will best illustrate how two processes on two
different nodes would connect up.  Here we have two nodes with a variety
of interfaces.

<faqcode>       
        NodeA                NodeB
   ---------------       ---------------
  |     lo0       |     |     lo0       |
 '|  127.0.0.1    |     |  127.0.0.1    |
  |  255.0.0.0    |     |  255.0.0.0    |
  |               |     |               |
  |     eth0      |     |    eth0       |
  |   10.8.47.1   |     |   10.8.47.2   |
  | 255.255.255.0 |     | 255.255.255.0 |
  |               |     |               |
  |     ibd0      |     |     ibd0      |
  |  192.168.1.1  |     |  192.168.1.2  |
  | 255.255.255.0 |     | 255.255.255.0 |
  |               |     |               |
  |     ibd1      |     |               |
  |  192.168.2.2  |     |               |
  | 255.255.255.0 |     |               |
   ---------------       ---------------
</faqcode> 
From these two nodes, the software builds up a bipartite graph that
shows all the possible connections with all the possible weights.  The
_lo0_ interfaces are excluded as the [btl_tcp_if_exclude] mca parameter
is set to _lo_ by default.  Here is what all the possible connections
with their weights look like.
<faqcode>
     NodeA         NodeB
eth0 --------- 2 -------- eth0
    \
     \
      \------- 1 -------- ibd0

ibd0 --------- 1 -------- eth0
    \
     \
      \------- 2 -------- ibd0

ibd1 --------- 1 -------- eth0
    \
     \
      \------- 1 -------- ibd0
</faqcode>

The library then examines all the connections and picks the optimal
ones.  This leaves us with two connections being established between
the two nodes.

If you are curious about the actual [connect()] calls being made by
the processes, then you can run with [--mca btl_base_verbose 30].
This can be useful if you notice your job hanging and believe it may
be the library trying to make connections to unreachable hosts.

<faqcode>
# Here is an example with some of the output deleted for clarity.
# One can see the connections that are attempted.

> mpirun --mca btl self,sm,tcp <font color=red><strong>--mca btl_base_verbose 30</strong></font> -np 2 -host NodeA,NodeB a.out
[...snip...]
[NodeA:18003] btl: tcp: attempting to connect() to address 10.8.47.2 on port 59822
[NodeA:18003] btl: tcp: attempting to connect() to address 192.168.1.2 on port 59822
[NodeB:16842] btl: tcp: attempting to connect() to address 192.168.1.1 on port 44500
[...snip...]
</faqcode>

In case you want more details about the theory behind the connection
code, you can find the background story in a brief
" . "<a href=\"http://www.ieeexplore.ieee.org/xpl/freeabs_all.jsp?isnumber=4476518&arnumber=4476565&count=56&index=46\">" . "IEEE paper.</A>

";

/////////////////////////////////////////////////////////////////////////

$q[] = "Does Open MPI ever close TCP sockets?";

$anchor[] = "tcp-socket-closing";

$a[] = "As of v1.2, no.  

Although TCP sockets are opened \"lazily\" (meaning that MPI
connections / TCP sockets are only opened upon demand -- as opposed to
opening all possible sockets between MPI peer processes during
MPI_INIT), they are never closed.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Does Open MPI support IP interfaces that have more than one IP address?";

$anchor[] = "ip-multiaddress-devices";

$a[] = "As of v1.6, no.  

For example, if the output from your [ifconfig] has a single IP device
with multiple IP addresses like this:

<faqcode>
0: eth0: <BROADCAST,MULTICAST,UP,LOWER_UP> mtu 1500 qdisc mq state UP qlen 1000
   link/ether 00:18:ae:f4:d2:29 brd ff:ff:ff:ff:ff:ff
   inet 192.168.0.3/24 brd 192.168.0.255 scope global eth0:1
   inet 10.10.0.3/24 brf 10.10.0.255 scope global eth0
   inet6 fe80::218:aef2:29b4:2c4/64 scope link 
      valid_lft forever preferred_lft forever
</faqcode>

(note the two \"inet\" lines in there)

Then Open MPI will be unable to use this device.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Does Open MPI support virtual IP interfaces?";

$anchor[] = "ip-virtual-ip-interfaces";

$a[] = "As of v1.6.2, no.  

For exampe, if the output of your [ifconfig] has both \"eth0\" and
\"eth0:0\", Open MPI will get confused if you use the TCP BTL, and
will likely hang.

Note that using [btl_tcp_if_include] or [btl_tcp_if_exclude] to avoid
using the virtual interface will *not* solve the issue.

This may get fixed in a future release.  See <a
href=\"https://svn.open-mpi.org/trac/ompi/ticket/3339\">Trac bug
#3339</a> to follow the progress on this issue.";