<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WebSitesMaster
 */

?>
</div>
</div>
<footer class="footer">
    <div class="footer__content container">
        <div class="col-info">
        <div class="footer__item footer__info">
            <div class="footer__logo">
                <?php get_template_part( 'template-parts/content', 'logo' ); ?>
            </div>
            <div class="footer__text">
                <?php if(carbon_get_theme_option('crb_text_footer')) {?>
                <p><?php echo carbon_get_theme_option('crb_text_footer'); ?></p>
                <?php } ?>
            </div>
        </div>
        </div>
        <div class="col">
        <div class="footer__item">
            <h5 class="footer__title"><?php echo carbon_get_theme_option('crb_menu_footer1'); ?></h5>
            <?php if( has_nav_menu('menu-page') ) {
                WebMaster_menu_page();
            }?>
        </div>
        </div>
        <div class="col">
        <div class="footer__item">
            <h5 class="footer__title"><?php echo carbon_get_theme_option('crb_menu_footer2'); ?></h5>
            <?php if( has_nav_menu('menu-service') ) {
                WebMaster_menu_service();
            }?>
        </div>
        </div>
        <div class="col">
        <div class="footer__item">
            <h5 class="footer__title"><?php echo carbon_get_theme_option('crb_menu_footer3'); ?></h5>
            <?php get_template_part( 'template-parts/content', 'social' ); ?>
        </div>
        </div>
    </div>
    <div class="footer__copy">
        <?php if(carbon_get_theme_option('crb_copy')) {?>
            <p class="copy"><?php echo carbon_get_theme_option('crb_copy'); ?></p>
        <?php } ?>
    </div>
</footer>
<div class="popup">
    <div class="popup__item container">
        <div class="popup__body back-gr popup__show">
            <button aria-label="popup close" class="popup__close"><i class="icon-plus"></i></button>
            <div class="popup__content">
                <div class="popup__left">
                    <img src="<?php echo carbon_get_theme_option('crb_img_popup'); ?>" alt="<?php bloginfo('name');?>">
                </div>
                <div id="popup__right" class="popup__right">
                    <h1 class="popup__title"><?php echo carbon_get_theme_option('crb_title_popup'); ?></h1>
                    <p class="popup__desc"><?php echo carbon_get_theme_option('crb_price_popup'); ?></p>
                    <div class="popup__button">
                        <a aria-label="telegram" href="https://t.me/<?php echo carbon_get_theme_option('crb_telegram_link'); ?>" class="popup__but site-button but-animete"><i class="icon-telegram-plane"></i>Сделать заказ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--popup-->
</div><!--main wrapp-->

<?php
if(carbon_get_theme_option('crb_yandex')) {
    echo carbon_get_theme_option('crb_yandex');
}
if(carbon_get_theme_option('crb_google')) {
    echo carbon_get_theme_option('crb_google');
}
wp_footer(); ?>
<!--site-wrapper-->
</body>
</html>
