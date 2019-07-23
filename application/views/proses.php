<div class="col col-12">
	<!-- <div class="col col-12 bg-cara"> -->

	<div class="col col-12 bg-pink">
		<ul class="list-reset my0 py2 px65 mpx1">
			<li class="inline-block align-middle mr2"><img src="<?php echo base_url("asset/img"); ?>/circle.png" class="img-responsive img-center" /></li>
			<li class="inline-block sans f18 white align-middle">PROSES BERKEMIH</li>
		</ul>
	</div>
	<img src="<?php echo base_url(); ?>/uploads/<?php echo $form_data[0]->banner; ?>" class="img-responsive img-center" />
	<!-- </div> -->
	<div class="col col-12 bg-f4 px65 mpx1">
		<div class="col col-14 bg-white mt-60 px185 mpx2 mb3 relative">
			<h1 class="sans f14 black6 center"><?php echo $form_data[0]->text_head; ?></h1>
			<img src="<?php echo base_url(); ?>/uploads/<?php echo $form_data[0]->img; ?>" class="img-responsive img-center" />
			<p class="sans f14 black6 justify">
				<?php echo $form_data[0]->text_teaser; ?>
			</p>
			<div class="col col-12 border-da bg-f9 py3 mb3 px4">
				<div class="col col-12 lg-col-1 s-center">
					<img src="<?php echo base_url("asset/img"); ?>/seru.png" class="" />
				</div>
				<div class="col col-12 lg-col-11 s-center">
					<?php echo $form_data[0]->text_info; ?>
				</div>
			</div>

			<div class="col col-12 center"><a href="<?php echo base_url(); ?>index.php/penyebab"><button class="f14 sans white bnone bg-pink px4 mb3 py2 poin">KENALI PENYEBAB BESER</button></a></div>
		</div>
		<!--Down -->
		<div class="col col-12 py3 bg-white mb3 px185 mpx2">
			<h1 class="sans-bold f24 pink">Cara Berkemih</h1>
			<p class="sans f14 black6"><?php echo $form_data[0]->text_cara; ?></p>
			<div class="col col-12 lg-col-6 p3">
				<img src="<?php echo base_url(); ?>/uploads/<?php echo $form_data[0]->img2; ?>" class="img-responsive img-center" />
			</div>
			<div class="col col-12 lg-col-6">
				<!-- Pink -->
				<div class="col col-12 bg-pink px2 h600 img-container mpx0">
					<div class="centerer"></div>
					<img src="<?php echo base_url(); ?>/uploads/<?php echo $form_data[0]->img3; ?>" class="img-responsive img-center" />
						<!-- <p class="sans f14 white lh1">
							“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”
						</p> -->
					</div>
					<!-- Pink -->
				</div>
			</div>
			<!--Down -->

		</div>
	</div>
