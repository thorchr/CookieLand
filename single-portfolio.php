<?php
/**
 * The template for displaying all single posts.
 *
 * @package cla
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

					<div class="entry-meta">
						<?php cla_posted_on(); ?>
					</div><!-- .entry-meta -->
				</header><!-- .entry-header -->
				<div id="information" class="col-md-6">
					<div class="portfolio-media">
						<?php echo pods_image( get_post_meta( get_the_id(), 'media', true ), 'medium' ); ?>
					</div>
					<div class="customer">
						<h4><?php echo get_post_meta(get_the_id(), 'kunde', true); ?></h4>
					</div>
				</div>
				<div class="entry-content col-md-6">
					<?php the_content(); ?>
					<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . __( 'Pages:', 'cla' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->

				<footer class="entry-footer">
					<?php cla_entry_footer(); ?>
				</footer><!-- .entry-footer -->
			</article><!-- #post-## -->


		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
