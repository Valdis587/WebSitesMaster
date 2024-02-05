<?php
/**
 * Redux Framework media config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__( 'Контакты', 'your-textdomain-here' ),
        'id'         => 'cont',
        'subsection' => true,
        'fields'     => array(
            array(
				'id'       => 'addres',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Адрес', 'your-textdomain-here' ),
				'default'  => 'Санкт-Петербург',
			),
            array(
				'id'       => 'phones',
				'type'     => 'text',
				'title'    => esc_html__( 'Телефон', 'your-textdomain-here' ),
				'default'  => '+7(905)265-54-45',
			),
            array(
				'id'       => 'mail',
				'type'     => 'text',
				'title'    => esc_html__( 'Почта', 'your-textdomain-here' ),
				'default'  => 'www.gal78@gmail.com',
			),
			array(
				'id'       => 'map',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Карта', 'your-textdomain-here' ),	
			),
            array(
				'id'       => 'tg',
				'type'     => 'text',
				'title'    => esc_html__( 'Ссылка Telegram', 'your-textdomain-here' ),
				'default'  => '#',
			),
            array(
				'id'       => 'sk',
				'type'     => 'text',
				'title'    => esc_html__( 'Ссылка Skype', 'your-textdomain-here' ),
				'default'  => '#',
			),
            array(
				'id'       => 'vb',
				'type'     => 'text',
				'title'    => esc_html__( 'Ссылка Viber', 'your-textdomain-here' ),
				'default'  => '#',
			),
            array(
				'id'       => 'wh',
				'type'     => 'text',
				'title'    => esc_html__( 'Ссылка WhatsApp', 'your-textdomain-here' ),
				'default'  => '#',
			),
        ),
        )
    );