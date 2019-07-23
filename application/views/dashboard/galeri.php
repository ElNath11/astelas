<div id="page-wrapper">
	<div class="row">
		<!-- Head -->
		<div class="col-lg-12">
			<h1 class="page-header">Galeri</h1>
		</div>
		<!-- Head -->
		<!-- Content -->

		<div class="row">
			<div class="col-lg-12">
				<!-- Notification -->
				<?php if ($this->session->flashdata('something')) {
					?><div class="alert alert-success">
					Proses telah berhasil dilakukan
				</div><?php } ?>
				<!-- Notification -->
				<div class="panel panel-default">
					<div class="panel-heading">
						Galeri
					</div>
					<!-- /.panel-heading -->
					<div class="panel-body">
						<div class="dataTable_wrapper">
							<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
								<thead>
									<a href="<?php echo base_url("");?>index.php/admin/galeri/tambah_view">
										<button type="button" class="btn btn-lg btn-success btn-block mb2"><i class="fa fa-plus"> Tambah</i></button>
									</a>
									<tr>
										<th width="80px">No</th>
										<th>Image</th>
										<th>Text</th>
										<th width="90px">Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<?php
										if (!$galeri) {
											echo '<td colspan="4">Data Kosong</td>';
										}else{
											$no = 1;
											foreach ($galeri as $key => $value) {
												?>
												<td><?php echo $no; ?></td>
												<td class="center">
													<a href="#" data-toggle="modal"  data-target="#lightbox" data-userid="<?php echo $value->id; ?>" data-userimg="<?php echo $value->img; ?>">
														<img class="none" src="<?php echo base_url("uploads");?>/<?php echo $value->img; ?>">
														<button type="button" class="btn btn-primary center">Check Image</button></a>
													</td>
													<td>
														<?php echo $value->text; ?>
													</td>
													<td>
														<a href="<?php echo base_url("");?>index.php/admin/galeri/update_view/<?php echo $value->id; ?>">
															<button type="button" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></button>
														</a>
														<?php if($value->flag==2){ ?>
														<a href="<?php echo base_url("");?>index.php/admin/galeri/status/1/<?php echo $value->id; ?>"><button class="btn btn-sm btn-danger">
															<i class="ace-icon fa fa-trash-o bigger-120"> Unpost</i>
														</button></a>
														<?php }elseif($value->flag==1){ ?>
														<a href="<?php echo base_url("");?>index.php/admin/galeri/status/2/<?php echo $value->id; ?>"><button class="btn btn-sm btn-warning">
															<i class="ace-icon fa fa-flag bigger-120"></i>
														</button></a>
														<?php } ?>
													</td>
												</tr>
												<?php $no++;} }?>
											</tbody>
										</table>
									</div>
									<!-- /.table-responsive -->
								</div>
								<!-- /.panel-body -->
							</div>
							<!-- /.panel -->
						</div>
						<!-- /.col-lg-12 -->
					</div>
					<!-- Content -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /#wrapper -->
