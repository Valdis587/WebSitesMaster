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

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'job_carbon' );
function job_carbon() {

    Container::make( 'post_meta', 'Настройки страницы' )
        ->where( 'post_type', '=', 'proekty' )
        ->add_fields( array(
            Field::make('text', 'crb_name_job', 'Проект'),
            Field::make('text', 'crb_job_price', 'Цена'),
            Field::make('text', 'crb_job_link', 'Ссылка'),
        ) );

}