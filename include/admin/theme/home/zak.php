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
        'title'      => esc_html__( 'Заказать сайт', 'your-textdomain-here' ),
        'id'         => 'zak',
        'subsection' => true,
        'fields'     => array(
            array(
				'id'       => 'zak-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок', 'your-textdomain-here' ),
				'default'  => 'Заказать сайт',
			),
            array(
				'id'       => 'zak-desc',
				'type'     => 'text',
				'title'    => esc_html__( 'Описание', 'your-textdomain-here' ),
				'default'  => 'В период разработки сaйта пoд ключ, мы нaxoдимся с вaми нa связи нa всex этaпax paбoты. От сбopa пepвичнoй инфopмaции, peaлизaции пpoeктa, дo oбслуживaния ужe гoтoвoгo продукта.',
			),
            array(
				'id'       => 'zak-desc1',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание 1', 'your-textdomain-here' ),
				'default'  => 'Вы можете сделать заказ и предоставить все материалы (тексты, картинки, фото и видео материалы, логотипы и т.п.) для наполнения. Но зачастую заниматься подбором материалов нет времени. Мы самостоятельно найдём всё необходимое для наполнения , подберём необходимые картинки и прочие материалы.
                У нас можно заказать сайт-визитку, landing page (лендинг, одностраничник), сайт каталог, для частных лиц и самозанятых граждан.',
			),
            array(
				'id'       => 'zak-title2',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок 2', 'your-textdomain-here' ),
				'default'  => 'Способы связи для заказов и консультаций:',
			),
            array(
				'id'       => 'zak-desc2',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание 2', 'your-textdomain-here' ),
				'default'  => 'Рекомендуем оставлять заявки не по телефону, а в один из мессенджеров, таким образом вы гарантированно получите обратную связь и ваше обращение не будет потеряно, даже если вы обратитесь в нерабочее время или же по какой-то причине не сможете дозвониться по телефону.',
			),
        ),
        )
    );