<?php

/**
 * Webpack Theme setup.
 *
 * Sets up theme defaults and registers the various WordPress features that
 * this theme supports.
 *
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses register_nav_menu() To add support for navigation menus.
 *
 * @since Wordpress Webpack Starter Theme 0.1
 */

require_once('inc/scripts.php');
require_once('inc/register-menus.php');
require_once('inc/disable-emojis.php');
require_once('inc/remove-guenberg-global-styles.php');
require_once('inc/remove-generator-name.php');