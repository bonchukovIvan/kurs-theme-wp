<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define('KURSTHEME_THEME_URI', get_template_directory_uri());

define('KURSTHEME_THEME_PATH', get_template_directory());

register_nav_menus([
    'main_header_menu' => 'Головне меню сайту'
]);

add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );
add_theme_support('menus');