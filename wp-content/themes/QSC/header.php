<?php

/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,300;1,700&display=swap" rel="stylesheet"> -->

	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" /> -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/vendor/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/vendor/slick/slick-theme.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/vendor/slick/slick.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/application.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<header class="header-section">
		<div class="container">
			<div class="row align-items-center gx-5">
				<div class="col-sm-12">
					<div class="header-section__top">
						<ul>
							<li><?php echo get_option('header_top'); ?></li>
							<!-- <li>Visit phccweb.org <a href="#" class="btn__border mx-4">Sign In</a></li> -->
							<li>Visit <a href="https://www.phccweb.org/" target="_blank" rel="noopener noreferrer">phccweb.org</a> <a href="#" class="btn__border mx-4">Sign In</a></li>
						</ul>
					</div>
					<div class="header-section__main">
						<div class="row align-items-center gx-5">
							<div class="col-4 col-sm-4 col-md-3 col-lg-2">
								<?php if (get_theme_mod('custom_theme_logo')) : ?>
									<a href='<?php echo esc_url(home_url('/')); ?>' title='<?php echo esc_attr(get_bloginfo('name', 'display')); ?>' rel='home' class="navbar-brand">
										<img src='<?php echo esc_url(get_theme_mod('custom_theme_logo')); ?>' title="" alt="" width="" height="" class="header-section__logo img-fluid">
									</a>
								<?php else : ?>
									<hgroup>
										<h1 class='site-title'>
											<a href='<?php echo esc_url(home_url('/')); ?>' title='<?php echo esc_attr(get_bloginfo('name', 'display')); ?>' rel='home'><?php bloginfo('name'); ?></a>
										</h1>
										<h2 class='site-description'>
											<?php bloginfo('description'); ?>
										</h2>
									</hgroup>
								<?php endif; ?>
							</div>
							<div class="col-md-9 col-lg-10 d-none d-lg-block">
								<?php
								wp_nav_menu(array(
									'theme_location' => 'header_menu',
									'container_class' => 'header-section__nav ml-auto'
								));
								?>
							</div>
							<div class="col-8 col-sm-8 col-md-9 d-block d-lg-none">
								<div class="navbar-toggler header_mobilemenu text-end">
									<img src="<?php echo get_stylesheet_directory_uri() ?>/images/mobile_menu.png" alt="" width="30" />
								</div>
								<!-- <a class="shiftnav-toggle shiftnav-toggle-button" data-shiftnav-target="shiftnav-main"><i class="fa fa-bars"></i> Toggle Menu </a> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<?php if (!is_front_page() && !is_home() && !is_404()) { ?>
		<section class="page-hero">
			<?php
			$hero_image = get_field('hero_image');
			/*
			print_r( $hero_image);
			echo '<br />';
			echo '-------------------------';
			echo $hero_image[url];
			*/
			if ($hero_image) : ?>
				<img src="<?php echo $hero_image; ?>" alt="" class="page-hero__image d-none d-xl-block" />
			<?php else : ?>
				<img src="http://localhost/qsc/wp-content/uploads/2023/05/SubPage-Header-GettingStarted.jpg" alt="" class="page-hero__image page-hero__no-image d-none d-xl-block" />
			<?php endif; ?>

			<div class="page-hero__content">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-xl-8 col-xxl-6">
							<div class="page-hero__content-wrapper">
								<h2 class="page-hero__heading color-white">
									<?php
									$hero_heading = get_field('hero_heading');

									if ($hero_heading) {
										if (strlen($hero_heading) > 50) {
											echo substr(strip_tags($hero_heading), 0, 50) . '...';
										} else {
											echo $hero_heading;
										}
									} else {
										echo the_title();
									}
									?>
								</h2>
								<h5 class="page-hero__subheading color-white">
									<?php
									$hero_subheading = get_field('hero_subheading');

									if (strlen($hero_subheading) > 120) {
										echo substr(strip_tags($hero_subheading), 0, 120) . '...';
									} else {
										echo $hero_subheading;
									}
									?>
									<?php // echo get_field('hero_subheading'); 
									?>
								</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- .page-hero -->

		<section class="page-breadcrumb">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="page-breadcrumb__wrapper">
							<?php
							if (function_exists('yoast_breadcrumb')) {
								yoast_breadcrumb('<div id="breadcrumbs">', '</div>');
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- .page-breadcrumb -->
	<?php } ?>

	<?php if (is_404()) { ?>
		<section class="page-hero">
			<img src="http://localhost/qsc/wp-content/uploads/2023/05/SubPage-Header-GettingStarted.jpg" alt="" class="page-hero__image page-hero__no-image d-none d-xl-block" />
		
			<div class="page-hero__content">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-xl-8 col-xxl-6">
							<div class="page-hero__content-wrapper">
								<h2 class="page-hero__heading color-white">404</h2>
								<!-- <h5 class="page-hero__subheading color-white"></h5> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- .page-hero -->

		<section class="page-breadcrumb">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="page-breadcrumb__wrapper">
							<?php
							if (function_exists('yoast_breadcrumb')) {
								yoast_breadcrumb('<div id="breadcrumbs">', '</div>');
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- .page-breadcrumb -->
	<?php } ?>


