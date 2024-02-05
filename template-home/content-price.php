<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WebSitesMaster
 */
global $websitesmaster; 
?>
<section class="homePrice">
    <h3 class="site-head-title"><?php echo $websitesmaster['price-home-title']; ?></h3>
    <p class="site-head-decription"><?php echo $websitesmaster['price-home-desc']; ?></p>
    <div class="homePrice__content container">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            'order' 	 => 'ASC',
            'post_type' 	 => 'price',
            'paged'	         => $paged
        );

        $MY_QUERY = new WP_Query( $args );
        if ( $MY_QUERY->have_posts() ) :
            while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
             <?php get_template_part( 'template-parts/content', 'price' ); ?>
            <?php endwhile;
        endif; ?>
    </div>
</section>