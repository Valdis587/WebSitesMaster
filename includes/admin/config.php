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

require get_template_directory() . '/includes/admin/fildes/theme.php';

require get_template_directory() . '/includes/admin/fildes/reviews.php';

require get_template_directory() . '/includes/admin/fildes/job.php';

require get_template_directory() . '/includes/admin/fildes/service.php';

require get_template_directory() . '/includes/admin/fildes/home.php';

require get_template_directory() . '/includes/admin/fildes/price.php';

require get_template_directory() . '/includes/admin/fildes/faq.php';