<?php
if (! $this->session->userdata('is_logged_in')){
    header('location:'.base_url("index.php/admin/dashboard/login"));
}
?>

<!DOCTYPE html>
<html xmlns:fb="https://www.facebook.com/2008/fbml">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kemangga CMS - Astellas</title>
    <link rel="icon" href="<?php echo base_url("asset"); ?>/img/favicon.png" type="image/x-icon" sizes="16x16" />

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url("asset");?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url("asset");?>/css/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="<?php echo base_url("asset");?>/css/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url("asset");?>/css/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url("asset");?>/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url("asset");?>/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url("asset"); ?>/css/bootstrap-lightbox.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Kemangga CMS</a>
                </div>
                <!-- /.navbar-header -->

                <ul class="nav navbar-top-links navbar-right">
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="<?php echo base_url(); ?>index.php/admin/dashboard/change"><i class="fa fa-key fa-fw"></i> Change Password</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo base_url(); ?>index.php/admin/dashboard/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li>
                                <a href="<?php echo base_url(); ?>index.php/admin/dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>

                            <li>
                                <a href="#"><i class="fa fa-book fa-fw"></i> Management Page<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                   <li>
                                       <a href="<?php echo base_url(); ?>index.php/admin/page_home">Beranda</a>
                                   </li>
                                   <li>
                                    <a href="<?php echo base_url(); ?>index.php/admin/page_proses">Proses Berkemih</a>
                                </li>
                                <li>
                                   <a href="<?php echo base_url(); ?>index.php/admin/page_penyebab">Penyebab Beser</a>
                               </li>
                               <li>
                                <a href="<?php echo base_url(); ?>index.php/admin/page_kenali">Kenali Gejala Beser</a>
                            </li>
                            <li>
                            <a href="<?php echo base_url(); ?>index.php/admin/page_dampak">Dampak Beser</a>
                           </li>
                           <li>
                            <a href="<?php echo base_url(); ?>index.php/admin/page_penanganan">Penanganan Beser</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>index.php/admin/page_tip">Tips & Berita</a>
                        </li>
                        <li>
                           <a href="<?php echo base_url(); ?>index.php/admin/page_galeri">Galeri</a>
                       </li>
                       <li>
                        <a href="<?php echo base_url(); ?>index.php/admin/page_kontak">Kontak</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-image fa-fw"></i> Management Slider<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                   <li>
                       <a href="<?php echo base_url(); ?>index.php/admin/banner">Slider Beranda</a>
                   </li>
                   <li>
                    <a href="<?php echo base_url(); ?>index.php/admin/banner_penyebab">Slider Penyebab Beser</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="<?php echo base_url(); ?>index.php/admin/tip"><i class="fa fa-info fa-fw"></i> Tips dan Berita</a>
        </li>
        <li>
            <a href="<?php echo base_url(); ?>index.php/admin/galeri"><i class="fa fa-camera-retro fa-fw"></i> Galeri</a>
        </li>
        <!-- /.nav-second-level -->
    </li>


</ul>
<!-- /.nav-second-level -->
</li>
</ul>
</div>
<!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
</nav>
