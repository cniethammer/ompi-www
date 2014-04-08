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
<!-- Generated by Doxygen 1.6.1 -->
<div class="navigation" id="top">
  <div class="tabs">
    <ul>
      <li><a href="index.php"><span>Main&nbsp;Page</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li class="current"><a href="annotated.php"><span>Data&nbsp;Structures</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div class="tabs">
    <ul>
      <li><a href="annotated.php"><span>Data&nbsp;Structures</span></a></li>
      <li><a href="functions.php"><span>Data&nbsp;Fields</span></a></li>
    </ul>
  </div>
  <div class="navpath"><a class="el" href="unionhwloc__obj__attr__u.php">hwloc_obj_attr_u</a>::<a class="el" href="structhwloc__obj__attr__u_1_1hwloc__memory__attr__s.php">hwloc_memory_attr_s</a>
  </div>
</div>
<div class="contents">
<h1>hwloc_obj_attr_u::hwloc_memory_attr_s Struct Reference</h1><!-- doxytag: class="hwloc_obj_attr_u::hwloc_memory_attr_s" -->
<p>Node-specific Object Attributes.  
<a href="#_details">More...</a></p>

<p><code>#include &lt;<a class="el" href="hwloc_8h_source.php">hwloc.h</a>&gt;</code></p>
<table border="0" cellpadding="0" cellspacing="0">
<tr><td colspan="2"><h2>Data Fields</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">unsigned long&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj__attr__u_1_1hwloc__memory__attr__s.php#acf44c5e36f6d156f8a19793715552e71">memory_kB</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Size of memory node.  <a href="#acf44c5e36f6d156f8a19793715552e71"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">unsigned long&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj__attr__u_1_1hwloc__memory__attr__s.php#a6d0863d71693d53d9ccfb694581efb19">huge_page_free</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Number of available huge pages.  <a href="#a6d0863d71693d53d9ccfb694581efb19"></a><br/></td></tr>
</table>
<hr/><a name="_details"></a><h2>Detailed Description</h2>
<p>Node-specific Object Attributes. </p>
<hr/><h2>Field Documentation</h2>
<a class="anchor" id="a6d0863d71693d53d9ccfb694581efb19"></a><!-- doxytag: member="hwloc_obj_attr_u::hwloc_memory_attr_s::huge_page_free" ref="a6d0863d71693d53d9ccfb694581efb19" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned long <a class="el" href="structhwloc__obj__attr__u_1_1hwloc__memory__attr__s.php#a6d0863d71693d53d9ccfb694581efb19">hwloc_obj_attr_u::hwloc_memory_attr_s::huge_page_free</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Number of available huge pages. </p>

</div>
</div>
<a class="anchor" id="acf44c5e36f6d156f8a19793715552e71"></a><!-- doxytag: member="hwloc_obj_attr_u::hwloc_memory_attr_s::memory_kB" ref="acf44c5e36f6d156f8a19793715552e71" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned long <a class="el" href="structhwloc__obj__attr__u_1_1hwloc__memory__attr__s.php#acf44c5e36f6d156f8a19793715552e71">hwloc_obj_attr_u::hwloc_memory_attr_s::memory_kB</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Size of memory node. </p>

</div>
</div>
<hr/>The documentation for this struct was generated from the following file:<ul>
<li><a class="el" href="hwloc_8h_source.php">hwloc.h</a></li>
</ul>
</div>
<?php
include_once("$topdir/includes/footer.inc");