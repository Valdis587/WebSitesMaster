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
        'title'      => esc_html__( 'Страницы', 'your-textdomain-here' ),
        'id'         => 'head',
        'subsection' => true,
        'fields'     => array(
            array(
				'id'       => 'head-url',
				'type'     => 'media',
				'title'    => esc_html__( 'Картинка шапки', 'your-textdomain-here' ),
				'url'      => false,
				'preview'  => true,
			),
        ),
        )
    );