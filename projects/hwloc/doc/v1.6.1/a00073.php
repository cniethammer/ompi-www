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
<!-- Generated by Doxygen 1.8.2 -->
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
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<div class="title">Helpers for manipulating Linux libnuma bitmask</div>  </div>
</div><!--header-->
<div class="contents">
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:ga1a2ad777b9b4cf4aac0123f61c3ab8bd"><td class="memItemLeft" align="right" valign="top">static inline struct <br class="typebreak"/>
bitmask *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00073.php#ga1a2ad777b9b4cf4aac0123f61c3ab8bd">hwloc_cpuset_to_linux_libnuma_bitmask</a> (<a class="el" href="a00042.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00043.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> cpuset) </td></tr>
<tr class="separator:ga1a2ad777b9b4cf4aac0123f61c3ab8bd"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:gab67a395c48ddb56307b1465fab9bb9e6"><td class="memItemLeft" align="right" valign="top">static inline struct <br class="typebreak"/>
bitmask *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00073.php#gab67a395c48ddb56307b1465fab9bb9e6">hwloc_nodeset_to_linux_libnuma_bitmask</a> (<a class="el" href="a00042.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00043.php#ga2f5276235841ad66a79bedad16a5a10c">hwloc_const_nodeset_t</a> nodeset) </td></tr>
<tr class="separator:gab67a395c48ddb56307b1465fab9bb9e6"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga47747968f12c2674d2840dfbacce4940"><td class="memItemLeft" align="right" valign="top">static inline int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00073.php#ga47747968f12c2674d2840dfbacce4940">hwloc_cpuset_from_linux_libnuma_bitmask</a> (<a class="el" href="a00042.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00043.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a> cpuset, const struct bitmask *bitmask)</td></tr>
<tr class="separator:ga47747968f12c2674d2840dfbacce4940"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga5a1d17375cc7b65cd155330008cbdb6a"><td class="memItemLeft" align="right" valign="top">static inline int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00073.php#ga5a1d17375cc7b65cd155330008cbdb6a">hwloc_nodeset_from_linux_libnuma_bitmask</a> (<a class="el" href="a00042.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00043.php#ga37e35730fa7e775b5bb0afe893d6d508">hwloc_nodeset_t</a> nodeset, const struct bitmask *bitmask)</td></tr>
<tr class="separator:ga5a1d17375cc7b65cd155330008cbdb6a"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<h2 class="groupheader">Function Documentation</h2>
<a class="anchor" id="ga47747968f12c2674d2840dfbacce4940"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static inline int hwloc_cpuset_from_linux_libnuma_bitmask </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00042.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00043.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a>&#160;</td>
          <td class="paramname"><em>cpuset</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const struct bitmask *&#160;</td>
          <td class="paramname"><em>bitmask</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Convert libnuma bitmask <code>bitmask</code> into hwloc CPU set <code>cpuset</code>. </p>
<p>This function may be used after calling many numa_ functions that use a struct bitmask as an output parameter. </p>

</div>
</div>
<a class="anchor" id="ga1a2ad777b9b4cf4aac0123f61c3ab8bd"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static inline struct bitmask * hwloc_cpuset_to_linux_libnuma_bitmask </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00042.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00043.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a>&#160;</td>
          <td class="paramname"><em>cpuset</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span><span class="mlabel">read</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Convert hwloc CPU set <code>cpuset</code> into the returned libnuma bitmask. </p>
<p>The returned bitmask should later be freed with numa_bitmask_free.</p>
<p>This function may be used before calling many numa_ functions that use a struct bitmask as an input parameter.</p>
<dl class="section return"><dt>Returns</dt><dd>newly allocated struct bitmask. </dd></dl>

</div>
</div>
<a class="anchor" id="ga5a1d17375cc7b65cd155330008cbdb6a"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static inline int hwloc_nodeset_from_linux_libnuma_bitmask </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00042.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00043.php#ga37e35730fa7e775b5bb0afe893d6d508">hwloc_nodeset_t</a>&#160;</td>
          <td class="paramname"><em>nodeset</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const struct bitmask *&#160;</td>
          <td class="paramname"><em>bitmask</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Convert libnuma bitmask <code>bitmask</code> into hwloc NUMA node set <code>nodeset</code>. </p>
<p>This function may be used after calling many numa_ functions that use a struct bitmask as an output parameter. </p>

</div>
</div>
<a class="anchor" id="gab67a395c48ddb56307b1465fab9bb9e6"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static inline struct bitmask * hwloc_nodeset_to_linux_libnuma_bitmask </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00042.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00043.php#ga2f5276235841ad66a79bedad16a5a10c">hwloc_const_nodeset_t</a>&#160;</td>
          <td class="paramname"><em>nodeset</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span><span class="mlabel">read</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Convert hwloc NUMA node set <code>nodeset</code> into the returned libnuma bitmask. </p>
<p>The returned bitmask should later be freed with numa_bitmask_free.</p>
<p>This function may be used before calling many numa_ functions that use a struct bitmask as an input parameter.</p>
<dl class="section return"><dt>Returns</dt><dd>newly allocated struct bitmask. </dd></dl>

</div>
</div>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");