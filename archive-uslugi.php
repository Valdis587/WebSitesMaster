<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WebSitesMaster
 */

get_header();
get_template_part( 'template-parts/content', 'head');
?>
    <div class="archive container">
        <div class="archive__service">
            <?php
            get_template_part( 'template-home/content', 'serv' );
            get_template_part( 'template-home/content', 'price' );
            get_template_part( 'template-home/content', 'job' );
            ?>
        </div>
    </div>
<?php
get_footer();