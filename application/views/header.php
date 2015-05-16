<!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript">
    	$(function () {
         $('#datetimepicker8').datetimepicker({
          icons: {
            time: "fa fa-clock-o",
            date: "fa fa-calendar",
            up: "fa fa-arrow-up",
            down: "fa fa-arrow-down"
                }
            });
        });
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>KoncoBlonjo</title>
    <link href="<?php echo base_url('asset/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/css/font-awesome.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/css/prettyPhoto.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/css/price-range.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/css/animate.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('asset/css/main.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('asset/css/responsive.css');?>" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo base_url('asset/images/home/logo.jpg');?>">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url('asset/images/ico/apple-touch-icon-144-precomposed.png');?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url('asset/images/ico/apple-touch-icon-114-precomposed.png');?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url('asset/images/ico/apple-touch-icon-72-precomposed.png');?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('asset/images/ico/apple-touch-icon-57-precomposed.png');?>">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="<?php echo base_url();?>"><img src="<?php echo base_url('asset/images/home/logo.jpg');?>" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li>
									<a href="#"><i class="fa fa-user"></i>
										<?php 		
										if ($this->session->userdata('username'))
										{
											$username=$this->session->userdata('username');
										}
										else 
											$username='akun';
											echo $username; 
										?>
									</a>
								</li>
								
								<li><a href="<?php echo base_url()?>main/cart"><i class="fa fa-shopping-cart"></i>My Cart</a></li>
								<li>
									<a href="<?php echo base_url()?>main/login"><i class="fa fa-shopping-cart"></i>
										
										<?php
										if ($this->session->userdata('username'))
										{
											echo "Log Out";
										}
										else 
											echo "Log In"; 
										?>

									</a>

								</li>
								
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="<?php echo base_url()?>" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Hot Promo<i class="fa fa-angle-down"></i></a>
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Kategori<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="#">Makanan</a></li>
										<li><a href="#">Minuman</a></li>
										<li><a href="#">Perawatan Pribadi</a></li>
										<li><a href="#">Perawatan Kesehatan</a></li>
										<li><a href="#">Kebutuhan Bayi</a></li>
										<li><a href="#">Rumah & Dapur</a></li>

                                    </ul>
                                </li> 
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->