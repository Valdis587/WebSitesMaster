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

function custom_post_type_faq() {

    $labels = array(
        'name'                  => 'Выпросы',
        'singular_name'         => 'Выпросы',
        'menu_name'             => 'Выпросы',
        'add_new_item'          => 'Добавить новый',
        'add_new'               => 'Добавить новый',
        'new_item'              => 'Новый',
        'edit_item'             => 'Редактировать',
        'update_item'           => 'Обновить',
        'view_item'             => 'Просмотр',
        'view_items'            => 'Посмотреть все',
    );
    $rewrite = array(
        'slug'                  => 'faq',
        'with_front'            => true,
        'pages'                 => true,
        'feeds'                 => true,
    );
    $args = array(
        'label'                 => 'Выпросы',
        'labels'                => $labels,
        'supports'              => array( 'title'),
        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-pets',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'map_meta_cap'      => true,
        'query_var'             => 'faq',
        'rewrite'               => $rewrite,

    );
    register_post_type( 'faq', $args );



}
add_action('init', 'custom_post_type_faq', 0);