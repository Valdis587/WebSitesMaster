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
        'title'      => esc_html__( 'Стоимость разработки', 'your-textdomain-here' ),
        'id'         => 'price-home',
        'subsection' => true,
        'fields'     => array(
            array(
				'id'       => 'price-home-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок', 'your-textdomain-here' ),
				'default'  => 'Стоимость разработки',
			),
            array(
				'id'       => 'price-home-desc',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание', 'your-textdomain-here' ),
				'default'  => 'Предлагаем Вам заказать сайт для различных отраслей бизнеса, с разным бюджетом и с разными бизнес-задачами.',
			),
        ),
        )
    );