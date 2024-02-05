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
<section class="job">
    <h3 class="site-head-title"><?php echo $websitesmaster['job-home-title']; ?></h3>
    <p class="site-head-decription"><?php echo $websitesmaster['job-home-desc']; ?></p>
    <div class="swiper job__carusel container">
        <div class="swiper-wrapper job__wrapper ">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'posts_per_page' => 10,
                'order' 	 => 'DESC',
                'post_type' 	 => 'proekty',
                'paged'	         => $paged
            );

            $MY_QUERY = new WP_Query( $args );
            if ( $MY_QUERY->have_posts() ) :
                while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>

                    <?php get_template_part( 'template-parts/content', 'proekty' ); ?>

                <?php endwhile;
            endif; ?>
        </div>
    </div>
</section>