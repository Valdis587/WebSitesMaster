<?php
/**
 * WebSitesMaster functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WebSitesMaster
 */

if ( ! defined( '_S_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( '_S_VERSION', '1.0.0' );
}

class reviews_Widget extends WP_Widget {

    /**
     * Register widget with WordPress.
     */

    function __construct() {
        parent::__construct(
            'reviews_widget', // Base ID
            esc_html__( 'Отзывы', '' ), // Name
            array( 'description' => '' ) // Args
        );
    }


    public function widget( $args, $instance )
    {        echo $args['before_widget'];
        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        } ?>
        <div class="sidebar__widget-body">
            <div class="swiper sidebar__widget-reviews">
                <div class="swiper-wrapper sidebar__widget-reviews-wrapper ">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args2 = array(
                        'order' 	 => 'DESC',
                        'post_type' 	 => 'otzyvy',
                        'paged'	         => $paged
                    );

                    $MY_QUERY = new WP_Query( $args2 );
                    if ( $MY_QUERY->have_posts() ) :
                        while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post();
                            $id = get_post_thumbnail_id();
                            $main=wp_get_attachment_image_src( $id, 'blog' );
                            if($main) {
                             get_template_part( 'template-parts/content', 'otzyvy' );
                        } ?>

                        <?php endwhile;
                    endif;
                    wp_reset_postdata();

                    ?>
                </div>
            </div>
        </div>
        <?php
        echo $args['after_widget'];
    }

    public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Отзывы', 'smarkets' );
        ?>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Проекты', 'smarkets' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <?php
    }


    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';

        return $instance;


    }

} // class Foo_Widget

// register Foo_Widget widget
function register_reviews_widget() {
    register_widget( 'reviews_Widget' );
}
add_action( 'widgets_init', 'register_reviews_widget' );