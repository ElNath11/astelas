<div id="page-wrapper">
	<div class="row">
		<!-- Head -->
		<div class="col-lg-12">
			<h1 class="page-header">Beranda</h1>
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
						Beranda
					</div>
					<form role="form" name="my_form" action="<?php echo base_url("");?>index.php/admin/page_home/update"  method="POST" enctype="multipart/form-data">
						<div class="panel-body">
							<div class="form-group">
								<label>Text Teaser</label>
								<textarea name="add[text_teaser]" class="editor" style="" id="editor1"><?php echo $form_data[0]->text_teaser; ?></textarea>
							</div>
							<div class="form-group">
								<label>Text Header</label>
								<input class="form-control" name="add[text_head]" placeholder="" required value="<?php echo $form_data[0]->text_head; ?>">
							</div>
							<div class="form-group">
								<label>Text 1</label>
								<input class="form-control" name="add[text1]" placeholder="" required value="<?php echo $form_data[0]->text1; ?>">
							</div>
							<div class="form-group">
								<label>Text 2</label>
								<input class="form-control" type="text" name="add[text2]" placeholder="" required value="<?php echo $form_data[0]->text2; ?>">
							</div>
							<div class="form-group">
								<label>Text 3</label>
								<input class="form-control" type="text" name="add[text3]" placeholder="" required value="<?php echo $form_data[0]->text3; ?>">
							</div>
							<div class="form-group">
								<label>Text 4</label>
								<input class="form-control" type="text" name="add[text4]" placeholder="" required value="<?php echo $form_data[0]->text4; ?>">
							</div>
							<div class="form-group">
								<label>Text 5</label>
								<input class="form-control" type="text" name="add[text5]" placeholder="" required value="<?php echo $form_data[0]->text5; ?>">
							</div>
							<div class="form-group">
								<label>Text 6</label>
								<input class="form-control" type="text" name="add[text6]" placeholder="" required value="<?php echo $form_data[0]->text6; ?>">
							</div>
							<div class="form-group">
								<label>Text 7</label>
								<input class="form-control" type="text" name="add[text7]" placeholder="" required value="<?php echo $form_data[0]->text7; ?>">
							</div>
							<div class="form-group">
								<label>Image Overactive Bladder</label>
								<input type="file" name="pic1">
								<a href="#" data-toggle="modal"  data-target="#lightbox" data-userid="<?php echo $form_data[0]->id; ?>" data-userimg="<?php echo $form_data[0]->img; ?>">
									<img class="none" src="<?php echo base_url("uploads");?>/<?php echo $form_data[0]->img; ?>">
									<button type="button" class="btn btn-primary right">Check Image</button></a>
								</div>
								<!-- <div class="form-group">
								<label>Video</label>
									<input class="form-control" name="add[video]" placeholder="" required value="<?php echo $form_data[0]->video; ?>">
								</div>

								<div class="form-group">
								<label>Video Preview</label>
								</div>
								<iframe width="560" height="407" src="<?php echo $form_data[0]->video; ?>" frameborder="0" allowfullscreen></iframe> -->
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
