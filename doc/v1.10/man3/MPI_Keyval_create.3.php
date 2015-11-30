<?php
$topdir = "../../..";
$title = "MPI_Keyval_create(3) man page (version 1.10.1)";
$meta_desc = "Open MPI v1.10.1 man page: MPI_KEYVAL_CREATE(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
     <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
<b>MPI_Keyval_create</b> - Generates a new attribute key -- use of this
routine is deprecated.
<p>
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>

<h2><a name='sect2' href='#toc2'>C Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int MPI_Keyval_create(MPI_Copy_function *copy_fn,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI_Delete_function *delete_fn, int *keyval, void *extra_state)
</pre>
<h2><a name='sect3' href='#toc3'>Fortran Syntax</a></h2>
<br>
<pre>INCLUDE &rsquo;mpif.h&rsquo;
MPI_KEYVAL_CREATE(COPY_FN, DELETE_FN, KEYVAL, EXTRA_STATE, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;EXTERNAL<tt> </tt>&nbsp;<tt> </tt>&nbsp;COPY_FN, DELETE_FN
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;KEYVAL, EXTRA_STATE, IERROR
</pre>
<h2><a name='sect4' href='#toc4'>Input Parameters</a></h2>

<dl>

<dt>copy_fn </dt>
<dd>Copy callback function for keyval. </dd>

<dt>delete_fn </dt>
<dd>Delete
callback function for keyval. </dd>

<dt>extra_state </dt>
<dd>Extra state for callback functions.

<p> </dd>
</dl>

<h2><a name='sect5' href='#toc5'>Output Parameters</a></h2>

<dl>

<dt>keyval </dt>
<dd>Key value for future access (integer). </dd>

<dt>IERROR </dt>
<dd>Fortran
only: Error status (integer).
<p> </dd>
</dl>

<h2><a name='sect6' href='#toc6'>Description</a></h2>
Note that use of this routine
is <i>deprecated</i> as of MPI-2. Please use <a href="../man3/MPI_Comm_create_keyval.3.php">MPI_Comm_create_keyval</a> instead.  <p>
This
deprecated routine is not available in C++.  <p>
Generates a new attribute key.
Keys are locally unique in a process and opaque to the user, though they
are explicitly stored in integers. Once allocated, the key value can be
used to associate attributes and access them on any locally defined communicator.
<p>
The copy_fn function is invoked when a communicator is duplicated by <a href="../man3/MPI_Comm_dup.3.php">MPI_COMM_DUP</a>.
copy_fn should be of type MPI_Copy_function, which is defined as follows:
 <p>
<br>
<pre>  typedef int MPI_Copy_function(MPI_Comm oldcomm, int keyval,
                                void *extra_state, void *attribute_val_in,

                                void *attribute_val_out, int *flag)
</pre>A Fortran declaration for such a function is as follows:  <p>
<br>
<pre>  SUBROUTINE COPY_FUNCTION(OLDCOMM, KEYVAL, EXTRA_STATE, ATTRIBUTE_VAL_IN,
              ATTRIBUTE_VAL_OUT, FLAG, IERR)
  INTEGER OLDCOMM, KEYVAL, EXTRA_STATE,
  ATTRIBUTE_VAL_IN, ATTRIBUTE_VAL_OUT, IERR
  LOGICAL FLAG
</pre><p>
The copy callback function is invoked for each key value in oldcomm in
arbitrary order. Each call to the copy callback is made with a key value
and its corresponding attribute. If it returns flag = 0, then the attribute
is deleted in the duplicated communicator. Otherwise ( flag = 1), the new
attribute value is set to the value returned in attribute_val_out. The function
returns MPI_SUCCESS on success and an error code on failure (in which case
<a href="../man3/MPI_Comm_dup.3.php">MPI_Comm_dup</a> will fail).  <p>
copy_fn may be specified as MPI_NULL_COPY_FN or
MPI_DUP_FN from either C or Fortran; MPI_NULL_COPY_FN is a function that
does nothing other than return flag = 0, and MPI_SUCCESS. MPI_DUP_FN is
a simple-minded copy function that sets flag = 1, returns the value of attribute_val_in
in attribute_val_out, and returns MPI_SUCCESS.
<p>
<h2><a name='sect7' href='#toc7'>Notes</a></h2>
Key values are global
(available for any and all communicators). <p>
There are subtle differences
between C and Fortran that require that the copy_fn be written in the same
language that MPI_Keyval_create is called from. This should not be a problem
for most users; only programmers using both Fortran and C in the same program
need to be sure that they follow this rule. <p>
Even though both formal arguments
attribute_val_in and attribute_val_out are of type void*, their usage differs.
The C copy function is passed by MPI in attribute_val_in the value of the
attribute, and in attribute_val_out the address of the attribute, so as
to allow the function to return the (new) attribute value. The use of type
void* for both is to avoid messy type casts.   <p>
A valid copy function is
one that completely duplicates the information by making a full duplicate
copy of the data structures implied by an attribute; another might just
make another reference to that data structure, while using a reference-count
mechanism. Other types of attributes might not copy at all (they might be
specific to oldcomm only).  <p>
Analogous to copy_fn is a callback deletion
function, defined as follows. The delete_fn function is invoked when a communicator
is deleted by <a href="../man3/MPI_Comm_free.3.php">MPI_Comm_free</a> or when a call is made explicitly to <a href="../man3/MPI_Attr_delete.3.php">MPI_Attr_delete</a>.
delete_fn should be of type MPI_Delete_function, which is defined as follows:
 <p>
<br>
<pre>  typedef int MPI_Delete_function(MPI_Comm comm, int keyval,
      void *attribute_val, void *extra_state);
</pre><p>
A Fortran declaration for such a function is as follows:  <p>
<br>
<pre>  SUBROUTINE DELETE_FUNCTION(COMM, KEYVAL,ATTRIBUTE_VAL, EXTRA_STATE, IERR)
      INTEGER COMM, KEYVAL, ATTRIBUTE_VAL, EXTRA_STATE, IERR
</pre><p>
This function is called by <a href="../man3/MPI_Comm_free.3.php">MPI_Comm_free</a>, <a href="../man3/MPI_Attr_delete.3.php">MPI_Attr_delete</a>, and <a href="../man3/MPI_Attr_put.3.php">MPI_Attr_put</a>
to do whatever is needed to remove an attribute. The function returns MPI_SUCCESS
on success and an error code on failure (in which case <a href="../man3/MPI_Comm_free.3.php">MPI_COMM_FREE</a> will
fail).  <p>
delete_fn may be specified as MPI_NULL_DELETE_FN from either C or
FORTRAN; MPI_NULL_DELETE_FN is a function that does nothing, other than
returning MPI_SUCCESS.   <p>
The special key value MPI_KEYVAL_INVALID is never
returned by MPI_Keyval_create. Therefore, it can be used for static initialization
of key values.
<p>
<h2><a name='sect8' href='#toc8'>Errors</a></h2>
Almost all MPI routines return an error value; C
routines as the value of the function and Fortran routines in the last
argument. C++ functions do not return errors. If the default error handler
is set to MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception
mechanism will be used to throw an MPI::Exception object. <p>
Before the error
value is returned, the current MPI error handler is called. By default,
this error handler aborts the MPI job, except for I/O function errors. The
error handler may be changed with <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the predefined
error handler MPI_ERRORS_RETURN may be used to cause error values to be
returned. Note that MPI does not guarantee that an MPI program can continue
past an error.
<p>
<h2><a name='sect9' href='#toc9'>See Also</a></h2>
<a href="../man3/MPI_Keyval_free.3.php">MPI_Keyval_free</a> <br>
<a href="../man3/MPI_Comm_create_keyval.3.php">MPI_Comm_create_keyval</a> <br>
<p>

<hr><p>
<a name='toc'><b>Table of Contents</b></a><p>
<ul>
<li><a name='toc0' href='#sect0'>Name</a></li>
<li><a name='toc1' href='#sect1'>Syntax</a></li>
<li><a name='toc2' href='#sect2'>C Syntax</a></li>
<li><a name='toc3' href='#sect3'>Fortran Syntax</a></li>
<li><a name='toc4' href='#sect4'>Input Parameters</a></li>
<li><a name='toc5' href='#sect5'>Output Parameters</a></li>
<li><a name='toc6' href='#sect6'>Description</a></li>
<li><a name='toc7' href='#sect7'>Notes</a></li>
<li><a name='toc8' href='#sect8'>Errors</a></li>
<li><a name='toc9' href='#sect9'>See Also</a></li>
</ul>


<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
