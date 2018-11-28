<?php
/**
 * Functions and definitions of Prosperity child theme.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Prosperity
 * @since 1.0.0
 */

 /**
  *  Sets up child theme defaults and registers support for various WordPress features.
  *
  * @link http://codex.wordpress.org/Child_Themes
  */
function prosperity_child_theme_setup() {
     load_child_theme_textdomain( 'prosperity', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'prosperity_child_theme_setup' );
