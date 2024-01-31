<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WebSitesMaster
 */

?>

<div id="post-<?php the_ID(); ?>" class="swiper-slide blog__item cart-item back-gr-v">
    <div class="bg-bl">
        <div class="blog__left">
            <div class="blog__img">
                <a href="<?php the_permalink(); ?>">
                    <?php
                    $id = get_post_thumbnail_id();
                    $main=wp_get_attachment_image_src( $id, 'blog' );
                    ?>
                <img src="<?php echo $main[0]; ?>" alt="<?php the_title(''); ?>">
                </a>
            </div>
            <span class="blog__date"><?php the_date( 'Y-m-d'); ?></span>
            <span class="blog__autor"><?php the_author(); ?></span>
        </div>
        <div class="blog__right">
            <a href="<?php the_permalink(); ?>"><h4 class="blog__title"><?php the_title(''); ?></h4></a>
            <p class="blog__desc"><?php do_excerpt(get_the_excerpt(), 8); ?></p>
            <div class="blog__button">
                <a href="<?php the_permalink(); ?>" class="blog__but but-animete site-button">Читать далее</a>
            </div>
        </div>
    </div>
</div><!-- #post-<?php the_ID(); ?> -->


