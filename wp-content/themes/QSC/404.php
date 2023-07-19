<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>

<main class="content-section">
    <section class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="page-content__wrapper">
						<h2><?php esc_html_e( 'Nothing here', 'twentytwentyone' ); ?></h2>

						<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentytwentyone' ); ?></p>
						<?php // get_search_form(); ?>
                        <a href="/" class="btn__motion--green color-teal">BACK TO HOME</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- .page-content -->
</main>

<?php get_footer();
