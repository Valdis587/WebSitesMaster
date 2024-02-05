<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WebSitesMaster
 */
global $websitesmaster;
?>
<section class="topPanel">
    <div class="topPanel__img">
        <img src="<?php echo $websitesmaster['head-url']['url']; ?>" alt="<?php bloginfo('name'); ?>">
    </div>
    <div class="topPanel__text">
        <h2 class="topPanel__title"><?php wp_title(''); ?></h2>
        <?php breadcrumbs(); ?>
    </div>
</section>