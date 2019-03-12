<?php

class window_mag_author_posts extends WP_Widget {
	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'window_author_posts', // Base ID
			WINDOW_MAG_NAME . esc_html__( ' Author posts', 'window-mag' ), // Name
			array( 'description' => esc_html__( 'add posts from specified author', 'window-mag' ), ) // Args
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
		if ( ! empty( $instance['posts_count'] ) ):
			$posts_count = $instance['posts_count'];
		else:
			$posts_count = 5;
		endif;
		if ( ! empty( $instance['author_id'] ) ):
			$author_id = $instance['author_id'];
		else:
			$author_id = null;
		endif;
		$query_args = array(
			'posts_per_page'      => absint( $posts_count ),
			'author'              => $author_id,
			'ignore_sticky_posts' => 1,
			'no_found_rows'       => true
		);
		switch ( $instance['style'] ) {
			case 'slider':
				window_mag_widget_slider_loop( $query_args );
				break;
			case 'small_list' :
				window_mag_widget_small_list_loop( $query_args );
				break;
			case 'big_list' :
				window_mag_widget_big_list_loop( $query_args );
				break;
			case 'pics' :
				window_mag_widget_pics_loop( $query_args );
				break;
			default :
				window_mag_widget_small_list_loop( $query_args );
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
		$all_authors    = window_mag_users();
		$title          = ! empty( $instance['title'] ) ? $instance['title'] : '';
		$popular_number = ! empty( $instance['posts_count'] ) ? absint( $instance['posts_count'] ) : 5;
		$author_id      = ! empty( $instance['author_id'] ) ? $instance['author_id'] : '';
		$style          = ! empty( $instance['style'] ) ? $instance['style'] : '';
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">
				<?php esc_html_e( 'Title:', 'window-mag' ); ?>
			</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>"
			       name="<?php echo $this->get_field_name( 'title' ); ?>" type="text"
			       value="<?php echo esc_attr( $title ); ?>">
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'author_id' ); ?>">
				<?php esc_html_e( 'Select author:', 'window-mag' ); ?>
			</label>
			<select name="<?php echo $this->get_field_name( 'author_id' ); ?>"
			        id="<?php echo $this->get_field_id( 'author_id' ); ?>" class="widefat"
			        style="margin-bottom:10px">
				<?php foreach ( $all_authors as $author_key => $author_name ) { ?>
					<option
						value="<?php echo esc_attr( $author_key ); ?>"<?php if ( $author_key == $author_id ) { ?>
						selected="selected" <?php } ?>>
						<?php echo esc_html( $author_name ); ?>
					</option>
				<?php } ?>
			</select>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'style' ); ?>">
				<?php esc_html_e( 'Select style:', 'window-mag' ); ?>
			</label>

			<select name="<?php echo $this->get_field_name( 'style' ); ?>"
			        id="<?php echo $this->get_field_id( 'style' ); ?>" class="widefat"
			        style="margin-bottom:10px">
				<option value=""><?php esc_html_e( 'Not selected', 'window-mag' ); ?></option>
				<option value="slider"<?php if ( 'slider' == $style ) { ?> selected="selected"<?php } ?>>
					<?php esc_html_e( 'Slider', 'window-mag' ); ?>
				</option>
				<option value="pics"<?php if ( 'pics' == $style ) { ?> selected="selected"<?php } ?>>
					<?php esc_html_e( 'Posts Pictures', 'window-mag' ); ?>
				</option>
				<option value="small_list"<?php if ( 'small_list' == $style ) { ?> selected="selected"<?php } ?>>
					<?php esc_html_e( 'Small list', 'window-mag' ); ?>
				</option>
				<option value="big_list"<?php if ( 'big_list' == $style ) { ?> selected="selected"<?php } ?>>
					<?php esc_html_e( 'Big list', 'window-mag' ); ?>
				</option>
			</select>
		</p>
		<p>
			<label
				for="<?php echo $this->get_field_id( 'posts_count' ); ?>"><?php esc_html_e( 'Posts count :', 'window-mag' );
				?></label>
			<input id="<?php echo $this->get_field_id( 'posts_count' ); ?>"
			       name="<?php echo $this->get_field_name( 'posts_count' ); ?>" type="number" size="3"
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
		$instance                = array();
		$instance['title']       = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['posts_count'] = ( ! empty( $new_instance['posts_count'] ) ) ? strip_tags( $new_instance['posts_count'] ) : '';
		$instance['author_id']   = ( ! empty( $new_instance['author_id'] ) ) ? strip_tags( $new_instance['author_id'] ) : '';
		$instance['style']       = ( ! empty( $new_instance['style'] ) ) ? strip_tags( $new_instance['style'] ) : '';

		return $instance;
	}

}