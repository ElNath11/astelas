<!DOCTYPE html>
<?php
include("indo.php");
?>
<html>
<head>

	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>beser | Kenali & atasi</title>
	<meta name="description" content="Beser Id, Astellas, Peryebab beser, Gejala Beser">
	<meta name="keywords" content="Beser Id, Astellas, Peryebab beser, Gejala Beser">
	<link rel="icon" href="<?php echo base_url("asset"); ?>/img/favicon.png" type="image/x-icon" sizes="16x16" />
	<link href="<?php echo base_url("asset"); ?>/css/basscss.min.css" rel="stylesheet">
	<link href="<?php echo base_url("asset"); ?>/css/custom.css" rel="stylesheet" type="text/css" charset="utf-8">
	<link href="<?php echo base_url("asset"); ?>/css/animate.css" rel="stylesheet" type="text/css" charset="utf-8">
	<!-- Bootstrap Core CSS -->
	<link href="<?php echo base_url("asset"); ?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url("asset"); ?>/css/bootstrap-lightbox.min.css" rel="stylesheet">
	<link href="<?php echo base_url("asset"); ?>/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">

	<!-- Menu Responsive -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("asset"); ?>/css/component.css" />

</head>


<body onLoad="scrlsts()">
	<!-- Return to Top -->
	<a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>

	<!-- Start -->
	<div class="col col-12">

		<div class="col col-12 bg-pink py2 px114 s-center">
			<a href="<?php echo base_url(""); ?>"><ul class="list-reset">
				<li class="inline-block mr2 align-middle"><img src="<?php echo base_url("asset/img"); ?>/besermaskot.png" alt="Logo" class="img-responsive"></li>
				<!-- <li class="inline-block sans f34 white v-title">Beser.id</li> -->
			</ul>
		</a>
	</div>
	<!-- Menu -->
	<div class="col col-12 bg-yellow px114 mpx1">
		<ul class="list-reset f12 menu mb0 h-mobile">
			<li class="inline-block mr1 px2 py2 <?php if ($menu=='home') {echo 'menu-active';}?>"><a href="<?php echo base_url(""); ?>" class="ls1 caps sans white text-decoration-none ">beranda</a></li>
			<li class="inline-block mr1 px2 py2 <?php if ($menu=='proses') {echo 'menu-active';}?>"><a href="<?php echo base_url(); ?>index.php/proses" class="ls1 caps sans white text-decoration-none">proses berkemih</a></li>
			<li class="inline-block mr1 px2 py2 <?php if ($menu=='penyebab') {echo 'menu-active';}?>"><a href="<?php echo base_url(); ?>index.php/penyebab" class="ls1 caps sans white text-decoration-none">penyebab beser</a></li>
			<li class="inline-block mr1 px2 py2 <?php if ($menu=='kenali') {echo 'menu-active';}?>"><a href="<?php echo base_url(); ?>index.php/kenali" class="ls1 caps sans white text-decoration-none">kenali gejala beser</a></li>
			<li class="inline-block mr1 px2 py2 <?php if ($menu=='dampak') {echo 'menu-active';}?>"><a href="<?php echo base_url(); ?>index.php/dampak" class="ls1 caps sans white text-decoration-none">dampak beser</a></li>
			<li class="inline-block mr1 px2 py2 <?php if ($menu=='penanganan') {echo 'menu-active';}?>"><a href="<?php echo base_url(); ?>index.php/penanganan" class="ls1 caps sans white text-decoration-none">penanganan beser</a></li>
			<li class="inline-block mr1 px2 py2 <?php if ($menu=='berita') {echo 'menu-active';}?>"><a href="<?php echo base_url(); ?>index.php/berita" class="ls1 caps sans white text-decoration-none">tips & berita</a></li>
			<li class="inline-block mr1 px2 py2 <?php if ($menu=='galeri') {echo 'menu-active';}?>"><a href="<?php echo base_url(); ?>index.php/galeri" class="ls1 caps sans white text-decoration-none">galeri</a></li>
			<li class="inline-block mr1 px2 py2 <?php if ($menu=='kontak') {echo 'menu-active';}?>"><a href="<?php echo base_url(); ?>index.php/kontak" class="ls1 caps sans white text-decoration-none">kontak</a></li>
		</ul>

	</div>

	<!-- button -->
	<div class="col col-12 bg-yellow px114 mpx1 s-mobile">
		<button onclick="myFunction()" class="navbar-toggle menu-btn s-mobile poin" type="button">
			<span class="icon-bar bg-black"></span>
			<span class="icon-bar bg-black"></span>
			<span class="icon-bar bg-black"></span>
		</button>
	</div>
	<!-- button -->
	<!-- Menu -->
	<!-- Menu Mobile -->
	<div id="menu-mobile" class="col col-12 bg-pink py2" style="display:none;">
		<ul class="list-reset f12 menu mb0">
			<li class="block px2 py2"><a href="<?php echo base_url(""); ?>" class="ls1 caps sans white text-decoration-none ">beranda</a></li>
			<li class="block px2 py2"><a href="<?php echo base_url(); ?>index.php/proses" class="ls1 caps sans white text-decoration-none">proses berkemih</a></li>
			<li class="block px2 py2"><a href="<?php echo base_url(); ?>index.php/penyebab" class="ls1 caps sans white text-decoration-none">penyebab beser</a></li>
			<li class="block px2 py2"><a href="<?php echo base_url(); ?>index.php/kenali" class="ls1 caps sans white text-decoration-none">kenali gejala beser</a></li>
			<li class="block px2 py2"><a href="<?php echo base_url(); ?>index.php/dampak" class="ls1 caps sans white text-decoration-none">dampak beser</a></li>
			<li class="block px2 py2"><a href="<?php echo base_url(); ?>index.php/penanganan" class="ls1 caps sans white text-decoration-none">penanganan beser</a></li>
			<li class="block px2 py2"><a href="<?php echo base_url(); ?>index.php/berita" class="ls1 caps sans white text-decoration-none">tips & berita</a></li>
			<li class="block px2 py2"><a href="<?php echo base_url(); ?>index.php/galeri" class="ls1 caps sans white text-decoration-none">galeri</a></li>
			<li class="block px2 py2"><a href="<?php echo base_url(); ?>index.php/kontak" class="ls1 caps sans white text-decoration-none">kontak</a></li>
			<li class="block px2 py2"><a href="#" data-toggle="modal" data-target="#lightbox2" class="ls1 caps sans white text-decoration-none">disclaimer</a></li>
		</ul>
	</div>
	<!-- Menu Mobile -->
