  <div class="col col-12">

	<div class="col col-12 bg-pink">
		<ul class="list-reset my0 py2 px65 mpx1">
			<li class="inline-block align-middle mr2"><img src="<?php echo base_url("asset/img"); ?>/circle.png" class="img-responsive img-center" /></li>
			<li class="inline-block sans f18 white align-middle">KENALI GEJALA BESER</li>
		</ul>
	</div>
	<div class="col col-12">
		<div class="col col-12 absolute pt3">

			<!-- <h1 class="f24 pink sans-bold my0 center">Kuesioner OABSS</h1>
			<h1 class="f18 pink sans my0 center">(Overactive Bladder Symptom Score)</h1> -->
		</div>
		<img src="<?php echo base_url(); ?>/uploads/<?php echo $form_data[0]->banner; ?>" class="img-responsive img-center" />
	</div>


	<div class="col col-12 bg-f4 px65 mpx2">
		<div class="col col-12 bg-white py4 mt-60 px4 mpx1 mt0">
			<!-- konten -->
			<div class="col col-12 px114 mpx1">
				<div class="col col-12 lg-col-6 li-cust px2">
					<div class="col col-12">
						<?php echo $form_data[0]->text1; ?>
					</div>
				</div>
				<div class="col col-12 lg-col-6 li-cust px2">
					<div class="col col-12">
						<?php echo $form_data[0]->text2; ?>
					</div>
				</div>

				<div class="col col-12 border-da bg-f9 py2 mb3">
					<div class="sans f14 black6 py2 px3 center justify">
						<?php echo $form_data[0]->text_info; ?>
					</div>
				</div>
			</div>
			<!-- konten -->
		</div>

		<!-- <div class="col col-12 bg-yellow py3 px4 mb3">
			<div class="sans-semi white f14 px3 py2">
			<?php echo $form_data[0]->text_info2; ?>
			</div>
		</div> -->
		<!-- yellow -->
		<div class="col col-12 bg-yellow py3 px4 mb3 mpx1">
			<div class="col col-12 lg-col-1 mpy1">
				<img src="<?php echo base_url("asset/img"); ?>/tips.png" class="img-responsive img-center" />
			</div>
			<div class="col col-12 lg-col-11 pl2 li-custputih">
				<h1 class="sans-bold f24 white my0"><?php echo $form_data[0]->judul_info; ?></h1>
				<div class="col col-12 white my1 ul0">
					<?php echo $form_data[0]->text_info2; ?>
				</div>
			</div>
		</div>
		<!-- yellow -->

		<div class="col col-12 mb2">
			<div class="col col-12 lg-col-6 pr1 s-center mpx0">
				<div class="col col-12 bg-white h452">
					<img src="<?php echo base_url(); ?>/uploads/<?php echo $form_data[0]->img1; ?>" class="img-responsive img-center" />
				</div>
			</div>
			<div class="col col-12 lg-col-6 pl1 s-center mpx0">
				<div class="col col-12 bg-white h452">
					<img src="<?php echo base_url(); ?>/uploads/<?php echo $form_data[0]->img2; ?>" class="img-responsive img-center" />
				</div>
			</div>
		</div>
		<div class="col col-12 center"><a href="<?php echo base_url(); ?>index.php/dampak"><button class="f12 sans white bnone bg-pink px8 mb3 py2 poin">DAMPAK BESER</button></a></div>
	</div>
	<!-- px65 -->

	<div class="col col-12 bg-kenali px8 py8 mpy1 mpx1">
		<div class=" col-12 lg-col-4 right s-center">
			<div class="col col-12 bg-pink py2 px6 mpx1">
				<h1 class="sans-bold f24 white my0">Kuesioner OABSS</h1>
				<h1 class="sans f14 white my0">(Overactive Bladder Symptom Score)</h1>
			</div>
			<div class="col col-12 bg-white py4 px6 mpx1">
				<p class="f14 black6 sans">Untuk menilai derajat keparahan OAB yang Anda derita. Maka dokter Anda mungkin akan meminta Anda untuk mengisi kuesioner untuk memberi skor OAB dengan isi seperti ini.</p>
				<a href="" class="sans f14 white text-decoration-none" data-toggle="modal" data-target="#lightbox"><button class="carrot-flat-button sans f14 white text-decoration-none oval">SKOR OVERACTIVE BLADDER ANDA</button></a>
			</div>
		</div>

	</div>
</div>


<!-- Modal -->
<div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog">

		<div class="modal-content">

			<!-- cONTENT -->
			<div class="col col-12 modal-body">
			<a id="closelightbox1" class="close font-futura" href="">&times;</a>
				<img src="<?php echo base_url(); ?>/uploads/<?php echo $form_data[0]->img3; ?>" class="img-responsive img-center" />
				<!-- <div class="col col-12 border-da bg-f9 py2 mb3 px4 mt3">
					<p class="sans f14 black6 py2 px3 center justify">
						ANDA JUGA BISA1 MENGUNDUH KUESIONER OAB DIBAWAH INI
					</p>
					<a href="<?php echo base_url(); ?>/uploads/<?php echo $form_data[0]->img3; ?>" download class="sans f14 white text-decoration-none" ><button class="carrot-flat-button sans f14 white text-decoration-none">UNDUH KUISIONER OAB</button></a>
				</div> -->
			</div>
			<!-- cONTENT -->
		</div>
	</div>
</div>
</div>
</div>
</div>
<!-- Modal -->
