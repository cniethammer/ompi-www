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
<a href="#pub-attribs">Data Fields</a>  </div>
  <div class="headertitle">
<div class="title">hwloc_component Struct Reference<div class="ingroups"><a class="el" href="a00103.php">Components and Plugins: Generic components</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p><code>#include &lt;<a class="el" href="a00073_source.php">plugins.h</a>&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-attribs"></a>
Data Fields</h2></td></tr>
<tr class="memitem:a3250bd6fc9713946991d805e48091b2e"><td class="memItemLeft" align="right" valign="top">unsigned&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00034.php#a3250bd6fc9713946991d805e48091b2e">abi</a></td></tr>
<tr class="separator:a3250bd6fc9713946991d805e48091b2e"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a610b612f198afa7324c3e720149e416b"><td class="memItemLeft" align="right" valign="top">int(*&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00034.php#a610b612f198afa7324c3e720149e416b">init</a> )(unsigned long <a class="el" href="a00034.php#ab8043c5b4cc0e81aabba586ccb194335">flags</a>)</td></tr>
<tr class="separator:a610b612f198afa7324c3e720149e416b"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a8e6a3fbd401292460d8142210c7e5d32"><td class="memItemLeft" align="right" valign="top">void(*&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00034.php#a8e6a3fbd401292460d8142210c7e5d32">finalize</a> )(unsigned long <a class="el" href="a00034.php#ab8043c5b4cc0e81aabba586ccb194335">flags</a>)</td></tr>
<tr class="separator:a8e6a3fbd401292460d8142210c7e5d32"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a789208ada7e17492cfd3a5a88a6bb0ee"><td class="memItemLeft" align="right" valign="top"><a class="el" href="a00103.php#ga0aebfa65317af10bb18d7d35f6dc05b8">hwloc_component_type_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00034.php#a789208ada7e17492cfd3a5a88a6bb0ee">type</a></td></tr>
<tr class="separator:a789208ada7e17492cfd3a5a88a6bb0ee"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ab8043c5b4cc0e81aabba586ccb194335"><td class="memItemLeft" align="right" valign="top">unsigned long&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00034.php#ab8043c5b4cc0e81aabba586ccb194335">flags</a></td></tr>
<tr class="separator:ab8043c5b4cc0e81aabba586ccb194335"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a4b8cffd1d943c29fdc102b841b8598d4"><td class="memItemLeft" align="right" valign="top">void *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00034.php#a4b8cffd1d943c29fdc102b841b8598d4">data</a></td></tr>
<tr class="separator:a4b8cffd1d943c29fdc102b841b8598d4"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Generic component structure. </p>
<p>Generic components structure, either statically listed by configure in static-components.h or dynamically loaded as a plugin. </p>
</div><h2 class="groupheader">Field Documentation</h2>
<a class="anchor" id="a3250bd6fc9713946991d805e48091b2e"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned hwloc_component::abi</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Component ABI version, set to <a class="el" href="a00074.php#gaac5bc1f46f55e10ef0141a68ce70e21f" title="Current component and plugin ABI version (see hwloc/plugins.h) ">HWLOC_COMPONENT_ABI</a>. </p>

</div>
</div>
<a class="anchor" id="a4b8cffd1d943c29fdc102b841b8598d4"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void* hwloc_component::data</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Component data, pointing to a struct <a class="el" href="a00035.php" title="Discovery component structure. ">hwloc_disc_component</a> or struct hwloc_xml_component. </p>

</div>
</div>
<a class="anchor" id="a8e6a3fbd401292460d8142210c7e5d32"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void(* hwloc_component::finalize)(unsigned long <a class="el" href="a00034.php#ab8043c5b4cc0e81aabba586ccb194335">flags</a>)</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Process-wide component termination callback. </p>
<p>This optional callback is called after unregistering the component from the hwloc core (before unloading the plugin).</p>
<p><code>flags</code> is always 0 for now.</p>
<dl class="section note"><dt>Note</dt><dd>If the component uses ltdl for loading its own plugins, it should load/unload them only in <a class="el" href="a00034.php#a610b612f198afa7324c3e720149e416b" title="Process-wide component initialization callback. ">init()</a> and <a class="el" href="a00034.php#a8e6a3fbd401292460d8142210c7e5d32" title="Process-wide component termination callback. ">finalize()</a>, to avoid race conditions with hwloc's use of ltdl. </dd></dl>

</div>
</div>
<a class="anchor" id="ab8043c5b4cc0e81aabba586ccb194335"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned long hwloc_component::flags</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Component flags, unused for now. </p>

</div>
</div>
<a class="anchor" id="a610b612f198afa7324c3e720149e416b"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">int(* hwloc_component::init)(unsigned long <a class="el" href="a00034.php#ab8043c5b4cc0e81aabba586ccb194335">flags</a>)</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Process-wide component initialization callback. </p>
<p>This optional callback is called when the component is registered to the hwloc core (after loading the plugin).</p>
<p>When the component is built as a plugin, this callback should call hwloc_check_plugin_namespace() and return an negative error code on error.</p>
<p><code>flags</code> is always 0 for now.</p>
<dl class="section return"><dt>Returns</dt><dd>0 on success, or a negative code on error.</dd></dl>
<dl class="section note"><dt>Note</dt><dd>If the component uses ltdl for loading its own plugins, it should load/unload them only in <a class="el" href="a00034.php#a610b612f198afa7324c3e720149e416b" title="Process-wide component initialization callback. ">init()</a> and <a class="el" href="a00034.php#a8e6a3fbd401292460d8142210c7e5d32" title="Process-wide component termination callback. ">finalize()</a>, to avoid race conditions with hwloc's use of ltdl. </dd></dl>

</div>
</div>
<a class="anchor" id="a789208ada7e17492cfd3a5a88a6bb0ee"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="a00103.php#ga0aebfa65317af10bb18d7d35f6dc05b8">hwloc_component_type_t</a> hwloc_component::type</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Component type. </p>

</div>
</div>
<hr/>The documentation for this struct was generated from the following file:<ul>
<li><a class="el" href="a00073_source.php">plugins.h</a></li>
</ul>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
