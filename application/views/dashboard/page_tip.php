<div id="page-wrapper">
	<div class="row">
		<!-- Head -->
		<div class="col-lg-12">
			<h1 class="page-header">Tips & Berita</h1>
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
						Tips & Berita
					</div>
					<form role="form" name="my_form" action="<?php echo base_url("");?>index.php/admin/page_tip/update"  method="POST" enctype="multipart/form-data">
						<div class="panel-body">
							<div class="form-group">
								<label>Banner</label>
								<input type="file" name="banner">
								<a href="#" data-toggle="modal"  data-target="#lightbox" data-userid="<?php echo $form_data[0]->id; ?>" data-userimg="<?php echo $form_data[0]->banner; ?>">
									<img class="none" src="<?php echo base_url("uploads");?>/<?php echo $form_data[0]->banner; ?>">
									<input type="hidden" name="oldbanner" value="<?php echo $form_data[0]->banner; ?>">
									<button type="button" class="btn btn-primary right">Check Image</button></a>
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
