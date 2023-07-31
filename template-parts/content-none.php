<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WebSitesMaster
 */

?>

<section style="text-align: center" class="no-results not-found">
	<header  class="page-header">
		<h4 class="pages__404-desc"><?php esc_html_e( 'Ничего не найдено', 'webmaster' ); ?></h4>
	</header><!-- .page-header -->
    <div class="pages__404-button">
        <a href="<?php echo home_url(); ?>" class="pages__404-but but-animete site-button">На главную</a>
    </div>
</section><!-- .no-results -->
