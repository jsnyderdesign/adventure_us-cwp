<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Adventure Us
 */

get_header(); ?>
<div class="container">
	<div id="primary" class="content-area two-thirds column">

		<main id="main" class="site-main" role="main">


			<?php if ( have_posts() ) : ?>
				<?php while (have_posts()) : the_post();?>
					<?php $postvariable++; /* count the posts */ ?>
						<?php if ($postvariable == 1) { ?>

							<header class="page-header">
						<?php
							the_archive_title( '<h2 class="page-title">', '</h1>' );
							the_archive_description( '<div class="archive-description">', '</div>' );
						?>
					</header><!-- .page-header -->
						<div class="featured-post">

								<?php get_template_part( 'template-parts/content-homepage', get_post_format() ); ?>
						</div>

					<!-- Styling for all other regular posts -->
					<?php } else { ?>
					<div class="regular-post">
					<?php get_template_part( 'template-parts/content-homepage', get_post_format() ); ?>
					</div>



				<?php } endwhile; ?>

				<div class="pagination">
					<?php the_posts_pagination( array( 'mid_size'  => 6 ) ); ?>
				</div>

				<div class="post-navigation">
					<?php the_posts_navigation(); ?>
				</div>
			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif; ?>
		</main><!-- #main -->

	</div><!-- #primary -->

	<?php
	get_sidebar(); ?>

</div><!-- .container -->
<?php
get_footer();
