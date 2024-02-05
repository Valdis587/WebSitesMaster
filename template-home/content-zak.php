<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WebSitesMaster
 */
global $websitesmaster;
?>
<section class="zakSite">
        <h4 class="site-head-title"><?php echo $websitesmaster['zak-title']; ?></h4>
        <p class="site-head-decription"><?php echo $websitesmaster['zak-desc']; ?></p>
        <div class="zakSite__content container">
            <div id="zakSite__left" class="zakSite__left back-gr">
                <div class="bg-bl">
                <p><?php echo $websitesmaster['zak-desc1']; ?></p>
            <p class="main-title1"><?php echo $websitesmaster['zak-title2']; ?></p>
            <p ><?php echo $websitesmaster['zak-desc2']; ?></p>
            <?php get_template_part( 'template-parts/content', 'seti' ); ?>
        </div>
        </div>
        <div id="zakSite__right" class="zakSite__right">
            <canvas  data-src="<?php echo get_template_directory_uri() ?>/images/comp/comp.gltf"  id="zakSite__animate-home"  class="zakSite__animate-home"></canvas>
        </div>
        </div>
    </section>