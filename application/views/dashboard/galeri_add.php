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
				<!-- Panel -->
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
					<form role="form" name="my_form"
					<?php if (isset($update)) { ?>action="<?php echo base_url("");?>index.php/admin/galeri/update/<?php echo $form_data[0]->id; ?>"
					<?php }else{ ?> action="<?php echo base_url("");?>index.php/admin/galeri/add" <?php } ?> method="POST" enctype="multipart/form-data">
					<div class="panel-body">
						<a href="<?php echo base_url("");?>index.php/admin/galeri">
							<button type="button" class="btn btn-lg btn-default btn-block mb2"><i class="fa fa-step-backward"> Kembali</i></button>
						</a>
						<div class="form-group">
							<label>Image</label>
							<input type="file" name="pic1" value="<?php if (isset($update)) { echo $form_data[0]->img; } ?>">
							<a href="#" data-toggle="modal"  data-target="#lightbox" data-userid="<?php if (isset($update)) { echo $form_data[0]->id; } ?>" data-userimg="<?php if (isset($update)) { echo $form_data[0]->img; } ?>">
								<img class="none" src="<?php if (isset($update)) { echo base_url("uploads");?>/<?php  echo $form_data[0]->img; } ?>">
								<button type="button" class="btn btn-primary right">Check Image</button></a>
							</div>
							<div class="form-group">
								<label>Deskripsi Galeri</label>
								<textarea name="add[text]" class="form-control" style=""><?php if (isset($update)) { echo $form_data[0]->text; } ?></textarea>
							</div>
							<div class="clearfix"></div>
							<div class="form-group mt4">
								<button type="submit" class="btn btn-primary btn-lg btn-block">SUBMIT</button>
							</div>
						</div>
					</form>
				</div>
				<!-- Panel -->
			</div>
		</div>
		<!-- Content -->

	</div>
	<!-- /.row -->
</div>
</div>
<!-- /#wrapper -->
