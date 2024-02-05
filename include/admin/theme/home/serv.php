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
        'title'      => esc_html__( 'Наши услуги', 'your-textdomain-here' ),
        'id'         => 'serv-home',
        'subsection' => true,
        'fields'     => array(
            array(
				'id'       => 'serv-home-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок', 'your-textdomain-here' ),
				'default'  => 'Наши услуги',
			),
            array(
				'id'       => 'serv-home-desc',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание', 'your-textdomain-here' ),
				'default'  => 'Цена на разработку напрямую зависит от количества часов, которые IT-специалист затрачивает на работу. Сделав заказ у нас клиенты получают надежного партнера, который дает гарантии бесперебойной, оперативной и корректной работы ресурса вне зависимости от таких параметров как размеры, загрузка и др.',
			),
        ),
        )
    );