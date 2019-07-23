<div class="col col-12">

	<div class="col col-12 bg-pink">
		<ul class="list-reset my0 py2 px65 mpx1">
			<li class="inline-block align-middle mr2"><img src="<?php echo base_url("asset/img"); ?>/circle.png" class="img-responsive img-center" alt="gambar"/></li>
			<li class="inline-block sans f18 white align-middle">TIPS & BERITA</li>
		</ul>
	</div>
	<div class="col col-12"><img src="<?php echo base_url(); ?>/uploads/<?php echo $form_data[0]->banner; ?>" class="img-responsive img-center" /></div>

	<div class="col col-12 bg-f4 px65 mpx1">
		<div class="col col-12 bg-white py4 mt-60 px4 mpx1 mt0 mb3">
			<!-- Isi -->

			<div class="col col-12 border-eb">
				<a href="<?php echo base_url(); ?>index.php/berita/tip" class="text-decoration-none sans-bold f14 caps ls1 <?php if (isset($tab)) { if ($tab=='tip_filter') {echo 'pink';}else{ echo 'black6'; } }?> <?php if (!isset($tab)) { echo "black6"; } ?>"><div class="col col-6 center to-grey py2 poin <?php if (isset($tab)) { if ($tab=='tip_filter') {echo 'as_grey';} }?>">
					tips
				</div></a>
				<a href="<?php echo base_url(); ?>index.php/berita/berita_filter" class="text-decoration-none sans-bold f14 caps ls1 <?php if (isset($tab)) { if ($tab=='berita_filter') {echo 'pink';}else{ echo 'black6'; } }?> <?php if (!isset($tab)) { echo "black6"; } ?>"><div class="col col-6 center to-grey py2 poin <?php if (isset($tab)) { if ($tab=='berita_filter') {echo 'as_grey';} }?>">
					berita
				</div></a>
			</div>
			<div class="col col-12 bg-f4 py2 px2 mpx0">
				<!-- Konten -->
				<div class="col col-12 py3 px3 mpx1">


					<?php
					if (!$results) { ?>
					<div class="col col-12 bg-white img-container">
						<div class="centerer"></div>
						<p class="f18 mont-regular black3">Gambar Tidak tersedia</p>
					</div>
					<?php }else{
						foreach($results as $key => $value){ ?>
						<div class="col col-12 md-col-6 lg-col-4 px2 my1">
							<div><img src="<?php echo base_url(); ?>/uploads/<?php echo $value->img; ?>" class="img-responsive img-center full img-berita" /></div>
							<a href="<?php echo base_url("");?>index.php/berita/detail_berita/<?php echo $value->id; ?>">
							<div class="h60">
									<h1 class="sans semi f20 black3 to-pink poin"><?php echo substr($value->judul, 0,60); ?></h1>
								</div></a>
								<p class="sans f14 black6">By <?php echo $value->by; ?> | <?php echo TanggalIndo($value->tgl); ?></p>
								<div class="col col-12 sans f14 black6 h80 ">
									<?php $text_top = strip_tags(trim(html_entity_decode($value->isi, ENT_QUOTES, 'UTF-8'), "\xc2\xa0")); ?>
									<!-- <?php echo substr($text_top, 0,100); ?> -->
								<!-- <br>
								<a href="<?php echo base_url("");?>index.php/berita/detail_berita/<?php echo $value->id; ?>">Selengkapnya</a> -->
								<?php if (strlen($text_top) > 100) {
									$stringCut = substr($text_top, 0, 100);
									$text_top = substr($stringCut, 0, strrpos($stringCut, ' ')).'... ';
								}
								echo $text_top;
								?>
							</div>
							<div class="col col-12 pb2">
								<a href="<?php echo base_url("");?>index.php/berita/detail_berita/<?php echo $value->id; ?>">Selengkapnya</a>
							</div>
						</div>
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
