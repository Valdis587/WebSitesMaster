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

<section class="blog">
    <h4 class="site-head-title"><?php echo $websitesmaster['news-home-title']; ?></h4>
    <p class="site-head-decription"><?php echo $websitesmaster['news-home-desc']; ?></p>
    <div class="swiper blog__slider container">
        <div class="swiper-wrapper blog__wrapper ">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'order' 	 => 'DESC',
                'post_type' 	 => 'post',
                'paged'	         => $paged
            );

            $MY_QUERY = new WP_Query( $args );
            if ( $MY_QUERY->have_posts() ) :
                while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>

                    <?php get_template_part( 'template-parts/content', get_post_type() ); ?>

                <?php endwhile;
            endif; ?>
        </div>
    </div>
</section>