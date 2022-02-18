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
<meta name="description" content="<?php if ( is_single() ) { single_post_title('', true);  } else { bloginfo('name'); echo " - "; bloginfo('description'); }?>" />
<link rel="profile" href="https://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>" />
<link rel="icon" type="image/x-icon"  href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico?v=1" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
  <header id="masthead" class="site-header">
    <div class="ui-width">
      <div class="row middle-xs">
        <div class="col-xs-4 col-md-2 col-no-gutter">
          <?php if(is_front_page()): ?>
            <h1 class="site-title">
          <?php else: ?>
            <p class="site-title">
          <?php endif; ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php _e('Home', 'webpack'); ?>" rel="home" class="main-header--logo-link">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" width="163" height="42" />
            </a>
          <?php if(is_front_page()): ?>
            </h1>
          <?php else: ?>
            </p>
          <?php endif; ?>
        </div>
        <div class="col-xs-8 col-md-10 col-no-gutter">
          <nav id="site-navigation" class="main-navigation">
            <a class="visually-hidden" href="#content" title="<?php esc_attr_e( 'Skip to content', 'webpack' ); ?>"><?php _e( 'Skip to content', 'webpack' ); ?></a>
            <button class="menu-toggle">
              <span class="visually-hidden">
                <?php _e( 'Menu', 'webpack' ); ?>
              </span>
              <svg width="16" height="16" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2 s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2 S29.104,22,28,22z"/></svg>
            </button>
            <div class="nav-and-search-form" id="main-nav-and-search-form">
              <?php
              wp_nav_menu(
                array(
                  'menu' => 'Primary menu',
                  'menu_class' => 'primary-menu',
                  'container' => 'ul',
                )
              );
              ?>
              <div class="main-nav-search-form-container">
                <?php get_search_form(); ?>
              </div>
            </div>
          </nav><!-- #site-navigation -->
        </div>
      </div><!-- .row -->
      
    </div><!-- .ui-width -->
  </header><!-- #masthead -->

  <div id="main" class="wrapper">
