<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define('KURSTHEME_THEME_URI', get_template_directory_uri());

define('KURSTHEME_THEME_PATH', get_template_directory());

function wbsmd_add_theme_scripts() {
    /* 
     * include styles
     */
	wp_enqueue_style( 'style', KURSTHEME_THEME_URI . '/assets/css/style.min.css' );
	// wp_enqueue_style( 'gooseberry', KURSTHEME_THEME_URI . '/assets/fonts/goosberry_version_02.otf' );
	// wp_enqueue_style( 'bct', KURSTHEME_THEME_URI . '/assets/fonts/bct.ttf' );
    wp_enqueue_style('custom-fonts', KURSTHEME_THEME_URI . '/assets/fonts/custom-fonts.css', array(), null);
    /* 
     * register jquery
     */
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', KURSTHEME_THEME_URI . '/assets/js/src/jquery-3.7.1.min.js' );
    /* 
     * include scripts
     */
    wp_enqueue_script( 'wp-util' );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'app', KURSTHEME_THEME_URI . '/assets/js/app.min.js', ['jquery', 'wp-util'] );
}
add_action( 'wp_enqueue_scripts', 'wbsmd_add_theme_scripts' );

register_nav_menus([
    'main_header_menu' => 'Головне меню сайту'
]);

add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );
add_theme_support('menus');