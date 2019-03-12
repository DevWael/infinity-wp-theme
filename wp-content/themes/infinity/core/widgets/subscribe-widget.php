<?php

/**
 * Adds Social media icons widget.
 */
class window_mag_subscribe_box extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'subscribe_box', // Base ID
			WINDOW_MAG_NAME . esc_html__( ' Newsletter', 'window-mag' ), // Name
			array( 'description' => esc_html__( 'add newsletter subscribe form', 'window-mag' ), ) // Args
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
		$desc_text = ! empty( $instance['desc_text'] ) ? $instance['desc_text'] : '';
		$feed_id   = ! empty( $instance['feed_id'] ) ? $instance['feed_id'] : '';
		?>
		<div class="newsletter">
			<form class="wpnl" action="https://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow"
			      onsubmit="window.open('https://feedburner.google.com/fb/a/mailverify?uri=<?php echo esc_attr( $feed_id ); ?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
				<?php if ( $desc_text ) { ?>
					<p class="description"><?php echo esc_html( $desc_text ); ?></p>
				<?php } ?>
				<p>
					<input type="email" placeholder="<?php esc_attr_e( 'Put your email here...', 'window-mag' ); ?>"
					       name="email"/>
				</p>
				<input type="hidden" value="<?php echo esc_attr( $feed_id ); ?>" name="uri"/>
				<input type="hidden" name="loc" value="en_US"/>
				<input type="submit" value="<?php esc_attr_e( 'Subscribe', 'window-mag' ); ?>"/>
			</form>
		</div>
		<?php
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
		$title     = ! empty( $instance['title'] ) ? $instance['title'] : '';
		$desc_text = ! empty( $instance['desc_text'] ) ? $instance['desc_text'] : '';
		$feed_id   = ! empty( $instance['feed_id'] ) ? $instance['feed_id'] : '';
		?>
		<p>
			<label
				for="<?php echo $this->get_field_id( 'title' ); ?>"><?php esc_html_e( 'Title:', 'window-mag' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>"
			       name="<?php echo $this->get_field_name( 'title' ); ?>" type="text"
			       value="<?php echo esc_attr( $title ); ?>">
		</p>

		<p>
			<label
				for="<?php echo $this->get_field_id( 'desc_text' ); ?>"><?php esc_html_e( 'Description Text:', 'window-mag' );
				?></label>
			<textarea name="<?php echo $this->get_field_name( 'desc_text' ); ?>"
			          placeholder="<?php esc_attr_e( 'Enter your email address', 'window-mag' ); ?>"
			          id="<?php echo $this->get_field_id( 'desc_text' ); ?>" cols="30" rows="3"
			          class="widefat"><?php
				if ( $desc_text ) {
					echo esc_attr( $desc_text );
				}
				?></textarea>
		</p>

		<p>
			<label
				for="<?php echo $this->get_field_id( 'feed_id' ); ?>"><?php esc_html_e( 'FeedBurner ID:', 'window-mag' );
				?></label>
			<input id="<?php echo $this->get_field_id( 'feed_id' ); ?>"
			       name="<?php echo $this->get_field_name( 'feed_id' ); ?>" type="text" class="widefat"
			       value="<?php echo esc_attr( $feed_id ); ?>">
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
		$instance              = array();
		$instance['title']     = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['desc_text'] = ( ! empty( $new_instance['desc_text'] ) ) ? strip_tags( $new_instance['desc_text'] ) : '';
		$instance['feed_id']   = ( ! empty( $new_instance['feed_id'] ) ) ? strip_tags( $new_instance['feed_id'] ) : '';

		return $instance;
	}

}