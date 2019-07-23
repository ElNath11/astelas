<div class="col col-12 bg-pink">
	<ul class="list-reset my0 py2 px65 mpx1">
		<li class="inline-block align-middle mr2"><img src="<?php echo base_url("asset/img"); ?>/circle.png" class="img-responsive img-center" /></li>
		<li class="inline-block sans f18 white align-middle">DAMPAK BESER</li>
	</ul>
</div>
<div class="col col-12"><img src="<?php echo base_url(); ?>/uploads/<?php echo $form_data[0]->banner; ?>" class="img-responsive img-center" /></div>

<div class="col col-12 bg-f4 px65 mpx1">
	<div class="col col-12 bg-white py4 mt-60 px4 mpx1 mt0">
		<div class="col col-12 sans f14 black6">
			<?php echo $form_data[0]->text_head; ?>
		</div>
	</div>

	<!-- <div class="col col-12 bg-yellow py3 px4 mpx1 mb3">
		<p class="sans-semi white f24">
			<?php echo $form_data[0]->text_info; ?>
		</p>
	</div> -->
	<!-- yellow -->
		<div class="col col-12 bg-yellow py3 px4 mb3 mpx1">
			<div class="col col-12 lg-col-1 mpy1">
				<img src="<?php echo base_url("asset/img"); ?>/tips.png" class="img-responsive img-center" />
			</div>
			<div class="col col-12 lg-col-11 pl2 li-custputih">
				<h2 class="sans-bold f24 white my0"><?php echo $form_data[0]->judul_info; ?></h2>
				<div class="col col-12 white my1 ul0">
					<?php echo $form_data[0]->text_info; ?>
				</div>
			</div>
		</div>
		<!-- yellow -->

</div>


<div class="col col-12 bg-f4 px65 mpx1 block">
	<div class="col col-12 bg-white mb3">
		<h1 class="sans bold f28 pink center">Pengaruh Yang Lebih Besar Pada Penderita Beser</h1>
		<!-- konten -->
		<div class="col col-12 px185 mpx1">
			<div class="col col-12 lg-col-6 li-cust px1">
				<div class="col col-12 sans f14 black6">
					<?php echo $form_data[0]->text1; ?>
				</div>
			</div>
			<div class="col col-12 lg-col-6 li-cust px1">
				<div class="col col-12 sans f14 black6">
					<?php echo $form_data[0]->text2; ?>
				</div>
			</div>
		</div>
		<!-- konten -->
	</div>
</div>

<div class="col col-12 mb3 bg-dampak-down py3 mb3">
	<img src="<?php echo base_url(); ?>/uploads/<?php echo $form_data[0]->img1; ?>" class="img-responsive img-center" />
</div>
