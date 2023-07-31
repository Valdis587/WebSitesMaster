<?php
/*
Template Name: Контакты
*/
get_header();
get_template_part( 'template-parts/content', 'head');
?>

<div class="site-body" >
    <div class="pages container">
        <div class="pages__content">
            <div class="pages__item">
                <ul class="pages__contact-list">
                    <li><i class="icon-phone-alt"></i><a href="tel:<?php echo str_replace(array("(", ")", "-", " "), "", carbon_get_theme_option('crb_phone_link')) ?>"><?php echo carbon_get_theme_option('crb_phone_link'); ?></a></li>
                    <li><i class="icon-envelope"></i><a href="mailto:<?php echo carbon_get_theme_option('crb_mail_link'); ?>"><?php echo carbon_get_theme_option('crb_mail_link'); ?></a></li>
                    <li><i class="icon-map-marker-alt"></i><a href=""><?php echo carbon_get_theme_option('crb_adress_link'); ?></a></li>
                </ul>
                <?php get_template_part( 'template-parts/content', 'social' ); ?>
            </div>
            <div class="pages__item">
                <div class="pages__map">
                    <?php echo carbon_get_theme_option('crb_map_link'); ?>
                </div>
            </div>
        </div>
        <?php
        get_template_part( 'template-home/content', 'price' );
        get_template_part( 'template-home/content', 'job' );
        ?>
    </div>
</div>
<?php
get_footer();