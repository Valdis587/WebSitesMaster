<?php
/**
 * WebSitesMaster functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WebSitesMaster
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}


require get_template_directory() . '/include/functions/scripts.php';

require get_template_directory() . '/include/functions/settings.php';

require get_template_directory() . '/include/functions/primary-menu.php';

require get_template_directory() . '/include/functions/footer-menu.php';

require get_template_directory() . '/include/functions/breadcrumbs.php';

require get_template_directory() . '/include/functions/paginations.php';

require get_template_directory() . '/include/functions/sidebar.php';

require get_template_directory() . '/include/functions/service.php';

require get_template_directory() . '/include/functions/job.php';

require get_template_directory() . '/include/functions/faq.php';

require get_template_directory() . '/include/functions/reviews.php';

require get_template_directory() . '/include/functions/slider.php';

require get_template_directory() . '/include/functions/price.php';

require get_template_directory() . '/include/admin/redux-framework.php';

require get_template_directory() . '/include/admin/theme/config.php';


require get_template_directory() . '/widgets/job.php';

require get_template_directory() . '/widgets/reviews.php';

require get_template_directory() . '/widgets/job-cat.php';

require get_template_directory() . '/widgets/news.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}