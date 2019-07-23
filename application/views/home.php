

<div class="col col-12 bg-f4">
	<div class="col col-12 bg-banner ">

		<div class="col col-12  mt4 px65 mpx1">
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
        	background: url('<?php echo base_url("asset"); ?>/img/b06.png') no-repeat;
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


    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; right: 0px; max-width: 100%; height: 500px !important; overflow: hidden; visibility: hidden;">
    	<!-- Loading Screen -->
    	<div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; right: 0px; max-width: 100%; height: 500px; overflow: hidden;">

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

<!-- konten -->
<div class="col col-12 px65 mpx1">
    <div class="col col-12 bg-white my3 center px4 mpx1 py3">
        <?php echo $form_data[0]->text_teaser; ?>
    </div>
    <div class="col col-12 bg-white mb3 py2 px4 mpx1">
        <h2 class="sans-bold black3 f28 center"><?php echo $form_data[0]->text_head; ?></h2>
        <div class="col col-12 my2 relative">
            <div class="col col-12 h-mobile relative layer9999">
                <div class="col col-12 lg-col-2"><img src="<?php echo base_url("asset/img"); ?>/circle.png" class="img-responsive img-center circle-yellow" alt="banner"/></div>
                <div class="col col-12 lg-col-2"><img src="<?php echo base_url("asset/img"); ?>/circle.png" class="img-responsive img-center circle-yellow" alt="banner"/></div>
                <div class="col col-12 lg-col-2"><img src="<?php echo base_url("asset/img"); ?>/circle.png" class="img-responsive img-center circle-yellow" alt="banner"/></div>
                <div class="col col-12 lg-col-2"><img src="<?php echo base_url("asset/img"); ?>/circle.png" class="img-responsive img-center circle-yellow" alt="banner"/></div>
                <div class="col col-12 lg-col-2"><img src="<?php echo base_url("asset/img"); ?>/circle.png" class="img-responsive img-center circle-yellow" alt="banner"/></div>
                <div class="col col-12 lg-col-2"><img src="<?php echo base_url("asset/img"); ?>/circle.png" class="img-responsive img-center circle-yellow" alt="banner"/></div>
            </div>
            <div class="col col-12 absolute"><img src="<?php echo base_url("asset/img"); ?>/garis.png" class="img-responsive img-center full line-edit" alt="banner"/></div>
        </div>

        <div class="col col-12 bg-f9 border-da py2 sans black6 f14 mb3">
            <div class="col col-12 lg-col-2 px2 center mpy1"><?php echo $form_data[0]->text1; ?></div>
            <div class="col col-12 lg-col-2 px2 center mpy1"><?php echo $form_data[0]->text2; ?></div>
            <div class="col col-12 lg-col-2 px2 center mpy1"><?php echo $form_data[0]->text3; ?></div>
            <div class="col col-12 lg-col-2 px2 center mpy1"><?php echo $form_data[0]->text4; ?></div>
            <div class="col col-12 lg-col-2 px2 center mpy1"><?php echo $form_data[0]->text5; ?></div>
            <div class="col col-12 lg-col-2 px2 center mpy1"><?php echo $form_data[0]->text6; ?></div>
        </div>
        <div class="col col-12 border-eb sans f14 pink py4 center px4 mpx1 mb2">
            <p class="px4 mpx1"><?php echo $form_data[0]->text7; ?></p>
        </div>
    </div>
</div>


<div class="col col-12 bg-e9 py4 px65 mpx1">
    <div class="col col-12 bg-white py3">
        <div class="col col-12 lg-col-6 px3">
            <video width="100%" height="407" controls>
                <source src="<?php echo base_url('asset'); ?>/img/OAB Indo.mp4" type="video/mp4">
                </video>
                <!-- <iframe width="560" height="407" src="<?php echo base_url('asset'); ?>/img/OAB Indo.mp4" autostart="1" frameborder="0" preload="none" allowfullscreen></iframe> -->
            </div>
            <div class="col col-12 lg-col-6 px3">
                <img data-u="image" src="<?php echo base_url(); ?>/uploads/<?php echo $form_data[0]->img; ?>" class="img-responsive img-center" alt="banner"/>
                <!-- <a href="<?php echo base_url(); ?>index.php/proses" class="sans f12 white text-decoration-none"> -->
                <!-- <button class="f12"> -->
                <div class="col col-12 carrot-flat-button px2">
                <a href="<?php echo base_url(); ?>index.php/kenali" class="sans f12 white text-decoration-none p3 mf10">
                KLIK DISINI UNTUK MENGETAHUI LEBIH LANJUT GEJALA OAB
                </a>
                </div>
                <!-- </button> -->
                <!-- </a> -->
            </div>
        </div>


        <!-- konten -->
        <!-- </div>
    </div>
</div> -->
