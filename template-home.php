<?php
/**
 * Template Name: Home Page
 * The template for displaying the home page.
 *
 * This is a temp solution to display the panels on my home page correctly.
 *
 * @package Paneltopage
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'homepage' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
