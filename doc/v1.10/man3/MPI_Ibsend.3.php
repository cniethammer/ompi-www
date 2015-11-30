<?php
$topdir = "../../..";
$title = "MPI_Ibsend(3) man page (version 1.10.1)";
$meta_desc = "Open MPI v1.10.1 man page: MPI_IBSEND(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
      <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
<b>MPI_Ibsend</b> - Starts a nonblocking buffered send.
<p>
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>

<h2><a name='sect2' href='#toc2'>C Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int MPI_Ibsend(const void *buf, int count, MPI_Datatype datatype,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;int dest, int tag, MPI_Comm comm, MPI_Request *request)
</pre>
<h2><a name='sect3' href='#toc3'>Fortran Syntax</a></h2>
<br>
<pre>INCLUDE &rsquo;mpif.h&rsquo;
MPI_IBSEND(BUF, COUNT, DATATYPE, DEST, TAG, COMM, REQUEST, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;&lt;type&gt;<tt> </tt>&nbsp;<tt> </tt>&nbsp;BUF(*)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;COUNT, DATATYPE, DEST, TAG, COMM, REQUEST, IERROR
</pre>
<h2><a name='sect4' href='#toc4'>C++ Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
Request Comm::Ibsend(const void* buf, int count, const
<tt> </tt>&nbsp;<tt> </tt>&nbsp;Datatype&amp; datatype, int dest, int tag) const
</pre>
<h2><a name='sect5' href='#toc5'>Input Parameters</a></h2>

<dl>

<dt>buf </dt>
<dd>Initial address of send buffer (choice). </dd>

<dt>count </dt>
<dd>Number
of elements in send buffer (integer). </dd>

<dt>datatype </dt>
<dd>Data type of each send buffer
element (handle). </dd>

<dt>dest </dt>
<dd>Rank of destination (integer). </dd>

<dt>tag </dt>
<dd>Message tag (integer).
</dd>

<dt>comm </dt>
<dd>Communicator (handle).
<p> </dd>
</dl>

<h2><a name='sect6' href='#toc6'>Output Parameters</a></h2>

<dl>

<dt>request </dt>
<dd>Communication request
(handle). </dd>

<dt>IERROR </dt>
<dd>Fortran only: Error status (integer).
<p> </dd>
</dl>

<h2><a name='sect7' href='#toc7'>Description</a></h2>
MPI_Ibsend
posts a buffered-mode, nonblocking send. Nonblocking calls allocate a communication
request object and associate it with the request handle (the argument request).
The request can be used later to query the status of the communication
or wait for its completion.  <p>
A nonblocking send call indicates that the
system may start copying data out of the send buffer. The sender should
not modify any part of the send buffer after a nonblocking send operation
is called, until the send completes.
<p>
<h2><a name='sect8' href='#toc8'>Errors</a></h2>
Almost all MPI routines return
an error value; C routines as the value of the function and Fortran routines
in the last argument. C++ functions do not return errors. If the default
error handler is set to MPI::ERRORS_THROW_EXCEPTIONS, then on error the
C++ exception mechanism will be used to throw an MPI::Exception object.
<p>
Before the error value is returned, the current MPI error handler is called.
By default, this error handler aborts the MPI job, except for I/O function
errors. The error handler may be changed with <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the
predefined error handler MPI_ERRORS_RETURN may be used to cause error values
to be returned. Note that MPI does not guarantee that an MPI program can
continue past an error.
<p>
<h2><a name='sect9' href='#toc9'>See Also</a></h2>
<a href="../man3/MPI_Test.3.php">MPI_Test</a> <a href="../man3/MPI_Wait.3.php">MPI_Wait</a> <br>

<p>
<p> <p>

<hr><p>
<a name='toc'><b>Table of Contents</b></a><p>
<ul>
<li><a name='toc0' href='#sect0'>Name</a></li>
<li><a name='toc1' href='#sect1'>Syntax</a></li>
<li><a name='toc2' href='#sect2'>C Syntax</a></li>
<li><a name='toc3' href='#sect3'>Fortran Syntax</a></li>
<li><a name='toc4' href='#sect4'>C++ Syntax</a></li>
<li><a name='toc5' href='#sect5'>Input Parameters</a></li>
<li><a name='toc6' href='#sect6'>Output Parameters</a></li>
<li><a name='toc7' href='#sect7'>Description</a></li>
<li><a name='toc8' href='#sect8'>Errors</a></li>
<li><a name='toc9' href='#sect9'>See Also</a></li>
</ul>


<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
