<?php
/*
Template Name: Главная
*/
get_header(); ?>
    <div class="site-body-home" >
<?php
get_template_part( 'template-home/content', 'slider' );
get_template_part( 'template-home/content', 'price' );
get_template_part( 'template-home/content', 'job' );
get_template_part( 'template-home/content', 'faq' );
get_template_part( 'template-home/content', 'service' );
get_template_part( 'template-home/content', 'reviews' );
get_template_part( 'template-home/content', 'zak' );
get_template_part( 'template-home/content', 'news' );
?>
    </div>
<?php
get_footer();
?>