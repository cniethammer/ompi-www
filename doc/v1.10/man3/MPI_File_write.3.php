<?php
$topdir = "../../..";
$title = "MPI_File_write(3) man page (version 1.10.1)";
$meta_desc = "Open MPI v1.10.1 man page: MPI_FILE_WRITE(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
      <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
<b>MPI_File_write</b> - Writes a file starting at the location specified
by the individual file pointer (blocking, noncollective).
<p>
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>
<br>
<pre>C Syntax
    #include &lt;mpi.h&gt;
    int MPI_File_write(MPI_File fh, const void *buf,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;int count, MPI_Datatype datatype,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI_Status *status)
</pre>
<h2><a name='sect2' href='#toc2'>Fortran Syntax</a></h2>
<br>
<pre>    INCLUDE &rsquo;mpif.h&rsquo;
    MPI_FILE_WRITE(FH,  BUF, COUNT,
    <tt> </tt>&nbsp;<tt> </tt>&nbsp;       DATATYPE, STATUS,  IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp; &lt;type&gt; BUF(*)
    <tt> </tt>&nbsp;<tt> </tt>&nbsp; INTEGER FH, COUNT, DATATYPE, STATUS(MPI_STATUS_SIZE),
<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;IERROR
</pre>
<h2><a name='sect3' href='#toc3'>C++ Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
void MPI::File::Write(const void* buf, int count,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;const MPI::Datatype&amp; datatype, MPI::Status&amp; status)
void MPI::File::Write(const void* buf, int count,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;const MPI::Datatype&amp; datatype)
</pre>
<h2><a name='sect4' href='#toc4'>Input/Output Parameter</a></h2>

<dl>

<dt>fh </dt>
<dd>File handle (handle).
<p> </dd>
</dl>

<h2><a name='sect5' href='#toc5'>Input Parameters</a></h2>

<dl>

<dt>buf </dt>
<dd>Initial
address of buffer (choice). </dd>

<dt>count </dt>
<dd>Number of elements in buffer (integer).
</dd>

<dt>datatype </dt>
<dd>Data type of each buffer element (handle).
<p> </dd>
</dl>

<h2><a name='sect6' href='#toc6'>Output Parameters</a></h2>

<dl>

<dt>status
</dt>
<dd>Status object (status). </dd>

<dt>IERROR </dt>
<dd>Fortran only: Error status (integer).
<p> </dd>
</dl>

<h2><a name='sect7' href='#toc7'>Description</a></h2>
MPI_File_write
attempts to write into the file associated with  <i>fh</i> (at the current individual
file pointer position maintained by the system) a total number of  <i>count</i>
 data items having <i>datatype</i>  type from the user&rsquo;s buffer  <i>buf.</i> The data is
written into those parts of the file specified by the current view. MPI_File_write
stores the number of  <i>datatype</i>  elements actually written in  <i>status.</i>  All
other fields of  <i>status</i>  are undefined. <p>
It is erroneous to call this function
if MPI_MODE_SEQUENTIAL mode was specified when the file was opened.
<p>
<h2><a name='sect8' href='#toc8'>Errors</a></h2>
Almost
all MPI routines return an error value; C routines as the value of the
function and Fortran routines in the last argument. C++ functions do not
return errors. If the default error handler is set to MPI::ERRORS_THROW_EXCEPTIONS,
then on error the C++ exception mechanism will be used to throw an MPI::Exception
object. <p>
Before the error value is returned, the current MPI error handler
is called. For MPI I/O function errors, the default error handler is set
to MPI_ERRORS_RETURN. The error handler may be changed with <a href="../man3/MPI_File_set_errhandler.3.php">MPI_File_set_errhandler</a>;
the predefined error handler MPI_ERRORS_ARE_FATAL may be used to make I/O
errors fatal. Note that MPI does not guarantee that an MPI program can continue
past an error.
<p> <p>

<hr><p>
<a name='toc'><b>Table of Contents</b></a><p>
<ul>
<li><a name='toc0' href='#sect0'>Name</a></li>
<li><a name='toc1' href='#sect1'>Syntax</a></li>
<li><a name='toc2' href='#sect2'>Fortran Syntax</a></li>
<li><a name='toc3' href='#sect3'>C++ Syntax</a></li>
<li><a name='toc4' href='#sect4'>Input/Output Parameter</a></li>
<li><a name='toc5' href='#sect5'>Input Parameters</a></li>
<li><a name='toc6' href='#sect6'>Output Parameters</a></li>
<li><a name='toc7' href='#sect7'>Description</a></li>
<li><a name='toc8' href='#sect8'>Errors</a></li>
</ul>


<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
