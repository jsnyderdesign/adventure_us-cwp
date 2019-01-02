<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Adventure Us
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
		<div class="site-info">
			<?php if ( get_theme_mod( 'site_logo' ) ) : ?>
				<div class='site-footer-logo'>
					<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'site_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
				</div>
			<?php else : ?>
	 			<div class="site-branding-title">
					<h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
				</div>
			<?php endif; ?>
			<div class="footer-nav">
			<p class="footer-tagline">Explore</p>
			<nav id="main-navigation" class="main-navigation footer-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->
		</div><!-- .footer-nav -->

		<!-- Adds Social Media buttons -->
		<?php if( get_theme_mod( 'social_checkbox_footer' ) == '') { ?>
		<div class="footer-social-media">
				<?php wi_social_icons(); ?>
		</div><!-- .footer-social-media -->
		<?php } // end if ?>

		</div><!-- .site-info -->
	</div><!-- .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
