<?php 
    include "../setting/conf.php";
    $no = 1;
?>					
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
						<div class="portlet box light-grey">
							<div class="portlet-title">
								<h4><i class="icon-globe"></i>Manajemen Kategori</h4>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="#portlet-config" data-toggle="modal" class="config"></a>
									<a href="javascript:;" class="reload"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body">
								<div class="clearfix">
									<div class="btn-group">
										<a href="dashboard.php?hal=tambah-kategori">
											<button id="sample_editable_1_new" class="btn green">
											Tambah Kategori <i class="icon-plus"></i>
											</button>
										</a>
									</div>
								</div>
								<table class="table table-striped table-bordered table-hover" id="sample_1">
									<thead>
										<tr>
											<th class="hidden-480">Kategori</th>
											<th class="hidden-480">Aksi</th>
											
										</tr>
									</thead>
									<tbody>
										<?php
	                                        $query = mysql_query("select * from kategori");
	                                        while ($buff = mysql_fetch_array($query)) {
	                                    ?>
										<tr class="odd gradeX">
											<td class="hidden-480"><?php echo $buff['nama_kat']; ?></td>
											<td class="center hidden-480">
												<a href="dashboard.php?hal=ubah-kategori&id_kat=<?php echo $buff['id_kat']; ?>" class="btn mini purple"><i class="icon-edit"></i> Edit</a>
												<a href="library/kategori-delete.php?id_kat=<?php echo $buff['id_kat']; ?>" class="btn mini black"><i class="icon-trash"></i> Delete</a>
											</td>
											<?php
		                                        }
		                                    ?>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<!-- END EXAMPLE TABLE PORTLET-->