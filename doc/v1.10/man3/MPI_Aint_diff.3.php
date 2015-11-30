<?php
$topdir = "../../..";
$title = "MPI_Aint_diff(3) man page (version 1.10.1)";
$meta_desc = "Open MPI v1.10.1 man page: MPI_AINT_DIFF(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
      <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
<b><a href="../man3/MPI_Aint_add.3.php">MPI_Aint_add</a></b>, <b>MPI_Aint_diff</b> - Portable functions for arithmetic
on MPI_Aint values.
<p>
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>

<h2><a name='sect2' href='#toc2'>C Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
MPI_Aint <a href="../man3/MPI_Aint_add.3.php">MPI_Aint_add</a>(MPI_Aint base, MPI_Aint disp)
MPI_Aint MPI_Aint_diff(MPI_Aint addr1, MPI_Aint addr2)
</pre>
<h2><a name='sect3' href='#toc3'>Fortran Syntax</a></h2>
<br>
<pre>INCLUDE &rsquo;mpif.h&rsquo;
INTEGER(KIND=MPI_ADDRESS_KIND) <a href="../man3/MPI_Aint_add.3.php">MPI_AINT_ADD</a>(BASE, DISP)
        INTEGER(KIND=MPI_ADDRESS_KIND) BASE, DISP
INTEGER(KIND=MPI_ADDRESS_KIND) MPI_AINT_DIFF(ADDR1, ADDR2)
        INTEGER(KIND=MPI_ADDRESS_KIND) ADDR1, ADDR2
</pre>
<h2><a name='sect4' href='#toc4'>Input Parameters</a></h2>

<dl>

<dt>base </dt>
<dd>Base address (integer). </dd>

<dt>disp </dt>
<dd>Displacement (integer).
</dd>

<dt>addr1 </dt>
<dd>Minuend address (integer). </dd>

<dt>addr2 </dt>
<dd>Subtrahend address (integer).
<p> </dd>
</dl>

<h2><a name='sect5' href='#toc5'>Description</a></h2>
<b><a href="../man3/MPI_Aint_add.3.php">MPI_Aint_add</a></b>
produces a new MPI_Aint value that is equivalent to the sum of the <i>base</i>
and <i>disp</i> arguments, where <i>base</i> represents a base address returned by a
call to <b><a href="../man3/MPI_Get_address.3.php">MPI_Get_address</a></b> and <i>disp</i> represents a signed integer displacement.
The resulting address is valid only at the process that generated <i>base</i>,
and it must correspond to a location in the same object referenced by <i>base</i>,
as described in MPI-3.1 [char167] 4.1.12. The addition is performed in a manner
that results in the correct MPI_Aint representation of the output address,
as if the process that originally produced <i>base</i> had called:
<p> <br>
<pre>        <a href="../man3/MPI_Get_address.3.php">MPI_Get_address</a> ((char *) base + disp, &amp;result);
</pre><p>
<b>MPI_Aint_diff</b> produces a new MPI_Aint value that is equivalent to the difference
between <i>addr1</i> and <i>addr2</i> arguments, where <i>addr1</i> and <i>addr2</i> represent addresses
returned by calls to <b><a href="../man3/MPI_Get_address.3.php">MPI_Get_address</a></b>. The resulting address is valid only
at the process that generated <i>addr1</i> and <i>addr2</i>, and <i>addr1</i> and <i>addr2</i> must
correspond to locations in the same object in the same process, as described
in MPI-3.1 [char167] 4.1.12. The difference is calculated in a manner that results
in the signed difference from <i>addr1</i> to <i>addr2</i>, as if the process that originally
produced the addresses had called (char *) <i>addr1</i> - (char *) <i>addr2</i> on the
addresses initially passed to <b><a href="../man3/MPI_Get_address.3.php">MPI_Get_address</a></b>.
<p>
<h2><a name='sect6' href='#toc6'>See Also</a></h2>
<p>
<a href="../man3/MPI_Get_address.3.php">MPI_Get_address</a>
 <p>

<hr><p>
<a name='toc'><b>Table of Contents</b></a><p>
<ul>
<li><a name='toc0' href='#sect0'>Name</a></li>
<li><a name='toc1' href='#sect1'>Syntax</a></li>
<li><a name='toc2' href='#sect2'>C Syntax</a></li>
<li><a name='toc3' href='#sect3'>Fortran Syntax</a></li>
<li><a name='toc4' href='#sect4'>Input Parameters</a></li>
<li><a name='toc5' href='#sect5'>Description</a></li>
<li><a name='toc6' href='#sect6'>See Also</a></li>
</ul>


<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
