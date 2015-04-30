<?php
/**
 * Paneltopage functions and definitions
 *
 * @package Paneltopage
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'Paneltopage_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function Paneltopage_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Paneltopage, use a find and replace
	 * to change 'Paneltopage' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'Paneltopage', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'Paneltopage' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link'
	) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'Paneltopage_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // Paneltopage_setup
add_action( 'after_setup_theme', 'Paneltopage_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function Paneltopage_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'Paneltopage' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Social Media', 'Paneltopage' ),
		'id'            => 'socialmediawidget',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Widget One', 'Paneltopage' ),
		'id'            => 'footerwidgetone',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Widget Two', 'Paneltopage' ),
		'id'            => 'footerwidgettwo',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Widget Three', 'Paneltopage' ),
		'id'            => 'footerwidgetthree',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Home Page Panel', 'Paneltopage' ),
		'id'            => 'homepage-panel-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'Paneltopage_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function Paneltopage_scripts() {
	wp_enqueue_style( 'Paneltopage-style', get_stylesheet_uri() );

	wp_enqueue_script( 'Paneltopage-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'Paneltopage-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'Paneltopage_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
* Remove P tag from automatically wrapping span.
*/

function filter_ptags_on_span($content){
   return preg_replace('/<p>((<span([^>]*)>)(.+)(<\/span>))<\/p>/iU', '$1', $content);
}

add_filter('the_content', 'filter_ptags_on_span');

/**
* Remove P tag from automatically wrapping buttons.
*/

function filter_ptags_on_button($content){
	return preg_replace('/<p>((<button([^>]*)>)(.+)(<\/button>))<\/p>/iU', '$1', $content);
}

add_filter('the_content', 'filter_ptags_on_button');














// function to return a custom field value
function paneltopage_get_custom_field( $value ) {
	global $post;

    $custom_field = get_post_meta( $post->ID, $value, true );
    if ( !empty( $custom_field ) )
	    return is_array( $custom_field ) ? stripslashes_deep( $custom_field ) : stripslashes( wp_kses_decode_entities( $custom_field ) );

    return false;
}







// Register the Metabox

add_action( 'add_meta_boxes', 'paneltopage_add_custom_meta_box' );

function paneltopage_add_custom_meta_box() {
	add_meta_box( 'paneltopage-meta-box', __( 'Page Panel Feature for Home Page', 'textdomain' ), 'paneltopage_meta_box_output', 'post', 'normal', 'high' );
	add_meta_box( 'paneltopage-meta-box', __( 'Page Panel Feature for Home Page', 'textdomain' ), 'paneltopage_meta_box_output', 'page', 'normal', 'high' );
}

// Output the Metabox
function paneltopage_meta_box_output( $post ) {
	// create a nonce field
	wp_nonce_field( 'my_paneltopage_meta_box_nonce', 'paneltopage_meta_box_nonce' ); ?>

<p>
	<strong><label for="paneltopage_panelorder"><?php _e( 'Panel Order', 'textdomain' ); ?>:</label></strong>
	<input type="text" name="paneltopage_panelorder" id="paneltopage_panelorder" value="<?php echo paneltopage_get_custom_field( 'paneltopage_panelorder' ); ?>" size="5" />
</p>

<p>
<strong><label for="paneltopage_panel_text_editor"><?php _e( 'Panel Text Editor', 'textdomain' ); ?>:</label></strong><br />
<?php
$field_value = get_post_meta( $post->ID, 'paneltopage_panel_text_editor', false );
wp_editor( $field_value[0], 'paneltopage_panel_text_editor' );
?>
</p>

<p>
	<strong><label for="paneltopage_ctatextfield"><?php _e( 'Panel Call To Action', 'textdomain' ); ?>:</label></strong>
	<input type="text" name="paneltopage_ctatextfield" id="paneltopage_ctatextfield" value="<?php echo paneltopage_get_custom_field( 'paneltopage_ctatextfield' ); ?>" size="50" />
</p>

	<?php
}

// Save the Metabox values
function paneltopage_meta_box_save( $post_id ) {
	// Stop the script when doing autosave
	if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

	// Verify the nonce. If insn't there, stop the script
	if( !isset( $_POST['paneltopage_meta_box_nonce'] ) || !wp_verify_nonce( $_POST['paneltopage_meta_box_nonce'], 'my_paneltopage_meta_box_nonce' ) ) return;

	// Stop the script if the user does not have edit permissions
	if( !current_user_can( 'edit_post' ) ) return;

    // Save the textfield
	if( isset( $_POST['paneltopage_ctatextfield'] ) )
		update_post_meta( $post_id, 'paneltopage_ctatextfield', esc_attr( $_POST['paneltopage_ctatextfield'] ) );

		//	Save the text editor
		if ( isset ( $_POST['paneltopage_panel_text_editor'] ) ) {
			update_post_meta( $post_id, 'paneltopage_panel_text_editor', $_POST['paneltopage_panel_text_editor'] );
		}

		// Save the order
	if( isset( $_POST['paneltopage_panelorder'] ) )
		update_post_meta( $post_id, 'paneltopage_panelorder', esc_attr( $_POST['paneltopage_panelorder'] ) );
}
add_action( 'save_post', 'paneltopage_meta_box_save' );



// Configure an Declare support for WooCommerce

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<section id="main">';
}

function my_theme_wrapper_end() {
  echo '</section>';
}

add_theme_support( 'woocommerce' );











if ( ! class_exists( 'WP_Customize_Control' ) )
return NULL;
/**
* A class to create a dropdown for all google fonts
*/
class Google_Font_Dropdown_Custom_Control extends WP_Customize_Control
{
private $fonts = false;
public function __construct($manager, $id, $args = array(), $options = array())
{
$this->fonts = $this->get_fonts();
parent::__construct( $manager, $id, $args );
}
/**
* Render the content of the category dropdown
*
* @return HTML
*/
public function render_content()
{
if(!empty($this->fonts))
{
?>
<label>
<span class="customize-category-select-control"><?php echo esc_html( $this->label ); ?></span>
<select <?php $this->link(); ?>>
<?php
foreach ( $this->fonts as $k => $v )
{
printf('<option value="%s" %s>%s</option>', $k, selected($this->value(), $k, false), $v->family);
}
?>
</select>
</label>
<?php
}
}
/**
* Get the google fonts from the API or in the cache
*
* @param integer $amount
*
* @return String
*/
public function get_fonts( $amount = 30 )
{
$selectDirectory = get_stylesheet_directory().'/wordpress-theme-customizer-custom-controls/select/';
$selectDirectoryInc = get_stylesheet_directory().'/inc/wordpress-theme-customizer-custom-controls/select/';
$finalselectDirectory = '';
if(is_dir($selectDirectory))
{
$finalselectDirectory = $selectDirectory;
}
if(is_dir($selectDirectoryInc))
{
$finalselectDirectory = $selectDirectoryInc;
}
$fontFile = $finalselectDirectory . '/cache/google-web-fonts.txt';
//Total time the file will be cached in seconds, set to a week
$cachetime = 86400 * 7;
if(file_exists($fontFile) && $cachetime < filemtime($fontFile))
{
$content = json_decode(file_get_contents($fontFile));
} else {
$googleApi = 'https://www.googleapis.com/webfonts/v1/webfonts?sort=popularity&key={API_KEY}';
$fontContent = wp_remote_get( $googleApi, array('sslverify' => false) );
$fp = fopen($fontFile, 'w');
fwrite($fp, $fontContent['body']);
fclose($fp);
$content = json_decode($fontContent['body']);
}
if($amount == 'all')
{
return $content->items;
} else {
return array_slice($content->items, 0, $amount);
}
}
}













































// Explore color controls in the theme http://buildwpyourself.com/building-theme-color-options-customizer/
