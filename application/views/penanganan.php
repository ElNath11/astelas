<div id="notprint" class="col col-12">

	<div class="col col-12 bg-pink">
		<ul class="list-reset my0 py2 px65 mpx1">
			<li class="inline-block align-middle mr2"><img src="<?php echo base_url("asset/img"); ?>/circle.png" class="img-responsive img-center" /></li>
			<li class="inline-block sans f18 white align-middle">PENANGANAN BESER</li>
		</ul>
	</div>
	<div class="col col-12"><img src="<?php echo base_url(); ?>/uploads/<?php echo $form_data[0]->banner; ?>" class="img-responsive img-center" /></div>

	<!-- px65 -->
	<div class="col col-12 bg-f4 px65 mpx2">

		<div class="col col-12 bg-white py4 mt-60 px4 mpx1 mt0">
			<div class="col col-12 lg-col-6 pr1 s-center mpx0 h348">
				<div class="col col-12 li-bunder">
					<ul class="list-reset border-eb px3 py2 mb0">
						<li class="block li-bunder1 border-eb-b col-12">
							<div class="sans f14 black6 my0 align-top">
								<?php echo $form_data[0]->text1; ?>
							</div>
						</li>
					</ul>
				</div>
				<div class="col col-12 li-bunder">
					<ul class="list-reset border-eb px3 py2 mb0">
						<li class="block li-bunder2 border-eb-b col-12">
							<div class="sans f14 black6 my0 align-top">
								<?php echo $form_data[0]->text2; ?>
							</div>
						</li>
					</ul>
				</div>
				<div class="col col-12 li-bunder">
					<ul class="list-reset border-eb px3 py2 mb0">
						<li class="block li-bunder3">
							<div class="sans f14 black6 my0 align-top">
								<?php echo $form_data[0]->text3; ?>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="col col-12 lg-col-6 pr1 s-center mpx0 h348">

				<div class="col col-12 li-bunder">
					<ul class="list-reset border-eb px3 py2 mb0">
						<li class="block li-bunder4 border-eb-b col-12">
							<div class="sans f14 black6 my0 align-top">
								<?php echo $form_data[0]->text4; ?>
							</div>
						</li>
					</ul>
				</div>
				<div class="col col-12 li-bunder">
					<ul class="list-reset border-eb px3 py2 mb0 h96">
						<li class="block li-bunder5 border-eb-b col-12">
							<div class="sans f14 black6 my0 align-top">
								<?php echo $form_data[0]->text5; ?>
							</div>
						</li>
					</ul>
				</div>
				<div class="col col-12 li-bunder">
					<ul class="list-reset border-eb px3 py2 mb0">
						<li class="block li-bunder6">
							<div class="sans f14 black6 my0 align-top">
								<?php echo $form_data[0]->text6; ?>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<!-- yellow -->
		<div class="col col-12 bg-yellow py3 px4 mb3 mpx1">
			<div class="col col-12 lg-col-1 mpy1">
				<img src="<?php echo base_url("asset/img"); ?>/tips.png" class="img-responsive img-center" />
			</div>
			<div class="col col-12 lg-col-11 pl2 li-custputih">
				<h1 class="sans-bold f24 white my0"><?php echo $form_data[0]->judul_info; ?></h1>
				<div class="col col-12 white my1 ul0">
					<?php echo $form_data[0]->tips; ?>
				</div>
			</div>
		</div>
		<!-- yellow -->

		<div class="col col-12 center"><a href="<?php echo base_url(); ?>index.php/berita"><button class="f12 sans white bnone bg-pink px8 mb3 py2 poin">LIHAT SEMUA TIPS</button></a></div>
	</div>
	<!-- px65 -->

	<div class="col col-12 bg-atasi px8 py4 mpy1 mpx1">
		<div class=" col-12 lg-col-5 right s-center">
			<div class="col col-12 bg-pink py2 px6 mpx1">
				<h1 class="sans-bold f24 white my0">Konsultasikan Ke Dokter</h1>
			</div>
			<div class="col col-12 bg-white py4 px6 mpx1">
				<p class="f14 black6 sans">Ceritakanlah pada Dokter anda mengenai obat-obatan yang sedang Anda konsumsi, termasuk yang diberikan oleh Dokter anda yang lainnya dan obat-obatan bebas/obat warung (contohnya, obat pilek), suplemen, vitamin, dan jamu-jamuan. Beberapa obat, termasuk diuretika, obat penurun tekanan darah dapat memperberat gejala OAB dan 'mengompol'.</p>
				<p class="f14 black6 sans">Dokter anda mungkin akan meminta anda untuk mengisi catatan harian berkemih seperti ini.</p>
				<a href="" class="sans f14 white text-decoration-none" data-toggle="modal" data-target="#lightbox"><button class="carrot-flat-button sans f14 white text-decoration-none oval">LIHAT CATATAN  HARIAN BERKEMIH</button></a>
			</div>
		</div>

	</div>
</div>

</div>



<!-- Modal -->
<div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<!-- cONTENT -->
			<div class="col col-12 modal-body px3">
				<!-- Tabel -->
				<div id="divToPrint" class="x-auto">
					<h1 class="f24 black3 sans center">CATATAN HARIAN BERKEMIH</h1>
					<table style="width:100%; border-collapse: collapse; border-spacing: 0;">
						<thead style="background-color: #cb3398; color:#ffffff; text-align: center;">
							<tr style="border: 1px solid #000;">
								<td width="45px;" rowspan="2" style="border: 1px solid #000; padding: 2rem 0;">Jam</td>
								<td colspan="2" style="border: 1px solid #000;">Minum</td>
								<td width="15px;" colspan="2" style="border: 1px solid #000;">Buang Air Kecil</td>
								<td style="border: 1px solid #000;">Mengompol</td>
								<td width="50px;" style="border: 1px solid #000;">Apakah kebelet terasa tidak tertahankan</td>
								<td style="border: 1px solid #000;">Aktivitas yang sedang dilakukan</td>
							</tr>
							<tr style="border: 1px solid #000;">
								<td style="border: 1px solid #000;">Jenis</td>
								<td style="border: 1px solid #000;">Banyak</td>
								<td style="border: 1px solid #000;">Berapa</td>
								<td style="border: 1px solid #000;">Jumlah Urin</td>
								<td style="border: 1px solid #000;">Jumlah</td>
								<td style="border: 1px solid #000;">Ya/tidak</td>
								<td style="border: 1px solid #000;">Bersin, olahraga, dll.</td>
							</tr>
						</thead>
						<tbody>
							<tr style="padding: 2rem 0;">
								<td style="border: 1px solid #000; padding: 1rem 0;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
							</tr>
							<tr style="padding: 2rem 0;">
								<td style="border: 1px solid #000; padding: 1rem 0;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
							</tr>
							<tr style="padding: 2rem 0;">
								<td style="border: 1px solid #000; padding: 1rem 0;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
							</tr>
							<tr style="padding: 2rem 0;">
								<td style="border: 1px solid #000; padding: 1rem 0;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
							</tr>
							<tr style="padding: 2rem 0;">
								<td style="border: 1px solid #000; padding: 1rem 0;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
							</tr>
							<tr style="padding: 2rem 0;">
								<td style="border: 1px solid #000; padding: 1rem 0;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
							</tr>
							<tr style="padding: 2rem 0;">
								<td style="border: 1px solid #000; padding: 1rem 0;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
							</tr>
							<tr style="padding: 2rem 0;">
								<td style="border: 1px solid #000; padding: 1rem 0;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
							</tr>
							<tr style="padding: 2rem 0;">
								<td style="border: 1px solid #000; padding: 1rem 0;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
							</tr>
							<tr style="padding: 2rem 0;">
								<td style="border: 1px solid #000; padding: 1rem 0;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
							</tr>
							<tr style="padding: 2rem 0;">
								<td style="border: 1px solid #000; padding: 1rem 0;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
							</tr>
							<tr style="padding: 2rem 0;">
								<td style="border: 1px solid #000; padding: 1rem 0;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
								<td style="border: 1px solid #000;"></td>
							</tr>
						</tbody>
					</table>
				</div>

				<!-- Tabel -->
				<!-- <img src="<?php echo base_url("asset/img"); ?>/catatan.jpg" class="img-responsive img-center" /> -->
				<div class="col col-12">

					<div class="col col-12 lg-col-4 px1">
						<div class="col col-12 border-da round bg-f9 py2 mb3 px1 mt3 center">
							<a href="<?php echo base_url("asset/img"); ?>/catatan.jpg" download class="poin">
							<ul class="list-reset sans-bold f14 black6 my0">
								<li class="inline-block align-middle">
									<img src="<?php echo base_url("asset/img"); ?>/jpg.png" class="img-responsive img-center" />
								</li>
								<li class="inline-block">
									DOWNLOAD JPG
								</li>
							</ul></a>
						</div>
					</div>
					<div class="col col-12 lg-col-4 px1">
						<div class="col col-12 border-da round bg-f9 py2 mb3 px1 mt3 center">

							<!-- <a href="#" value="print" onclick="PrintDiv();" class="poin"> -->
							<a href="<?php echo base_url("asset/img"); ?>/catatan.pdf" download class="poin">
							<ul class="list-reset sans-bold f14 black6 my0">
								<li class="inline-block align-middle">
									<img src="<?php echo base_url("asset/img"); ?>/pdf.png" class="img-responsive img-center" />
								</li>
								<li class="inline-block">
									DOWNLOAD PDF
								</li>
							</ul></a>

						</div>
					</div>
					<div class="col col-12 lg-col-4 px1">
						<div class="col col-12 border-da round bg-f9 py2 mb3 px1 mt3 center">
							<a href="<?php echo base_url(); ?>index.php/penanganan/print_excel" class="poin"><ul class="list-reset sans-bold f14 black6 my0">
								<li class="inline-block align-middle">
									<img src="<?php echo base_url("asset/img"); ?>/xls.png" class="img-responsive img-center" />
								</li>
								<li class="inline-block">
									DOWNLOAD XLS
								</li>
							</ul></a>
						</div>
					</div>
				</div>


			</div>
			<!-- cONTENT -->
		</div>
	</div>
</div>
</div>
</div>
</div>
<!-- Modal -->
