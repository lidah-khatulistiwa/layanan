<!-- BEGIN CUSTOM BUTTONS WITH ICONS PORTLET-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<h4><i class="icon-reorder"></i>Pilih Kategori</h4>
							</div>
							<div class="portlet-body">
								<div class="row-fluid">
									<div class="cli-xs-12 cli-sm-6 cli-md-3">
										<?php
						                  error_reporting(0);
							                include "setting/conf.php";
							                $query = "select * from kategori";
							                  $hasil = mysql_query($query);
							                  while ($qtabel = mysql_fetch_assoc($hasil))
							                      	{
							                      		echo '<div><a href="dashboard.php?hal=shortcut-kategori&kat_layanan='.$qtabel['nama_kat'].'" class="icon-btn span3"><img src="../images/ico/12.png" width="30px" height="30px"><div><h5><strong>'.$qtabel['nama_kat'].'</strong></h5></div></a></div>';
						                      		}
						                  ?>
									</div>
								</div>
							</div>
						</div>
						<!-- END CUSTOM BUTTONS WITH ICONS PORTLET-->
