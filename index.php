<?php
/**
 * The main template file
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
		<?php if ( have_posts() ) : ?>

			<?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post();
				?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

		<?php else : ?>

			<article id="post-0" class="post no-results not-found">

				<div class="ui-width">

					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'webpack' ); ?></h1>
					</header>

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'webpack' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				
				</div><!-- .ui-width -->

			</article><!-- #post-0 -->

		<?php endif; // End have_posts() check. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
