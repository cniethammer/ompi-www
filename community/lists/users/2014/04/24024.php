<?
$subject_val = "Re: [OMPI users] Problem building OpenMPI 1.8 on RHEL6";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  1 11:51:40 2014" -->
<!-- isoreceived="20140401155140" -->
<!-- sent="Tue, 1 Apr 2014 08:51:13 -0700" -->
<!-- isosent="20140401155113" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem building OpenMPI 1.8 on RHEL6" -->
<!-- id="D063AD80-1397-4C83-924D-EC70143F2509_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="25AE6277FDC12F408393C11ACE6C400F0CB61E2D_at_HDXDSP53.us.lmco.com" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [OMPI users] Problem building OpenMPI 1.8 on RHEL6<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-01 11:51:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24025.php">Dave Goodell (dgoodell): "Re: [OMPI users] Problem building OpenMPI 1.8 on RHEL6"</a>
<li><strong>Previous message:</strong> <a href="24023.php">Blosch, Edwin L: "[OMPI users] Problem building OpenMPI 1.8 on RHEL6"</a>
<li><strong>In reply to:</strong> <a href="24023.php">Blosch, Edwin L: "[OMPI users] Problem building OpenMPI 1.8 on RHEL6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24025.php">Dave Goodell (dgoodell): "Re: [OMPI users] Problem building OpenMPI 1.8 on RHEL6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...indeed, it looks like the default versions may be out-of-date. Here is a table showing the required rev levels:
<br>
<p><a href="http://www.open-mpi.org/svn/building.php">http://www.open-mpi.org/svn/building.php</a>
<br>
<p><p>On Apr 1, 2014, at 8:26 AM, Blosch, Edwin L &lt;edwin.l.blosch_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I am getting some errors building 1.8 on RHEL6.  I tried autoreconf as suggested, but it failed for the same reason.  Is there a minimum version of m4 required that is newer than that provided by RHEL6?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; aclocal.m4:16: warning: this file was generated for autoconf 2.69.
</span><br>
<span class="quotelev1">&gt; You have another version of autoconf.  It may work, but is not guaranteed to.
</span><br>
<span class="quotelev1">&gt; If you have problems, you may need to regenerate the build system entirely.
</span><br>
<span class="quotelev1">&gt; To do so, use the procedure documented by the package, typically 'autoreconf'.
</span><br>
<span class="quotelev1">&gt; configure.ac:40: error: m4_defn: undefined macro: _m4_divert_diversion
</span><br>
<span class="quotelev1">&gt; configure.ac:40: the top level
</span><br>
<span class="quotelev1">&gt; autom4te: /usr/bin/m4 failed with exit status: 1
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; [bloscel_at_head openmpi]$ autoreconf
</span><br>
<span class="quotelev1">&gt; configure.ac:40: error: m4_defn: undefined macro: _m4_divert_diversion
</span><br>
<span class="quotelev1">&gt; configure.ac:40: the top level
</span><br>
<span class="quotelev1">&gt; autom4te: /usr/bin/m4 failed with exit status: 1
</span><br>
<span class="quotelev1">&gt; aclocal: autom4te failed with exit status: 1
</span><br>
<span class="quotelev1">&gt; autoreconf: aclocal failed with exit status: 1
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24024/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24025.php">Dave Goodell (dgoodell): "Re: [OMPI users] Problem building OpenMPI 1.8 on RHEL6"</a>
<li><strong>Previous message:</strong> <a href="24023.php">Blosch, Edwin L: "[OMPI users] Problem building OpenMPI 1.8 on RHEL6"</a>
<li><strong>In reply to:</strong> <a href="24023.php">Blosch, Edwin L: "[OMPI users] Problem building OpenMPI 1.8 on RHEL6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24025.php">Dave Goodell (dgoodell): "Re: [OMPI users] Problem building OpenMPI 1.8 on RHEL6"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
