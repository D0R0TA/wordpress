<?php

function mojmotyw_scripts() {

		wp_enqueue_style( 'mojmotyw-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
	}

add_action( 'wp_enqueue_scripts', 'mojmotyw_scripts' );

function mojmotyw_theme_support_setup() {
    add_theme_support( 'menus');
    register_nav_menu( 'primary', 'Main Header Menu');
    register_nav_menu( 'footer', 'Footer Menu');

    add_theme_support( 'post-thumbnails');
    set_post_thumbnail_size( 600, 400);
    add_theme_support( 'custom-logo');
    add_theme_support( 'custom-background');
    add_theme_support( 'widgets');
}
add_action('after_setup_theme','mojmotyw_theme_support_setup');

function new_excerpt_length($length) {
    return 25;
}
add_filter( 'excerpt_length','new_excerpt_length');

function mojmotyw_register_widgets() {

    $shared_args = array(
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
        'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
        'after_widget' => '</div></div>',
    );

    register_sidebar(
        array_merge(
            $shared_args,
            array(
                'name'  => __('Widget #1', 'mojmotyw'),
                'id'    => 'sidebar-1',
                'description' => __('Desc', 'mojmotyw'),
            )
        )
    );
    register_sidebar(
        array_merge(
            $shared_args,
            array(
                'name'  => __('Widget #2', 'mojmotyw'),
                'id'    => 'sidebar-2',
                'description' => __('Desc', 'mojmotyw'),
            )
        )
    );

}
add_action('widgets_init','mojmotyw_register_widgets');

function db_get_page($arg){
    global $wpdb;
    $posts = $wpdb->get_row("
    SELECT * 
    FROM `$wpdb->posts`p 
    WHERE p.post_title='$arg' AND p.post_type='page' AND p.post_status='publish';");

if($posts != 0){
return $posts->post_content;
}
}

function get_category_icon($catList) {
$icons = "";
foreach(  $catList as $c){
    if($c==1){
        $icons .= '<i class="bi bi-x-diamond-fill" style="color: cornflowerblue;"></i>'." ";
    }
    elseif ($c==4){
        $icons .= '<i class="bi bi-water" style="color: cornflowerblue;"></i>'." ";
    }
    else {
        $icons .= '<i class="bi bi-window-dock" style="color: cornflowerblue;"></i>'." ";
    }
}
return $icons;
}