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
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#nested-classes">Data Structures</a> &#124;
<a href="#pub-attribs">Data Fields</a>  </div>
  <div class="headertitle">
<div class="title">hwloc_obj_attr_u Union Reference<div class="ingroups"><a class="el" href="a00077.php">Object Structure and Attributes</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p><code>#include &lt;<a class="el" href="a00065_source.php">hwloc.h</a>&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="nested-classes"></a>
Data Structures</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">struct &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00032.php">hwloc_bridge_attr_s</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">struct &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00033.php">hwloc_cache_attr_s</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">struct &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00037.php">hwloc_group_attr_s</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">struct &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00043.php">hwloc_osdev_attr_s</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">struct &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00044.php">hwloc_pcidev_attr_s</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-attribs"></a>
Data Fields</h2></td></tr>
<tr class="memitem:ab5a8ae3bf490e6b1071fea53f7382836"><td class="memItemLeft" align="right" valign="top">struct <br class="typebreak" />
<a class="el" href="a00033.php">hwloc_obj_attr_u::hwloc_cache_attr_s</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00039.php#ab5a8ae3bf490e6b1071fea53f7382836">cache</a></td></tr>
<tr class="separator:ab5a8ae3bf490e6b1071fea53f7382836"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ae4ba157cc313e2cdd9a82f1c1df7aaa6"><td class="memItemLeft" align="right" valign="top">struct <br class="typebreak" />
<a class="el" href="a00037.php">hwloc_obj_attr_u::hwloc_group_attr_s</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00039.php#ae4ba157cc313e2cdd9a82f1c1df7aaa6">group</a></td></tr>
<tr class="separator:ae4ba157cc313e2cdd9a82f1c1df7aaa6"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a4203d713ce0f5beaa6ee0e9bdac70828"><td class="memItemLeft" align="right" valign="top">struct <br class="typebreak" />
<a class="el" href="a00044.php">hwloc_obj_attr_u::hwloc_pcidev_attr_s</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00039.php#a4203d713ce0f5beaa6ee0e9bdac70828">pcidev</a></td></tr>
<tr class="separator:a4203d713ce0f5beaa6ee0e9bdac70828"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:adbdf280699dd84c7619cd8d9edc0d958"><td class="memItemLeft" align="right" valign="top">struct <br class="typebreak" />
<a class="el" href="a00032.php">hwloc_obj_attr_u::hwloc_bridge_attr_s</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00039.php#adbdf280699dd84c7619cd8d9edc0d958">bridge</a></td></tr>
<tr class="separator:adbdf280699dd84c7619cd8d9edc0d958"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a22904c25fe44b323bab5c9bc52660fca"><td class="memItemLeft" align="right" valign="top">struct <br class="typebreak" />
<a class="el" href="a00043.php">hwloc_obj_attr_u::hwloc_osdev_attr_s</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00039.php#a22904c25fe44b323bab5c9bc52660fca">osdev</a></td></tr>
<tr class="separator:a22904c25fe44b323bab5c9bc52660fca"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Object type-specific Attributes. </p>
</div><h2 class="groupheader">Field Documentation</h2>
<a class="anchor" id="adbdf280699dd84c7619cd8d9edc0d958"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct <a class="el" href="a00032.php">hwloc_obj_attr_u::hwloc_bridge_attr_s</a>  hwloc_obj_attr_u::bridge</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a class="anchor" id="ab5a8ae3bf490e6b1071fea53f7382836"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct <a class="el" href="a00033.php">hwloc_obj_attr_u::hwloc_cache_attr_s</a>  hwloc_obj_attr_u::cache</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a class="anchor" id="ae4ba157cc313e2cdd9a82f1c1df7aaa6"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct <a class="el" href="a00037.php">hwloc_obj_attr_u::hwloc_group_attr_s</a>  hwloc_obj_attr_u::group</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a class="anchor" id="a22904c25fe44b323bab5c9bc52660fca"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct <a class="el" href="a00043.php">hwloc_obj_attr_u::hwloc_osdev_attr_s</a>  hwloc_obj_attr_u::osdev</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a class="anchor" id="a4203d713ce0f5beaa6ee0e9bdac70828"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct <a class="el" href="a00044.php">hwloc_obj_attr_u::hwloc_pcidev_attr_s</a>  hwloc_obj_attr_u::pcidev</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<hr/>The documentation for this union was generated from the following file:<ul>
<li><a class="el" href="a00065_source.php">hwloc.h</a></li>
</ul>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
