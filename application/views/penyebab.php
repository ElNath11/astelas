<div class="col col-12">
	<!-- isi -->
	<div class="col col-12 bg-pink">
		<ul class="list-reset my0 py2 px65 mpx1">
			<li class="inline-block align-middle mr2"><img src="<?php echo base_url("asset/img"); ?>/circle.png" class="img-responsive img-center" /></li>
			<li class="inline-block sans f18 white align-middle">PENYEBAB BESER, MITOS & FAKTA</li>
		</ul>
	</div>
	<div class="col col-12">
		<img src="<?php echo base_url(); ?>/uploads/<?php echo $form_data[0]->banner; ?>" class="img-responsive img-center" />
	</div>

	<div class="col col-12 bg-f4 px65 mpx2">
		<div class="col col-12 bg-white py4 mt-60 px4 center mb3">
			<div class="sans f14 black6">
				<?php echo $form_data[0]->text_teaser; ?>
			</div>
		</div>

		<div class="col col-12 bg-white py2 border-eb mb3">
			<div class="col col-12 border-eb-b"><h1 class="sans-bold f24 pink center my0 py2">OAB: Apa yang Terjadi</h1></div>
			<div class="col col-12 py4 px3">
				<div class="col col-12 lg-col-5 s-center">
					<img src="<?php echo base_url(); ?>/uploads/<?php echo $form_data[0]->img; ?>" class="img-responsive img-center" />
				</div>
				<div class="col col-12 lg-col-7 border-eb py2 px4 bg-f4 li-cust2">
					<div class="sans f14 black6">
						<?php echo $form_data[0]->text1; ?>
					</div>
				</div>
			</div>
		</div>

		<div class="col col-12 mb3">
			<div class="col col-12"><h1 class="sans-bold f24 pink center my0 py2">Beberapa Faktor Penyebab Beser</h1></div>
			<div class="col col-12 border-eb">
				<div class="col col-12 lg-col-6  list-cust3 py3 px4 li-cust3 mpx1">
					<div class="col col-12 sans f14 black6">
						<?php echo $form_data[0]->text2; ?>
					</div>
				</div>

				<div class="col col-12 lg-col-6 bg-white py3 px4">
					<img src="<?php echo base_url(); ?>/uploads/<?php echo $form_data[0]->img2; ?>" class="img-responsive img-center" />
				</div>
			</div>
			<div class="col col-12 center my3">
                <a href="<?php echo base_url(); ?>index.php/kenali" class="ls1 caps sans white text-decoration-none">
                    <button class="f12 sans white bnone bg-pink px4 mb3 py2 poin">KENALI PENYEBAB BESER</button>
                </a>
            </div>
        </div>
        <!-- isi -->
    </div>

    <div class="col col-12 bg-mitos center py4">
      <img src="<?php echo base_url("asset/img"); ?>/mitos.png" class="img-responsive img-center" />
  </div>

  <div class="col col-12 px65 bg-f4 my3 mpx1">
      <div class="col col-12 bg-white py4 px3">
         <div class="col col-12 lg-col-8">
            <!-- Slider -->
            <div class="border-box col-12 mx-auto s-center block">
               <div class="col col-12">
                  <style>

                     /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
        	position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
        	position: absolute;
        	/* size of bullet elment */
        	width: 16px;
        	height: 16px;
        	background: url('<?php echo base_url("asset"); ?>/img/b07.png') no-repeat;
        	overflow: hidden;
        	cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        /* jssor slider arrow navigator skin 22 css */
        /*
        .jssora22l                  (normal)
        .jssora22r                  (normal)
        .jssora22l:hover            (normal mouseover)
        .jssora22r:hover            (normal mouseover)
        .jssora22l.jssora22ldn      (mousedown)
        .jssora22r.jssora22rdn      (mousedown)
        */
        .jssora22l, .jssora22r {
        	display: block;
        	position: absolute;
        	/* size of arrow element */
        	width: 40px;
        	height: 58px;
        	cursor: pointer;
        	background: url('<?php echo base_url("asset"); ?>/img/a22.png') center center no-repeat;
        	overflow: hidden;
        }
        .jssora22l { background-position: -10px -31px; }
        .jssora22r { background-position: -70px -31px; }
        .jssora22l:hover { background-position: -130px -31px; }
        .jssora22r:hover { background-position: -190px -31px; }
        .jssora22l.jssora22ldn { background-position: -250px -31px; }
        .jssora22r.jssora22rdn { background-position: -310px -31px; }
    </style>


    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; right: 0px; max-width: 100%; height: 473px !important; overflow: hidden; visibility: hidden;">
    	<!-- Loading Screen -->
    	<div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; right: 0px; max-width: 100%; height: 473px; overflow: hidden;">
    		<?php
            if (!$slider) { ?>
            <div class="col col-12 bg-white img-container">
                <div class="centerer"></div>
                <p class="f18 mont-regular black3">Gambar Tidak tersedia</p>
            </div>
            <?php }else{
                foreach($slider as $key => $gal){ ?>
                <div data-p="225.00" style="display: none;">
                    <img data-u="image" src="<?php echo base_url(); ?>/uploads/<?php echo $gal->banner; ?>" class="img-responsive" alt="banner"/>
                </div>
                <?php } }?>
            </div>
            <!-- Bullet Navigator -->
            <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
              <!-- bullet navigator item prototype -->
              <div data-u="prototype" style="width:16px;height:16px;"></div>
          </div>
          <!-- Arrow Navigator -->
      </div>
      <!-- #endregion Jssor Slider End -->
      <!-- slider -->
  </div>
</div>
<!-- Slider -->
</div>
<div class="col col-12 lg-col-4">
	<img src="<?php echo base_url("asset/img"); ?>/fakta.jpg" class="img-responsive img-center" alt="banner"/>
</div>
</div>
</div>

</div>
