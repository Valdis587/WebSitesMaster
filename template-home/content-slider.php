<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WebSitesMaster
 */

?>
<section class="swiper homeSlider">
    <div class="swiper-wrapper homeSlider__content">
        <?php
        global $post;
        $item=carbon_get_post_meta( $post->ID, 'crb_slides_home' );
        foreach ($item as $mains) {
        $id = get_post_thumbnail_id();
        $main=wp_get_attachment_image_src( $mains['imagehomeflide'], 'slide' );
        ?>
        <div class="swiper-slide homeSlider__item">
            <div class="homeSlider__img">
                <img src="<?php echo $main[0]; ?>" alt="<?php bloginfo('name'); ?>">
            </div>
            <div class="homeSlider__text">
                <h2 class="homeSlider__title"><?php echo $mains['homeflide_title1']; ?></h2>
                <p class="homeSlider__desc"><?php echo $mains['homeflide_title2']; ?></p>
                <p class="homeSlider__price"><?php echo $mains['homeflide_title3']; ?></p>
            </div>
        </div>
        <?php } ?>
    </div>
</section>