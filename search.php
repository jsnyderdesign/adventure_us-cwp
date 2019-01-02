<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Adventure Us
 */
get_header(); ?>
	<div class="container">
	<section id="primary" class="content-area two-thirds column">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h2 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'adventure_us' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				 ?>

			<div class="regular-post"><?php	get_template_part( 'template-parts/content-homepage', 'search' ); ?></div>
			<?php
		endwhile; ?>
		<div class="post-navigation"><?php
			the_posts_navigation(); ?></div> <?php
		else : ?>
			<div class="search-error">
		<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'adventure_us' ); ?></p>
			<?php get_search_form(); ?>
		</div>
<?php
 endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->
	<?php
	get_sidebar(); ?>
</div><!-- .container -->
<?php
get_footer();
