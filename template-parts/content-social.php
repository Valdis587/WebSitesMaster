<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WebSitesMaster
 */

?>

<ul class="social-list">
    <?php if(carbon_get_theme_option('crb_whatsapp_link')) {?>
    <li class="whatsapp icon-anim"><a aria-label="whatsapp" href="https://wa.clck.bar/<?php echo carbon_get_theme_option('crb_whatsapp_link'); ?>"><i class="icon-whatsapp"></i></a></li>
    <?php } ?>
    <?php if(carbon_get_theme_option('crb_telegram_link')) {?>
    <li class="telegram icon-anim"><a aria-label="telegram" href="https://t.me/<?php echo carbon_get_theme_option('crb_telegram_link'); ?>"><i class="icon-telegram-plane"></i></a></li>
    <?php } ?>
    <?php if(carbon_get_theme_option('crb_viber_link')) {?>
    <li class="viber icon-anim"><a aria-label="viber" href="https://viber.click/<?php echo carbon_get_theme_option('crb_viber_link'); ?>"><i class="icon-viber"></i></a></li>
    <?php } ?>
    <?php if(carbon_get_theme_option('crb_skype_link')) {?>
    <li class="skype icon-anim"><a aria-label="skype" href="skype:<?php echo carbon_get_theme_option('crb_skype_link'); ?>"><i class="icon-skype"></i></a></li>
    <?php } ?>
</ul>
