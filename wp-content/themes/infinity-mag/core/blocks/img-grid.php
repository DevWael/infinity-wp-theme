<?php

if ( ! function_exists( 'dw_img_grid' ) ) {
	function dw_img_grid( $cat_ids, $posts_count = 6, $block_title = '' ) {
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
            <div class="img-grid category-box">
                <div class="posts-area">
					<?php if ( $block_title ) :
						$category_link = ( isset( $cat_ids[0] ) ) ? get_category_link( $cat_ids[0] ) : '';
						?>
                        <h2 class="post-wrapper-title">
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
                    <ul class="pictures-posts">
						<?php while ( $posts_query->have_posts() ):$posts_query->the_post(); ?>
                            <li <?php post_class( 'pic' ) ?>>
								<?php if ( function_exists( 'the_post_thumbnail' ) && has_post_thumbnail() ): ?>
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"
                                       data-toggle="tooltip" data-placement="top">
										<?php the_post_thumbnail( 'dw_pic_post', array( 'class' => 'img-responsive' ) ); ?>
                                        <span class="overlay"></span>
                                    </a>
								<?php endif; ?>
                            </li>
						<?php endwhile; ?>
                    </ul>
                </div>
            </div>
		<?php
		endif;
		wp_reset_postdata();
	}
}