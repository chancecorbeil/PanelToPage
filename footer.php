<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Paneltopage
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="socialicons">
			<?php if ( ! dynamic_sidebar( 'socialmediawidget' ) ) : ?>
			<?php endif; // end sidebar widget area ?>
		</div>

		<?php if( get_theme_mod( 'hide_back_to_top' ) == '') { ?>
			<a href="#top" class="rocketup">
				<?php
				echo '<img src="';
				echo get_theme_mod( 'back_to_top_graphic', '/wp-content/themes/PanelToPage/images/up-arrow.png' );
				echo '" />';
				?>
			</a>
		<?php } // end if ?>












		<div class="wrap">

			<div class="footerwidget col-md-4">
				<?php if ( ! dynamic_sidebar( 'footerwidgetone' ) ) : ?>
				<?php endif; // end footer widget area ?>
			</div>

			<div class="footerwidget col-md-4">
				<?php if ( ! dynamic_sidebar( 'footerwidgettwo' ) ) : ?>
				<?php endif; // end footer widget area ?>
			</div>

			<div class="footerwidget col-md-4">
				<?php if ( ! dynamic_sidebar( 'footerwidgetthree' ) ) : ?>
				<?php endif; // end footer widget area ?>
			</div>

			<div class="site-info col-md-12">


				<?php if( get_theme_mod( 'hide_copyright' ) == '') { ?>
					<?php echo get_theme_mod( 'copyright_textbox', 'Copyright' ); ?>
						</a>
				<?php } // end if ?>





			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div>
</div><!-- #page -->


<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-60473271-1', 'auto');
	ga('send', 'pageview');
</script>

<?php wp_head(); ?>

</head>

<link href='http://fonts.googleapis.com/css?family=Kreon|Courgette|Open+Sans+Condensed:300|Lato' rel='stylesheet' type='text/css'>

<?php wp_footer(); ?>

</body>
</html>
