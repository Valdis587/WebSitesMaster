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
        'title'      => esc_html__( 'Счетчики', 'your-textdomain-here' ),
        'id'         => 'metr',
        'subsection' => true,
        'fields'     => array(
            array(
				'id'       => 'yandex',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Яндекс', 'your-textdomain-here' ),
				'default'  => '',
			),
            array(
				'id'       => 'google',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Гугл', 'your-textdomain-here' ),
				'default'  => '',
			),
        ),
        )
    );