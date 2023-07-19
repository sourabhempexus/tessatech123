<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); 

$description = get_the_archive_description();
?>

<main class="content-section">
    <section class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="page-content__wrapper">
                        <?php
                        /*
                        while (have_posts()) : the_post();
                            the_content();
                        endwhile;
                        */
                        ?>
						<?php if ( have_posts() ) : ?>

							<header class="page-header alignwide">
								<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
								<?php if ( $description ) : ?>
									<div class="archive-description"><?php echo wp_kses_post( wpautop( $description ) ); ?></div>
								<?php endif; ?>
							</header><!-- .page-header -->

							<?php while ( have_posts() ) : ?>
								<?php the_post(); ?>
								<?php get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) ); ?>
							<?php endwhile; ?>

							<?php twenty_twenty_one_the_posts_navigation(); ?>

						<?php else : ?>
							<?php get_template_part( 'template-parts/content/content-none' ); ?>
						<?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- .page-content -->
</main>

<?php get_footer();
