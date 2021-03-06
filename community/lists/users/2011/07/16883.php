<?
$subject_val = "Re: [OMPI users] a question about network connection of open-mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 10 22:11:45 2011" -->
<!-- isoreceived="20110711021145" -->
<!-- sent="Sun, 10 Jul 2011 20:11:38 -0600" -->
<!-- isosent="20110711021138" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] a question about network connection of open-mpi" -->
<!-- id="E7B01068-CFFA-40DB-B709-8D47F165E1D8_at_open-mpi.org" -->
<!-- charset="GB2312" -->
<!-- inreplyto="201107110945172833127_at_163.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] a question about network connection of open-mpi<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-10 22:11:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16884.php">Ning Li: "Re: [OMPI users] OpenMPI with NAG compiler and gcc 4.6"</a>
<li><strong>Previous message:</strong> <a href="16882.php">Ralph Castain: "Re: [OMPI users] max entries in procgroup file for OpenMPI 1.5?"</a>
<li><strong>In reply to:</strong> <a href="16881.php">zhuangchao: "[OMPI users] a question about  network  connection  of  open-mpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Have you gone to those nodes and checked their IP addresses of -all- interfaces? OMPI must be picking up those addresses from somewhere - best guess is that those nodes have multiple interfaces on them, some of which are configured to those addresses.
<br>
<p>Remember: we don't look at the /etc/hosts file where mpirun is executed to get the addresses. Processes started on each remote node actually query the addresses of all available interfaces on that node. The result is frequently different than the address provided in your /etc/hosts file.
<br>
<p><p>On Jul 10, 2011, at 7:45 PM, zhuangchao wrote:
<br>
<p><span class="quotelev1">&gt; hello all :
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;        I   run  the following command :  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; /data1/cluster/openmpi/bin/mpirun  -d  -machinefile  /tmp/nodes.10515.txt   -np  3  /data1/cluster/mpiblast-pio-1.6/bin/mpiblast   -p blastn -i /data1/cluster/sequences/seq_4.txt -d Baculo_Nucleotide -o /data1/cluster/blast.out/blast.out.10515      -g T -m  0 -F F
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;       Then  I  get  the following  error  from  openmpi:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; [node7][[3812,1],2][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.0.5 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [node7][[3812,1],2][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 159.226.126.15 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      The  machinefile  is defined  as  following :
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;      node1
</span><br>
<span class="quotelev1">&gt;      node5
</span><br>
<span class="quotelev1">&gt;      node7
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      192.168.0.5  is  not  the  ip  of  hosts in the  machinefile .    159.226.126.15  is  the   another ip of  node1 .  But  hostname node1
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; corresponds to   11.11.11.1  in  the /etc/hosts .
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;     why   do  I  get  the error ?      Can  you  help me ?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;        Thank you !    
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;        
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16883/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16884.php">Ning Li: "Re: [OMPI users] OpenMPI with NAG compiler and gcc 4.6"</a>
<li><strong>Previous message:</strong> <a href="16882.php">Ralph Castain: "Re: [OMPI users] max entries in procgroup file for OpenMPI 1.5?"</a>
<li><strong>In reply to:</strong> <a href="16881.php">zhuangchao: "[OMPI users] a question about  network  connection  of  open-mpi"</a>
<!-- nextthread="start" -->
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
