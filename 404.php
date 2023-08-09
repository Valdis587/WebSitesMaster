<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WebSitesMaster
 */

get_header();
get_template_part( 'template-parts/content', 'head');
?>


        <div class="pages container">
            <div class="pages__404-content">
                <h3 class="pages__404-title">404</h3>
                <p class="pages__404-desc">Страница не найдена!</p>
                <div class="pages__404-button">
                    <a href="<?php echo home_url(); ?>" class="pages__404-but but-animete site-button">На главную</a>
                </div>
            </div>
        </div>
    

<?php
get_footer();
