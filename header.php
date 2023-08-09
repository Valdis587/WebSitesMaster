<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WebSitesMaster
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1.0">
    <link rel="alternate" href="<?php echo home_url(); ?>" hreflang="ru-ru" />
    <meta name="keywords" content="Заказать сайт, заказать сайт недорого, заказать сайт под ключ" />
    <link rel="shortcut icon" sizes="120x120" href="<?php echo home_url(); ?>/favicon.svg" type="image/svg+xml" />
    <link rel="shortcut icon" href="<?php echo home_url(); ?>/favicon.ico" type="image/x-icon" />
	<?php wp_head(); ?>
</head>
<body>
<div class="site-wrapper" >
    <header class="header">
        <div class="header__content container">
            <div class="header__logo">
                <?php get_template_part( 'template-parts/content', 'logo' ); ?>
            </div>
            <div class="header__menu">
                <button aria-label="menu" class="header__mob-menu"><i class="icon-bars"></i></button>
                <nav class="header__menu-nav">
                    <button aria-label="menu-close" class="header__mob-menu-close"><i class="icon-plus"></i></button>
                    <div class="header__logo-mob">
                       <?php $thumbnail_url = carbon_get_theme_option('crb_logo'); ?>
                        <img src="<?php echo $thumbnail_url; ?>" alt="<?php bloginfo('name'); ?>">
                    </div>
                    <?php if( has_nav_menu('menu-primary') ) {
                        WebMaster_menu_primary();
                    }?>
                    <div class="header__social">
                        <?php get_template_part( 'template-parts/content', 'social' ); ?>
                    </div>
                </nav>
            </div>
            <div class="header__button">
                <a aria-label="telegram" href="https://t.me/<?php echo carbon_get_theme_option('crb_telegram_link'); ?>" class="header__but but-animete site-button"><i class="icon-telegram-plane"></i> Задать вопрос</a>
            </div>
        </div>
    </header>
    <!--wrapper-->
    <div class="site-animation-wrapper">
        <canvas class="back-anim" data-src="<?php echo get_template_directory_uri() ?>/images/111.glb" data-font="<?php echo get_template_directory_uri() ?>/images/TimesNewRoman.json" id="back-anim"></canvas>
        <div class="site-content-wrapper">
