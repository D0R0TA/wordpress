<?php
get_header();
?>
<div class="container">
    <?php
if ( have_posts() ) {

	while ( have_posts() ) {
		the_post();
?>
    <div class="row db-article-item">
        <div class="col-md-4">
            <div class="thumbnail-img">
                <?php if (has_post_thumbnail() ) {
                    ?>
                    <a href="<?php the_permalink(); ?>">
                    <?php  
                    the_post_thumbnail( 'large', array('class'=>'img-fluid')); ?>
                    </a>
                    <?php
                }
                    ?>
            </div>
        </div>
        <div class="col-md-8">  
            <?php
            the_title( sprintf( '<h2 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' );
            ?>


            <h6 class="d-md-none d-lg-block">Kategoria: <?php the_category(); ?></h6>
            <h6 class="d-md-none d-lg-block">Data publikacji: <?php the_time('j F Y'); ?></h6>
            <p><?php the_excerpt(); ?></p>

        </div>
  
    </div>
    <?php
        }
   
}
?>
</div>
<?php
get_footer();