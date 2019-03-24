<?php
if ( ! function_exists( 'dw_slides' ) ) {
	function dw_slides( $cat_ids, $posts_count = 6, $block_title = '' ) {
		$arguments   = array(
			'posts_per_page'      => $posts_count,
			'category__in'        => $cat_ids,
			'ignore_sticky_posts' => 1,
			'meta_key'            => '_thumbnail_id',
			'no_found_rows'       => true
		);
		$posts_query = new WP_Query( $arguments );
		if ( $posts_query->have_posts() ):
			?>
            <div class="slides-box category-box">
				<?php if ( $block_title ) :
					$category_link = ( isset( $cat_ids[0] ) ) ? get_category_link( $cat_ids[0] ) : '';
					?>
                    <h2 class="block-name">
						<?php if ( $category_link ): ?>
                        <a href="<?php echo esc_url( $category_link ); ?>"
                           title="<?php echo esc_attr( $block_title ); ?>">
							<?php endif; ?>
                            <span><?php echo esc_html( $block_title ); ?></span>
							<?php if ( $category_link ): ?>
                        </a>
					<?php endif; ?>
                    </h2>
				<?php endif; ?>
                <div class="owl-carousel carousel-slides">
					<?php while ( $posts_query->have_posts() ):$posts_query->the_post(); ?>
                        <div <?php post_class( 'carousel-post' ); ?> itemscope itemtype="http://schema.org/Article">
							<?php if ( function_exists( 'the_post_thumbnail' ) && has_post_thumbnail() ): ?>
                                <div class="post-image">
                                    <a rel="bookmark" href="<?php the_permalink(); ?>"
                                       title="<?php the_title_attribute(); ?>">
										<?php the_post_thumbnail( 'dw_slider_center', array( 'class' => 'img-responsive' ) ); ?>
                                        <span class="overlay"></span>
                                    </a>
                                </div>
							<?php endif; ?>
                            <div class="post-content">
								<?php the_title( sprintf( '<h3 class="post-title h5" itemprop="name headline"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
                                <div class="post-meta">
									<?php if ( 'on' === dw_get_setting( 'general_date_meta' ) or ! function_exists( 'fw_get_db_settings_option' ) ): ?>
                                        <span class="post-date"
                                              title="<?php esc_attr_e( 'Created on', 'dw' ); ?>">
                                            <i class="fa fa-calendar"></i>
                                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                                <?php dw_post_time(); ?>
                                            </a>
                                        </span>
									<?php endif; ?>
									<?php if ( 'on' === dw_get_setting( 'general_views_meta' ) or ! function_exists( 'fw_get_db_settings_option' ) ): ?>
                                        <span class="views" title="<?php esc_attr_e( 'Views', 'dw' ); ?>">
                                            <i class="fa fa-eye"></i>
                                                                            <?php echo esc_html( dw_getPostViews( get_the_ID() ) ); ?>
                                        </span>
									<?php endif; ?>
									<?php if ( 'on' === dw_get_setting( 'general_like_meta' ) or ! function_exists( 'fw_get_db_settings_option' ) ): ?>
                                                                    <span class="like-system">
                                        <?php echo window_mag_get_likes_button( get_the_ID() ); ?>
                                    </span>
									<?php endif; ?>
                                </div>
                            </div>
                        </div>


					<?php endwhile; ?>
                </div>
            </div>

			<?php
		endif;
		wp_reset_postdata();
	}
}