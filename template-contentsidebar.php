<?php
/**
 * Template Name: Sidebar on Right
 * The template for displaying the sidebar to the right of the content.
 *
 *
 * @package Paneltopage
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main oddcolors clear" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

<div class="wrap">
<div class="col-md-8">
				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>
</div>

<div class="sidebar col-md-4">
				<?php get_sidebar(); ?>
</div>
</div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
