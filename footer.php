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
global $websitesmaster;
?>
</div><!--site-content-wrapper-->
</div><!--site-animation-wrapper-->
<footer class="footer">
    <div class="footer__content container">
        <div class="col-info">
            <div class="footer__item footer__info">
                <div class="footer__logo">
                <?php get_template_part( 'template-parts/content', 'logo' ); ?>
                </div> 
                <div class="footer__text">
                    <p><?php echo $websitesmaster['foot-desc']; ?></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="footer__item footer__menu">
                <h5 class="footer__title">Страницы</h5>
                <?php if( has_nav_menu('menu-page') ) {
                WebMaster_menu_page();
            }?>
            </div>
        </div>
        <div class="col">
            <div class="footer__item footer__menu">
                <h5 class="footer__title">Услуги</h5>
                <?php if( has_nav_menu('menu-service') ) {
                WebMaster_menu_service();
            }?>
            </div>
        </div>
        <div class="col">
            <div class="footer__item footer__contact">
                <h5 class="footer__title">Контакты</h5>
                <?php get_template_part( 'template-parts/content', 'seti' ); ?>
            </div>
        </div>
    </div>
    <div class="footer__copy">
        <p>© 2021</p>
    </div>
</footer>

<div class="popup">
    <div class="popup__item container">
    <div class="popup__body back-gr popup__show">
        <button aria-label="popup close" class="popup__close"><i class="icon-plus"></i></button>
        <div class="popup__content">
            <div class="popup__left">
                <img src="<?php echo $websitesmaster['pop-url']['url']; ?>" alt="<?php bloginfo('name'); ?>">
            </div>
            <div id="popup__right" class="popup__right">
                <h1 class="popup__title"><?php echo $websitesmaster['pop-title']; ?></h1>
                <p class="popup__desc"><?php echo $websitesmaster['pop-price']; ?></p>
                <div class="popup__button">
                    <a href="https://t.me/<?php echo $websitesmaster['tg']; ?>" class="popup__but site-button but-animete"><i class="icon-telegram-plane"></i>Заказать сайт</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div><!--popup-->
</div><!--main wrapp-->

<?php wp_footer(); ?>
<?php 
if($websitesmaster['yandex']) {
    echo $websitesmaster['yandex'];
}
if($websitesmaster['google']) {
    echo $websitesmaster['google'];
}
?>
</body>
</html>
