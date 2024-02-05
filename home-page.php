<?php
/*
Template Name: Главная
*/
get_header();
get_template_part( 'template-home/content', 'slider' );
get_template_part( 'template-home/content', 'price' );
get_template_part( 'template-home/content', 'job' );
get_template_part( 'template-home/content', 'zak' );
get_template_part( 'template-home/content', 'faq' );
get_template_part( 'template-home/content', 'serv' );
get_template_part( 'template-home/content', 'rewievs' );
get_template_part( 'template-home/content', 'news' );
get_footer();