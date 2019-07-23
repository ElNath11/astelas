<div class="col col-12">

	<div class="col col-12 bg-pink">
		<ul class="list-reset my0 py2 px65 mpx1">
			<li class="inline-block align-middle mr2"><img src="<?php echo base_url("asset/img"); ?>/circle.png" class="img-responsive img-center" /></li>
			<li class="inline-block sans f18 white align-middle">GALERI</li>
		</ul>
	</div>
	<div class="col col-12"><img src="<?php echo base_url(); ?>/uploads/<?php echo $form_data[0]->banner; ?>" class="img-responsive img-center" /></div>


	<div class="col col-12 bg-f4 px65 mpx1">
		<div class="col col-12 bg-white py4 mt-60 px4 mpx1">
			<!-- Isi -->
			<div class="col col-12 py2 px2 mpx0">
				<!-- Konten -->
				<div class="col col-12 py3 px3 mpx0">
					<?php
					if (!$results) { ?>
					<div class="col col-12 bg-white img-container">
						<div class="centerer"></div>
						<p class="f18 mont-regular black3">Gambar Tidak tersedia</p>
					</div>
					<?php }else{
						foreach($results as $key => $value){ ?>
						<div class="col col-12 md-col-6 lg-col-4 px2 my1">
							<a href="#" data-toggle="modal"  data-target="#lightbox" data-userid="<?php echo $value->id; ?>" data-userimg="<?php echo $value->img; ?>" data-desc="<?php echo $value->text; ?>"><div><img src="<?php echo base_url(); ?>/uploads/<?php echo $value->img; ?>" class="img-responsive img-center full img-berita" /></div>


								<h1 class="sans f18 black3 to-pink poin p-desc"><?php echo $value->text; ?></h1>
								<img class="none" hidden src="<?php echo base_url("uploads");?>/<?php echo $value->img; ?>">
							</div></a>
							<?php } }?>



							<!-- Pagination -->
							<div class="col col-12 center bold">
								<?php echo $pagination; ?>
							</div>
							<!-- Pagination -->
						</div>
						<!-- Konten -->
					</div>
					<!-- Isi -->
				</div>
			</div>

		</div>


		<!-- Modal -->
		<div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">X</button>
				<div class="modal-content">
					<div class="modal-body">
						<input name="inputID" type="hidden" value="">
						<div class="col col-12">
							<div class="col col-12">
								<center><img src="" alt="" class="img-responsive"></center>
							</div>
							<div class="col col-12 pt1 px3">
								<div class="text-left">
									<strong class="sans f24 black3 ls1 caps"></strong>
									<p id="text-desc" class="sans f18 black3 to-pink poin"></p>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Modal -->
