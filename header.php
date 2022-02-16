<?php
/**
 * The Header template for our theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?> <?php bloginfo( 'name' ); ?></title>
<link rel="profile" href="https://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<div class="ui-width">
			<?php if(is_front_page()): ?>
				<h1 class="site-title">
			<?php else: ?>
				<p class="site-title">
			<?php endif; ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			<?php if(is_front_page()): ?>
				</h1>
			<?php else: ?>
				</p>
			<?php endif; ?>
			<?php if(is_front_page()): ?>
				<h2 class="site-description">
			<?php else: ?>
				<p class="site-description">
			<?php endif; ?>
				<?php bloginfo( 'description' ); ?>
			<?php if(is_front_page()): ?>
				</h2>
			<?php else: ?>
				</p>
			<?php endif; ?>
			
			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle"><?php _e( 'Menu', 'webpack' ); ?></button>
				<a class="visually-hidden" href="#content" title="<?php esc_attr_e( 'Skip to content', 'webpack' ); ?>"><?php _e( 'Skip to content', 'webpack' ); ?></a>
				<?php
				wp_nav_menu(
					array(
						'menu' => 'Primary menu',
						'menu_class'     => 'nav-menu',
						'container'			 => 'ul',
					)
				);
				?>
			</nav><!-- #site-navigation -->
		</div><!-- .ui-width -->
	</header><!-- #masthead -->

	<div id="main" class="wrapper">
