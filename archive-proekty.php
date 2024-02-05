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

    <div class="archive blog container">
        <div class="archive__content">
            <div class="archive__left">
                <div class="archive__row">
                    <div class="archive__col">
                        <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                            'order' 	 => 'DESC',
                            'post_type' 	 => 'proekty',
                            'paged'	         => $paged
                        );

                        $MY_QUERY = new WP_Query( $args );
                        if ( $MY_QUERY->have_posts() ) :
                            while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>

                                <?php get_template_part( 'template-parts/content', 'proekty' ); ?>

                            <?php endwhile;
                        endif; ?>
                    </div>
                    <?php wp_main_pagination(); ?>
                </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
        <?php
            get_template_part( 'template-home/content', 'price' );
            get_template_part( 'template-home/content', 'serv' );
            ?>
        </div>
<?php
get_footer();