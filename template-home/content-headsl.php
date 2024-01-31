<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WebSitesMaster
 */
$thumbnail_url = carbon_get_theme_option('crb_back-img');
?>

<section class="homeHead">
    <canvas id="homeHead__star-scene" class="homeHead__star-scene" data-src="<?php echo get_template_directory_uri() ?>/images/home/plan.gltf"></canvas>
    <div class="homeHead__content container">
        <div class="homeHead__col">
            <div id="homeHead__content-left" class="homeHead__content-left">
                <div class="swiper homeHead__content-text">
                    <div class="swiper-wrapper homeHead__content-text-wrapper">
                        <?php
                        global $post;
                        $item=carbon_get_theme_option( 'crb_slides_home22' );
                        foreach ($item as $mains) { ?>
                        <div class="swiper-slide homeHead__content-text-item">
                            <h2 class="homeHead__title"><?php echo $mains['homeflide_title32']; ?></h2>
                            <p class="homeHead__desc"><?php echo $mains['homeflide_title42']; ?></p>
                            <p class="homeHead__price"><?php echo $mains['homeflide_title52']; ?></p>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="homeHead__col-r">
            <div class="homeHead__content-right">
                <div class="swiper homeHead__content-slide-cart">
                    <div class="swiper-wrapper homeHead__content-slide-wrapper">
                        <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                            'posts_per_page' => 10,
                            'order' 	 => 'DESC',
                            'post_type' 	 => 'proekty',
                            'paged'	         => $paged
                        );

                        $MY_QUERY = new WP_Query( $args );
                        if ( $MY_QUERY->have_posts() ) :
                            while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>

                                <?php get_template_part( 'template-parts/content', 'proekty' ); ?>

                            <?php endwhile;
                        endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="homeHead__logo rot-item">
            <?php $thumbnail_url = carbon_get_theme_option('crb_logo'); ?>
            <img src="<?php echo $thumbnail_url; ?>" alt="<?php bloginfo('name'); ?>">
        </div>
    </div>
</section>

