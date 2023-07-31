<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WebSitesMaster
 */

?>

<section class="faq">
    <h4 class="site-head-title">Часто задаваемые вопросы</h4>
    <p class="site-head-decription">Здесь вы найдете ответы на некоторые из наиболее распространенных вопросов о разработке сайтов под ключ. Если у вас остались другие вопросы, не стесняйтесь обратиться к нам через мессенджеры</p>
    <div class="faq__content">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            'order' 	 => 'ASC',
            'post_type' 	 => 'faq',
            'paged'	         => $paged
        );

        $MY_QUERY = new WP_Query( $args );
        if ( $MY_QUERY->have_posts() ) :
        while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
        <div class="faq__vop-wrap">
            <button class="faq__vopros"><?php the_title(''); ?></button><i class="icon-plus"></i>
        </div>
        <div class="faq__otvet">
            <p><?php echo carbon_get_the_post_meta('crb_faq_otvet'); ?></p>
        </div>
        <?php endwhile;
        endif; ?>
    </div>
</section>
