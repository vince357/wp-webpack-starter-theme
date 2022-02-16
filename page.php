<?php
/**
 * The template for displaying all pages
 */

get_header();
?>
<div class="ui-width">
	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'content', 'page' );
			endwhile; // End of the loop.
			?>
		</div><!-- #content -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .ui-width -->
<?php
get_footer();
