<?php
include_once("$topdir/software/ompi/current/version.inc");

$q[] = "How do I run jobs under Torque / PBS Pro?";

$anchor[] = "tm-run-jobs";

$a[] = "The short answer is just to use [mpirun] as normal.  

Open MPI automatically obtains both the list of hosts and how many
processes to start on each host from Torque / PBS Pro directly.
Hence, it is unnecessary to specify the [--hostfile], [--host], or
[-np] options to [mpirun].  Open MPI will use PBS/Torque-native
mechanisms to launch and kill processes ([rsh] and/or [ssh] are not
required).

For example:

<faqcode>
# Allocate a PBS job with 4 nodes
shell$ qsub -I -lnodes=4
# Now run an Open MPI job on all the nodes allocated by PBS/Torque
# (starting with Open MPI v1.2; you need to specify -np for the 1.0
# and 1.1 series).
shell$ mpirun my_mpi_application
</faqcode>

This will run the 4 MPI processes on the nodes that were allocated by
PBS/Torque.  Or, if submitting a script:

<faqcode>
shell$ cat my_script.sh
#!/bin/sh
mpirun my_mpi_application
shell$ qsub -l nodes=4 my_script.sh
</faqcode>";

/////////////////////////////////////////////////////////////////////////

$q[] = "Does Open MPI support Open PBS?";

$anchor[] = "tm-open-pbs";

$a[] = "As of this writing, Open PBS is so ancient that we are not
aware of any sites running it.  As such, we have never tested Open MPI
with Open PBS and therefore do not know if it would work or not.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How does Open MPI get the list of hosts from Torque / PBS Pro?";

$anchor[] = "tm-obtain-host";

$a[] = "Open MPI has changed how it obtains hosts from Torque / PBS
Pro over time:

<ul>
<li> *v1.0 and v1.1 series:* The list of hosts allocated to a Torque /
PBS Pro job is obtained directly from the scheduler using the internal
TM API.</li>

<li> *v1.2 series:* Due to scalability limitations in how the TM API
was used in the v1.0 and v1.1 series, Open MPI was modified to read
the \$PBS_NODEFILE to obtain hostnames.  Specifically, reading the
\$PBS_NODEFILE is _much_ faster at scale than how the v1.0 and v1.1
series used the TM API.</li>

</ul>

It is possible that future versions of Open MPI may switch back to
using the TM API in a more scalable fashion, but there isn't currently
a huge demand for it (reading the \$PBS_NODEFILE works just fine).

Note that the TM API is used to _launch_ processes in all versions of
Open MPI; the only thing that has changed over time is how Open MPI
obtains hostnames.";

/////////////////////////////////////////////////////////////////////////

$q[] = "What happens if \$PBS_NODEFILE is modified?";

$anchor[] = "tm-modify-pbs-nodefile";

$a[] = "Bad Things will happen.

We've had reports from some sites that system administrators modify
the \$PBS_NODEFILE in each job according to local policies.  This will
currently cause Open MPI to behave in an unpredictable fashion.  As
long as no new hosts are added to the hostfile, it _usually_ means
that Open MPI will incorrectly map processes to hosts, but in some
cases it can cause Open MPI to fail to launch processes altogether.

The best course of action is to not modify the \$PBS_NODEFILE.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Can I specify a hostfile or use the --host option to mpirun
when running in a Torque / PBS environment?";

$anchor[] = "tm-use-hostfile";

$a[] = "As of version v1.2.1, no.

Open MPI will fail to launch processes properly when a hostfile is
specifed on the [mpirun] command line, or if the [mpirun] [--host]
option is used.

We're working on correcting the error.  A future version of Open MPI
will likely launch on the hosts specified either in the hostfile or
via the [--host] option as long as they are a proper subset of the
hosts allocated to the Torque / PBS Pro job.";

/////////////////////////////////////////////////////////////////////////
