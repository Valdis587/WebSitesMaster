<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WebSitesMaster
 */
$thumbnail_url = carbon_get_theme_option('crb_logo');
?>
<section class="homePrice">
    <h3 class="site-head-title">Цены на разработку сайтов</h3>
    <p class="site-head-decription">Предлагаем заказать сайт для различных отраслей бизнеса, с разным бюджетом и с разными бизнес-задачами.</p>
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

                <div class="homePrice__item cart-item back-gr-v">
                    <div class="bg-bl">
                        <div class="homePrice__item-left">
                            <h3 class="homePrice__item-title"><?php the_title(''); ?></h3>
                            <p class="homePrice__item-price"><?php echo carbon_get_the_post_meta('crb_price_price'); ?></p>
                        </div>
                        <div class="homePrice__item-right">
                            <div class="homePrice__item-logo">
                                <img src="<?php echo $thumbnail_url; ?>" alt="<?php bloginfo('name'); ?>">
                            </div>
                            <ul class="homePrice__item-list">
                                <?php
                                global $post;
                                $item=carbon_get_post_meta( $post->ID, 'crb_slides_price' );
                                foreach ($item as $mains) {
                                ?>
                                <li><i class="icon-check"></i><?php echo $mains['price_serv']; ?></li>
                                <?php } ?>
                            </ul>
                            <div class="homePrice__item-button">
                                <a aria-label="telegram" href="https://t.me/<?php echo carbon_get_theme_option('crb_telegram_link'); ?>" class="homePrice__item-but but-animete site-button"><i class="icon-telegram-plane"></i> Задать вопрос</a>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endwhile;
        endif; ?>
    </div>
</section>
