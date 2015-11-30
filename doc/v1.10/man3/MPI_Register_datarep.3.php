<?php
$topdir = "../../..";
$title = "MPI_Register_datarep(3) man page (version 1.10.1)";
$meta_desc = "Open MPI v1.10.1 man page: MPI_REGISTER_DATAREP(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
      <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
<b>MPI_Register_datarep</b> - Defines data representation.
<p>
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>
<br>
<pre>C Syntax
    #include &lt;mpi.h&gt;
    int MPI_Register_datarep(const char *datarep,
    <tt> </tt>&nbsp;<tt> </tt>&nbsp;      MPI_Datarep_conversion_function *read_conversion_fn,
    <tt> </tt>&nbsp;<tt> </tt>&nbsp;      MPI_Datarep_conversion_function *write_conversion_fn,
    <tt> </tt>&nbsp;<tt> </tt>&nbsp;      MPI_Datarep_extent_function *dtype_file_extent_fn,
    <tt> </tt>&nbsp;<tt> </tt>&nbsp;      void *extra_state)
</pre>
<h2><a name='sect2' href='#toc2'>Fortran Syntax</a></h2>
<br>
<pre>    INCLUDE &rsquo;mpif.h&rsquo;
    MPI_REGISTER_DATAREP(DATAREP, READ_CONVERSION_FN,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;WRITE_CONVERSION_FN, DTYPE_FILE_EXTENT_FN,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;EXTRA_STATE, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;CHARACTER*(*) DATAREP
<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;EXTERNAL READ_CONVERSION_FN, WRITE_CONVERSION_FN,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;         DTYPE_FILE_EXTENT_FN
        <tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;IERROR
<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER(KIND=MPI_ADDRESS_KIND) EXTRA_STATE
</pre>
<h2><a name='sect3' href='#toc3'>C++ Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
void MPI::Register_datarep(const char* datarep,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI::Datarep_conversion_function* read_conversion_fn,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI::Datarep_conversion_function* write_conversion_fn,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI::Datarep_extent_function* dtype_file_extent_fn,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;void* extra_state)
</pre>
<h2><a name='sect4' href='#toc4'>Input Parameters</a></h2>

<dl>

<dt>datarep </dt>
<dd>Data representation identifier (string). </dd>

<dt>read_conversion_fn
</dt>
<dd>Function invoked to convert from file representation to native representation
(function). </dd>

<dt>write_conversion_fn </dt>
<dd>Function invoked to convert from native
representation to file representation (function). </dd>

<dt>dtype_file_extent_fn </dt>
<dd>Function
invoked to get the extent of a data type as represented in the file (function).
</dd>

<dt>extra_state </dt>
<dd>Extra state.
<p> </dd>
</dl>

<h2><a name='sect5' href='#toc5'>Output Parameter</a></h2>

<dl>

<dt>IERROR </dt>
<dd>Fortran only: Error status
(integer).
<p> </dd>
</dl>

<h2><a name='sect6' href='#toc6'>Description</a></h2>
MPI_Register_datarep defines a data representation.
It associates the data representation&rsquo;s identifier (a string) with the functions
that convert from file representation to the native representation and
vice versa, with the function that gets the extent of a data type as represented
in the file, as well as with "extra state," which is used for passing arguments.
Once a data representation has been registered using this routine, you
may specify its identifier as an argument to <a href="../man3/MPI_File_set_view.3.php">MPI_File_set_view</a>, causing
subsequent data-access operations to call the specified conversion functions.

<p> The call associates <i>read_conversion_fn</i>, <i>write_conversion_fn</i>, and <i>dtype_file_extent_fn</i>
with the data representation identifier <i>datarep</i>. <i>datarep</i> can then be used
as an argument to <a href="../man3/MPI_File_set_view.3.php">MPI_File_set_view</a>, causing subsequent data access operations
to call the conversion functions to convert all data items accessed between
file data representation and native representation. MPI_Register_datarep
is a local operation and only registers the data representation for the
calling MPI process. If <i>datarep</i> is already defined, an error in the error
class MPI_ERR_DUP_DATAREP is raised using the default file error handler.
The length of a data representation string is limited to the value of MPI_MAX_DATAREP_STRING.
MPI_MAX_DATAREP_STRING must have a value of at least 64. No routines are
provided to delete data representations and free the associated resources;
it is not expected that an application will generate them in significant
numbers.
<p>
<h2><a name='sect7' href='#toc7'>Notes</a></h2>

<p> The Fortran version of each MPI I/O routine includes a
final argument,  IERROR, which is not defined in the PARAMETERS sections.
This argument is used to return the error status of the routine in the
manner typical for Fortran library routines.  <p>
The C version of each routine
returns an error status as an integer return value. <p>
Error classes are found
in mpi.h (for C), mpif.h (for Fortran), and mpi++.h (for C++).
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
<li><a name='toc4' href='#sect4'>Input Parameters</a></li>
<li><a name='toc5' href='#sect5'>Output Parameter</a></li>
<li><a name='toc6' href='#sect6'>Description</a></li>
<li><a name='toc7' href='#sect7'>Notes</a></li>
<li><a name='toc8' href='#sect8'>Errors</a></li>
</ul>


<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
