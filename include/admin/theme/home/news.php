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
        'title'      => esc_html__( 'Новости', 'your-textdomain-here' ),
        'id'         => 'news-home',
        'subsection' => true,
        'fields'     => array(
            array(
				'id'       => 'news-home-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок', 'your-textdomain-here' ),
				'default'  => 'Новости',
			),
            array(
				'id'       => 'news-home-desc',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание', 'your-textdomain-here' ),
				'default'  => 'Рекламировать себя в интернет – наиболее рациональное решение в ситуации, когда речь идёт о решении конкретных задач (увеличение рыночной доли, рост продаж, повышение личной репутации либо узнаваемости бренда).',
			),
        ),
        )
    );