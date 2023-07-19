<?php

/**
 * Template Name: Home Page
 */

get_header();  ?>

<!-- Hero Section Start -->
<div class="hero-section" style="background-image: url(<?php echo get_stylesheet_directory_uri() ?>/images/home/Slider-BG.jpg);">

	<?php
	$args = array(
		'post_type' => 'Slider',
		'posts_per_page' => -1,
		'orderby' => 'date',
		'order' => 'DESC'
	);
	$the_query = new WP_Query($args);

	if ($the_query->have_posts()) : ?>
		<div class="hero-section__slider">
			<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
				<div class="hero-section__slide">
					<div class="container">
						<div class="row gx-5 align-items-center">
							<div class="col-lg-12 col-xl-7">
								<div class="hero-section__content-wrapper">
									<h2><?php the_title(); ?></h2>
									<?php the_content(); ?>
									<!-- <h4>Community, camaraderie, and connections — QSC is where you belong.</h4>
										<a href="#" class="btn__motion--yellow">COMMUNITY</a> -->
								</div>
							</div>

							<div class="col-xl-5 d-none d-xl-block">
								<div class="hero-section__img-wrapper">
									<!-- <img src="<?php echo get_stylesheet_directory_uri() ?>/images/home/slide1.png" alt=""> -->
									<?php
									$wpblog_slideimg = wp_get_attachment_url(get_post_thumbnail_id());
									if ($wpblog_slideimg) { ?>
										<img src="<?php echo $wpblog_slideimg; ?>" alt="" loading="lazy" />
									<?php } ?>

								</div>
							</div>
						</div>
					</div>
				</div>
			<?php
			endwhile;
			wp_reset_postdata(); ?>
		</div>
		<div class="hero-section__nav">
			<div class="container">
				<div class="row gx-5">
					<div class="col-sm-12">
						<div class="hero-section__nav-button hero-section__nav-button--left hero_left_nav">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/images/svg/slider_nav_left.svg" alt="" width="10" height="" />
						</div>
						<div class="hero-section__nav-button hero-section__nav-button--right hero_right_nav">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/images/svg/slider_nav_right.svg" alt="" width="10" height="" />
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
</div>
<!-- Hero Section End -->

<!-- Intro Section Start -->
<div class="intro-section abc123 iii ooo">
	<div class="container">
		<div class="row gx-5">
			<div class="col-lg-12 col-xl-1">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/images/svg/Become2-Icon.svg" alt="" class="m-b-15" width="81" />
			</div>
			<div class="col-lg-12 col-xl-11">
				<h1>QSC Members are the best in the trade</h1>
				<p>We know trades are vital to protecting the safety of individuals, families, neighborhoods, communities, and our nation. QSC members operate their businesses and empower their staff to ensure all standards of safety are met daily.</p>
			</div>
		</div>
	</div>
</div>
<!-- Intro Section End -->

<!-- Blurb Area Start -->
<div class="blurb-section">
	<div class="container">
		<div class="row gx-5">
			<div class="col-sm-12 col-md-7 col-lg-8 m-b-30">
				<div class="blurb-section__item gradient1">
					<div class="blurb-section__item-space">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/images/svg/Comunity2-icon.svg" alt="" width="75" class="m-b-20" />
						<h2 class="color-white">What it means to Belong.</h2>
						<p class="color-white">QSC provides a welcoming community that influences best practices, superior growth and profitability for service trade contractors and industry partners.<br><br>There is confidence in knowing you have the support you need to grow, take on new tasks, and adapt to the what the future of the p-h-c industry will look like. QSC is a community of professionals who get to know each other on a personal level which allows sharing of good practices, business wins, hardships and lessons learned, and trending topics they are all dealing with.</p>
						<a href="/getting-started/" class="btn__motion--green">Benefits</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-5 col-lg-4 m-b-30">
				<div class="blurb-section__item gradient1">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/images/home/Asset-25-100.jpg" alt="" class="img-fluid" />
					<div class="blurb-section__item-space">
						<h4 class="color-white m-b-20">QSC Coaching Services</h4>
						<p class="color-white">Any PHCC member can receive a free 30 minute business assessment. Today is the day to move your business to the next level.</p>
						<a href="/free-business-evaluation/" class="btn__motion--green">FREE BUSINESS EVALUATION</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row gx-5">
			<div class="ol-sm-12 col-md-5 col-lg-4 m-b-30">
				<div class="blurb-section__item gradient2">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/images/home/Asset-24-100.jpg" alt="" class="img-fluid" />
					<div class="blurb-section__item-space">
						<h4 class="color-white m-b-20">Need to know more about QSC</h4>
						<p class="color-white">We are ready to answer your questions and take your suggestions.</p>
						<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#askME" class="btn__askme--yellow"></a>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-7 col-lg-8 m-b-30">
				<div class="blurb-section__item gradient2">
					<div class="blurb-section__item-space">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/images/svg/Benefits2-icon.svg" alt="" class="m-b-20" width="75" />
						<h2 class="color-white">Strength in numbers – profitability, resources and people</h2>
						<p class="color-white">There is something for everyone in your organization provided through real problem, real challenge and real time solutions.<br><br>QSC offers best practices, opportunities to increase profitability, and personal and professional growth to help you and your business thrive today and stay vital for generations.</p>
						<a href="/apply-now/" class="btn__motion--green">GET STARTED</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row gx-5">
			<div class="col-sm-12 col-md-7 col-lg-8 m-b-30">
				<div class="blurb-section__item gradient3">
					<div class="blurb-section__item-space">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/images/svg/Become2-Icon.svg" alt="" class="m-b-20" width="75" />
						<h4>Become sit ametus</h4>
						<p class="color-white">Conmendud ipsum dolor sit ametus ipsum dolor sit ametus ipsum dolor sit ametus qualip ipsum dolor sit ametus ipsum dolor sit ametus. Conmendud ipsum dolor sit ametus ipsum dolor sit ametus ipsum dolor sit ametus qualip ipsum dolor sit ametus ipsum dolor sit ametus.</p>
						<a href="/contact/" class="btn__motion--green">GET STARTED</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-5 col-lg-4 m-b-30">
				<div class="blurb-section__item gradient3">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/images/home/Asset-23-100.jpg" alt="" class="img-fluid" />
					<div class="blurb-section__item-space">
						<h4 class="color-white">Related Content</h4>
						<p class="color-white">Conmendud ipsum dolor sit ipsum dolor sit.</p>
						<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#askME" class="btn__askme--yellow"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Blurb Section End -->


<!-- Quality Section Start -->
<div class="quality-section m-b-100">
	<div class="container">
		<div class="row gx-5">
			<div class="col-xl-12">
				<div class="quality-section__wrapper">
					<div class="row gx-5 align-items-end">
						<div class="col-lg-12 col-xl-6">
							<div class="quality-section__content">
								<h2 class="h1">Case study lapult contrtoactor</h2>
								<h3>Qualipid sindod</h3>
								<p>Conmendud ipsum dolor sit ametus ipsum dolor sit ametus ipsum dolor sit ametus qualip ipsum dolor sit ametus ipsum dolor sit ametus ipsum.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
								<a href="/contact/" class="btn__motion--green color-teal">GET STARTED</a>
							</div>
						</div>
						<div class="col-lg-12 col-xl-6 text-right">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/images/home/Asset-26.png" alt="" class="img-fluid quality-section__img">
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
<!-- Quality Section End -->

<?php get_footer(); ?>