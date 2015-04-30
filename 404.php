<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Paneltopage
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<div class="oddcolors clearfix">
<div class="wrap">
<div class="col-md-12">

			<section class="error-404 not-found">
				<div class="page-content">

					<h2>Can't find that page, sorry... (Error 404)</h2>

						<p>I've got a few tips for you to find it:</p>

						<li>
							<label for="s"><strong>Search</strong> for it:</label>
							<form style="display:inline;" class="search404" action="<?php bloginfo('siteurl');?>">
								<input type="text" value="<?php echo esc_attr($s); ?>" id="s" name="s"/> <input type="submit" value="Search"/>
							</form>
						</li>
						<li>
							<strong>If you typed in a URL...</strong> make sure the spelling, cApitALiZaTiOn, and punctuation are correct. Then try reloading the page.

						</li>
						<li>
							<strong>Look</strong> for it in the <a href="<?php bloginfo('siteurl');?>/sitemap/">sitemap</a>.

						</li>
						<li>
							<strong>Start over again</strong> at my <a href="<?php bloginfo('siteurl');?>">homepage</a> (and please contact me to say what went wrong, so I can fix it).
						</li>
					</ol>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

</div>
</div>
</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
