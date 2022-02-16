<?php
/**
 * The template for displaying Archive pages
 */

get_header(); ?>

	<section id="primary" class="site-content">
		<div id="content" role="main">

		<?php if ( have_posts() ) : ?>
			<header class="archive-header">
				<h1 class="archive-title">
				<?php
				if ( is_day() ) {
					/* translators: %s: Date. */
					printf( __( 'Daily Archives: %s', 'webpack' ), '<span>' . get_the_date() . '</span>' );
				} elseif ( is_month() ) {
					/* translators: %s: Date. */
					printf( __( 'Monthly Archives: %s', 'webpack' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'webpack' ) ) . '</span>' );
				} elseif ( is_year() ) {
					/* translators: %s: Date. */
					printf( __( 'Yearly Archives: %s', 'webpack' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'webpack' ) ) . '</span>' );
				} else {
					_e( 'Archives', 'webpack' );
				}
				?>
				</h1>
			</header><!-- .archive-header -->

			<?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the post format-specific template for the content. If you want
				 * to use this in a child theme then include a file called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );

			endwhile;

			?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
