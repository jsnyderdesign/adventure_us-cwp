<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Adventure Us
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area one-third column" role="complementary">

<?php if( get_theme_mod( 'about_me_checkbox' ) == '') { ?>
	<div class="sidebar-about-me">
		<img src="<?php echo get_theme_mod( 'about_me_image' ); ?>" />
		<div class="sidebar-text">
			<h2><?php echo get_theme_mod( 'about_me_title' ); ?></h2>
			<p><?php echo get_theme_mod( 'about_me_text' ); ?></p>
		</div>
	</div>
<?php } // end if ?>


	<?php dynamic_sidebar( 'sidebar-1' ); ?>

<?php if( get_theme_mod( 'social_checkbox_sidebar' ) == '') { ?>
		<div class="sidebar-social">
			<h2>Follow Me</h2>
					<?php wi_social_icons(); ?>
		</div>
<?php } // end if ?>

</aside><!-- #secondary -->
