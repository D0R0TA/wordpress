<?php

echo '<h2 class="main_section_description_w">OSTATNIE WPISY</h2>';
echo '<div class="last_posts_section_w">';

$args = array(
'post_type' => 'post',
'post_status' => 'publish',
'posts_per_page' => 3,
'order'=> 'DESC'
);

$the_query = new WP_Query($args);
if($the_query -> have_posts()){
while($the_query -> have_posts()){
    $the_query -> the_post();
    echo '<div class="last_post_item_w">';
    echo '<a href="'.get_the_permalink().'">';
    if ( has_post_thumbnail() ) {
        the_post_thumbnail();
    }

echo "<br>";
echo get_the_title().'</a><br><br>';
    echo '<p>'.custom_excerpt_by_characters(50).'</p>';
    echo '</div>';
}
}

wp_reset_postdata();
echo '</div>';