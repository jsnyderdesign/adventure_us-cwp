<?php
	/*
	Single Post Template: [Full-width Post]
	Description: Allows you to make a full width page for featured content.
	*/
?>

<?php
/**
 * The template for displaying all single featured full page posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Adventure Us
 */

get_header(); ?>

	<!-- Adds custom header as background with gradient over the top -->
<div class="header-image" style="
	background: -moz-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 20%, rgba(0, 0, 0, 0.65) 100%), url('<?php the_post_thumbnail_url(); ?>') no-repeat;
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(0, 0, 0, 0)), color-stop(20%, rgba(0, 0, 0, 0)), color-stop(100%, rgba(0, 0, 0, 0.65))), url('<?php the_post_thumbnail_url(); ?>') no-repeat;
  background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 20%, rgba(0, 0, 0, 0.65) 100%), url('<?php the_post_thumbnail_url(); ?>') no-repeat;
  background: -o-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 20%, rgba(0, 0, 0, 0.65) 100%), url('<?php the_post_thumbnail_url(); ?>') no-repeat;
  background: -ms-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 20%, rgba(0, 0, 0, 0.65) 100%), url('<?php the_post_thumbnail_url(); ?>') no-repeat;
  background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 20%, rgba(0, 0, 0, 0.65) 100%), url('<?php the_post_thumbnail_url(); ?>') no-repeat;
	-webkit-background-size: cover;
   -moz-background-size: cover;
   -o-background-size: cover;
   background-size: cover;
	 background-attachment: fixed;
	">
	<!-- Puts site quote here -->
	<p class="site-quote">
		<?php echo get_the_title( $post_id ); ?>
		<br />
		<span class="date-meta"><?php the_time('F jS, Y') ?></span>
	</p>

</div>

<div class="container">
	<div id="primary" class="content-area column">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			the_post_navigation();

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
		
	</div><!-- #primary -->



</div><!-- .container -->



<?php


get_footer(); ?>
