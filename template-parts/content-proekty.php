<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WebSitesMaster
 */

?>

<div class="swiper-slide job__item cart-item back-gr-v">
    <div class="bg-bl">
        <div class="job__left">
            <div class="job__img">
                <a href="<?php the_permalink(); ?>">
                    <?php
                    $id = get_post_thumbnail_id();
                    $main=wp_get_attachment_image_src( $id, 'job' );
                    ?>
                    <img src="<?php echo $main[0]; ?>" alt="<?php the_title(''); ?>"></a>
            </div>
        </div>
        <div class="job__right">
            <a href="<?php the_permalink(); ?>"><h3 class="job__title"><?php the_title(''); ?></h3></a>
            <p class="job__name"><?php echo carbon_get_the_post_meta('crb_name_job'); ?></p>
            <p class="job__price"><?php echo carbon_get_the_post_meta('crb_job_price'); ?></p>
            <div class="job__button">
                <a href="<?php the_permalink(); ?>" class="job__but but-animete site-button">Подробнее</a>
            </div>
        </div>
    </div>
</div>