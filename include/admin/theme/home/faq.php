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
        'title'      => esc_html__( 'Часто задаваемые вопросы', 'your-textdomain-here' ),
        'id'         => 'faq-home',
        'subsection' => true,
        'fields'     => array(
            array(
				'id'       => 'faq-home-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок', 'your-textdomain-here' ),
				'default'  => 'Часто задаваемые вопросы',
			),
            array(
				'id'       => 'faq-home-desc',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание', 'your-textdomain-here' ),
				'default'  => 'Здесь вы найдете ответы на некоторые из наиболее распространенных вопросов о разработке под ключ. Если у вас остались другие вопросы, не стесняйтесь обратиться к нам через мессенджеры',
			),
        ),
        )
    );