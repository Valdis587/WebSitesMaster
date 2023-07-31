<?php
/*
Template Name: О нас
*/
get_header();
get_template_part( 'template-parts/content', 'head');
?>
    <div class="site-body" >
        <div class="pages container">
            <div class="pages__content">
                <div class="pages__item">
                    <div class="pages__text">
                        <p><?php echo carbon_get_theme_option('crb_onas'); ?></p>
                    </div>
                </div>
                <div id="ONas__page" class="pages__item">
                    <h2 class="web-title">WebSites Master</h2>
                    <canvas data-src="<?php echo get_template_directory_uri() ?>/images/333.glb" id="ONas__animate"  class="ONas__animate"></canvas>
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
