<?php
error_reporting(0);
include "setting/conf.php"; 
$kat_layanan = $_GET['kat_layanan'];

$query = mysql_query("select * from layanan where kat_layanan='$kat_layanan'") or die(mysql_error());

$data = mysql_fetch_array($query);
?>
<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
						<h3 class="page-title">
							Admin Shortcut				
							<small>
							</small>
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="index.php">Home</a> 
								<i class="icon-angle-right"></i>
							</li>
							<li>
								<a href="dashboard.php?hal=shortcut">Shortcut</a>
								<i class="icon-angle-right"></i>
							</li>
							<li>
								<a href="#"><?php echo $data['kat_layanan']; ?></a>
							</li>
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->