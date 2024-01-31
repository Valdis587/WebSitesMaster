<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WebSitesMaster
 */

?>
<section class="zakSite">
    <h4 class="site-head-title">Заказать сайт</h4>
    <p class="site-head-decription">В период разработки сaйта пoд ключ, мы нaxoдимся с вaми нa связи нa всex этaпax paбoты. От сбopa пepвичнoй инфopмaции, peaлизaции пpoeктa, дo oбслуживaния ужe гoтoвoгo продукта.</p>
    <div class="zakSite__content container">
        <div id="zakSite__left" class="zakSite__left back-gr">
            <div class="bg-bl">
            <p>Вы можете сделать заказ и предоставить все материалы (тексты, картинки, фото и видео материалы, логотипы и т.п.) для  наполнения. Но зачастую заниматься подбором материалов нет времени. Мы самостоятельно найдём всё необходимое для наполнения , подберём необходимые картинки и прочие материалы.</p>
            <p>У нас можно заказать сайт-визитку, landing page (лендинг, одностраничник), сайт каталог, для частных лиц и самозанятых граждан.</p>
            <p class="main-title1">Способы связи для заказов и консультаций:</p>
            <p >Рекомендуем оставлять заявки не по телефону, а в один из мессенджеров, таким образом вы гарантированно получите обратную связь и ваше обращение не будет потеряно, даже если вы обратитесь в нерабочее время или же по какой-то причине не сможете дозвониться по телефону.</p>
            <?php get_template_part( 'template-parts/content', 'social' ); ?>
            </div>
        </div>
        <div id="zakSite__right" class="zakSite__right">
            <canvas  data-src="<?php echo get_template_directory_uri() ?>/images/comp/comp.gltf"  id="zakSite__animate-home"  class="zakSite__animate-home"></canvas>
        </div>
    </div>
</section>