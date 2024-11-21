<?php
function add_theme_scripts() {
	wp_enqueue_style( 'style', get_template_directory_uri(). '/css/style.css', array(), filemtime(get_template_directory().'/css/style.css') );

    wp_enqueue_script( 'script', get_template_directory_uri() . '/index.js', array(), filemtime(get_template_directory().'/index.js'), true);

}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

function custom_excerpt_by_characters($char_limit) {
    $excerpt = get_the_excerpt();
    if (strlen($excerpt) > $char_limit) {
        $excerpt = substr($excerpt, 0, $char_limit) . '[...]';
    }
    echo $excerpt;
}


function theme_setup(){
    add_theme_support( 'post-thumbnails' );
     add_theme_support( 'custom-background');
     add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 80,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true,
    ) );
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support( 'title-tag' );
   }
add_action('after_setup_theme','theme_setup');