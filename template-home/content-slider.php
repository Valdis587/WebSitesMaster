<section class="homeHead">
           <canvas id="homeHead__star-scene" data-src="<?php echo get_template_directory_uri() ?>/images/home/plan.gltf" class="homeHead__star-scene"></canvas>
        <div class="homeHead__content-wrapper">
        <div class="homeHead__content container">
            <div class="homeHead__col">
            <div id="homeHead__content-left" class="homeHead__content-left">
                <div class="swiper homeHead__content-text">
                    <div class="swiper-wrapper homeHead__content-text-wrapper">
                    <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                            'posts_per_page' => 10,
                            'order' 	 => 'DESC',
                            'post_type' 	 => 'slider',
                            'paged'	         => $paged
                        );

                        $MY_QUERY = new WP_Query( $args );
                        if ( $MY_QUERY->have_posts() ) :
                            while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>

                                <?php get_template_part( 'template-parts/content', 'slider' ); ?>

                            <?php endwhile;
                        endif; ?>
                    </div> 
                </div>  
            </div>
        </div>
        <div class="homeHead__col-r">
            <div class="homeHead__content-right">
                <div class="swiper homeHead__content-slide-cart">
                    <div class="swiper-wrapper homeHead__content-slide-wrapper">
                    <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                            'posts_per_page' => 10,
                            'order' 	 => 'DESC',
                            'post_type' 	 => 'proekty',
                            'paged'	         => $paged
                        );

                        $MY_QUERY = new WP_Query( $args );
                        if ( $MY_QUERY->have_posts() ) :
                            while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>

                                <?php get_template_part( 'template-parts/content', 'proekty' ); ?>

                            <?php endwhile;
                        endif; ?>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
    <div class="homeHead__logo rot-item">
    <?php get_template_part( 'template-parts/content', 'logo' ); ?>
    </div>
</div>
    </section>