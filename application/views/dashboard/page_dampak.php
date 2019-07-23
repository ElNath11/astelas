<div id="page-wrapper">
	<div class="row">
		<!-- Head -->
		<div class="col-lg-12">
			<h1 class="page-header">Dampak Beser</h1>
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
						Dampak Beser
					</div>
					<form role="form" name="my_form" action="<?php echo base_url("");?>index.php/admin/page_dampak/update"  method="POST" enctype="multipart/form-data">
						<div class="panel-body">
							<div class="form-group">
								<label>Banner</label>
								<input type="file" name="banner">
								<a href="#" data-toggle="modal"  data-target="#lightbox" data-userid="<?php echo $form_data[0]->id; ?>" data-userimg="<?php echo $form_data[0]->banner; ?>">
									<img class="none" src="<?php echo base_url("uploads");?>/<?php echo $form_data[0]->banner; ?>">
									<input type="hidden" name="oldbanner" value="<?php echo $form_data[0]->banner; ?>">
									<button type="button" class="btn btn-primary right">Check Image</button></a>
								</div>
								<div class="form-group">
									<label>Text Head</label>
									<textarea name="add[text_head]" class="editor"><?php echo $form_data[0]->text_head; ?></textarea>
								</div>
								<div class="form-group">
									<label>Judul Tips</label>
									<input class="form-control" name="add[judul_info]" placeholder="" required value="<?php echo $form_data[0]->judul_info; ?>">
								</div>
								<div class="form-group">
									<label>Text Info</label>
									<textarea name="add[text_info]" class="editor"><?php echo $form_data[0]->text_info; ?></textarea>
								</div>
								<div class="form-group">
									<label>Text List 1</label>
									<textarea name="add[text1]" class="editor"><?php echo $form_data[0]->text1; ?></textarea>
								</div>
								<div class="form-group">
									<label>Text List 2</label>
									<textarea name="add[text2]" class="editor"><?php echo $form_data[0]->text2; ?></textarea>
								</div>
								<div class="form-group">
									<label>Image 1</label>
									<input type="file" name="pic1">
									<a href="#" data-toggle="modal"  data-target="#lightbox" data-userid="<?php echo $form_data[0]->id; ?>" data-userimg="<?php echo $form_data[0]->img1; ?>">
										<img class="none" src="<?php echo base_url("uploads");?>/<?php echo $form_data[0]->img1; ?>">
										<input type="hidden" name="oldpic1" value="<?php echo $form_data[0]->img1; ?>">
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
