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
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
    </ul>
  </div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#enum-members">Enumerations</a> &#124;
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<div class="title">Object levels, depths and types</div>  </div>
</div><!--header-->
<div class="contents">
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="enum-members"></a>
Enumerations</h2></td></tr>
<tr class="memitem:gaf4e663cf42bbe20756b849c6293ef575"><td class="memItemLeft" align="right" valign="top">enum &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00080.php#gaf4e663cf42bbe20756b849c6293ef575">hwloc_get_type_depth_e</a> { <br />
&#160;&#160;<a class="el" href="a00080.php#ggaf4e663cf42bbe20756b849c6293ef575a0565ab92ab72cb0cec91e23003294aad">HWLOC_TYPE_DEPTH_UNKNOWN</a>, 
<a class="el" href="a00080.php#ggaf4e663cf42bbe20756b849c6293ef575ae99465995cacde6c210d5fc2e409798c">HWLOC_TYPE_DEPTH_MULTIPLE</a>, 
<a class="el" href="a00080.php#ggaf4e663cf42bbe20756b849c6293ef575af93b50182973e4a718d9d4db9e253a90">HWLOC_TYPE_DEPTH_BRIDGE</a>, 
<a class="el" href="a00080.php#ggaf4e663cf42bbe20756b849c6293ef575ad8b1516e699b57ce1c8d107fbd2f674c">HWLOC_TYPE_DEPTH_PCI_DEVICE</a>, 
<br />
&#160;&#160;<a class="el" href="a00080.php#ggaf4e663cf42bbe20756b849c6293ef575afe9a2131073eebbe129d4aa2928d3f46">HWLOC_TYPE_DEPTH_OS_DEVICE</a>
<br />
 }</td></tr>
<tr class="separator:gaf4e663cf42bbe20756b849c6293ef575"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:gafa4f8dbc4c2e74c0da8019446353eed1"><td class="memItemLeft" align="right" valign="top">unsigned&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00080.php#gafa4f8dbc4c2e74c0da8019446353eed1">hwloc_topology_get_depth</a> (<a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> restrict topology)</td></tr>
<tr class="separator:gafa4f8dbc4c2e74c0da8019446353eed1"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga8bec782e21be313750da70cf7428b374"><td class="memItemLeft" align="right" valign="top">int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00080.php#ga8bec782e21be313750da70cf7428b374">hwloc_get_type_depth</a> (<a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00076.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type)</td></tr>
<tr class="separator:ga8bec782e21be313750da70cf7428b374"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga8125328e69eba709c33ea8055c12589b"><td class="memItemLeft" align="right" valign="top">static int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00080.php#ga8125328e69eba709c33ea8055c12589b">hwloc_get_type_or_below_depth</a> (<a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00076.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type)</td></tr>
<tr class="separator:ga8125328e69eba709c33ea8055c12589b"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga8a9ee573b7d2190272095d10712a7cca"><td class="memItemLeft" align="right" valign="top">static int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00080.php#ga8a9ee573b7d2190272095d10712a7cca">hwloc_get_type_or_above_depth</a> (<a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00076.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type)</td></tr>
<tr class="separator:ga8a9ee573b7d2190272095d10712a7cca"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga8cc04ad9eb03b0b74d420adf8cc11ad2"><td class="memItemLeft" align="right" valign="top"><a class="el" href="a00076.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00080.php#ga8cc04ad9eb03b0b74d420adf8cc11ad2">hwloc_get_depth_type</a> (<a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, unsigned depth)</td></tr>
<tr class="separator:ga8cc04ad9eb03b0b74d420adf8cc11ad2"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:gab17065e3d53455973844568d9f21c72c"><td class="memItemLeft" align="right" valign="top">unsigned&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00080.php#gab17065e3d53455973844568d9f21c72c">hwloc_get_nbobjs_by_depth</a> (<a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, unsigned depth)</td></tr>
<tr class="separator:gab17065e3d53455973844568d9f21c72c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga789a3f65aedff644be64a18526a03065"><td class="memItemLeft" align="right" valign="top">static int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00080.php#ga789a3f65aedff644be64a18526a03065">hwloc_get_nbobjs_by_type</a> (<a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00076.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type)</td></tr>
<tr class="separator:ga789a3f65aedff644be64a18526a03065"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga2d4b12fc187dfc53b35f2fa21d21044d"><td class="memItemLeft" align="right" valign="top">static <a class="el" href="a00077.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00080.php#ga2d4b12fc187dfc53b35f2fa21d21044d">hwloc_get_root_obj</a> (<a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology)</td></tr>
<tr class="separator:ga2d4b12fc187dfc53b35f2fa21d21044d"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:gabf8a98ad085460a4982cc7b74c344b71"><td class="memItemLeft" align="right" valign="top"><a class="el" href="a00077.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00080.php#gabf8a98ad085460a4982cc7b74c344b71">hwloc_get_obj_by_depth</a> (<a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, unsigned depth, unsigned idx)</td></tr>
<tr class="separator:gabf8a98ad085460a4982cc7b74c344b71"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga6f414dd80a2b943967a0ac92da3181a2"><td class="memItemLeft" align="right" valign="top">static <a class="el" href="a00077.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00080.php#ga6f414dd80a2b943967a0ac92da3181a2">hwloc_get_obj_by_type</a> (<a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00076.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type, unsigned idx)</td></tr>
<tr class="separator:ga6f414dd80a2b943967a0ac92da3181a2"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga8cf03328ed09901a03664d9498177126"><td class="memItemLeft" align="right" valign="top">static <a class="el" href="a00077.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00080.php#ga8cf03328ed09901a03664d9498177126">hwloc_get_next_obj_by_depth</a> (<a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, unsigned depth, <a class="el" href="a00077.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> prev)</td></tr>
<tr class="separator:ga8cf03328ed09901a03664d9498177126"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga759e88eaf5a230ad283e9d4c42486735"><td class="memItemLeft" align="right" valign="top">static <a class="el" href="a00077.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00080.php#ga759e88eaf5a230ad283e9d4c42486735">hwloc_get_next_obj_by_type</a> (<a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00076.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type, <a class="el" href="a00077.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> prev)</td></tr>
<tr class="separator:ga759e88eaf5a230ad283e9d4c42486735"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<p>Be sure to see the figure in <a class="el" href="a00002.php">Terms and Definitions</a> that shows a complete topology tree, including depths, child/sibling/cousin relationships, and an example of an asymmetric topology where one package has fewer caches than its peers. </p>
<h2 class="groupheader">Enumeration Type Documentation</h2>
<a class="anchor" id="gaf4e663cf42bbe20756b849c6293ef575"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">enum <a class="el" href="a00080.php#gaf4e663cf42bbe20756b849c6293ef575">hwloc_get_type_depth_e</a></td>
        </tr>
      </table>
</div><div class="memdoc">
<table class="fieldtable">
<tr><th colspan="2">Enumerator</th></tr><tr><td class="fieldname"><a class="anchor" id="ggaf4e663cf42bbe20756b849c6293ef575a0565ab92ab72cb0cec91e23003294aad"></a>HWLOC_TYPE_DEPTH_UNKNOWN&#160;</td><td class="fielddoc">
<p>No object of given type exists in the topology. </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="ggaf4e663cf42bbe20756b849c6293ef575ae99465995cacde6c210d5fc2e409798c"></a>HWLOC_TYPE_DEPTH_MULTIPLE&#160;</td><td class="fielddoc">
<p>Objects of given type exist at different depth in the topology. </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="ggaf4e663cf42bbe20756b849c6293ef575af93b50182973e4a718d9d4db9e253a90"></a>HWLOC_TYPE_DEPTH_BRIDGE&#160;</td><td class="fielddoc">
<p>Virtual depth for bridge object level. </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="ggaf4e663cf42bbe20756b849c6293ef575ad8b1516e699b57ce1c8d107fbd2f674c"></a>HWLOC_TYPE_DEPTH_PCI_DEVICE&#160;</td><td class="fielddoc">
<p>Virtual depth for PCI device object level. </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="ggaf4e663cf42bbe20756b849c6293ef575afe9a2131073eebbe129d4aa2928d3f46"></a>HWLOC_TYPE_DEPTH_OS_DEVICE&#160;</td><td class="fielddoc">
<p>Virtual depth for software device object level. </p>
</td></tr>
</table>

</div>
</div>
<h2 class="groupheader">Function Documentation</h2>
<a class="anchor" id="ga8cc04ad9eb03b0b74d420adf8cc11ad2"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="a00076.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> hwloc_get_depth_type </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&#160;</td>
          <td class="paramname"><em>depth</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Returns the type of objects at depth <code>depth</code>. </p>
<p><code>depth</code> should between 0 and <a class="el" href="a00080.php#gafa4f8dbc4c2e74c0da8019446353eed1" title="Get the depth of the hierarchical tree of objects. ">hwloc_topology_get_depth()</a>-1.</p>
<dl class="section return"><dt>Returns</dt><dd>-1 if depth <code>depth</code> does not exist. </dd></dl>

</div>
</div>
<a class="anchor" id="gab17065e3d53455973844568d9f21c72c"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned hwloc_get_nbobjs_by_depth </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&#160;</td>
          <td class="paramname"><em>depth</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Returns the width of level at depth <code>depth</code>. </p>

</div>
</div>
<a class="anchor" id="ga789a3f65aedff644be64a18526a03065"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static int hwloc_get_nbobjs_by_type </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00076.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a>&#160;</td>
          <td class="paramname"><em>type</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Returns the width of level type <code>type</code>. </p>
<p>If no object for that type exists, 0 is returned. If there are several levels with objects of that type, -1 is returned. </p>

</div>
</div>
<a class="anchor" id="ga8cf03328ed09901a03664d9498177126"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static <a class="el" href="a00077.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_get_next_obj_by_depth </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&#160;</td>
          <td class="paramname"><em>depth</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00077.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>prev</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Returns the next object at depth <code>depth</code>. </p>
<p>If <code>prev</code> is <code>NULL</code>, return the first object at depth <code>depth</code>. </p>

</div>
</div>
<a class="anchor" id="ga759e88eaf5a230ad283e9d4c42486735"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static <a class="el" href="a00077.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_get_next_obj_by_type </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00076.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a>&#160;</td>
          <td class="paramname"><em>type</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00077.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>prev</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Returns the next object of type <code>type</code>. </p>
<p>If <code>prev</code> is <code>NULL</code>, return the first object at type <code>type</code>. If there are multiple or no depth for given type, return <code>NULL</code> and let the caller fallback to <a class="el" href="a00080.php#ga8cf03328ed09901a03664d9498177126" title="Returns the next object at depth depth. ">hwloc_get_next_obj_by_depth()</a>. </p>

</div>
</div>
<a class="anchor" id="gabf8a98ad085460a4982cc7b74c344b71"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="a00077.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_get_obj_by_depth </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&#160;</td>
          <td class="paramname"><em>depth</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&#160;</td>
          <td class="paramname"><em>idx</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Returns the topology object at logical index <code>idx</code> from depth <code>depth</code>. </p>

</div>
</div>
<a class="anchor" id="ga6f414dd80a2b943967a0ac92da3181a2"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static <a class="el" href="a00077.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_get_obj_by_type </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00076.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a>&#160;</td>
          <td class="paramname"><em>type</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&#160;</td>
          <td class="paramname"><em>idx</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Returns the topology object at logical index <code>idx</code> with type <code>type</code>. </p>
<p>If no object for that type exists, <code>NULL</code> is returned. If there are several levels with objects of that type, <code>NULL</code> is returned and ther caller may fallback to <a class="el" href="a00080.php#gabf8a98ad085460a4982cc7b74c344b71" title="Returns the topology object at logical index idx from depth depth. ">hwloc_get_obj_by_depth()</a>. </p>

</div>
</div>
<a class="anchor" id="ga2d4b12fc187dfc53b35f2fa21d21044d"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static <a class="el" href="a00077.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_get_root_obj </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Returns the top-object of the topology-tree. </p>
<p>Its type is typically <a class="el" href="a00076.php#ggacd37bb612667dc437d66bfb175a8dc55a3f4e83ffc4a259354959ae8a9eaa2a80" title="Machine. The typical root object type. A set of processors and memory with cache coherency. ">HWLOC_OBJ_MACHINE</a> but it could be different for complex topologies. </p>

</div>
</div>
<a class="anchor" id="ga8bec782e21be313750da70cf7428b374"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">int hwloc_get_type_depth </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00076.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a>&#160;</td>
          <td class="paramname"><em>type</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Returns the depth of objects of type <code>type</code>. </p>
<p>If no object of this type is present on the underlying architecture, or if the OS doesn't provide this kind of information, the function returns <a class="el" href="a00080.php#ggaf4e663cf42bbe20756b849c6293ef575a0565ab92ab72cb0cec91e23003294aad" title="No object of given type exists in the topology. ">HWLOC_TYPE_DEPTH_UNKNOWN</a>.</p>
<p>If type is absent but a similar type is acceptable, see also <a class="el" href="a00080.php#ga8125328e69eba709c33ea8055c12589b" title="Returns the depth of objects of type type or below. ">hwloc_get_type_or_below_depth()</a> and <a class="el" href="a00080.php#ga8a9ee573b7d2190272095d10712a7cca" title="Returns the depth of objects of type type or above. ">hwloc_get_type_or_above_depth()</a>.</p>
<p>If some objects of the given type exist in different levels, for instance L1 and L2 caches, or L1i and L1d caches, the function returns <a class="el" href="a00080.php#ggaf4e663cf42bbe20756b849c6293ef575ae99465995cacde6c210d5fc2e409798c" title="Objects of given type exist at different depth in the topology. ">HWLOC_TYPE_DEPTH_MULTIPLE</a>. See <a class="el" href="a00092.php#gad108a09ce400222fe45545257d575489" title="Find the depth of cache objects matching cache depth and type. ">hwloc_get_cache_type_depth()</a> in <a class="el" href="a00063_source.php" title="High-level hwloc traversal helpers. ">hwloc/helper.h</a> to better handle this case.</p>
<p>If an I/O object type is given, the function returns a virtual value because I/O objects are stored in special levels that are not CPU-related. This virtual depth may be passed to other hwloc functions such as <a class="el" href="a00080.php#gabf8a98ad085460a4982cc7b74c344b71" title="Returns the topology object at logical index idx from depth depth. ">hwloc_get_obj_by_depth()</a> but it should not be considered as an actual depth by the application. In particular, it should not be compared with any other object depth or with the entire topology depth. </p>

</div>
</div>
<a class="anchor" id="ga8a9ee573b7d2190272095d10712a7cca"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static int hwloc_get_type_or_above_depth </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00076.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a>&#160;</td>
          <td class="paramname"><em>type</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Returns the depth of objects of type <code>type</code> or above. </p>
<p>If no object of this type is present on the underlying architecture, the function returns the depth of the first "present" object typically containing <code>type</code>.</p>
<p>If some objects of the given type exist in different levels, for instance L1 and L2 caches, the function returns <a class="el" href="a00080.php#ggaf4e663cf42bbe20756b849c6293ef575ae99465995cacde6c210d5fc2e409798c" title="Objects of given type exist at different depth in the topology. ">HWLOC_TYPE_DEPTH_MULTIPLE</a>. </p>

</div>
</div>
<a class="anchor" id="ga8125328e69eba709c33ea8055c12589b"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static int hwloc_get_type_or_below_depth </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00076.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a>&#160;</td>
          <td class="paramname"><em>type</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Returns the depth of objects of type <code>type</code> or below. </p>
<p>If no object of this type is present on the underlying architecture, the function returns the depth of the first "present" object typically found inside <code>type</code>.</p>
<p>If some objects of the given type exist in different levels, for instance L1 and L2 caches, the function returns <a class="el" href="a00080.php#ggaf4e663cf42bbe20756b849c6293ef575ae99465995cacde6c210d5fc2e409798c" title="Objects of given type exist at different depth in the topology. ">HWLOC_TYPE_DEPTH_MULTIPLE</a>. </p>

</div>
</div>
<a class="anchor" id="gafa4f8dbc4c2e74c0da8019446353eed1"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned hwloc_topology_get_depth </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> restrict&#160;</td>
          <td class="paramname"><em>topology</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Get the depth of the hierarchical tree of objects. </p>
<p>This is the depth of <a class="el" href="a00076.php#ggacd37bb612667dc437d66bfb175a8dc55abca6887e80cb291353b0a0c1da83f661" title="Processing Unit, or (Logical) Processor. An execution unit (may share a core with some other logical ...">HWLOC_OBJ_PU</a> objects plus one. </p>

</div>
</div>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
