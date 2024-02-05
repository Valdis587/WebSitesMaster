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
        'title'      => esc_html__( 'Описание', 'your-textdomain-here' ),
        'id'         => 'footer',
        'subsection' => true,
        'fields'     => array(
            array(
				'id'       => 'foot-desc',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание', 'your-textdomain-here' ),
				'default'  => 'У нас вы можете заказать сайт под ключ без посредников. Без предоплат! Техподдержка. Лендинги, сайты визитки, сайты каталоги. Сегодня веб-сайт - необходимый инструмент любой фирмы. Он несомненно поможет вам улучшить имидж вашей организации и наладить отношения с клиентами.',
			),
        ),
        )
    );