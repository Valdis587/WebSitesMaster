<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WebSitesMaster
 */

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
            <span class="reviews__job"><?php echo carbon_get_the_post_meta('crb_name'); ?></span>
            <span class="reviews__date"><?php echo carbon_get_the_post_meta('crb_date'); ?></span>
            <p class="reviews__title"><?php echo carbon_get_the_post_meta('crb_reviews'); ?></p>
        </div>
    </div>
</div>
