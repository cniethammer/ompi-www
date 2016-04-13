<?php
$topdir = "../../../..";
# Note that we must use the PHP "$$" indirection to assign to the
# "title" variable, because if we list "$ title" (without the space)
# in this file, Doxygen will replace it with a string title.
$ver = basename(getcwd());
$thwarting_doxygen_preprocessor = "title";
$$thwarting_doxygen_preprocessor = "Portable Hardware Locality (hwloc) Documentation: $ver";
$header_include_file = "$topdir/projects/hwloc/doc/$ver/www.open-mpi.org-css.inc";
include_once("$topdir/projects/hwloc/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/code.inc");
?>
<!-- Generated by Doxygen 1.8.8 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li class="current"><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
      <li><a href="functions.php"><span>Data&#160;Fields</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><a class="el" href="a00050.php">hwloc_topology_diff_obj_attr_u</a></li><li class="navelem"><a class="el" href="a00049.php">hwloc_topology_diff_obj_attr_string_s</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-attribs">Data Fields</a>  </div>
  <div class="headertitle">
<div class="title">hwloc_topology_diff_obj_attr_u::hwloc_topology_diff_obj_attr_string_s Struct Reference<div class="ingroups"><a class="el" href="a00100.php">Topology differences</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p><code>#include &lt;<a class="el" href="a00060_source.php">diff.h</a>&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-attribs"></a>
Data Fields</h2></td></tr>
<tr class="memitem:a784ab5827c1bf531b86d1f02f199d04d"><td class="memItemLeft" align="right" valign="top"><a class="el" href="a00100.php#ga5f2dd099de2cacdc0d0d4858154b971a">hwloc_topology_diff_obj_attr_type_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00049.php#a784ab5827c1bf531b86d1f02f199d04d">type</a></td></tr>
<tr class="separator:a784ab5827c1bf531b86d1f02f199d04d"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a7ef48c66ccddf34d90edb4e4314b41c6"><td class="memItemLeft" align="right" valign="top">char *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00049.php#a7ef48c66ccddf34d90edb4e4314b41c6">name</a></td></tr>
<tr class="separator:a7ef48c66ccddf34d90edb4e4314b41c6"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a33cc281d4417129064295a6ae7b79818"><td class="memItemLeft" align="right" valign="top">char *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00049.php#a33cc281d4417129064295a6ae7b79818">oldvalue</a></td></tr>
<tr class="separator:a33cc281d4417129064295a6ae7b79818"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a75f37f4add21cece50fee2701c3b77db"><td class="memItemLeft" align="right" valign="top">char *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00049.php#a75f37f4add21cece50fee2701c3b77db">newvalue</a></td></tr>
<tr class="separator:a75f37f4add21cece50fee2701c3b77db"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>String attribute modification with an optional name. </p>
</div><h2 class="groupheader">Field Documentation</h2>
<a class="anchor" id="a7ef48c66ccddf34d90edb4e4314b41c6"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">char* hwloc_topology_diff_obj_attr_u::hwloc_topology_diff_obj_attr_string_s::name</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a class="anchor" id="a75f37f4add21cece50fee2701c3b77db"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">char* hwloc_topology_diff_obj_attr_u::hwloc_topology_diff_obj_attr_string_s::newvalue</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a class="anchor" id="a33cc281d4417129064295a6ae7b79818"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">char* hwloc_topology_diff_obj_attr_u::hwloc_topology_diff_obj_attr_string_s::oldvalue</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a class="anchor" id="a784ab5827c1bf531b86d1f02f199d04d"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="a00100.php#ga5f2dd099de2cacdc0d0d4858154b971a">hwloc_topology_diff_obj_attr_type_t</a> hwloc_topology_diff_obj_attr_u::hwloc_topology_diff_obj_attr_string_s::type</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<hr/>The documentation for this struct was generated from the following file:<ul>
<li><a class="el" href="a00060_source.php">diff.h</a></li>
</ul>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
