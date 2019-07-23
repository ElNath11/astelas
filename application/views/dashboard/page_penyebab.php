<div id="page-wrapper">
	<div class="row">
		<!-- Head -->
		<div class="col-lg-12">
			<h1 class="page-header">Penyebab Beser</h1>
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
						Penyebab Beser
					</div>
					<form role="form" name="my_form" action="<?php echo base_url("");?>index.php/admin/page_penyebab/update"  method="POST" enctype="multipart/form-data">
						<div class="panel-body">
							<div class="form-group">
								<label>Banner</label>
								<input type="file" name="banner">
								<a href="#" data-toggle="modal"  data-target="#lightbox" data-userid="<?php echo $form_data[0]->id; ?>" data-userimg="<?php echo $form_data[0]->banner; ?>">
									<input type="hidden" name="oldbanner" value="<?php echo $form_data[0]->banner; ?>">
									<img class="none" src="<?php echo base_url("uploads");?>/<?php echo $form_data[0]->banner; ?>">
									<button type="button" class="btn btn-primary right">Check Image</button></a>
								</div>
								<div class="form-group">
									<label>Text Header</label>
									<textarea name="add[text_teaser]" class="editor"><?php echo $form_data[0]->text_teaser; ?></textarea>
								</div>
								<div class="form-group">
									<label>Image 1</label>
									<input type="file" name="pic1">
									<a href="#" data-toggle="modal"  data-target="#lightbox" data-userid="<?php echo $form_data[0]->id; ?>" data-userimg="<?php echo $form_data[0]->img; ?>">
										<img class="none" src="<?php echo base_url("uploads");?>/<?php echo $form_data[0]->img; ?>">
										<input type="hidden" name="pic1" value="<?php echo $form_data[0]->img; ?>">
										<button type="button" class="btn btn-primary right">Check Image</button></a>
									</div>
									<div class="form-group">
										<label>Image 2</label>
										<input type="file" name="pic2">
										<a href="#" data-toggle="modal"  data-target="#lightbox" data-userid="<?php echo $form_data[0]->id; ?>" data-userimg="<?php echo $form_data[0]->img2; ?>">
											<img class="none" src="<?php echo base_url("uploads");?>/<?php echo $form_data[0]->img2; ?>">
											<input type="hidden" name="pic2" value="<?php echo $form_data[0]->img2; ?>">
											<button type="button" class="btn btn-primary right">Check Image</button></a>
										</div>
										<div class="form-group">
											<label>Image 3</label>
											<input type="file" name="pic3">
											<a href="#" data-toggle="modal"  data-target="#lightbox" data-userid="<?php echo $form_data[0]->id; ?>" data-userimg="<?php echo $form_data[0]->img3; ?>">
												<img class="none" src="<?php echo base_url("uploads");?>/<?php echo $form_data[0]->img3; ?>">
												<input type="hidden" name="pic3" value="<?php echo $form_data[0]->img3; ?>">
												<button type="button" class="btn btn-primary right">Check Image</button></a>
											</div>
											<div class="form-group">
											<label>Image 4</label>
											<input type="file" name="pic4">
											<a href="#" data-toggle="modal"  data-target="#lightbox" data-userid="<?php echo $form_data[0]->id; ?>" data-userimg="<?php echo $form_data[0]->img4; ?>">
												<img class="none" src="<?php echo base_url("uploads");?>/<?php echo $form_data[0]->img4; ?>">
												<input type="hidden" name="pic4" value="<?php echo $form_data[0]->img4; ?>">
												<button type="button" class="btn btn-primary right">Check Image</button></a>
											</div>
											<div class="form-group">
												<label>Text OAB</label>
												<textarea name="add[text1]" class="editor" style="" id="editor1"><?php echo $form_data[0]->text1; ?></textarea>
											</div>
											<div class="form-group">
												<label>Text Faktor</label>
												<textarea name="add[text2]" class="editor" style="" id="editor1"><?php echo $form_data[0]->text2; ?></textarea>
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
