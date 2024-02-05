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

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function websitesmaster_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'websitesmaster' ),
			'id'            => 'sidebar-blog',
			'description'   => esc_html__( 'Add widgets here.', 'websitesmaster' ),
            'before_widget' => '<section id="%1$s" class="sidebar__widget back-gr-v widget %2$s"><div class="bg-bl">',
            'after_widget'  => '</div></section>',
            'before_title'  => '<div class="sidebar__widget-head"><h3 class="sidebar__widget-title">',
            'after_title'   => '</h3></div>',
		)
	);
}
add_action( 'widgets_init', 'websitesmaster_widgets_init' );