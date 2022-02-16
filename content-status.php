<?php
/**
 * The template for displaying posts in the Status post format
 */

/* translators: %s: Post title. */
$post_title = sprintf( __( 'Permalink to %s', 'webpack' ), the_title_attribute( 'echo=0' ) );
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-header">
			<header>
				<h1><?php the_author(); ?></h1>
				<h2><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( $post_title ); ?>" rel="bookmark"><?php echo get_the_date(); ?></a></h2>
			</header>
		</div><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'webpack' ) ); ?>
		</div><!-- .entry-content -->

		<footer class="entry-meta">
			<?php if ( comments_open() ) : ?>
			<div class="comments-link">
				<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'webpack' ) . '</span>', __( '1 Reply', 'webpack' ), __( '% Replies', 'webpack' ) ); ?>
			</div><!-- .comments-link -->
			<?php endif; // comments_open() ?>
			<?php edit_post_link( __( 'Edit', 'webpack' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
