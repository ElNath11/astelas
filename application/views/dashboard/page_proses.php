<div id="page-wrapper">
	<div class="row">
		<!-- Head -->
		<div class="col-lg-12">
			<h1 class="page-header">Proses Berkemih</h1>
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
						Proses Berkemih
					</div>
					<form role="form" name="my_form" action="<?php echo base_url("");?>index.php/admin/page_proses/update"  method="POST" enctype="multipart/form-data">
						<div class="panel-body">
							<div class="form-group">
								<label>Banner</label>
								<input type="file" name="banner">
								<a href="#" data-toggle="modal"  data-target="#lightbox" data-userid="<?php echo $form_data[0]->id; ?>" data-userimg="<?php echo $form_data[0]->banner; ?>">
									<img class="none" src="<?php echo base_url("uploads");?>/<?php echo $form_data[0]->banner; ?>">
									<input type="hidden" name="oldpic1" value="<?php echo $form_data[0]->banner; ?>">
									<button type="button" class="btn btn-primary right">Check Image</button></a>
								</div>
								<div class="form-group">
									<label>Text Header</label>
									<input class="form-control" name="add[text_head]" placeholder="" required value="<?php echo $form_data[0]->text_head; ?>">
								</div>
								<div class="form-group">
									<label>Image 1</label>
									<input type="file" name="pic1">
									<a href="#" data-toggle="modal"  data-target="#lightbox" data-userid="<?php echo $form_data[0]->id; ?>" data-userimg="<?php echo $form_data[0]->img; ?>">
										<img class="none" src="<?php echo base_url("uploads");?>/<?php echo $form_data[0]->img; ?>">
										<input type="hidden" name="oldpic2" value="<?php echo $form_data[0]->img; ?>">
										<button type="button" class="btn btn-primary right">Check Image</button></a>
									</div>
									<div class="form-group">
										<label>Image 2</label>
										<input type="file" name="pic2">
										<a href="#" data-toggle="modal"  data-target="#lightbox" data-userid="<?php echo $form_data[0]->id; ?>" data-userimg="<?php echo $form_data[0]->img2; ?>">
											<img class="none" src="<?php echo base_url("uploads");?>/<?php echo $form_data[0]->img2; ?>">
											<input type="hidden" name="oldpic3" value="<?php echo $form_data[0]->img2; ?>">
											<button type="button" class="btn btn-primary right">Check Image</button></a>
										</div>
										<div class="form-group">
											<label>Image 3</label>
											<input type="file" name="pic3">
											<a href="#" data-toggle="modal"  data-target="#lightbox" data-userid="<?php echo $form_data[0]->id; ?>" data-userimg="<?php echo $form_data[0]->img3; ?>">
												<img class="none" src="<?php echo base_url("uploads");?>/<?php echo $form_data[0]->img3; ?>">
												<input type="hidden" name="oldpic4" value="<?php echo $form_data[0]->img3; ?>">
												<button type="button" class="btn btn-primary right">Check Image</button></a>
											</div>
											<div class="form-group">
												<label>Text Teaser</label>
												<textarea name="add[text_teaser]" class="form-control"><?php echo $form_data[0]->text_teaser; ?></textarea>
											</div>
											<div class="form-group">
												<label>Text Info</label>
												<input class="form-control" name="add[text_info]" placeholder="" required value="<?php echo $form_data[0]->text_info; ?>">
											</div>
											<div class="form-group">
												<label>Text Cara</label>
												<input class="form-control" type="text" name="add[text_cara]" placeholder="" required value="<?php echo $form_data[0]->text_cara; ?>">
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
