<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
get_header(); ?>


<main class="content-section">
    <!-- <section class="page-hero">
        <?php 
		$hero_image = get_field('hero_image');
		/*
		print_r( $hero_image);
		echo '<br />';
		echo '-------------------------';
		echo $hero_image[url];
		*/
		if ($hero_image) : ?>
            <img src="<?php echo $hero_image; ?>" alt="" class="page-hero__image" />
        <?php else : ?>
            <img src="http://localhost/qsc/wp-content/uploads/2023/05/SubPage-Header-GettingStarted.jpg" alt="" class="page-hero__image page-hero__no-image" />
        <?php endif; ?>

        <div class="page-hero__content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-hero__content-wrapper">
                            <h2 class="page-hero__heading color-white">
                                <?php
                                $hero_heading = get_field('hero_heading');

                                if($hero_heading ){                      
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

                                if (strlen($hero_subheading) > 200) {
                                    echo substr(strip_tags($hero_subheading), 0, 200) . '...';
                                } else {
                                    echo $hero_subheading;
                                }
                                ?>
                                <?php // echo get_field('hero_subheading'); ?>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- .page-hero -->

    <!-- <section class="page-breadcrumb">
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
    </section> -->
    <!-- .page-breadcrumb -->

    <section class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="page-content__wrapper">
                        <?php
                        while (have_posts()) : the_post();
                            the_content();
                        endwhile;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- .page-content -->

    <!--<section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="row" style="font-size: 16px;">
                        <div class="col-sm-12">
                            <?php if (get_field('publish_date') == 'show_date') { ?>
                                <div class="post_date">
                                    Publish Date: <a href="javascript:void(0)"><?php the_time('F jS, Y') ?></a>
                                </div>
                            <?php } ?>

                            <?php if (get_field('author') == 'show_author') { ?>
                                <div class="post_date">
                                    <?php echo 'Author: ' . get_the_author(); ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
</main>
<?php get_footer(); ?>