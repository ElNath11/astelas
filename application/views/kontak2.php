<div class="col col-12">

	<div class="col col-12 bg-pink">
		<ul class="list-reset my0 py2 px65">
			<li class="inline-block align-middle mr2"><img src="<?php echo base_url("asset/img"); ?>/circle.png" class="img-responsive img-center" /></li>
			<li class="inline-block sans f18 white align-middle">KONTAK</li>
		</ul>
	</div>
	<div class="col col-12"><img src="<?php echo base_url("asset/img"); ?>/banner-kontak.jpg" class="img-responsive img-center relative z-in1" /></div>

	<div class="col col-12 bg-f4 px65 mpx1">
		<div class="col col-12 bg-white mt-60 mb3 mt0">
			<!-- Isi -->
			<div class="col col-12 lg-col-4 bg-f4 pt4">
				<div class="col col-12 px4 mpx1">
					<h1 class="sans-bold f18 black6">PT. Astellas Pharma Indonesia</h1>
					<p class="sans f14 black6">Plaza Oleos 5th Floor, Jalan Tahi Bonar Simatupang No. 53A, RT.2/RW.1, Kebagusan, Jakarta Selatan, Kota Jakarta Selatan, DKI Jakarta 12520</p>
					<table class="mt2 mb4">
						<tr>
							<td>Telephon</td>
							<td>:</td>
							<td>+621-227-80171</td>
						</tr>
						<tr>
							<td>Fax</td>
							<td>:</td>
							<td>+621-227-80180</td>
						</tr>
						<tr>
							<td>Email</td>
							<td>:</td>
							<td>info@tanyaprostat.com</td>
						</tr>
					</table>
				</div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15862.95211752704!2d106.8298303!3d-6.2981153!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd0bb3190bda2bdff!2sPT.+Astellas+Pharma+Indonesia!5e0!3m2!1sid!2sid!4v1493352866087" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="col col-12 lg-col-8 px4 mpx1 py3">
				<h1 class="sans bold black3 f28">Kontak Kami</h1>

				<h1 class="sans f20 black3 mt3">Kirim Pesan</h1>
				<form action="<?php echo base_url(); ?>index.php/php_mailer/test_mail" method="POST" id="captcha-form">
					<ul class="list-reset">
						<li><input type="text" placeholder="Name" class="input-form block mb1" name="txtName" required></li>
						<li><input type="email" placeholder="Email address" class="input-form block mb1" name="txtEmail" required></li>
						<li><input type="text" placeholder="Subject" class="input-form block mb1" name="txtSubject" required></li>
						<li><textarea name="txtMsg" class="input-form2" placeholder="Message" id="" cols="30" rows="4" required></textarea></li>
						<div class="col col-12 mt2">
							<div class="col col-12 lg-col-3">
								<ul class="list-reset">
									<li>
										<img src="<?php echo base_url(); ?>index.php/kontak/captca" id="captcha" class="cap inline-block h-captcha" name="cap"></li>
									</ul>
								</div>
								<div class="col col-12 lg-col-4 pl3">
									<input type="text" class="lbl-capcha inline-block s-cap input-form" name="tcode" id="tcode" required>
								</div>
								<div class="col col-12 lg-col-5 pl3">
									<ul class="list-reset">
										<li class="f12 white"><a href="javascript:;" onclick="click_refresh()" class="yellow" id="change-image status">refresh image</a></li>
										<li class="">Type the characters you can see in the image above</li>
									</ul>
								</div>

							</div>
							<div class="col col-12 lg-col-6 mt2 mmb2">
								<button type="submit" class="sans bnone round bg-yellow white py2 poin px4 caps ls1 s-center oval">Kirim Pesan</button>
							</div>
						</ul>
					</form>
				</div>
				<!-- Isi -->
			</div>
		</div>


	</div>
