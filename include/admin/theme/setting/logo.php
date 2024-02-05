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
        'title'      => esc_html__( 'Логотип', 'your-textdomain-here' ),
        'id'         => 'logo',
        'subsection' => true,
        'fields'     => array(
            array(
				'id'       => 'logo-url',
				'type'     => 'media',
				'title'    => esc_html__( 'Логотип', 'your-textdomain-here' ),
				'url'      => false,
				'preview'  => true,
			),
        ),
        )
    );