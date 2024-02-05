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
<section class="service">
    <h4 class="site-head-title"><?php echo $websitesmaster['serv-home-title']; ?></h4>
    <p class="site-head-decription"><?php echo $websitesmaster['serv-home-desc']; ?></p>
    <div class="service__content container">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            'order' 	 => 'ASC',
            'post_type' 	 => 'uslugi',
            'paged'	         => $paged
        );

        $MY_QUERY = new WP_Query( $args );
        if ( $MY_QUERY->have_posts() ) :
        while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); $value = redux_post_meta( 'websitesmaster', 'uslugi-service' ); ?>
        
        <div class="service__item back-gr">
            <div class="bg-bl">
                <div class="service__item-left">
                    <h4 class="service__item-title"><?php the_title(''); ?></h4>
                    <p class="service__item-desc"><?php echo $value['uslugi-desc']; ?></p>
                </div>
                <div class="service__item-right">
                    <div class="service__item-link">
                        <a class="service__but but-animete site-button" href="<?php the_permalink(); ?>">Подробнее</a>
                    </div>
                    <div class="service__item-img rot-item">
                    <?php get_template_part( 'template-parts/content', 'logo' ); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile;
        endif; ?>
    </div>
</section>