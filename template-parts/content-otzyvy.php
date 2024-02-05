<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WebSitesMaster
 */
global $websitesmaster;
$value = redux_post_meta( 'websitesmaster', 'reviews-dop' );
?>
<div class="swiper-slide reviews__item back-gr">
    <div class="bg-bl">
        <div class="reviews__left">
            <div class="reviews__img back-gr-v">
                <?php
                $id = get_post_thumbnail_id();
                $main=wp_get_attachment_image_src( $id, 'blog' );
                if ($main) {?>
                    <img src="<?php echo $main[0]; ?>" alt="<?php bloginfo('description'); ?>">
                <?php } else { ?>
                    <img class="bg-bl" width="70px" height="70px" src="<?php echo get_template_directory_uri() . '/images/rewievs.jpg'; ?>" alt="<?php bloginfo('name'); ?>">
                <?php } ?>
            </div>
        </div>
        <div class="reviews__right">
            <span class="reviews__name"><?php the_title(''); ?></span>
            <span class="reviews__job"><?php echo $value['title-reviews']; ?></span>
            <span class="reviews__date"><?php echo $value['reviews-date']; ?></span>
            <p class="reviews__title"><?php echo $value['reviews-desc']; ?></p>
        </div>
    </div>
</div>