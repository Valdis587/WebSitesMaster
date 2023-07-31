<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WebSitesMaster
 */

get_header();
get_template_part( 'template-parts/content', 'head');
global $webmaster;
?>
    <div class="site-body" >
    <div class="archive container">
    <div class="archive__content">
        <div class="archive__left">
            <div class="archive__row single">
                <div class="single__img">
                    <?php
                    $id = get_post_thumbnail_id();
                    $main=wp_get_attachment_image_src( $id, 'blog' );
                    ?>
                    <img src="<?php echo $main[0]; ?>" alt="<?php bloginfo('name'); ?>">
                </div>
                <h4 class="site-head-title"><?php the_title(); ?></h4>
                <div class="single__desc">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
        <?php get_sidebar(); ?>
    </div>
    </div>
	</div><!-- #main -->

<?php
get_footer();
