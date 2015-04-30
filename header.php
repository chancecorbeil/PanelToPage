<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Paneltopage
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<body <?php body_class(); ?>>
<div id="page" class="hfeed site" name="top">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'Paneltopage' ); ?></a>

<nav id="site-navigation" class="main-navigation" role="navigation">
	<div class="wrap">
		<button class="menu-toggle"><?php _e( 'Menu', 'Paneltopage' ); ?></button>
		<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
	</div>
</nav><!-- #site-navigation -->

	<div class="wrap">
		<header id="masthead" class="site-header col-md-12" role="banner">
			<div class="site-branding">

				<?php if(is_front_page()) : ?>
				<!--  This is a homepage -->
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php endif; ?>

				<?php if(!is_front_page()) : ?>
				<!-- This is not a homepage -->
				<h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
				<?php endif; ?>

				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>

			</div>
		</header><!-- #masthead -->
	</div>

	<div id="content" class="site-content">
