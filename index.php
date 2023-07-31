<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WebSitesMaster
 */

get_header();

get_template_part( 'template-parts/content', 'head');
?>
    <div class="site-body" >
       <div class="archive blog container">
             <div class="archive__content">
                 <div class="archive__left">
                      <div class="archive__row">
                          <div class="archive__col">
		<?php
		if ( have_posts() ) :
            

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;


		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
                          </div>
                          <?php wp_main_pagination(); ?>
                    </div>
                 </div>
        <?php get_sidebar(); ?>
             </div>
           <?php
           get_template_part( 'template-home/content', 'price' );
           get_template_part( 'template-home/content', 'job' );
           ?>
       </div>
    </div>
<?php
get_footer();
