<!-- Start -->
<div class="col col-12">
	<!-- Head Page -->
	<div class="col col-12 bordery-df">
		<div class="col col-11 py2">
			<ul class="list-reset pr1 right-align right my1">
				<li class="inline-block roboto-light black6 f24 caps ls1 right-align lh20">services</li>
				<li class="block roboto-bold black6 f24 caps ls1 right-align">SALES CONTACT</li>
			</ul>
		</div>
		<div class="col col-1 pt1-8">
			&nbsp;<img src="<?php echo base_url("asset"); ?>/img/circle.png" alt="img" class="align-middle pb1">
		</div>
	</div>
	<!-- Head Page -->
	<!-- Content -->
	<div class="col col-12 bg-f2 px10 py4 mp1">

		<div class="col col-12 bg-white">
			<div class="col col-12 lg-col-3 pt11"><img src="<?php echo base_url("asset"); ?>/img/sales1.png" alt="Logo" class="img-responsive ml-2 s-center mp1"></div>
			<div class="col col-12 lg-col-9 py4">
				<!-- line -->
				<?php
				if($contact) {
					foreach ($contact as $key => $value) {
						?>
						<div class="col col-12 md-col-6 lg-col-4 px4 py3 s-center">
							<ul class="list-reset raleway-medium">
								<li class="bold black3"><?php echo $value->contact_city; ?></li>
								<li class="black6 mb0 p-mb0"><?php echo $value->contact_address; ?></li>
								<li class="black6">T +<?php echo $value->contact_phone; ?></li>
								<li class="black6">F +<?php echo $value->contact_fax; ?></li>
								<li class="black6">E <?php echo $value->contact_email; ?></li>
							</ul>
						</div>
						<?php } } ?>
					</div>
				</div>

				<!-- Second -->
				<div class="col col-12 my2">
					<div class="col col-12 py2 borderb-f2 bg-f9">
						<ul class="list-reset right-align px4">
							<li class="block roboto-light f20 black3">CONTACT OUR SALES TEAM <span class="bold">+<?php echo $company[0]->company_sales_phone; ?></span></li>
							<li class="block roboto-bold f20 black3"><?php echo $company[0]->company_sales_email; ?></li>
						</ul>
					</div>
					<div class="col col-12 bg-white px4 py2">
						<h4 class="raleway-medium black6 f18 ls1 mb0">Or send message here :</h4>
						<form action="<?php echo base_url(); ?>index.php/send_email" method="POST">
							<div class="col col-6 ">
								<div class="col col-12 pr1">
									<ul class="list-reset mb0">
										<li class="block mt1 f14 black6 raleway-medium">Name</li>
										<li class="block f14 black6 raleway-medium"><input type="text" class="input-form" name="txtName" required></li>
										<li class="block mt1 f14 black6 raleway-medium">Email</li>
										<li class="block f14 black6 raleway-medium"><input type="email" class="input-form" name="txtEmail" required></li>
										<li class="block mt1 f14 black6 raleway-medium">Phone</li>
										<li class="block f14 black6 raleway-medium"><input type="number" class="input-form" name="txtPhone" required></li>
									</ul></div>
								</div>

								<div class="col col-6">
									<div class="col col-12 pl1">
										<ul class="list-reset mb0">
											<li class="block mt1 f14 black6 raleway-medium">Subject</li>
											<li class="block f14 black6 raleway-medium"><input type="text" class="input-form" name="txtSubject" required></li>
											<li class="block mt0 f14 black6 raleway-medium">Pesan</li>
											<li class="block f14 black6 raleway-medium"><textarea name="txtMsg" id="" cols="32" rows="10" class="input-form2" required></textarea></li>
										</ul></div>
									</div>
									<button class="poin caps ls1 f14 raleway-bold bg-red bnone white py3 rounded px4 mb2 mt2 btn-send" type="submit">Kirim Pesan</button>
								</form>
							</div>
						</div>
						<!-- Second -->
					</div>
					<!-- Content -->
				</div>
				<!-- Start -->
