<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WebDev
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
                            $main=wp_get_attachment_image_src( $id, 'job' );
                            ?>
                            <img src="<?php echo $main[0]; ?>" width="<?php echo $main[1]; ?>" height="<?php echo $main[2]; ?>" alt="<?php bloginfo('name'); ?>">
                        </div>
                        <p class="single__name"><?php echo carbon_get_the_post_meta('crb_name_job'); ?></p>
                        <p class="single__price"><?php echo carbon_get_the_post_meta('crb_job_price'); ?></p>
                        <h4 class="site-head-title"><?php the_title(''); ?></h4>
                        <div class="single__desc">
                            <?php the_content(); ?>
                        </div>
                        <?php if(carbon_get_the_post_meta('crb_job_link')) {?>
                        <div class="single__button">
                            <noindex>
                                <a href="<?php echo carbon_get_the_post_meta('crb_job_link'); ?>" class="single__but but-animete site-button">Перейти на сайт</a>
                            </noindex>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <?php get_sidebar(); ?>
            </div>
            <?php
            get_template_part( 'template-home/content', 'price' );
            get_template_part( 'template-home/content', 'job' );
            ?>
        </div>
    </div><!-- #main -->

<?php
get_footer();