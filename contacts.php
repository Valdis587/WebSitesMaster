<?php
/*
Template Name: Контакты
*/
get_header();
get_template_part( 'template-parts/content', 'head');
global $websitesmaster; 
?>
    <div class="pages container">
        <div class="pages__content">
            <div class="pages__item back-gr">
                <div class="bg-bl pages__pl">
                <ul class="pages__contact-list">
                    <li><i class="icon-phone-alt"></i><a href="tel:<?php echo str_replace(array("(", ")", "-", " "), "", $websitesmaster['phones']) ?>"><?php echo $websitesmaster['phones']; ?></a></li>
                    <li><i class="icon-envelope"></i><a href="mailto:<?php echo $websitesmaster['mail']; ?>"><?php echo $websitesmaster['mail']; ?></a></li>
                    <li><i class="icon-map-marker-alt"></i><a href="#"><?php echo $websitesmaster['addres']; ?></a></li>
                </ul>
                <?php get_template_part( 'template-parts/content', 'seti' ); ?>
            </div>
            </div>
            <div class="pages__item">
                <div class="pages__map">
                <?php echo $websitesmaster['map']; ?>
                </div>
            </div>
        </div>
        <?php
        get_template_part( 'template-home/content', 'price' );
        get_template_part( 'template-home/content', 'job' );
        ?>
    </div>

<?php
get_footer();