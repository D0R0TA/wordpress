<?php
get_header();
?>
<div class="container">
<?php
if ( have_posts() ) {

	while ( have_posts() ) {
		the_post();
            ?>
            <?php the_title('<h2 class="entry-title">', '</h2>' ); 
            ?>
             <div class="thumbnail-img">
                <?php if (has_post_thumbnail() ) {
                    the_post_thumbnail();
                }
                ?>
            </div>
            <h4>Kategoria: <?php the_category(); ?></h4>
            <h4>Data publikacji: <?php the_time('j F Y'); ?></h4>
            <p><?php the_content(); ?></p>
            <hr>
    <?php
        }
   
}
?>
</div>
<?php

get_footer();