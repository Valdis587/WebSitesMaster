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
        'title'      => esc_html__( 'Выполненные работы', 'your-textdomain-here' ),
        'id'         => 'job-home',
        'subsection' => true,
        'fields'     => array(
            array(
				'id'       => 'job-home-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок', 'your-textdomain-here' ),
				'default'  => 'Выполненные работы',
			),
            array(
				'id'       => 'job-home-desc',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание', 'your-textdomain-here' ),
				'default'  => 'Разработка сайта — это возможность создать уникальное пространство, где ваша компания сможет представить свои продукты и услуги всему миру. Предлагаем вам заказать продукт, который будет отражать все преимущества вашего бизнеса.',
			),
        ),
        )
    );