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
<!-- Generated by Doxygen 1.7.1 -->
<div class="navigation" id="top">
  <div class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&nbsp;Page</span></a></li>
      <li><a href="pages.php"><span>Related&nbsp;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&nbsp;Structures</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
</div>
<div class="header">
  <div class="summary">
<a href="#enum-members">Enumerations</a> &#124;
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<h1>Binding</h1>  </div>
</div>
<div class="contents">
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="enum-members"></a>
Enumerations</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">enum &nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__binding.php#ga9b2de9a34a18edb39fb272adf9c33622">hwloc_cpubind_policy_t</a> { <a class="el" href="group__hwlocality__binding.php#gga9b2de9a34a18edb39fb272adf9c33622a2e0dd0128dac6b03408c7dd170477fdc">HWLOC_CPUBIND_PROCESS</a>, 
<a class="el" href="group__hwlocality__binding.php#gga9b2de9a34a18edb39fb272adf9c33622af1b6bbad00d7b1017b918e3719f4d421">HWLOC_CPUBIND_THREAD</a>, 
<a class="el" href="group__hwlocality__binding.php#gga9b2de9a34a18edb39fb272adf9c33622a679a7e0f0c7ee06b123565f90d98e7fa">HWLOC_CPUBIND_STRICT</a>
 }</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight"><p>Process/Thread binding policy. </p>
 <a href="group__hwlocality__binding.php#ga9b2de9a34a18edb39fb272adf9c33622">More...</a><br/></td></tr>
<tr><td colspan="2"><h2><a name="func-members"></a>
Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__binding.php#ga42f02baaf7dc0c0f5a6bbeca731fd144">hwloc_set_cpubind</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="group__hwlocality__cpuset.php#gad2f7833583d020af31e01554251dbe11">hwloc_const_cpuset_t</a> set, int policy)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Bind current process or thread on cpus given in cpuset <code>set</code>.  <a href="#ga42f02baaf7dc0c0f5a6bbeca731fd144"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__binding.php#ga55427f8da8073ae16d0bab11f8137f1c">hwloc_get_cpubind</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411">hwloc_cpuset_t</a> set, int policy)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Get current process or thread binding.  <a href="#ga55427f8da8073ae16d0bab11f8137f1c"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__binding.php#gac349497da8f4f738bad51b2861461dc3">hwloc_set_proc_cpubind</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, hwloc_pid_t pid, <a class="el" href="group__hwlocality__cpuset.php#gad2f7833583d020af31e01554251dbe11">hwloc_const_cpuset_t</a> set, int policy)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Bind a process <code>pid</code> on cpus given in cpuset <code>set</code>.  <a href="#gac349497da8f4f738bad51b2861461dc3"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__binding.php#ga02141a2049739d63a5fa7a172d301f1c">hwloc_get_proc_cpubind</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, hwloc_pid_t pid, <a class="el" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411">hwloc_cpuset_t</a> set, int policy)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Get the current binding of process <code>pid</code>.  <a href="#ga02141a2049739d63a5fa7a172d301f1c"></a><br/></td></tr>
</table>
<hr/><a name="_details"></a><h2>Detailed Description</h2>
<p>It is often useful to call <a class="el" href="group__hwlocality__cpuset.php#gace7ad3d2a71d9884e7a28311228931af" title="Keep a single CPU among those set in CPU set set.">hwloc_cpuset_singlify()</a> first so that a single CPU remains in the set. This way, the process will not even migrate between different CPUs. Some OSes also only support that kind of binding.</p>
<dl class="note"><dt><b>Note:</b></dt><dd>Some OSes do not provide all ways to bind processes, threads, etc and the corresponding binding functions may fail. ENOSYS is returned when it is not possible to bind the requested kind of object processes/threads). EXDEV is returned when the requested cpuset can not be enforced (e.g. some systems only allow one CPU, and some other systems only allow one NUMA node)</dd></dl>
<p>The most portable version that should be preferred over the others, whenever possible, is</p>
<div class="fragment"><pre class="fragment"> <a class="code" href="group__hwlocality__binding.php#ga42f02baaf7dc0c0f5a6bbeca731fd144" title="Bind current process or thread on cpus given in cpuset set.">hwloc_set_cpubind</a>(topology, <span class="keyword">set</span>, 0),
</pre></div><p>as it just binds the current program, assuming it is monothread, or</p>
<div class="fragment"><pre class="fragment"> <a class="code" href="group__hwlocality__binding.php#ga42f02baaf7dc0c0f5a6bbeca731fd144" title="Bind current process or thread on cpus given in cpuset set.">hwloc_set_cpubind</a>(topology, <span class="keyword">set</span>, <a class="code" href="group__hwlocality__binding.php#gga9b2de9a34a18edb39fb272adf9c33622af1b6bbad00d7b1017b918e3719f4d421" title="Bind current thread of current process.">HWLOC_CPUBIND_THREAD</a>),
</pre></div><p>which binds the current thread of the current program (which may be multithreaded).</p>
<dl class="note"><dt><b>Note:</b></dt><dd>To unbind, just call the binding function with either a full cpuset or a cpuset equal to the system cpuset. </dd></dl>
<hr/><h2>Enumeration Type Documentation</h2>
<a class="anchor" id="ga9b2de9a34a18edb39fb272adf9c33622"></a><!-- doxytag: member="hwloc.h::hwloc_cpubind_policy_t" ref="ga9b2de9a34a18edb39fb272adf9c33622" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">enum <a class="el" href="group__hwlocality__binding.php#ga9b2de9a34a18edb39fb272adf9c33622">hwloc_cpubind_policy_t</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Process/Thread binding policy. </p>
<p>These flags can be used to refine the binding policy.</p>
<p>The default (0) is to bind the current process, assumed to be mono-thread, in a non-strict way. This is the most portable way to bind as all OSes usually provide it. </p>
<dl><dt><b>Enumerator: </b></dt><dd><table border="0" cellspacing="2" cellpadding="0">
<tr><td valign="top"><em><a class="anchor" id="gga9b2de9a34a18edb39fb272adf9c33622a2e0dd0128dac6b03408c7dd170477fdc"></a><!-- doxytag: member="HWLOC_CPUBIND_PROCESS" ref="gga9b2de9a34a18edb39fb272adf9c33622a2e0dd0128dac6b03408c7dd170477fdc" args="" -->HWLOC_CPUBIND_PROCESS</em>&nbsp;</td><td>
<p>Bind all threads of the current multithreaded process. This may not be supported by some OSes. </p>
</td></tr>
<tr><td valign="top"><em><a class="anchor" id="gga9b2de9a34a18edb39fb272adf9c33622af1b6bbad00d7b1017b918e3719f4d421"></a><!-- doxytag: member="HWLOC_CPUBIND_THREAD" ref="gga9b2de9a34a18edb39fb272adf9c33622af1b6bbad00d7b1017b918e3719f4d421" args="" -->HWLOC_CPUBIND_THREAD</em>&nbsp;</td><td>
<p>Bind current thread of current process. </p>
</td></tr>
<tr><td valign="top"><em><a class="anchor" id="gga9b2de9a34a18edb39fb272adf9c33622a679a7e0f0c7ee06b123565f90d98e7fa"></a><!-- doxytag: member="HWLOC_CPUBIND_STRICT" ref="gga9b2de9a34a18edb39fb272adf9c33622a679a7e0f0c7ee06b123565f90d98e7fa" args="" -->HWLOC_CPUBIND_STRICT</em>&nbsp;</td><td>
<p>Request for strict binding from the OS. </p>
<p>By default, when the designated CPUs are all busy while other CPUs are idle, OSes may execute the thread/process on those other CPUs instead of the designated CPUs, to let them progress anyway. Strict binding means that the thread/process will _never_ execute on other cpus than the designated CPUs, even when those are busy with other tasks and other CPUs are idle.</p>
<dl class="note"><dt><b>Note:</b></dt><dd>Depending on OSes and implementations, strict binding may not be possible (implementation reason) or not allowed (administrative reasons), and the function will fail in that case.</dd></dl>
<p>When retrieving the binding of a process, this flag checks whether all its threads actually have the same binding. If the flag is not given, the binding of each thread will be accumulated.</p>
<dl class="note"><dt><b>Note:</b></dt><dd>This flag is meaningless when retrieving the binding of a thread. </dd></dl>
</td></tr>
</table>
</dd>
</dl>

</div>
</div>
<hr/><h2>Function Documentation</h2>
<a class="anchor" id="ga55427f8da8073ae16d0bab11f8137f1c"></a><!-- doxytag: member="hwloc.h::hwloc_get_cpubind" ref="ga55427f8da8073ae16d0bab11f8137f1c" args="(hwloc_topology_t topology, hwloc_cpuset_t set, int policy)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int hwloc_get_cpubind </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&nbsp;</td>
          <td class="paramname"> <em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411">hwloc_cpuset_t</a>&nbsp;</td>
          <td class="paramname"> <em>set</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int&nbsp;</td>
          <td class="paramname"> <em>policy</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Get current process or thread binding. </p>

</div>
</div>
<a class="anchor" id="ga02141a2049739d63a5fa7a172d301f1c"></a><!-- doxytag: member="hwloc.h::hwloc_get_proc_cpubind" ref="ga02141a2049739d63a5fa7a172d301f1c" args="(hwloc_topology_t topology, hwloc_pid_t pid, hwloc_cpuset_t set, int policy)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int hwloc_get_proc_cpubind </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&nbsp;</td>
          <td class="paramname"> <em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">hwloc_pid_t&nbsp;</td>
          <td class="paramname"> <em>pid</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411">hwloc_cpuset_t</a>&nbsp;</td>
          <td class="paramname"> <em>set</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int&nbsp;</td>
          <td class="paramname"> <em>policy</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Get the current binding of process <code>pid</code>. </p>
<dl class="note"><dt><b>Note:</b></dt><dd>hwloc_pid_t is pid_t on unix platforms, and HANDLE on native Windows platforms</dd>
<dd>
HWLOC_CPUBIND_THREAD can not be used in <code>policy</code>. </dd></dl>

</div>
</div>
<a class="anchor" id="ga42f02baaf7dc0c0f5a6bbeca731fd144"></a><!-- doxytag: member="hwloc.h::hwloc_set_cpubind" ref="ga42f02baaf7dc0c0f5a6bbeca731fd144" args="(hwloc_topology_t topology, hwloc_const_cpuset_t set, int policy)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int hwloc_set_cpubind </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&nbsp;</td>
          <td class="paramname"> <em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="group__hwlocality__cpuset.php#gad2f7833583d020af31e01554251dbe11">hwloc_const_cpuset_t</a>&nbsp;</td>
          <td class="paramname"> <em>set</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int&nbsp;</td>
          <td class="paramname"> <em>policy</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Bind current process or thread on cpus given in cpuset <code>set</code>. </p>
<dl class="return"><dt><b>Returns:</b></dt><dd>ENOSYS if the action is not supported </dd>
<dd>
EXDEV if the binding cannot be enforced </dd></dl>

</div>
</div>
<a class="anchor" id="gac349497da8f4f738bad51b2861461dc3"></a><!-- doxytag: member="hwloc.h::hwloc_set_proc_cpubind" ref="gac349497da8f4f738bad51b2861461dc3" args="(hwloc_topology_t topology, hwloc_pid_t pid, hwloc_const_cpuset_t set, int policy)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int hwloc_set_proc_cpubind </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&nbsp;</td>
          <td class="paramname"> <em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">hwloc_pid_t&nbsp;</td>
          <td class="paramname"> <em>pid</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="group__hwlocality__cpuset.php#gad2f7833583d020af31e01554251dbe11">hwloc_const_cpuset_t</a>&nbsp;</td>
          <td class="paramname"> <em>set</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int&nbsp;</td>
          <td class="paramname"> <em>policy</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Bind a process <code>pid</code> on cpus given in cpuset <code>set</code>. </p>
<dl class="note"><dt><b>Note:</b></dt><dd>hwloc_pid_t is pid_t on unix platforms, and HANDLE on native Windows platforms</dd>
<dd>
HWLOC_CPUBIND_THREAD can not be used in <code>policy</code>. </dd></dl>

</div>
</div>
</div>
<?php
include_once("$topdir/includes/footer.inc");