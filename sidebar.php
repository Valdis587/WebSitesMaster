<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WebSitesMaster
 */

if ( ! is_active_sidebar( 'sidebar-blog' ) ) {
	return;
}
?>

<div class="archive__right sidebar">
	<?php dynamic_sidebar( 'sidebar-blog' ); ?>
</div><!-- #secondary -->
