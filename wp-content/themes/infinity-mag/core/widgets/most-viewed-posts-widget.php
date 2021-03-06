<?php

/**
 * Adds Social media icons widget.
 */
class dw_most_viewed extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'bbioon_most_viewed', // Base ID
			DW_NAME . esc_html__( ' Most viewed posts', 'dw' ), // Name
			array( 'description' => esc_html__( 'add most viewed posts widget', 'dw' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}
		if ( ! empty( $instance['popular_number'] ) ):
			$count_popular = $instance['popular_number'];
		else:
			$count_popular = 5;
		endif;
		$query_args = array(
			'meta_query'          => array(
				'post_views_count' => array(
					'key'  => 'bbioon_post_views',
					'type' => 'NUMERIC'
				)
			),
			'orderby'             => 'post_views_count',
			'posts_per_page'      => absint( $count_popular ),
			'ignore_sticky_posts' => 1,
			'no_found_rows'       => true
		);
		switch ( $instance['style'] ) {
			case 'slider':
				dw_widget_slider_loop( $query_args, $args['widget_id'] );
				break;
			case 'small_list' :
				dw_widget_small_list_loop( $query_args, $args['widget_id'] );
				break;
			case 'big_list' :
				dw_widget_big_list_loop( $query_args, $args['widget_id'] );
				break;
			case 'pics' :
				dw_widget_pics_loop( $query_args, $args['widget_id'] );
				break;
			default :
				dw_widget_small_list_loop( $query_args, $args['widget_id'] );
		}
		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title          = ! empty( $instance['title'] ) ? $instance['title'] : '';
		$popular_number = ! empty( $instance['popular_number'] ) ? absint( $instance['popular_number'] ) : 5;
		$style          = ! empty( $instance['style'] ) ? $instance['style'] : '';
		?>
        <p>
            <label
                    for="<?php echo $this->get_field_id( 'title' ); ?>"><?php esc_html_e( 'Title:', 'dw' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>"
                   name="<?php echo $this->get_field_name( 'title' ); ?>" type="text"
                   value="<?php echo esc_attr( $title ); ?>">
        </p>
        <p>
            <label
                    for="<?php echo $this->get_field_id( 'style' ); ?>"><?php esc_html_e( 'Select style :', 'dw' );
				?></label>

            <select name="<?php echo $this->get_field_name( 'style' ); ?>"
                    id="<?php echo $this->get_field_id( 'style' ); ?>" class="widefat"
                    style="margin-bottom:10px">
                <option value=""><?php esc_html_e( 'Not selected', 'dw' ); ?></option>
                <option value="slider"<?php if ( 'slider' == $style ) { ?> selected="selected"<?php } ?>>
					<?php esc_html_e( 'Slider', 'dw' ); ?>
                </option>
                <option value="pics"<?php if ( 'pics' == $style ) { ?> selected="selected"<?php } ?>>
					<?php esc_html_e( 'Posts Pictures', 'dw' ); ?>
                </option>
                <option value="small_list"<?php if ( 'small_list' == $style ) { ?> selected="selected"<?php } ?>>
					<?php esc_html_e( 'Small list', 'dw' ); ?>
                </option>
                <option value="big_list"<?php if ( 'big_list' == $style ) { ?> selected="selected"<?php } ?>>
					<?php esc_html_e( 'Big list', 'dw' ); ?>
                </option>
            </select>
        </p>
        <p>
            <label
                    for="<?php echo $this->get_field_id( 'popular_number' ); ?>"><?php esc_html_e( 'Posts count :', 'dw' );
				?></label>
            <input id="<?php echo $this->get_field_id( 'popular_number' ); ?>"
                   name="<?php echo $this->get_field_name( 'popular_number' ); ?>" type="number" size="3"
                   value="<?php echo esc_attr( $popular_number ); ?>">
        </p>
		<?php
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance                   = array();
		$instance['title']          = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['popular_number'] = ( ! empty( $new_instance['popular_number'] ) ) ? strip_tags( $new_instance['popular_number'] ) : '';
		$instance['style']          = ( ! empty( $new_instance['style'] ) ) ? strip_tags( $new_instance['style'] ) : '';

		return $instance;
	}

}