<?php
$topdir = "../../..";
$title = "MPI_Type_create_subarray(3) man page (version 1.10.1)";
$meta_desc = "Open MPI v1.10.1 man page: MPI_TYPE_CREATE_SUBARRAY(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
      <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
<b>MPI_Type_create_subarray</b> - Creates a data type describing an <i>n</i>-dimensional
subarray of an <i>n</i>-dimensional array.
<p>
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>

<h2><a name='sect2' href='#toc2'>C Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int MPI_Type_create_subarray(int ndims, const int array_of_sizes[], const
int array_of_subsizes[], const int array_of_starts[], int order, MPI_Datatype
oldtype, MPI_Datatype *newtype)
</pre>
<h2><a name='sect3' href='#toc3'>Fortran Syntax</a></h2>
<br>
<pre>INCLUDE &rsquo;mpif.h&rsquo;
MPI_TYPE_CREATE_SUBARRAY(NDIMS, ARRAY_OF_SIZES, ARRAY_OF_SUBSIZES,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;ARRAY_OF_STARTS, ORDER, OLDTYPE, NEWTYPE, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;NDIMS, ARRAY_OF_SIZES(*), ARRAY_OF_SUBSIZES(*),
<tt> </tt>&nbsp;<tt> </tt>&nbsp;ARRAY_OF_STARTS(*), ORDER, OLDTYPE, NEWTYPE, IERROR
</pre>
<h2><a name='sect4' href='#toc4'>C++ Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
MPI::Datatype MPI::Datatype::Create_subarray(int ndims,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;const int array_of_sizes[], const int array_of_subsizes[],
<tt> </tt>&nbsp;<tt> </tt>&nbsp;const int array_of_starts[], int order) const
</pre>
<h2><a name='sect5' href='#toc5'>Input Parameters</a></h2>

<dl>

<dt>ndims </dt>
<dd>Number of array dimensions (positive integer). </dd>

<dt>array_of_sizes
</dt>
<dd>Number of elements of type <i>oldtype</i> in each dimension of the full array
(array of positive integers). </dd>

<dt>array_of_subsizes </dt>
<dd>Number of elements of type
<i>oldtype</i> in each dimension of the subarray (array of positive integers).
</dd>

<dt>array_of_starts </dt>
<dd>Starting coordinates of the subarray in each dimension
(array of nonnegative integers). </dd>

<dt>order </dt>
<dd>Array storage order flag (state).
</dd>

<dt>oldtype </dt>
<dd>Array element data type (handle).
<p>
<p> </dd>
</dl>

<h2><a name='sect6' href='#toc6'>Output Parameters</a></h2>

<dl>

<dt>newtype </dt>
<dd>New
data type (handle). </dd>

<dt>IERROR </dt>
<dd>Fortran only: Error status (integer).
<p> </dd>
</dl>

<h2><a name='sect7' href='#toc7'>Description</a></h2>
The
subarray type constructor creates an MPI data type describing an <i>n</i>-dimensional
subarray of an <i>n</i>-dimensional array. The subarray may be situated anywhere
within the full array, and may be of any nonzero size up to the size of
the larger array as long as it is confined within this array. This type
constructor facilitates creating file types to access arrays distributed
in blocks among processes to a single file that contains the global array.
 <p>
This type constructor can handle arrays with an arbitrary number of dimensions
and works for both C- and Fortran-ordered matrices (that is, row-major or
column-major). Note that a C program may use Fortran order and a Fortran
program may use C order.  <p>
The <i>ndims</i> parameter specifies the number of dimensions
in the full data array and gives the number of elements in <i>array_of_sizes</i>,
<i>array_of_subsizes</i>, and <i>array_of_starts</i>.  <p>
The number of elements of type
<i>oldtype</i> in each dimension of the <i>n</i>-dimensional array and the requested subarray
are specified by <i>array_of_sizes</i> and <i>array_of_subsizes</i>, respectively. For
any dimension <i>i</i>, it is erroneous to specify <i>array_of_subsizes[i]</i> &lt; 1 or
<i>array_of_subsizes[i]</i> &gt; <i>array of sizes[i]</i>.  <p>
The <i>array_of_starts</i> contains the
starting coordinates of each dimension of the subarray. Arrays are assumed
to be indexed starting from zero. For any dimension <i>i</i>, it is erroneous to
specify  <p>
<br>
<pre>array_of_starts[i] &lt; 0
</pre><p>
or  <p>
<br>
<pre>array_of_starts[i] &gt; (array_of_sizes[i] - array_of_subsizes[i]).
</pre><p>
The <i>order</i> argument specifies the storage order for the subarray as well
as the full array. It must be set to one of the following:  <p>
- MPI_ORDER_C:
The ordering used by C arrays, (that is, row-major order) <p>
- MPI_ORDER_FORTRAN:
The ordering used by Fortran arrays, (that is, column-major order) <p>
A <i>ndims</i>-dimensional
subarray (<i>newtype</i>) with no extra padding can be defined by the function
Subarray() as follows:  <p>
<br>
<pre>   newtype = Subarray(ndims, {size , size ,..., size       },
                                  0      1           ndims-1
             {subsize , subsize , ..., subsize       },
                     0         1               ndims-1
             {start , start , ..., start       }, oldtype)
                   0       1             ndims-1
</pre><p>
Let the typemap of <i>oldtype</i> have the form: <p>
<br>
<pre>   {(type , disp ), (type , disp ), ..., (type   , disp   )}
         0      0        1      1              n-1      n-1
</pre><p>
where type<i>i</i> is a predefined MPI data type, and let <i>ex</i> be the extent of
<i>oldtype</i>.  <p>
The Subarray() function is defined recursively in three equations
on page 72 of the MPI-2 standard.  <p>
For an example use of MPI_Type_create_subarray
in the context of I/O, see Section 9.9.2 of the MPI-2 standard.
<p>
<p>
<h2><a name='sect8' href='#toc8'>Notes</a></h2>
In a
Fortran program with arrays indexed starting from 1, if the starting coordinate
of a particular dimension of the subarray is <i>n</i>, then the entry in array
of starts for that dimension is <i>n</i>-1.
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
<li><a name='toc8' href='#sect8'>Notes</a></li>
<li><a name='toc9' href='#sect9'>Errors</a></li>
</ul>


<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
