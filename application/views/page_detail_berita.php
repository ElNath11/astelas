<div class="col col-12">

	<div class="col col-12 bg-pink">
		<ul class="list-reset my0 py2 px65">
			<li class="inline-block align-middle mr2"><img src="<?php echo base_url("asset/img"); ?>/circle.png" class="img-responsive img-center" /></li>
			<li class="inline-block sans f18 white align-middle">TIPS & BERITA</li>
		</ul>
	</div>
	<div class="col col-12"><img src="<?php echo base_url(); ?>/uploads/<?php echo $form_data[0]->banner; ?>" class="img-responsive img-center" /></div>


	<div class="col col-12 bg-f4 px65 mpx1">
		<div class="col col-12 bg-white py4 mt-60 px4 mpx1 mt0 mb3">
			<!-- Isi -->
			<?php
			$linksosmed = urlencode(base_url().$link);
			$linksosmed2 = base_url().$link;
			// echo $linksosmed2;
			?>
			<div class="col col-12 px4 mpx1">
				<div class="col col-12 f12 sans black6"><a href="<?php echo base_url(); ?>" class="f12 sans black6">Home</a>  >  <a href="<?php echo base_url(); ?>index.php/berita" class="f12 sans black6">Tips & Berita</a>  >  <?php echo $detail_data[0]->judul; ?></div>
				<h1 class="sans-semi f36 black3"><?php echo $detail_data[0]->judul; ?></h1>
				<h1 class="sans f14 black3">Posted by <strong><?php echo $detail_data[0]->by; ?></strong></h1>
				<h1 class="sans f14 black3 mt0 mb1">Share This Article</h1>
				<ul class="list-reset mb3">
					<li class="inline-block v5px">
						<!-- FB -->
						<div class="fb-share-button" data-href="<?php echo $_SERVER['REQUEST_URI']; ?>" data-layout="button_count"></div>
						<script>(function(d, s, id) {
							var js, fjs = d.getElementsByTagName(s)[0];
							if (d.getElementById(id)) return;
							js = d.createElement(s); js.id = id;
							js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
							fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));</script>
						<!-- FB -->
					</li>
					<!-- Twitter -->
					<a class="twitter-share-button" href="https://twitter.com/share"><li class="inline-block mt2"><img src="<?php echo base_url("asset/img"); ?>/stw.png" class="img-responsive img-center" /></li></a>
					<script type="text/javascript">
						window.twttr=(function(d,s,id){var t,js,fjs=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return}js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);return window.twttr||(t={_e:[],ready:function(f){t._e.push(f)}})}(document,"script","twitter-wjs"));
					</script>
					<!-- Twitter -->
				</ul>
				<div class="col col-12  mb3">
					<img src="<?php echo base_url(); ?>/uploads/<?php echo $detail_data[0]->img; ?>" class="img-responsive img-center" />
				</div>
				<div class="col col-12 mb3">
					<?php echo $detail_data[0]->isi; ?>
				</div>
				<h1 class="sans f14 black3 mt0 mb1">Share This Article</h1>
				<ul class="list-reset mb3">
					<li class="inline-block v5px">
						<!-- FB -->
						<div class="fb-share-button" data-href="<?php echo $_SERVER['REQUEST_URI']; ?>" data-layout="button_count"></div>
						<script>(function(d, s, id) {
							var js, fjs = d.getElementsByTagName(s)[0];
							if (d.getElementById(id)) return;
							js = d.createElement(s); js.id = id;
							js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
							fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));</script>
						<!-- FB -->
					</li>
					<!-- Twitter -->
					<a class="twitter-share-button" href="https://twitter.com/share"><li class="inline-block mt2"><img src="<?php echo base_url("asset/img"); ?>/stw.png" class="img-responsive img-center" /></li></a>
					<script type="text/javascript">
						window.twttr=(function(d,s,id){var t,js,fjs=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return}js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);return window.twttr||(t={_e:[],ready:function(f){t._e.push(f)}})}(document,"script","twitter-wjs"));
					</script>
					<!-- Twitter -->
				</ul>
			</div>

			<!-- Isi -->
		</div>
	</div>


</div>
