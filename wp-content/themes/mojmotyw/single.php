<?php
get_header();

if ( have_posts() ) {

	while ( have_posts() ) {
		the_post();
            ?>
            <?php the_title('<h2 class="entry-title">', '</h2>' ); 
            ?>
            <h4>Kategoria: <?php the_category(); ?></h4>
            <h4>Data publikacji: <?php the_time('j F Y'); ?></h4>
            <p><?php the_content(); ?></p>
            <hr>
    <?php
        }
   
}


get_footer();