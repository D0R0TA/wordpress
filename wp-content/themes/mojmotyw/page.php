<?php
get_header();

?>
<div class="container db-page">

    <?php
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            ?>
            <h1><? the_title(); ?></h1>
            <p><?php the_content(); ?></p>
            <?php
        
            }
    }
    ?>
</div>
<?php
get_footer();