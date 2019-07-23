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
					<form role="form" name="my_form"
					<?php if (isset($update)) { ?>action="<?php echo base_url("");?>index.php/admin/tip/update/<?php echo $form_data[0]->id; ?>"
					<?php }else{ ?> action="<?php echo base_url("");?>index.php/admin/tip/add" <?php } ?> method="POST" enctype="multipart/form-data">
					<div class="panel-body">
						<a href="<?php echo base_url("");?>index.php/admin/tip">
							<button type="button" class="btn btn-lg btn-default btn-block mb2"><i class="fa fa-step-backward"> Kembali</i></button>
						</a>
						<div class="form-group">
							<label>Pilih Kategori</label>
							<select class="form-control" name="add[type]">
								<option disabled selected>-- Pilih Kategori --</option>
								<option  <?php if (isset($update)) { if ($form_data[0]->type == 1) { echo 'selected'; } }?> value="1">Tips</option>
								<option  <?php if (isset($update)) { if ($form_data[0]->type == 2) { echo 'selected'; } }?> value="2">Berita</option>
							</select>
						</div>
						<div class="form-group">
								<label>Judul</label>
								<input class="form-control" name="add[judul]" placeholder="" required value="<?php if (isset($update)) { echo $form_data[0]->judul; } ?>">
							</div>
						<div class="form-group">
							<label>Image</label>
							<input type="file" name="pic1" value="<?php if (isset($update)) { echo $form_data[0]->img; } ?>">
							<a href="#" data-toggle="modal"  data-target="#lightbox" data-userid="<?php if (isset($update)) { echo $form_data[0]->id; } ?>" data-userimg="<?php if (isset($update)) { echo $form_data[0]->img; } ?>">
								<img class="none" src="<?php if (isset($update)) { echo base_url("uploads");?>/<?php  echo $form_data[0]->img; } ?>">
								<input type="hidden" name="oldbanner" value="<?php echo $form_data[0]->img; ?>">
								<button type="button" class="btn btn-primary right">Check Image</button></a>
							</div>
							<div class="form-group">
								<label>Deskripsi Tip</label>
								<textarea name="add[isi]" class="editor" style="" id="editor1"><?php if (isset($update)) { echo $form_data[0]->isi; } ?></textarea>
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
