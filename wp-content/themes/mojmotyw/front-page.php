<?php
get_header();

?>
<div class="container-fluid">
<div class="row db-baner">

<?php
echo db_get_page("baner");
?>
 </div>
 </div>
<div class="container db-front-page">
    
    <div class="row justify-content-between gx-md-5"> 
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
        <div class="col-md-3 db-sidebar-column">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
    <div class="row db-bottom"></div>
    <div class="container-fluid">
<?php
echo db_get_page("bottom");
?>
</div>
</div>

<?php
get_footer();