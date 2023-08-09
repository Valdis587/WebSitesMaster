<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WebSitesMaster
 */

?>

<section class="service">
    <h4 class="site-head-title">Заказать сайт недорого</h4>
    <p class="site-head-decription">Цена на разработку сайта напрямую зависит от количества часов, которые IT-специалист затрачивает на работу. Заказав сайт у нас клиенты получают надежного партнера, который дает гарантии бесперебойной, оперативной и корректной работы сайта вне зависимости от таких параметров как размеры, загрузка и др.</p>
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
        while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
        <div class="service__item back-gr">
            <div class="bg-bl">
                <div class="service__item-left">
                    <h4 class="service__item-title"><?php the_title(''); ?></h4>
                    <p class="service__item-desc"><?php echo carbon_get_the_post_meta('crb_serv_home'); ?></p>
                </div>
                <div class="service__item-right">
                    <div class="service__item-link">
                        <a class="header__but but-animete site-button" href="<?php the_permalink(); ?>">Подробнее</a>
                    </div>
                    <div class="service__item-img rot-item">
                        <?php $thumbnail_url = carbon_get_theme_option('crb_logo'); ?>
                        <img src="<?php echo $thumbnail_url; ?>" alt="<?php bloginfo('name'); ?>">
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile;
        endif; ?>
    </div>
</section>