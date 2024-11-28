<?php
get_header();

?>
<div class="container">
    <div class="row">
        <div class="col-md-8">

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
        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div>
    </div>

</div>
<?php
get_footer();