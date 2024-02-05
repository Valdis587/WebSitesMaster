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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="alternate" href="<?php echo home_url(); ?>" hreflang="ru-ru" />
    <meta name="keywords" content="Заказать сайт, заказать сайт недорого, заказать сайт под ключ" />
    <link rel="shortcut icon" sizes="120x120" href="<?php echo home_url(); ?>/favicon.svg" type="image/svg+xml" />
    <link rel="shortcut icon" href="<?php echo home_url(); ?>/favicon.ico" type="image/x-icon" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); global $websitesmaster; ?>
<div class="main-wrap">
<header class="header">
    <div class="header__content container">
       <div id="header__logo" class="header__logo">
       <?php get_template_part( 'template-parts/content', 'logo' ); ?>
       </div>
       <div class="header__menu">
        <button aria-label="menu" class="header__mob-menu"><i class="icon-bars"></i></button>
        <nav class="header__menu-nav">
            <button aria-label="menu-close" class="header__mob-menu-close"><i class="icon-plus"></i></button>   
            <div class="header__logo-mob">
            <?php get_template_part( 'template-parts/content', 'logo' ); ?>
               </div>
               <?php if( has_nav_menu('menu-primary') ) {
                        WebMaster_menu_primary();
                    }?>
        <div class="header__social">
        <?php get_template_part( 'template-parts/content', 'seti' ); ?>
        </div>
        </nav>
       </div>
       <div class="header__phone">
        <a href="https://viber.click/<?php echo $websitesmaster['vb']; ?>"><i class="icon-viber"></i>Viber</a>
        <a href="https://wa.clck.bar/<?php echo $websitesmaster['wh']; ?>"><i class="icon-whatsapp"></i>WhatsApp</a>
       </div>
       <div class="header__button">
        <a href="https://t.me/<?php echo $websitesmaster['tg']; ?>" class="header__but but-animete site-button"><i class="icon-telegram-plane"></i> Задать вопрос</a>
       </div>
    </div>
</header>

<!--wrapper-->
<div class="site-animation-wrapper">
    <canvas class="back-anim"   id="back-anim"></canvas>
   <div class="site-content-wrapper">
