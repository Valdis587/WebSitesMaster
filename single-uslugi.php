<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WebSitesMaster
 */

get_header();
get_template_part( 'template-parts/content', 'head');
global $websitesmaster;
$value = redux_post_meta( 'websitesmaster', 'uslugi-service' );
?>
   <div class="servicePage container">
        <div class="servicePage__content">
            <div  class="servicePage__conten-left">
                <canvas  data-src="<?php echo get_template_directory_uri() ?>/images/serv/serv.gltf" id="servicePage__animate"  class="servicePage__animate"></canvas> 
            </div>
            <div id="servicePage__conten-right" class="servicePage__conten-right back-gr-v">
                <div class="bg-bl">
                <h3 class="servicePage__conten-right-title"><?php echo $value['title-uslugi']; ?></h3>
                <div class="servicePage__conten-table">
                    <span class="servicePage__left">Работа с CMS </span>
                    <span class="servicePage__right">Wordpress</span>
                </div>
                <div class="servicePage__conten-table">
                    <span class="servicePage__left"> Срок разработки  </span>
                    <span class="servicePage__right"><?php echo  $value['count-uslugi']; ?></span>
                </div>
                <div class="servicePage__conten-table">
                    <span class="servicePage__left">Домен и хостинг  </span>
                    <span class="servicePage__right">Подключаем</span>
                </div>
                <div class="servicePage__conten-table">
                    <span class="servicePage__left"> Адаптирован  </span>
                    <span class="servicePage__right">Под все устройства </span>
                </div>
                <div class="servicePage__conten-table">
                    <span class="servicePage__left">Первичное наполнение сайта  </span>
                    <span class="servicePage__right">Есть</span>
                </div>
                <div class="servicePage__conten-table">
                    <span class="servicePage__left">Техническая поддержка  </span>
                    <span class="servicePage__right">Мессенджеры, почта, телефон </span>
                </div>
                <div class="servicePage__conten-table">
                    <span class="servicePage__left">SEO оптимизация </span>
                    <span class="servicePage__right"> 	Базовая </span>
                </div>
                <div class="servicePage__conten-table">
                    <span class="servicePage__left">Возможность доработки  </span>
                    <span class="servicePage__right">Есть </span>
                </div>
                <div class="servicePage__conten-table">
                    <span class="servicePage__left">Бесплатный SSL сертификат </span>
                    <span class="servicePage__right">Есть</span>
                </div>
                <div class="servicePage__conten-table">
                    <span class="servicePage__left">Установка счетчика посетителей </span>
                    <span class="servicePage__right">Яндекс.Метрика, Google Analytics </span>
                </div>
                <div class="servicePage__conten-table">
                    <span class="servicePage__left">Мин. сумма разработки </span>
                    <span class="servicePage__right"><?php echo $value['uslugi-price']; ?></span>
                </div>
            </div>
        </div>
        </div>
        <div class="back-gr servicePage__content-text-wrapper">
            <div class="bg-bl servicePage__conten-bottom-list">
            <h4 class="site-head-title"><?php the_title(''); ?></h4>
            <div class="servicePage__content-text">
            <?php the_content(); ?>
        </div>
        <div class="single__button">  
                <a href="https://t.me/<?php echo $websitesmaster['tg']; ?>" class="single__but but-animete site-button"><i class="icon-telegram-plane"></i> Заказать сайт</a>
        </div>
        </div>
    </div>
       <?php
       get_template_part( 'template-home/content', 'price' );
       get_template_part( 'template-home/content', 'job' );
       ?>
    </div>

<?php
get_footer();