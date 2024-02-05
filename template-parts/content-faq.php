<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WebSitesMaster
 */
global $websitesmaster;
$value = redux_post_meta( 'websitesmaster', 'reviews-dop' );
?>
<div class="faq__vop-wrap">
            <button class="faq__vopros"><?php the_title(''); ?></button><i class="icon-plus"></i>
        </div>
            <div class="faq__otvet">
              <p class="back-job"><?php echo $value['faq-desc']; ?></p>
            </div>