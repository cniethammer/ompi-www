<?php
$topdir = "../../..";
$title = "MPI_Type_create_keyval(3) man page (version 1.10.1)";
$meta_desc = "Open MPI v1.10.1 man page: MPI_TYPE_CREATE_KEYVAL(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
     <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
<b>MPI_Type_create_keyval</b> - Generates a new attribute key for caching
on data types.
<p>
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>

<h2><a name='sect2' href='#toc2'>C Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int MPI_Type_create_keyval(MPI_Type_copy_attr_function *type_copy_attr_fn,

<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI_Type_delete_attr_function *type_delete_attr_fn,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;int *type_keyval, void *extra_state)
</pre>
<h2><a name='sect3' href='#toc3'>Fortran Syntax (see FORTRAN 77 NOTES)</a></h2>
<br>
<pre>INCLUDE &rsquo;mpif.h&rsquo;
MPI_TYPE_CREATE_KEYVAL(TYPE_COPY_ATTR_FN, TYPE_DELETE_ATTR_FN,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;TYPE_KEYVAL, EXTRA_STATE, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;EXTERNAL TYPE_COPY_ATTR_FN, TYPE_DELETE_ATTR_FN
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;TYPE_KEYVAL, IERROR
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER(KIND=MPI_ADDRESS_KIND) EXTRA_STATE
</pre>
<h2><a name='sect4' href='#toc4'>C++ Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
static int MPI::Datatype::Create_keyval(MPI::Datatype::Copy_attr_function*
<tt> </tt>&nbsp;<tt> </tt>&nbsp;type_copy_attr_fn, MPI::Datatype::Delete_attr_function*
<tt> </tt>&nbsp;<tt> </tt>&nbsp;type_delete_attr_fn, void* extra_state)
</pre>
<h2><a name='sect5' href='#toc5'>Input Parameters</a></h2>

<dl>

<dt>type_copy_attr_fn </dt>
<dd>Copy callback function for <i>type_keyval</i>
(function). </dd>

<dt>type_delete_attr_fn </dt>
<dd>Delete callback function for <i>type_keyval</i>
(function). </dd>

<dt>extra_state </dt>
<dd>Extra state for callback functions.
<p> </dd>
</dl>

<h2><a name='sect6' href='#toc6'>Output Parameters</a></h2>

<dl>

<dt>type_keyval
</dt>
<dd>Key value for future access (integer). </dd>

<dt>IERROR </dt>
<dd>Fortran only: Error status
(integer).
<p> </dd>
</dl>

<h2><a name='sect7' href='#toc7'>Description</a></h2>
MPI_Type_create_keyval generates a new attribute
key for caching on data types. This routine partially replaces <a href="../man3/MPI_Keyval_create.3.php">MPI_Keyval_create</a>.
 <p>
The argument <i>type_copy_attr_fn</i> may be specified as MPI_TYPE_NULL_COPY_FN
or MPI_TYPE_DUP_FN from C, C++, or Fortran. MPI_TYPE_NULL_COPY_FN is a function
that does nothing other than returning <i>flag</i> = 0 and MPI_SUCCESS. MPI_TYPE_DUP_FN
is a simple-minded copy function that sets <i>flag</i> = 1, returns the value of
<i>attribute_val_in</i> in <i>attribute_val_out</i>, and returns MPI_SUCCESS. <p>
The argument
<i>type_delete_attr_fn</i> may be specified as MPI_TYPE_NULL_DELETE_FN from C,
C++, or Fortran. MPI_TYPE_NULL_DELETE_FN is a function that does nothing
beyond returning MPI_SUCCESS. The C callback functions are:  <p>
<br>
<pre>typedef int MPI_Type_copy_attr_function(MPI_Datatype oldtype,
            int type_keyval, void *extra_state, void *attribute_val_in,

            void *attribute_val_out, int *flag);
</pre>and <br>
<pre>typedef int MPI_Type_delete_attr_function(MPI_Datatype type, int type_keyval,

             void *attribute_val, void *extra_state);
</pre><p>
The Fortran callback functions are: <p>
<br>
<pre>SUBROUTINE TYPE_COPY_ATTR_FN(OLDTYPE, TYPE_KEYVAL, EXTRA_STATE,
             ATTRIBUTE_VAL_IN, ATTRIBUTE_VAL_OUT, FLAG, IERROR)
    INTEGER OLDTYPE, TYPE KEYVAL, IERROR
    INTEGER(KIND=MPI_ADDRESS_KIND) EXTRA_STATE,
        ATTRIBUTE_VAL_IN, ATTRIBUTE_VAL_OUT
    LOGICAL FLAG
</pre>and <br>
<pre>SUBROUTINE TYPE_DELETE_ATTR_FN(TYPE, TYPE_KEYVAL, ATTRIBUTE_VAL, EXTRA_STATE,

             IERROR)
    INTEGER TYPE, TYPE_KEYVAL, IERROR
    INTEGER(KIND=MPI_ADDRESS_KIND) ATTRIBUTE VAL, EXTRA_STATE
</pre><p>
The C++ callbacks are: <p>
<br>
<pre>typedef int MPI::Datatype::Copy_attr_function(const MPI::Datatype&amp; oldtype,

             int type_keyval, void* extra_state,
             const void* attribute_val_in, void* attribute_val_out,
             bool&amp; flag);
</pre>and <br>
<pre>typedef int MPI::Datatype::Delete_attr_function(MPI::Datatype&amp; type,
             int type_keyval, void* attribute_val, void* extra_state);

</pre><p>

<p>
<h2><a name='sect8' href='#toc8'>Fortran 77 Notes</a></h2>
The MPI standard prescribes portable Fortran syntax for
the <i>EXTRA_STATE</i> argument only for Fortran 90.  FORTRAN 77 users may use
the non-portable syntax <p>
<br>
<pre>     INTEGER*MPI_ADDRESS_KIND EXTRA_STATE
</pre><p>
where MPI_ADDRESS_KIND is a constant defined in mpif.h and gives the length
of the declared integer in bytes.
<p>
<h2><a name='sect9' href='#toc9'>Errors</a></h2>
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
<h2><a name='sect10' href='#toc10'>See Also</a></h2>
<p>
<a href="../man3/MPI_Type_free_keyval.3.php">MPI_Type_free_keyval</a>
<p> <p>

<hr><p>
<a name='toc'><b>Table of Contents</b></a><p>
<ul>
<li><a name='toc0' href='#sect0'>Name</a></li>
<li><a name='toc1' href='#sect1'>Syntax</a></li>
<li><a name='toc2' href='#sect2'>C Syntax</a></li>
<li><a name='toc3' href='#sect3'>Fortran Syntax (see FORTRAN 77 NOTES)</a></li>
<li><a name='toc4' href='#sect4'>C++ Syntax</a></li>
<li><a name='toc5' href='#sect5'>Input Parameters</a></li>
<li><a name='toc6' href='#sect6'>Output Parameters</a></li>
<li><a name='toc7' href='#sect7'>Description</a></li>
<li><a name='toc8' href='#sect8'>Fortran 77 Notes</a></li>
<li><a name='toc9' href='#sect9'>Errors</a></li>
<li><a name='toc10' href='#sect10'>See Also</a></li>
</ul>


<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
