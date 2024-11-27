<?php

function mojmotyw_scripts() {

		wp_enqueue_style( 'mojmotyw-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
	}

add_action( 'wp_enqueue_scripts', 'mojmotyw_scripts' );

function mojmotyw_menu_setup() {
    add_theme_support( "menus");
    register_nav_menu( 'primary', 'Main Header Menu');
    register_nav_menu( 'footer', 'Footer Menu');
}
add_action('init','mojmotyw_menu_setup');