<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WebSitesMaster
 */

get_header();
get_template_part( 'template-parts/content', 'head' );
?>

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
<?php
get_footer();
