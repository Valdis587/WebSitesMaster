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

/** Импортирируем нужные классы Carbon Fields  */
use Carbon_Fields\Container;
use Carbon_Fields\Field;

/**
 * @see sv_theme_options
 */
add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options()
{
// Default options page
    $basic_options_container = Container::make('theme_options', 'Настройки WebDev')
        ->add_fields(array(
            Field::make( 'image', 'crb_logo', 'Логотип' )
                ->set_value_type( 'url'),
            Field::make( 'complex', 'crb_slides_home22', 'Слайдер' )
                ->add_fields( array(
                    Field::make( 'text', 'homeflide_title32', 'Заголовок 1' ),
                    Field::make( 'text', 'homeflide_title42', 'Заголовок 2' ),
                    Field::make( 'text', 'homeflide_title52', 'Заголовок 3' )
                )),
            Field::make( 'image', 'crb_top_panel', 'Фон загаловка страниц' )
                ->set_value_type( 'url' ),
            Field::make('text', 'crb_title_popup','Заголовок popup' ),
            Field::make('text', 'crb_price_popup','Цена popup' ),
            Field::make( 'image', 'crb_img_popup', 'Картинка popup' )
                ->set_value_type( 'url' ),
            Field::make('textarea', 'crb_yandex', 'Яндекс метерика'),
            Field::make('textarea', 'crb_google', 'Гугл аналитик'),
        ));


// Add second options page under 'Basic Options'
    Container::make('theme_options', 'Контакты')
        ->set_page_parent($basic_options_container) // reference to a top level container
        ->add_fields(array(
            Field::make('text', 'crb_whatsapp_link', 'Вотсапп'),
            Field::make('text', 'crb_telegram_link', 'Телеграм'),
            Field::make('text', 'crb_viber_link', 'Вайбер'),
            Field::make('text', 'crb_skype_link', 'Скайп'),
            Field::make('text', 'crb_phone_link', 'Телефон'),
            Field::make('text', 'crb_mail_link', 'Почта'),
            Field::make('text', 'crb_adress_link', 'Адрес'),
            Field::make('textarea', 'crb_map_link', 'Карта'),
            Field::make('text', 'crb_copy','Авторские права' ),
            Field::make('textarea', 'crb_text_footer', 'Текст в футере'),
            Field::make('text', 'crb_menu_footer1','Заголовок меню футера 1' ),
            Field::make('text', 'crb_menu_footer2','Заголовок меню футера 2' ),
            Field::make('text', 'crb_menu_footer3','Заголовок футера 3' ),
        ));

    Container::make('theme_options', 'Онас')
        ->set_page_parent($basic_options_container) // reference to a top level container
        ->add_fields(array(
            Field::make('textarea', 'crb_onas', 'Текст о нас'),
        ));

    // Add second options page under 'Basic Options'
    Container::make('theme_options', 'Цены')
        ->set_page_parent($basic_options_container) // reference to a top level container
        ->add_tab( __('Прайс 1'), array(
            Field::make('text', 'crb_zagolovok1', 'Заголовок'),
            Field::make('text', 'crbcena', 'Цена'),
            Field::make( 'complex', 'crb_slides_price1' )->add_fields( array(
                Field::make( 'text', 'dopusluga_text', 'Доп услуга' )
            ))
        ))

        ->add_tab( __('Прайс 2'), array(
            Field::make('text', 'crb_zagolovok2', 'Заголовок 2'),
            Field::make('text', 'crbcena2', 'Цена'),
            Field::make( 'complex', 'crb_slides_price2' )->add_fields( array(
                Field::make( 'text', 'dopusluga_text2', 'Доп услуга' )
            ))
        ))

        ->add_tab( __('Прайс 3'), array(
            Field::make('text', 'crb_zagolovok3', 'Заголовок 3'),
            Field::make('text', 'crbcena3', 'Цена'),
            Field::make( 'complex', 'crb_slides_price3' )->add_fields( array(
                Field::make( 'text', 'dopusluga_text3', 'Доп услуга' )
            ))
        ));

}