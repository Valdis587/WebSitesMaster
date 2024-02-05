<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WebSitesMaster
 */

?>
<?php global $websitesmaster; ?>
<ul class="social-list">
                <?php if($websitesmaster['wh']) { ?>
                <li class="whatsapp icon-anim"><a href="https://wa.clck.bar/<?php echo $websitesmaster['wh']; ?>"><i class="icon-whatsapp"></i></a></li>
                <?php } ?>
                <?php if($websitesmaster['tg']) { ?>
                <li class="telegram icon-anim"><a href="https://t.me/<?php echo $websitesmaster['tg']; ?>"><i class="icon-telegram-plane"></i></a></li>
                <?php } ?>
                <?php if($websitesmaster['vb']) { ?>
                <li class="viber icon-anim"><a href="https://viber.click/<?php echo $websitesmaster['vb']; ?>"><i class="icon-viber"></i></a></li>
                <?php } ?>
                <?php if($websitesmaster['sk']) { ?>
                <li class="skype icon-anim"><a href="skype:<?php echo $websitesmaster['sk']; ?>"><i class="icon-skype"></i></a></li>
                <?php } ?>
            </ul>