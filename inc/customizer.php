<?php
/**
 * Paneltopage Theme Customizer
 *
 * @package Paneltopage
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function Paneltopage_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';


	// Remove Colors Section
	$wp_customize->remove_section( 'colors' );

	// Change Section Name
	$wp_customize->get_section('background_image')->title = __( 'Header Background Image' );


	// Begin new section - Theme Colors
	// add new section
	$wp_customize->add_section( 'Paneltopage_theme_colors', array(
		'title' => __( 'Theme Colors', 'Paneltopage' ),
		'priority' => 70,
	) );

	// add color picker setting - for even panel colors
	$wp_customize->add_setting( 'even_panel_color', array(
		'default' => '#ffffff'
	) );

	// add color picker control - for even panel colors
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'even_panel_color', array(
		'label' => 'Even Panel Color',
		'section' => 'Paneltopage_theme_colors',
		'settings' => 'even_panel_color',
	) ) );

	// add color picker setting - for site title color
	$wp_customize->add_setting( 'main_site_title_color', array(
		'default' => '#5a372b'
	) );

	// add color picker control - for site title color
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_site_title_color', array(
		'label' => 'Site Title Color',
		'section' => 'Paneltopage_theme_colors',
		'settings' => 'main_site_title_color',
	) ) );

	// add color picker setting - for site description color
	$wp_customize->add_setting( 'main_site_description_color', array(
		'default' => '#5a372b'
	) );

	// add color picker control - for site description color
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_site_description_color', array(
		'label' => 'Site Description Color',
		'section' => 'Paneltopage_theme_colors',
		'settings' => 'main_site_description_color',
	) ) );

	// add color picker setting - for hover color
	$wp_customize->add_setting( 'hover_color', array(
	'default' => '#b5b5b5'
	) );

	// add color picker control - for hover color
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hover_color', array(
	'label' => 'Hover Color',
	'section' => 'Paneltopage_theme_colors',
	'settings' => 'hover_color',
	) ) );

		// add color picker setting - for navigation background color
	$wp_customize->add_setting( 'main_nav_background_color', array(
		'default' => '#5a372b'
	) );

	// add color picker control - for navigation background color
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_nav_background_color', array(
		'label' => 'Navigation Background Color',
		'section' => 'Paneltopage_theme_colors',
		'settings' => 'main_nav_background_color',
	) ) );

	// add color picker setting - for navigation color
$wp_customize->add_setting( 'main_nav_color', array(
	'default' => '#ffffff'
) );

// add color picker control - for navigation color
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_nav_color', array(
	'label' => 'Navigation Color',
	'section' => 'Paneltopage_theme_colors',
	'settings' => 'main_nav_color',
) ) );

// add color picker setting - for navigation hover color
$wp_customize->add_setting( 'main_nav_hover_color', array(
'default' => '#ffffff'
) );

// add color picker control - for navigation hover color
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_nav_hover_color', array(
'label' => 'Navigation Hover Color',
'section' => 'Paneltopage_theme_colors',
'settings' => 'main_nav_hover_color',
) ) );

// add color picker setting - for navigation tab
$wp_customize->add_setting( 'nav_tab_color', array(
'default' => '#5a372b'
) );

// add color picker control - for navigation tab
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nav_tab_color', array(
'label' => 'Tab Navigation Color',
'section' => 'Paneltopage_theme_colors',
'settings' => 'nav_tab_color',
) ) );

// add color picker setting - for button background color
$wp_customize->add_setting( 'button_background_color', array(
'default' => '#5a372b'
) );

// add color picker control - for button background color
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_background_color', array(
'label' => 'Button Background Color',
'section' => 'Paneltopage_theme_colors',
'settings' => 'button_background_color',
) ) );

// add color picker setting - for button background color hover
$wp_customize->add_setting( 'button_background_color_hover', array(
'default' => '#5a372b'
) );

// add color picker control - for button background color hover
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_background_color_hover', array(
'label' => 'Button Background Color Hover',
'section' => 'Paneltopage_theme_colors',
'settings' => 'button_background_color_hover',
) ) );

	// add color picker setting - for footer background color
	$wp_customize->add_setting( 'footer_background_color', array(
		'default' => '#5a372b'
	) );

	// add color picker control - for footer background color
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_background_color', array(
		'label' => 'Footer Background Color',
		'section' => 'Paneltopage_theme_colors',
		'settings' => 'footer_background_color',
	) ) );
	// End new section - Theme Colors






	// Begin new section - Odd Panel Colors
	// add new section
	$wp_customize->add_section( 'Paneltopage_odd_panel_colors', array(
		'title' => __( 'Odd Panel Colors', 'Paneltopage' ),
		'priority' => 70,
	) );

	// add color picker setting - for odd panel colors
	$wp_customize->add_setting( 'odd_panel_color', array(
		'default' => '#f36f57'
	) );

	// add color picker control - for odd panel colors
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'odd_panel_color', array(
		'label' => 'Odd Panel Color',
		'section' => 'Paneltopage_odd_panel_colors',
		'settings' => 'odd_panel_color',
	) ) );

	// add color picker setting - for title colors
	$wp_customize->add_setting( 'odd_panel_title_color', array(
		'default' => '#ffffff'
	) );

	// add color picker control - for title colors
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'odd_panel_title_color', array(
		'label' => 'Titles Color',
		'section' => 'Paneltopage_odd_panel_colors',
		'settings' => 'odd_panel_title_color',
	) ) );

	// add color picker setting - for text colors
	$wp_customize->add_setting( 'odd_panel_text_color', array(
		'default' => '#ffffff'
	) );

	// add color picker control - for text colors
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'odd_panel_text_color', array(
		'label' => 'Text Color',
		'section' => 'Paneltopage_odd_panel_colors',
		'settings' => 'odd_panel_text_color',
	) ) );

	// add color picker setting - for link colors
	$wp_customize->add_setting( 'odd_panel_link_color', array(
		'default' => '#999999'
	) );

	// add color picker control - for link colors
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'odd_panel_link_color', array(
		'label' => 'Link Color',
		'section' => 'Paneltopage_odd_panel_colors',
		'settings' => 'odd_panel_link_color',
	) ) );

	// add color picker setting - for call to action text colors
	$wp_customize->add_setting( 'odd_panel_cta_text_color', array(
		'default' => '#ffffff'
	) );

	// add color picker control - for call to action text colors
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'odd_panel_cta_text_color', array(
		'label' => 'Call To Action Text Color',
		'section' => 'Paneltopage_odd_panel_colors',
		'settings' => 'odd_panel_cta_text_color',
	) ) );

		// add color picker setting - for line border colors
	$wp_customize->add_setting( 'odd_panel_line_border_color', array(
		'default' => '#ffffff'
	) );

	// add color picker control - for line border colors
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'odd_panel_line_border_color', array(
		'label' => 'Line Border Color',
		'section' => 'Paneltopage_odd_panel_colors',
		'settings' => 'odd_panel_line_border_color',
	) ) );

	// End new section - Odd Panel Colors



	// Begin new section - Even Panel Colors
	// add new section
	$wp_customize->add_section( 'Paneltopage_even_panel_colors', array(
		'title' => __( 'Even Panel Colors', 'Paneltopage' ),
		'priority' => 70,
	) );

	// add color picker setting - for even panel colors
	$wp_customize->add_setting( 'even_panel_color', array(
		'default' => '#ffffff'
	) );

	// add color picker control - for even panel colors
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'even_panel_color', array(
		'label' => 'Even Panel Color',
		'section' => 'Paneltopage_even_panel_colors',
		'settings' => 'even_panel_color',
	) ) );

	// add color picker setting - for title colors
	$wp_customize->add_setting( 'even_panel_title_color', array(
		'default' => '#5a372b'
	) );

	// add color picker control - for title colors
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'even_panel_title_color', array(
		'label' => 'Titles Color',
		'section' => 'Paneltopage_even_panel_colors',
		'settings' => 'even_panel_title_color',
	) ) );

	// add color picker setting - for text colors
	$wp_customize->add_setting( 'even_panel_text_color', array(
		'default' => '#333333'
	) );

	// add color picker control - for text colors
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'even_panel_text_color', array(
		'label' => 'Text Color',
		'section' => 'Paneltopage_even_panel_colors',
		'settings' => 'even_panel_text_color',
	) ) );

	// add color picker setting - for link colors
	$wp_customize->add_setting( 'even_panel_link_color', array(
		'default' => '#f36f57'
	) );

	// add color picker control - for link colors
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'even_panel_link_color', array(
		'label' => 'Link Color',
		'section' => 'Paneltopage_even_panel_colors',
		'settings' => 'even_panel_link_color',
	) ) );

	// add color picker setting - for call to action text colors
	$wp_customize->add_setting( 'even_panel_cta_text_color', array(
		'default' => '#5a372b'
	) );

	// add color picker control - for call to action text colors
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'even_panel_cta_text_color', array(
		'label' => 'Call To Action Text Color',
		'section' => 'Paneltopage_even_panel_colors',
		'settings' => 'even_panel_cta_text_color',
	) ) );

	// add color picker setting - for line border colors
	$wp_customize->add_setting( 'even_panel_line_border_color', array(
		'default' => '#5a372b'
	) );

	// add color picker control - for line border colors
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'even_panel_line_border_color', array(
		'label' => 'Line Border Color',
		'section' => 'Paneltopage_even_panel_colors',
		'settings' => 'even_panel_line_border_color',
	) ) );

	// End new section - Even Panel Colors






	// Begin section - Footer
	// add new section
	$wp_customize->add_section( 'Paneltopage_footer_panel', array(
		'title' => __( 'Footer', 'Paneltopage' ),
		'priority' => 150,
	) );

	// add Copyright Text
	// How To use - echo get_theme_mod( 'copyright_textbox', 'Copyright' );
$wp_customize->add_setting(
		'copyright_textbox',
		array(
				'default' => 'Customize your copyright text',
		)
);

$wp_customize->add_control(
	'copyright_textbox',
	array(
			'label' => 'Copyright text',
			'section'    => 'Paneltopage_footer_panel',
			'type' => 'text',
	)
);

// Hide Copyright Text

	$wp_customize->add_setting(
			'hide_copyright'
	);

	$wp_customize->add_control(
		'hide_copyright',
		array(
				'type' => 'checkbox',
				'label' => 'Hide copyright text',
				'section' => 'Paneltopage_footer_panel',
		)
);



// Add Back To Top Arrow Graphic

$wp_customize->add_setting('back_to_top_graphic', array(
		'default'           => 'http://pinkyupwebdesign.com/wp/wp-content/themes/PanelToPage/images/up-arrow.png',
));

$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'back_to_top_graphic', array(
		'label'    => __('Back To Top Arrow Graphic', 'Paneltopage'),
		'section' => 'Paneltopage_footer_panel',
		'settings' => 'back_to_top_graphic',
)));






// Hide Back To Top Arrow

	$wp_customize->add_setting(
			'hide_back_to_top'
	);

	$wp_customize->add_control(
		'hide_back_to_top',
		array(
				'type' => 'checkbox',
				'label' => 'Hide Back To Top Arrow',
				'section' => 'Paneltopage_footer_panel',
		)
);

// Hide home page in-page navigation

	$wp_customize->add_setting(
			'hide_inpage_nav'
	);

	$wp_customize->add_control(
		'hide_inpage_nav',
		array(
				'type' => 'checkbox',
				'label' => 'Hide home page in-page navigation',
				'section' => 'Paneltopage_footer_panel',
		)
);
// End section - Footer













// Test Section

		$wp_customize->add_section('themename_color_scheme', array(
				'title'    => __('Example Controls', 'themename'),
				'description' => '',
				'priority' => 120,
		));

		//  =============================
		//  = Text Input                =
		//  =============================
		$wp_customize->add_setting('themename_theme_options[text_test]', array(
				'default'        => 'Arse!',
				'capability'     => 'edit_theme_options',
				'type'           => 'option',

		));

		$wp_customize->add_control('themename_text_test', array(
				'label'      => __('Text Test', 'themename'),
				'section'    => 'themename_color_scheme',
				'settings'   => 'themename_theme_options[text_test]',
		));

		//  =============================
		//  = Radio Input               =
		//  =============================
		$wp_customize->add_setting('themename_theme_options[color_scheme]', array(
				'default'        => 'value2',
				'capability'     => 'edit_theme_options',
				'type'           => 'option',
		));

		$wp_customize->add_control('themename_color_scheme', array(
				'label'      => __('Color Scheme', 'themename'),
				'section'    => 'themename_color_scheme',
				'settings'   => 'themename_theme_options[color_scheme]',
				'type'       => 'radio',
				'choices'    => array(
						'value1' => 'Choice 1',
						'value2' => 'Choice 2',
						'value3' => 'Choice 3',
				),
		));

		//  =============================
		//  = Checkbox                  =
		//  =============================
		$wp_customize->add_setting('themename_theme_options[checkbox_test]', array(
				'capability' => 'edit_theme_options',
				'type'       => 'option',
		));

		$wp_customize->add_control('display_header_text', array(
				'settings' => 'themename_theme_options[checkbox_test]',
				'label'    => __('Display Header Text'),
				'section'  => 'themename_color_scheme',
				'type'     => 'checkbox',
		));


		//  =============================
		//  = Select Box                =
		//  =============================
			$wp_customize->add_setting('themename_theme_options[header_select]', array(
				'default'        => 'value2',
				'capability'     => 'edit_theme_options',
				'type'           => 'option',

		));
		$wp_customize->add_control( 'example_select_box', array(
				'settings' => 'themename_theme_options[header_select]',
				'label'   => 'Select Something:',
				'section' => 'themename_color_scheme',
				'type'    => 'select',
				'choices'    => array(
						'value1' => 'Choice 1',
						'value2' => 'Choice 2',
						'value3' => 'Choice 3',
				),
		));


		//  =============================
		//  = Image Upload              =
		//  =============================
		$wp_customize->add_setting('themename_theme_options[image_upload_test]', array(
				'default'           => 'image.jpg',
				'capability'        => 'edit_theme_options',
				'type'           => 'option',

		));

		$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'image_upload_test', array(
				'label'    => __('Image Upload Test', 'themename'),
				'section'  => 'themename_color_scheme',
				'settings' => 'themename_theme_options[image_upload_test]',
		)));

		//  =============================
		//  = File Upload               =
		//  =============================
		$wp_customize->add_setting('themename_theme_options[upload_test]', array(
				'default'           => 'arse',
				'capability'        => 'edit_theme_options',
				'type'           => 'option',

		));

		$wp_customize->add_control( new WP_Customize_Upload_Control($wp_customize, 'upload_test', array(
				'label'    => __('Upload Test', 'themename'),
				'section'  => 'themename_color_scheme',
				'settings' => 'themename_theme_options[upload_test]',
		)));


		//  =============================
		//  = Color Picker              =
		//  =============================
		$wp_customize->add_setting('themename_theme_options[link_color]', array(
				'default'           => '000',
				'sanitize_callback' => 'sanitize_hex_color',
				'capability'        => 'edit_theme_options',
				'type'           => 'option',

		));

		$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'link_color', array(
				'label'    => __('Link Color', 'themename'),
				'section'  => 'themename_color_scheme',
				'settings' => 'themename_theme_options[link_color]',
		)));


		//  =============================
		//  = Page Dropdown             =
		//  =============================
		$wp_customize->add_setting('themename_theme_options[page_test]', array(
				'capability'     => 'edit_theme_options',
				'type'           => 'option',

		));

		$wp_customize->add_control('themename_page_test', array(
				'label'      => __('Page Test', 'themename'),
				'section'    => 'themename_color_scheme',
				'type'    => 'dropdown-pages',
				'settings'   => 'themename_theme_options[page_test]',
		));

		// =====================
		//  = Category Dropdown =
		//  =====================
		$categories = get_categories();
	$cats = array();
	$i = 0;
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cats[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('_s_f_slide_cat', array(
		'default'        => $default
	));
	$wp_customize->add_control( 'cat_select_box', array(
		'settings' => '_s_f_slide_cat',
		'label'   => 'Select Category:',
		'section'  => '_s_f_home_slider',
		'type'    => 'select',
		'choices' => $cats,
	));








}
add_action( 'customize_register', 'Paneltopage_customize_register' );





// Add customizer settings to CSS from within header.

function Paneltopage_customize_css()
{
		?>
				<style type="text/css">

						.oddcolors { background-color:<?php echo get_theme_mod('even_panel_color', '#ffffff'); ?>;}

						h1.site-title a { color:<?php echo get_theme_mod('main_site_title_color', '#ffffff'); ?>;}
						.site-description { color:<?php echo get_theme_mod('main_site_description_color', '#5a372b'); ?>;}
						.oddcolors:nth-of-type(odd) .entry-title a:hover,
						.oddcolors:nth-of-type(even) .entry-title a:hover,
						.entry-title a:hover, a:hover, a:focus, a h2:hover,
						.oddcolors a h2:hover,
						h1 a:hover, h2.site-title a:hover { color:<?php echo get_theme_mod('hover_color', '#f36f57'); ?>;}
						.main-navigation,
						.main-navigation ul ul { background-color:<?php echo get_theme_mod('main_nav_background_color', '#5a372b'); ?>;}
						.main-navigation li a { color:<?php echo get_theme_mod('main_nav_color', '#FFFFFF'); ?>;}
						.main-navigation li a:hover { color:<?php echo get_theme_mod('main_nav_hover_color', '#FFFFFF'); ?>;}
						.inpagenav li a { background-color:<?php echo get_theme_mod('nav_tab_color', '#5a372b'); ?>;}
						.form-submit input[type="submit"], .wpcf7-submit,
						.wpcf7-submit, input[type="button"], input[type="reset"],
						input[type="submit"], .wpcf7-submit { background-color:<?php echo get_theme_mod('button_background_color', '#5a372b'); ?>;}
						button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover, #respond .form-submit input[type="submit"]:hover { background-color:<?php echo get_theme_mod('button_background_color_hover', '#f36f57'); ?>;}
						 { background-color:<?php echo get_theme_mod('button_background_color', '#5a372b'); ?>;}
						.site-footer { background-color:<?php echo get_theme_mod('footer_background_color', '#5a372b'); ?>;}


						.oddcolors:nth-of-type(even), body { background-color:<?php echo get_theme_mod('odd_panel_color', '#f36f57'); ?>;}
						.oddcolors:nth-of-type(even) h2,
						.oddcolors:nth-of-type(even) h1.entry-title,
						.oddcolors:nth-of-type(even) h2.entry-title,
						.oddcolors:nth-of-type(even) h2.entry-title a{ color:<?php echo get_theme_mod('odd_panel_title_color', '#f36f57'); ?>;}
						.oddcolors:nth-of-type(even) { color:<?php echo get_theme_mod('odd_panel_text_color', '#ffffff'); ?>;}
						.oddcolors:nth-of-type(even) a { color:<?php echo get_theme_mod('odd_panel_link_color', '#ffffff'); ?>;}
						.oddcolors:nth-of-type(even) .fancy span { color:<?php echo get_theme_mod('odd_panel_cta_text_color', '#333333'); ?>;}
						.oddcolors:nth-of-type(even) .fancy span:before,
						.oddcolors:nth-of-type(even) .fancy span:after {
							border-bottom: 1px solid <?php echo get_theme_mod('odd_panel_line_border_color', '#333333'); ?>;
							border-top: 1px solid <?php echo get_theme_mod('odd_panel_line_border_color', '#333333'); ?>;}


						.oddcolors:nth-of-type(odd) { background-color:<?php echo get_theme_mod('even_panel_color', '#f36f57'); ?>;}
						.oddcolors:nth-of-type(odd) h2,
						.oddcolors:nth-of-type(odd) h1.entry-title,
						.oddcolors:nth-of-type(odd) h2.entry-title,
						.oddcolors:nth-of-type(odd) h2.entry-title a{ color:<?php echo get_theme_mod('even_panel_title_color', '#f36f57'); ?>;}
						.oddcolors:nth-of-type(odd) { color:<?php echo get_theme_mod('even_panel_text_color', '#ffffff'); ?>;}
						.oddcolors:nth-of-type(odd) a { color:<?php echo get_theme_mod('even_panel_link_color', '#ffffff'); ?>;}
						.oddcolors:nth-of-type(odd) .fancy span { color:<?php echo get_theme_mod('even_panel_cta_text_color', '#333333'); ?>;}
						.oddcolors:nth-of-type(odd) .fancy span:before,
						.oddcolors:nth-of-type(odd) .fancy span:after {
							border-bottom: 1px solid <?php echo get_theme_mod('even_panel_line_border_color', '#333333'); ?>;
							border-top: 1px solid <?php echo get_theme_mod('even_panel_line_border_color', '#333333'); ?>;}

				</style>
		<?php
}
add_action( 'wp_head', 'Paneltopage_customize_css');

// End - customizer settings to CSS from within header.




/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function Paneltopage_customize_preview_js() {
	wp_enqueue_script( 'Paneltopage_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'Paneltopage_customize_preview_js' );
