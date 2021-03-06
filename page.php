<?php
/**
 * The template for displaying all pages.
 *
 */

get_header(); ?>

<div id="content" class="two-thirds">

	<?php
	// Run the page loop to output the page content.

	 if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<?php if ( ! is_front_page() ) { ?>
				<h2 class="entry-title"><?php the_title(); ?></h2>
			<?php } ?>
			
			<section class="entry-content">
				<?php the_content(); ?>
			</section><!-- .entry-content -->
		</article><!-- #post-## -->

	<?php endwhile; ?>

</div><!-- #content-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
