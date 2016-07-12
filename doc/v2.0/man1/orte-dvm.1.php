<?php
$topdir = "../../..";
$title = "orte-dvm(1) man page (version 2.0.0)";
$meta_desc = "Open MPI v2.0.0 man page: orte-dvm(1)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
         <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
 orte-dvm, ompi_dvm - Establish a Distributed Virtual Machine
(DVM).
<p> <b>Note:</b> <i>orte-dvm</i> and <i>ompi-dvm</i> are synonyms for each other.  Using either
of the names will produce the same behavior.
<h2><a name='sect1' href='#toc1'>Synopsis</a></h2>
 <p>
<b>orte-dvm</b> [ options
] <p>

<p> Invoking <i>orte-dvm</i> via an absolute path name is equivalent to specifying
the <i>--prefix</i> option with a <i>&lt;dir&gt;</i> value equivalent to the directory where <i>orte-dvm</i>
resides, minus its last subdirectory.  For example:
<p>     <b>%</b> /usr/local/bin/orte-dvm
...<br>

<p> is equivalent to
<p>     <b>%</b> orte-dvm --prefix /usr/local<br>

<p>
<h2><a name='sect2' href='#toc2'>Quick Summary</a></h2>
 <i>orte-dvm</i> will establish a DVM that can be used to execute
subsequent applications. Use of <i>orte-dvm</i> can be advantageous, for example,
when you want to execute a number of short-lived tasks. In such cases, the
time required to start the ORTE DVM can be a significant fraction of the
time to execute the overall application. Thus, creating a persistent DVM
can speed the overall execution. In addition, a persistent DVM will support
executing multiple parallel applications while maintaining separation between
their respective cores.
<h2><a name='sect3' href='#toc3'>Options</a></h2>

<dl>

<dt><b>-h, --help</b> </dt>
<dd>Display help for this command
  </dd>

<dt><b>-V, --version</b> </dt>
<dd>Print version number.  If no other arguments are given, this
will also cause orte-dvm to exit.   </dd>
</dl>
<p>
Use one of the following options to specify
which hosts (nodes) of the cluster to use for the DVM.
<dl>

<dt><b>-H, -host, --host &lt;host1,host2,...,hostN&gt;</b>
</dt>
<dd>List of hosts for the DVM.   </dd>

<dt><b></b> -hostfile, --hostfile &lt;hostfile&gt; </dt>
<dd>Provide a hostfile
to use.   </dd>

<dt><b>-machinefile, --machinefile &lt;machinefile&gt;</b> </dt>
<dd>Synonym for <i>-hostfile</i>.   </dd>

<dt><b>--prefix
&lt;dir&gt;</b> </dt>
<dd>Prefix directory that will be used to set the <i>PATH</i> and <i>LD_LIBRARY_PATH</i>
on the remote node before invoking the ORTE daemon.    Setting MCA parameters:
  </dd>

<dt><b>-gmca, --gmca &lt;key&gt; &lt;value&gt;</b> </dt>
<dd>Pass global MCA parameters that are applicable to
all contexts. <i>&lt;key&gt;</i> is the parameter name; <i>&lt;value&gt;</i> is the parameter value.
</dd>

<dt><b>-mca, --mca &lt;key&gt; &lt;value&gt;</b> </dt>
<dd>Send arguments to various MCA modules.  See the "MCA"
section, below.     </dd>

<dt><b>-report-uri, --report-uri &lt;channel&gt;</b> </dt>
<dd>Print out orte-dvm&rsquo;s URI
during startup. The channel must be either a &rsquo;-&rsquo; to indicate that the URI is
to be output to stdout, a &rsquo;+&rsquo; to indicate that the URI is to be output to
stderr, or a filename to which the URI is to be written.   </dd>
</dl>
<p>
The following
options are useful for developers; they are not generally useful to most
ORTE and/or MPI users:
<dl>

<dt><b>-d, --debug-devel</b> </dt>
<dd>Enable debugging of the ORTE layer.
  </dd>

<dt><b>--debug-daemons-file</b> </dt>
<dd>Enable debugging of the ORTE daemons in the DVM, storing
output in files.   </dd>
</dl>
<p>
There may be other options listed with <i>orte-dvm --help</i>.

<h2><a name='sect4' href='#toc4'>Description</a></h2>
 <i>orte-dvm</i> starts a Distributed Virtual Machine (DVM) by launching
a daemon on each node of the allocation, as modified or specified by the
<i>-host</i> and <i>-hostfile</i> options. Applications can subsequently be executed using
the <i>orte-submit</i> command.  The DVM remains in operation until receiving the
<i>orte-submit -terminate</i> command.
<h3><a name='sect5' href='#toc5'>Specifying Host Nodes</a></h3>
 Host nodes can be
identified on the <i>orte-dvm</i> command line with the <i>-host</i> option or in a hostfile.
 <p>
For example,
<dl>

<dt>orte-dvm -H aa,aa,bb ./a.out </dt>
<dd>launches two processes on node
aa and one on bb.  </dd>
</dl>
<p>
Or, consider the hostfile
<p>    <b>%</b> cat myhostfile<br>
    aa slots=2<br>
    bb slots=2<br>
    cc slots=2<br>

<p>  <p>
Here, we list both the host names (aa, bb, and cc) but also how many
"slots" there are for each.  Slots indicate how many processes can potentially
execute on a node.  For best performance, the number of slots may be chosen
to be the number of cores on the node or the number of processor sockets.
 If the hostfile does not provide slots information, a default of 1 is
assumed. When running under resource managers (e.g., SLURM, Torque, etc.),
Open MPI will obtain both the hostnames and the number of slots directly
from the resource manger.   <p>

<hr><p>
<a name='toc'><b>Table of Contents</b></a><p>
<ul>
<li><a name='toc0' href='#sect0'>Name</a></li>
<li><a name='toc1' href='#sect1'>Synopsis</a></li>
<li><a name='toc2' href='#sect2'>Quick Summary</a></li>
<li><a name='toc3' href='#sect3'>Options</a></li>
<li><a name='toc4' href='#sect4'>Description</a></li>
<ul>
<li><a name='toc5' href='#sect5'>Specifying Host Nodes</a></li>
</ul></ul>


<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
