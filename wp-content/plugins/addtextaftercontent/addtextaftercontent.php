<?php
/**
 * @package add_text_after_content
 * @version 1.0.1
 */
/*
Plugin Name: Add text after content
Description: Nasz najlepszy pierwszy plugin, który dodaje tekst do treści artykułu i strony
Author: Dorotka
Version: 1.0.1
Author URI: 
*/
if( ! defined ( 'ABSPATH')) {
    exit; // Exit if accessed directly (Zabezpieczenie)
}

function add_text_after_content_change_content($content){

    // if(in_category('a a') && !is_front_page && is_page && is_single() && is_singular('post') && in_the_loop() && is_main_query()

if(is_page() && is_main_query()){

$before_content = '<p class="added-text-before"> Hello! </p>';

$after_content = '<p class="added-text"> Do zobaczyska następnym razem! </p>';

printf($before_content.$content.$after_content);

echo 
"<style>
.added-text-before{
color: blue;
font-weight: 600;
}

.added-text {
color: red;
font-size: 10px;
}
</style>";

} else {
    printf($content);
}
    // return $content;
}

add_filter('the_content','add_text_after_content_change_content');

