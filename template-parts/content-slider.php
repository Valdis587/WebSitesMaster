<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WebSitesMaster
 */
global $websitesmaster;
$value = redux_post_meta( 'websitesmaster', 'slider-dop' );
?>
<div class="swiper-slide homeHead__content-text-item">
        <h2 class="homeHead__title"><?php the_title(''); ?></h2>
            <p class="homeHead__desc"><?php echo $value['slider-desc']; ?></p>
                <p class="homeHead__price"><?php echo $value['slider-price']; ?></p>
</div>