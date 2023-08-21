<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WebSitesMaster
 */

get_header();
get_template_part( 'template-parts/content', 'head');
?>

        <div class="servicePage container">
            <div class="servicePage__content">
                <div id="servicePage__conten-left" class="servicePage__conten-left">
                    <canvas  data-src="<?php echo get_template_directory_uri() ?>/images/setpage.glb" id="servicePage__animate"  class="servicePage__animate"></canvas>
                </div>
                <div id="servicePage__conten-left" class="servicePage__conten-right">
                    <h3 class="servicePage__conten-right-title"><?php echo carbon_get_the_post_meta('crb_serv_title'); ?></h3>
                    <?php
                    global $post;
                    $item=carbon_get_post_meta( $post->ID, 'crb_slides_uslugi' );
                    foreach ($item as $mains) {
                            ?>
                    <div class="servicePage__conten-table">
                        <span class="servicePage__left"><?php echo $mains['uslugi_text1']; ?> </span>
                        <span class="servicePage__right"><?php echo $mains['uslugi_text3']; ?></span>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <h4 class="site-head-title"><?php the_title(); ?></h4>
            <div class="servicePage__content-text">
                <?php the_content(); ?>
            </div>
            <div class="single__button">
                <?php if(carbon_get_theme_option('crb_telegram_link')) { ?>
                    <a href="https://t.me/<?php echo carbon_get_theme_option('crb_telegram_link'); ?>" class="single__but but-animete site-button"><i class="icon-telegram-plane"></i> Заказать сайт</a>
                <?php } ?>
            </div>
            <?php
            get_template_part( 'template-home/content', 'price' );
            get_template_part( 'template-home/content', 'job' );
            ?>
        </div>

<?php
get_footer();
