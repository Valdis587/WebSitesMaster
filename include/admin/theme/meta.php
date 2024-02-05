<?php
/**
 * Redux Framework media config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;


Redux_Metaboxes::set_box(
    $opt_name,
    array(
        'id'         => 'serv',
        'title'      => esc_html__( 'Услуга', 'your-textdomain-here' ),
        'post_types' => array( 'uslugi' ),
        'position'   => 'normal', // normal, advanced, side.
        'priority'   => 'default', // high, default, default, low.
        'sections'   => array(
            array(
                'title'  => esc_html__( 'Услуга', 'your-textdomain-here' ),
                'id'     => 'uslugi-service',
                'icon'   => 'el-icon-cogs',
                'fields' => array(
                    array(
                        'id'       => 'title-uslugi',
                        'type'     => 'text',
                        'title'    => esc_html__( 'Загловок', 'your-textdomain-here' ),
                        'placeholder'  => 'Информация по разработке одностраничного сайта:',
                    ),
                    array(
                        'id'       => 'count-uslugi',
                        'type'     => 'text',
                        'title'    => esc_html__( 'Срок разработки', 'your-textdomain-here' ),
                        'placeholder'  => '4',
                    ),
                    array(
                        'id'       => 'uslugi-price',
                        'type'     => 'text',
                        'title'    => esc_html__( 'Мин. сумма разработки', 'your-textdomain-here' ),
                        'placeholder'  => 'от 6000р',
                    ),
                    array(
                        'id'       => 'uslugi-desc',
                        'type'     => 'textarea',
                        'title'    => esc_html__( 'Описание для главной', 'your-textdomain-here' ),
                        'default'  => '',
                    ),
                ),
            ),
        ),
    )
);

Redux_Metaboxes::set_box(
    $opt_name,
    array(
        'id'         => 'job',
        'title'      => esc_html__( 'Проекты', 'your-textdomain-here' ),
        'post_types' => array( 'proekty' ),
        'position'   => 'normal', // normal, advanced, side.
        'priority'   => 'default', // high, default, default, low.
        'sections'   => array(
            array(
                'title'  => esc_html__( 'Проекты', 'your-textdomain-here' ),
                'id'     => 'proekty-dop',
                'icon'   => 'el-icon-cogs',
                'fields' => array(
                    array(
                        'id'       => 'title-proekty',
                        'type'     => 'text',
                        'title'    => esc_html__( 'Вид работ', 'your-textdomain-here' ),
                        'placeholder'  => 'Лендинг',
                    ),
                    array(
                        'id'       => 'proekty-price',
                        'type'     => 'text',
                        'title'    => esc_html__( 'Сумма разработки', 'your-textdomain-here' ),
                        'placeholder'  => '6000р',
                    ),
                    array(
                        'id'       => 'proekty-link',
                        'type'     => 'text',
                        'title'    => esc_html__( 'Ссылка', 'your-textdomain-here' ),
                        'placeholder'  => '',
                    ),
                ),
            ),
        ),
    )
);

Redux_Metaboxes::set_box(
    $opt_name,
    array(
        'id'         => 'reviews',
        'title'      => esc_html__( 'Отзывы', 'your-textdomain-here' ),
        'post_types' => array( 'otzyvy' ),
        'position'   => 'normal', // normal, advanced, side.
        'priority'   => 'default', // high, default, default, low.
        'sections'   => array(
            array(
                'title'  => esc_html__( 'Отзывы', 'your-textdomain-here' ),
                'id'     => 'reviews-dop',
                'icon'   => 'el-icon-cogs',
                'fields' => array(
                    array(
                        'id'       => 'reviews-desc',
                        'type'     => 'textarea',
                        'title'    => esc_html__( 'Отзыв', 'your-textdomain-here' ),
                        'default'  => '',
                    ),
                    array(
                        'id'       => 'title-reviews',
                        'type'     => 'text',
                        'title'    => esc_html__( 'Вид работ', 'your-textdomain-here' ),
                        'placeholder'  => 'Лендинг',
                    ),
                    array(
                        'id'       => 'reviews-date',
                        'type'     => 'text',
                        'title'    => esc_html__( 'Дата', 'your-textdomain-here' ),
                        'placeholder'  => '11.03.21',
                    ),
                ),
            ),
        ),
    )
);

Redux_Metaboxes::set_box(
    $opt_name,
    array(
        'id'         => 'slider',
        'title'      => esc_html__( 'Слайдер', 'your-textdomain-here' ),
        'post_types' => array( 'slider' ),
        'position'   => 'normal', // normal, advanced, side.
        'priority'   => 'default', // high, default, default, low.
        'sections'   => array(
            array(
                'title'  => esc_html__( 'Слайдер', 'your-textdomain-here' ),
                'id'     => 'slider-dop',
                'icon'   => 'el-icon-cogs',
                'fields' => array(
                    array(
                        'id'       => 'slider-desc',
                        'type'     => 'textarea',
                        'title'    => esc_html__( 'Второй заголовок', 'your-textdomain-here' ),
                        'default'  => '',
                    ),
                    array(
                        'id'       => 'slider-price',
                        'type'     => 'text',
                        'title'    => esc_html__( 'Цена', 'your-textdomain-here' ),
                        'placeholder'  => '',
                    ),
                ),
            ),
        ),
    )
);

Redux_Metaboxes::set_box(
    $opt_name,
    array(
        'id'         => 'price',
        'title'      => esc_html__( 'Прайс', 'your-textdomain-here' ),
        'post_types' => array( 'price' ),
        'position'   => 'normal', // normal, advanced, side.
        'priority'   => 'default', // high, default, default, low.
        'sections'   => array(
            array(
                'title'  => esc_html__( 'Прайс', 'your-textdomain-here' ),
                'id'     => 'price-dop',
                'icon'   => 'el-icon-cogs',
                'fields' => array(
                    array(
                        'id'       => 'price-price',
                        'type'     => 'text',
                        'title'    => esc_html__( 'Цена', 'your-textdomain-here' ),
                        'default'  => '',
                    ),
                    array(
                        'id'       => 'price-serv1',
                        'type'     => 'text',
                        'title'    => esc_html__( 'Услуга 1', 'your-textdomain-here' ),
                        'placeholder'  => '',
                    ),
                    array(
                        'id'       => 'price-serv2',
                        'type'     => 'text',
                        'title'    => esc_html__( 'Услуга 2', 'your-textdomain-here' ),
                        'placeholder'  => '',
                    ),
                    array(
                        'id'       => 'price-serv3',
                        'type'     => 'text',
                        'title'    => esc_html__( 'Услуга 3', 'your-textdomain-here' ),
                        'placeholder'  => '',
                    ),
                    array(
                        'id'       => 'price-serv4',
                        'type'     => 'text',
                        'title'    => esc_html__( 'Услуга 4', 'your-textdomain-here' ),
                        'placeholder'  => '',
                    ),
                    array(
                        'id'       => 'price-serv5',
                        'type'     => 'text',
                        'title'    => esc_html__( 'Услуга 5', 'your-textdomain-here' ),
                        'placeholder'  => '',
                    ),
                ),
            ),
        ),
    )
);

Redux_Metaboxes::set_box(
    $opt_name,
    array(
        'id'         => 'faq',
        'title'      => esc_html__( 'Вопросы', 'your-textdomain-here' ),
        'post_types' => array( 'faq' ),
        'position'   => 'normal', // normal, advanced, side.
        'priority'   => 'default', // high, default, default, low.
        'sections'   => array(
            array(
                'title'  => esc_html__( 'Вопросы', 'your-textdomain-here' ),
                'id'     => 'faq-dop',
                'icon'   => 'el-icon-cogs',
                'fields' => array(
                    array(
                        'id'       => 'faq-desc',
                        'type'     => 'textarea',
                        'title'    => esc_html__( 'Ответ', 'your-textdomain-here' ),
                        'default'  => '',
                    ),
                ),
            ),
        ),
    )
);