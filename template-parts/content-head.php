<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WebSitesMaster
 */

?>
<section class="topPanel">
    <div class="topPanel__img">
        <img src="<?php echo carbon_get_theme_option('crb_top_panel'); ?>" alt="<?php bloginfo('name'); ?>">
    </div>
    <div class="topPanel__text">
        <h2 class="topPanel__title"><?php wp_title(''); ?></h2>
        <?php breadcrumbs(); ?>
    </div>
</section>
