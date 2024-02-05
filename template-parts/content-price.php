<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WebSitesMaster
 */
global $websitesmaster;
$value = redux_post_meta( 'websitesmaster', 'price-dop' );
?>
<div class="homePrice__item cart-item back-gr-v">
                <div class="bg-bl">
                    <div class="homePrice__item-left">
                        <h3 class="homePrice__item-title"><?php the_title(''); ?></h3>
                        <p class="homePrice__item-price"><?php echo $value['price-price']; ?></p>
                    </div>
                    <div class="homePrice__item-right">
                        <div class="homePrice__item-logo">
                        <?php get_template_part( 'template-parts/content', 'logo' ); ?>
                        </div>
                        <ul class="homePrice__item-list">
                            <li><i class="icon-check"></i><?php echo $value['price-serv1']; ?></li>
                            <li><i class="icon-check"></i><?php echo $value['price-serv2']; ?></li>
                            <li><i class="icon-check"></i><?php echo $value['price-serv3']; ?></li>
                            <li><i class="icon-check"></i><?php echo $value['price-serv4']; ?></li>
                            <li><i class="icon-check"></i><?php echo $value['price-serv5']; ?></li>
                        </ul>
                        <div class="homePrice__item-button">
                            <a href="https://t.me/<?php echo $websitesmaster['tg']; ?>" class="homePrice__item-but but-animete site-button"><i class="icon-telegram-plane"></i> Задать вопрос</a>
                        </div>
                    </div>
                </div>
            </div>