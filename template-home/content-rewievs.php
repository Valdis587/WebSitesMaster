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
<section class="reviews">
    <h4 class="site-head-title"><?php echo $websitesmaster['rew-home-title']; ?></h4>
    <p class="site-head-decription"><?php echo $websitesmaster['rew-home-desc']; ?></p>
    <div class="reviews__content">
        <div class="reviews__slider">
            <div class="swiper-wrapper ">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'order' 	 => 'DESC',
                    'post_type' 	 => 'otzyvy',
                    'paged'	         => $paged
                );

                $MY_QUERY = new WP_Query( $args );
                if ( $MY_QUERY->have_posts() ) :
                    while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post();
                        $id = get_post_thumbnail_id();
                        $main=wp_get_attachment_image_src( $id, 'blog' );
                        if($main) {
                            get_template_part('template-parts/content', 'otzyvy');
                        }
                    endwhile;
                endif; ?>
            </div>
        </div>
    </div>
</section>