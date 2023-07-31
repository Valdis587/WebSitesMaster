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

add_action( 'carbon_fields_register_fields', 'service_carbon' );
function service_carbon() {

    Container::make( 'post_meta', 'Дополнительный контент' )
        ->where( 'post_type', '=', 'uslugi' )
        ->add_fields( array(
            Field::make('text', 'crb_serv_title', 'Заголовок'),
            Field::make('textarea', 'crb_serv_home', 'Описание для главной'),
            Field::make( 'complex', 'crb_slides_uslugi' )->add_fields( array(
                Field::make( 'text', 'uslugi_text1', 'Доп текст' )->set_width( 50 ),
                Field::make( 'text', 'uslugi_text3', 'Доп текст2' )->set_width( 50 ),
            )),
        ));

}