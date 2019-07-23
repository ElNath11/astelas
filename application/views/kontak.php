<div class="col col-12">

	<div class="col col-12 bg-pink">
		<ul class="list-reset my0 py2 px65 mpx1">
			<li class="inline-block align-middle mr2"><img src="<?php echo base_url("asset/img"); ?>/circle.png" class="img-responsive img-center" /></li>
			<li class="inline-block sans f18 white align-middle">KONTAK</li>
		</ul>
	</div>
	<div class="col col-12"><img src="<?php echo base_url(); ?>/uploads/<?php echo $form_data[0]->banner; ?>" class="img-responsive img-center" /></div>

	<div class="col col-12 bg-f4 px65 mpx1">

		<div class="col col-12 bg-white py4 my3 center">
			<div class="col col-12 black6">
				<?php echo $form_data[0]->alamat; ?>
			</div>
			<!-- <h1 class="sans-bold f18 black6">PT. Astellas Pharma Indonesia</h1>
			<p class="sans f14 black6 mb0 mpx1">Plaza Oleos 5th Floor, Jalan Tahi Bonar Simatupang No. 53A, RT.2/RW.1, Kebagusan, Jakarta Selatan, Kota Jakarta Selatan, DKI Jakarta 12520</p> -->
			<table class="mt2 mb4 center img-center mb2">
				<!-- <tr>
					<td>Telephon</td>
					<td>:</td>
					<td><?php echo $form_data[0]->telp; ?></td>
				</tr>
				<tr>
					<td>Fax</td>
					<td>:</td>
					<td><?php echo $form_data[0]->fax; ?></td>
				</tr> -->
				<tr>
					<td>Email</td>
					<td>:</td>
					<td><a href="mailto:<?php echo $form_data[0]->email; ?>"><?php echo $form_data[0]->email; ?></a></td>
				</tr>
			</table>

		</div>

	</div>

</div>
