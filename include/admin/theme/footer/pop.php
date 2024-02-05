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
        'title'      => esc_html__( 'Попап', 'your-textdomain-here' ),
        'id'         => 'pop',
        'subsection' => true,
        'fields'     => array(
            array(
				'id'       => 'pop-url',
				'type'     => 'media',
				'title'    => esc_html__( 'Картинка', 'your-textdomain-here' ),
				'url'      => false,
				'preview'  => true,
			),
            array(
				'id'       => 'pop-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок', 'your-textdomain-here' ),
				'default'  => 'Заказать сайт',
			),
            array(
				'id'       => 'pop-price',
				'type'     => 'text',
				'title'    => esc_html__( 'Цена', 'your-textdomain-here' ),
				'default'  => 'от 6000р.',
			),
        ),
        )
    );