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
<section class="faq">
    <h4 class="site-head-title"><?php echo $websitesmaster['faq-home-title']; ?></h4>
    <p class="site-head-decription"><?php echo $websitesmaster['faq-home-desc']; ?></p>
    <div class="faq__content">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            'order' 	 => 'ASC',
            'post_type' 	 => 'faq',
            'paged'	         => $paged
        );

        $MY_QUERY = new WP_Query( $args );
        if ( $MY_QUERY->have_posts() ) :
        while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
        <?php get_template_part( 'template-parts/content', 'faq' ); ?>
        <?php endwhile;
        endif; ?>
    </div>
</section>