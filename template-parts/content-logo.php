<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WebSitesMaster
 */

?>
    <?php
    $thumbnail_url = carbon_get_theme_option('crb_logo');
    if(is_front_page()) {
        if ($thumbnail_url) {
            ?>
            <img src="<?php echo $thumbnail_url; ?>" alt="<?php bloginfo('name'); ?>">
        <?php } } else  {
        if ($thumbnail_url) { ?>
            <a href="<?php echo home_url(); ?>">
                <img src="<?php echo $thumbnail_url; ?>" alt="<?php bloginfo('name'); ?>">
            </a>
        <?php } } ?>

