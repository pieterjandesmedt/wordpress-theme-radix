<?php
	global $radix;
?>
<!doctype html>
<html class="no-js" lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="<?php echo $radix['Favicon']['url']; ?>" rel="shortcut icon" type="image/x-icon">

  <!--stylesheet-->
  <?php wp_head();?>
</head>

<body>
	<!--[if lte IE 9]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<div class="main">

	<!--=======================================================================================
									Start header area
	========================================================================================-->
	<div class="header-area sticky-top">
		<div class="container">
			<div class="row">
				<div class="col-xl-4 col-lg-3">
					<div class="logo-area">
						<a href="<?php echo bloginfo('home');?>" class="main_logo"><img src="<?php echo $radix['logo']['url']; ?>" alt="logo"></a>
						<a href="<?php echo bloginfo('home');?>" class="sticky_logo"><img src="<?php echo $radix['sticky_logo']['url']?>" alt="logo"></a>
						<a href="#" class="nav-icon"><i class="fa fa-bars"></i></a>
					</div>
				</div>
				<div class="col-xl-8 col-lg-9">
					<div class="desktop-menu menubar-area">
						<div class="menubar">
							<?php
								wp_nav_menu(array(
									'theme_location'   => 'main_menu',
									'menu_class'       => '',
								));
							?>
							<!--<ul>
								<li><a href="#">why ai</a></li>
								<li><a href="#">services</a></li>
								<li><a href="#">cases</a></li>
								<li><a href="#">blog</a></li>
								<li><a href="#">join our team</a></li>
							</ul>-->
						</div>
						<div class="menu_button">
							<li><a href="<?php echo $radix['menu_button_url']?>"><?php echo $radix['menu_button']?></a></li>
						</div>
					</div>

					<div class="mobile-menu menubar-area canvas-menu">
						<a href="#" class="close_nav nav-icon"><i class="fa fa-times" aria-hidden="true"></i></a>
						<div class="menubar">
							<?php
								wp_nav_menu(array(
									'theme_location'   => 'main_menu',
									'menu_class'       => '',
								));
							?>
						</div>
						<div class="menu_button">
							<li><a href="<?php echo $radix['menu_button_url']?>"><?php echo $radix['menu_button']?></a></li>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--=======================================================================================
									End header area
	========================================================================================-->
