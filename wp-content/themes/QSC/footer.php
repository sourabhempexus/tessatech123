<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!-- Testimonial Section End -->
<div class="testimonial-section gradient4">
	<div class="container gx-0">
		<div class="row gx-0">
			<div class="col-lg-4 col-xl-3 testimonial-section__img-container">
				<div class="testimonial-section__img-wrapper">
					<!-- <div class="testimonial-section__img" style="background-image: url(<?php echo get_stylesheet_directory_uri() ?>/images/home/Asset-27-100.jpg"></div> -->
					<img src="<?php echo get_stylesheet_directory_uri() ?>/images/home/Asset-27-100.jpg" alt="" class="img-fluid testimonial-section__img" />
				</div>
			</div>
			<div class="col-lg-8 col-xl-9">
				<div class="testimonial-section__content">
					<h2 class="testimonial-section__head">TESTIMONIALS</h2>

					<?php
					$args = array(
						'post_type' => 'testimonials',
						'posts_per_page' => -1,
						'orderby' => 'date',
						'order' => 'DESC'
					);
					$the_query = new WP_Query($args);

					if ($the_query->have_posts()) : ?>
						<div class="testimonial-section__slider-wrapper">
							<div class="testimonial-section__slider-button testimonial-section__slider-button--left testimonial_left_nav">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/images/svg/slider_nav_left.svg" alt="" width="10" height="" />
							</div>
							<div class="testimonial-section__slider-button testimonial-section__slider-button--right testimonial_right_nav">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/images/svg/slider_nav_right.svg" alt="" width="10" height="" />
							</div>
							<div class="testimonial-section__slider">
								<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
									<div class="testimonial-section__slide">
										<h3><?php the_title(); ?></h3>
										<div class="testimonial-section__text">
											<?php the_content(); ?>
											<?php
											/*
											$testimonial_text = get_the_content();
											$a = "Hello world! fgsf";
											echo str_word_count($a);

											if (str_word_count($testimonial_text) > 30) {
												echo substr(strip_tags($testimonial_text), 0, 30) . '...';
											} else {
												echo $testimonial_text;
											}
											*/
											?>
										</div>
										<p class="testimonial-section__author"><?php echo get_field('author'); ?></p>
									</div>

								<?php endwhile;
								wp_reset_postdata(); ?>
							</div>
						</div>
					<?php endif; ?>

					<a href="/qsc-community/" class="btn__motion--green">COMMUNITY</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Testimonial Area End -->

<!-- CTA Section Start -->
<div class="cta-section">
	<div class="container">
		<div class="row gx-5">
			<div class="col-xl-12 text-center p-t-60 p-b-60">
				<a href="https://www.hotwater.com/" target="_blank">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/images/home/aosmith.png" alt="" class="img-fluid" />
				</a>
			</div>
		</div>
	</div>
</div>
<!-- CTA Section End -->

<!-- Footer Section Start -->
<footer class="footer-section" style="background-image: url(<?php echo get_stylesheet_directory_uri() ?>/images/home/Footerjpg.jpg);">
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-6 col-md-6 col-lg-3">
				<div class="footer-section__col">
					<?php
					if (is_active_sidebar('footer_column_1')) :
						dynamic_sidebar('footer_column_1');
					endif;
					?>
					<!-- <h4 class="footer-section__col-head">QUICK LINKS</h4>
					<ul class="footer-section__menu">
						<li>
							<a href="#">Directory Search</a>
						</li>
						<li>
							<a href="#">Directory Search</a>
						</li>
						<li>
							<a href="#">Directory Search</a>
						</li>
						<li>
							<a href="#">Directory Search</a>
						</li>
					</ul> -->
					<a href="#" class="btn__motion--green">JOIN TODAY</a>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-md-6 col-lg-3">
				<div class="footer-section__col">
					<?php
					if (is_active_sidebar('footer_column_2')) :
						dynamic_sidebar('footer_column_2');
					endif;
					?>
					<!-- <h4 class="m-b-70"></h4>
					<ul class="footer-section__menu">
						<li>
							<a href="#">Directory Search</a>
						</li>
						<li>
							<a href="#">Directory Search</a>
						</li>
						<li>
							<a href="#">Directory Search</a>
						</li>
						<li>
							<a href="#">Directory Search</a>
						</li>
					</ul>
					<a href="#">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/images/svg/AskMe-Yellow.svg" alt="" width="172" />
					</a> -->
					<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#askME" class="btn__askme--yellow"></a>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-6">
				<div class="footer-section__col">
					<div class="m-b-40">
						<div class="footer_logo">
							<?php if (get_theme_mod('custom_theme_logo')) { ?>
								<a href='<?php echo esc_url(home_url('/')); ?>' title='<?php echo esc_attr(get_bloginfo('name', 'display')); ?>' rel='home'>
									<img src='<?php echo esc_url(get_theme_mod('custom_theme_logo')); ?>' title="" alt="" width="160" height="">
								</a>
							<?php }  ?>

						</div>
						<ul class="social_list">
							<?php if (get_option('facebook')) { ?>
								<li>
									<a href="<?php echo get_option('facebook'); ?>" target="_blank" rel="nofollow">
										<img src="<?php echo get_stylesheet_directory_uri() ?>/images/svg/Facebook.svg" alt="" width="" height="30" />
									</a>
								</li>
							<?php } ?>
							<?php if (get_option('twitter')) { ?>
								<li>
									<a href="<?php echo get_option('twitter'); ?>" target="_blank" rel="nofollow">
										<img src="<?php echo get_stylesheet_directory_uri() ?>/images/svg/Twitter.svg" alt="" width="" height="30" />
									</a>
								</li>
							<?php } ?>
							<?php if (get_option('linkedin')) { ?>
								<li>
									<a href="<?php echo get_option('linkedin'); ?>" target="_blank" rel="nofollow">
										<img src="<?php echo get_stylesheet_directory_uri() ?>/images/svg/LinkedIn.svg" alt="" width="" height="30" />
									</a>
								</li>
							<?php } ?>
							<?php if (get_option('youtube')) { ?>
								<li>
									<a href="<?php echo get_option('youtube'); ?>" target="_blank" rel="nofollow">
										<img src="<?php echo get_stylesheet_directory_uri() ?>/images/svg/YouTube.svg" alt="" width="" height="30" />
									</a>
								</li>
							<?php } ?>
						</ul>
					</div>
					<div class="footer_text">
						<?php
						if (is_active_sidebar('footer_column_3')) :
							dynamic_sidebar('footer_column_3');
						endif;
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- Footer Section End -->

<!-- Ask Me Popup Start -->
<div class="modal modal-box" id="askME">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<button type="button" class="btn-close btn-close-white modal-box__close" data-bs-dismiss="modal"></button>
			<img src="<?php echo get_stylesheet_directory_uri() ?>/images/home/Pop-up-Photo.png" alt="" class="modal-box__float-img" />

			<!-- Modal body -->
			<div class="modal-body">
				<div class="modal-box__box modal-box__box--1">
					<div class="m-b-40">
						<h2 class="h1 color-white">Ask Me about ipsum</h2>
						<!-- Calendly inline widget begin -->
						<!-- <div class="calendly-inline-widget" data-url="https://calendly.com/naphcc-qscinquiries?hide_landing_page_details=1&hide_gdpr_banner=1&primary_color=85b93c" style="min-width:320px;height:400px;"></div>
						<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script> -->
						<!-- Calendly inline widget end -->

						<!-- Calendly link widget begin -->
						<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
						<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
						<a href="" class="btn__green" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/naphcc-qscinquiries/test-neil-and-jordan'});return false;">Schedule Calendly Meeting</a>
						<!-- Calendly link widget end -->


					</div>

					<h3 class="color-white m-b-30">Submit a question</h3>
					<?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]'); ?>
				</div>

				<div class="modal-box__box modal-box__box--2">
					<a href="#" class="btn__motion--green">GET A FREE BUSINESS EVALUATION!</a>
				</div>

				<div class="modal-box__box modal-box__box--3">
					<a href="#" class="btn__motion--green">GET STARTED</a>
					<br />
					<br />
					<br />
					<a href="#" class="btn__motion--green">FREQUENTLY ASKED QUESTIONS</a>
				</div>
			</div>

			<!-- Modal footer -->
			<!-- <div class="modal-footer">
				<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
			</div> -->
		</div>
	</div>
</div>
<!-- Ask Me Popup End -->

<!-- 
<script src="https://code.jquery.com/jquery-3.6.4.slim.min.js" integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
-->
<script src="<?php echo get_stylesheet_directory_uri() ?>/vendor/bootstrap/bootstrap.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/vendor/slick/slick.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/custom.js"></script>

<script type="text/javascript">
	jQuery(document).ready(function() {
		/*jQuery("button").click(function(){

		});*/
	});
</script>
<?php wp_footer(); ?>

</body>

</html>