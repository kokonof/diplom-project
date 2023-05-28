<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title><?php echo wp_get_document_title(); ?></title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="<?php echo get_template_directory_uri();?>/assets/img/favicon.png" rel="icon">
	<link href="<?php echo get_template_directory_uri();?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<?php wp_head(); ?>
</head>

<body <?php body_class();?>>

<!-- ======= Header ======= -->
<section id="topbar" class="topbar d-flex align-items-center">
	<div class="container d-flex justify-content-center justify-content-md-between">
		<div class="contact-info d-flex align-items-center">
			<i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
			<i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
		</div>
		<div class="social-links d-none d-md-flex align-items-center">
			<a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
			<a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
			<a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
			<a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
		</div>
	</div>
</section><!-- End Top Bar -->

<header id="header" class="header d-flex align-items-center">

	<div class="container-fluid container-xl d-flex align-items-center justify-content-between">
		<a href="index.html" class="logo d-flex align-items-center">
			<!-- <img src="<?php // echo get_template_directory_uri();?>/assets/img/logo.png" alt=""> -->
			<h1>Impact<span>.</span></h1>
		</a>
        <?php //the_custom_logo();?>

		<nav id="navbarn" class="navbar">
			<?php wp_nav_menu( [
				'theme_location'  => 'header_menu',
				'container'       => 'navbar',
                'container_class' => '',
				'menu_class'      => '',
				'container_id'    => 'navbar',
				'depth'           => 3,
			] ); ?>
		</nav><!-- .navbar -->

		<i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
		<i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

	</div>
</header><!-- End Header -->
<!-- End Header -->
