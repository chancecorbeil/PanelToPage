<?php
/**
 * The template used for displaying home page content in template-home.php
 *
 * @package Paneltopage
 */
?>

<!-- in-page tab navigation -->

<?php if( get_theme_mod( 'hide_inpage_nav' ) == '') { ?>
	<ul class="inpagenav">

	<?php
	// The Query
	query_posts(array(
	'post_type'      => array(
											'page', 'post'),
				'order' 	 => 'ASC',
	'orderby'        => 'meta_value',
		'posts_per_page' => 50,
			'meta_key'       => 'paneltopage_panelorder',
						));

	// The Loop
	while ( have_posts() ) : the_post();

	if ( get_post_meta($post->ID, 'paneltopage_panelorder', true) ) :

		echo '<li><a href="#';
		echo $post->post_name;
		echo '" class="panelctabutton fancy"> </a></li>';

	endif;

	endwhile;

	// Reset Query
	wp_reset_query();
	?>

	</ul>
<?php } // end if ?>
<!-- End in-page tab navigation -->


		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="entry-content">
				<div class="oddcolors clearfix">
				<div class="wrap">
				<div class="col-md-12">
				<?php the_content(); ?>
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'Paneltopage' ),
						'after'  => '</div>',
					) );
				?>
				</div>
				</div>
				</div>



<!-- Start calling panel for pages. -->
<!-- Echoing metabox panels for pages and posts -->

 <?php
// The Query
query_posts(array(
	'post_type'      => array(
											'page', 'post'),
				'order' 	 => 'ASC',
	'orderby'        => 'meta_value',
		'posts_per_page' => 50,
			'meta_key'       => 'paneltopage_panelorder',
						));

// The Loop
while ( have_posts() ) : the_post();

 if ( get_post_meta($post->ID, 'paneltopage_panelorder', true) ) :

echo '<div class="oddcolors clearfix">
<div class="wrap">
<div class="col-md-12">

		<a class="anchor" name="';

		echo $post->post_name;

				echo '">

				<a href="';
		the_permalink();
		echo '">';
		echo '<h2>';

    the_title();
    echo '</h2></a>';



// Start metabox panel text editor
echo '<p>';
global $post;
$panel_textarea_echo = get_post_meta($post->ID,'paneltopage_panel_text_editor', true);
if($panel_textarea_echo != '') {
echo $panel_textarea_echo;
}else {
};
echo '</p>';



// Start metabox call to action for panel

echo '<p class="ctaonhome">';
echo '<a href="';
the_permalink();
echo '" class="panelctabutton fancy"><span>';
global $post;
$panel_title_echo = get_post_meta($post->ID,'paneltopage_ctatextfield', true);
if($panel_title_echo != '') {
echo $panel_title_echo;
}else {
};
echo '</span></a>';
echo '</p>';





// Start metabox test for image - TEST - soon this will be used to configure a background image

// echo '<img src="';
// global $post;
// $panel_title_echo = get_post_meta($post->ID,'ecpt_upload_media', true);
// if($panel_title_echo != '') {
// echo $panel_title_echo;
// }else {
// };
// echo '" />';






echo '</div></div></div>';

endif;

endwhile;

// Reset Query
wp_reset_query();
?>

<!-- End echoing metabox panels -->



<div class="oddcolors clearfix homewidgetpanelwrap">
<div class="wrap">

<div class="widget-area homewidgetpanel" role="complementary">
	<?php if ( ! dynamic_sidebar( 'homepage-panel-1' ) ) : ?>
	<?php endif; // end footer widget area ?>
</div>

</div>
</div>









			</div><!-- .entry-content -->
		</article><!-- #post-## -->
