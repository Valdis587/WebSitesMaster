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

add_action( 'carbon_fields_register_fields', 'truemisha_carbon4' );
function truemisha_carbon4() {
    Container::make( 'post_meta', 'Контент главной страницы' )
        ->show_on_template('home-page.php')
        ->add_fields( array(
            Field::make( 'complex', 'crb_slides_home', 'Слайдер' )
                ->add_fields( array(
                    Field::make( 'image', 'imagehomeflide', 'Картинка' ),
                    Field::make( 'text', 'homeflide_title1', 'Заголовок 1' ),
                    Field::make( 'text', 'homeflide_title2', 'Заголовок 2' ),
                    Field::make( 'text', 'homeflide_title3', 'Заголовок 3' )
                )),
        ));
}