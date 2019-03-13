<?php

/**
 * Adds Social media icons widget.
 */
class dw_instagram_photos extends WP_Widget {
	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'dw_instagram_photos', // Base ID
			DW_NAME . esc_html__( ' Instagram Photos', 'dw' ), // Name
			array( 'description' => esc_html__( 'add instagram photos to your sidebar', 'dw' ), ) // Args
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
		if ( ! empty( $instance['username'] ) ) {
			$count = '';
			if ( $instance['limit'] ) {
				$count = intval( $instance['limit'] );
			}
			window_mag_instagram_photos_views( $instance['username'], $count );
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
		$title    = ! empty( $instance['title'] ) ? $instance['title'] : '';
		$username = ! empty( $instance['username'] ) ? $instance['username'] : '';
		$limit    = ! empty( $instance['limit'] ) ? $instance['limit'] : '';
		?>
		<p>
			<label
				for="<?php echo $this->get_field_id( 'title' ); ?>"><?php esc_html_e( 'Title:', 'dw' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>"
			       name="<?php echo $this->get_field_name( 'title' ); ?>" type="text"
			       placeholder="<?php esc_attr_e( 'Instagram', 'dw' ) ?>"
			       value="<?php echo esc_attr( $title ); ?>">
		</p>

		<p>
			<label
				for="<?php echo $this->get_field_id( 'username' ); ?>"><?php esc_html_e( 'Username:', 'dw' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'username' ); ?>"
			       name="<?php echo $this->get_field_name( 'username' ); ?>" type="text"
			       placeholder="<?php esc_attr_e( 'instagram username', 'dw' ) ?>"
			       value="<?php echo esc_attr( $username ); ?>">
		</p>

		<p>
			<label
				for="<?php echo $this->get_field_id( 'limit' ); ?>"><?php esc_html_e( 'Photos count:', 'dw' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'limit' ); ?>"
			       name="<?php echo $this->get_field_name( 'limit' ); ?>" type="number"
			       placeholder="<?php esc_attr_e( '6', 'dw' ) ?>"
			       value="<?php echo esc_attr( $limit ); ?>">
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
		$instance             = array();
		$instance['title']    = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['username'] = ( ! empty( $new_instance['username'] ) ) ? strip_tags( $new_instance['username'] ) : '';
		$instance['limit']    = ( ! empty( $new_instance['limit'] ) ) ? strip_tags( $new_instance['limit'] ) : '';

		return $instance;
	}

}