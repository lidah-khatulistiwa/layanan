<?php
error_reporting(0);
include "setting/conf.php"; 
$kat_layanan = $_GET['kat_layanan'];

$query = mysql_query("select * from layanan where kat_layanan='$kat_layanan'") or die(mysql_error());

$data = mysql_fetch_array($query);
?>

<!-- BEGIN CUSTOM BUTTONS WITH ICONS PORTLET-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<h4><i class="icon-reorder"></i>Layanan <?php echo $data['kat_layanan']; ?></h4>
							</div>
							<div class="portlet-body">
								<div class="row-fluid">
									<div class="cli-xs-12 cli-sm-6 cli-md-3">
										<?php
						                  error_reporting(0);
							                include "setting/conf.php";
							                $kat_layanan = $_GET['kat_layanan'];
                  							$query = "SELECT * FROM layanan WHERE kat_layanan='$kat_layanan' ";
							                  $hasil = mysql_query($query);
							                  while ($qtabel = mysql_fetch_assoc($hasil))
							                      	{
							                      		echo '<div><a href="dashboard.php?hal=ubah-layanan&id_layanan='.$qtabel['id_layanan'].'" class="icon-btn span3 tooltips" data-placement="bottom" data-original-title="'.$qtabel['jenis_layanan'].'"><img src="../images/ico/13.png" width="30px" height="30px"><div><h5>'.substr($qtabel['jenis_layanan'], 0,50).'</h5></div></a></div>';
						                      		}
						                  ?>
									</div>
								</div>
							</div>
						</div>
						<!-- END CUSTOM BUTTONS WITH ICONS PORTLET-->
