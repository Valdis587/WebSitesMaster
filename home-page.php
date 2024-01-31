<?php
/*
Template Name: Главная
*/
get_header();

get_template_part( 'template-home/content', 'headsl' );
get_template_part( 'template-home/content', 'price' );
get_template_part( 'template-home/content', 'job' );
get_template_part( 'template-home/content', 'zak' );
get_template_part( 'template-home/content', 'faq' );
get_template_part( 'template-home/content', 'service' );
get_template_part( 'template-home/content', 'reviews' );
get_template_part( 'template-home/content', 'news' );


get_footer();
?>