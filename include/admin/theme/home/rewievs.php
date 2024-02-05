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
        'title'      => esc_html__( 'Отзывы', 'your-textdomain-here' ),
        'id'         => 'rew-home',
        'subsection' => true,
        'fields'     => array(
            array(
				'id'       => 'rew-home-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок', 'your-textdomain-here' ),
				'default'  => 'Отзывы',
			),
            array(
				'id'       => 'rew-home-desc',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание', 'your-textdomain-here' ),
				'default'  => 'Хотите расширить сферу деятельности, улучшить имидж и получить новых клиентов? Тогда вам нужен современный и адаптивный сайт.',
			),
        ),
        )
    );