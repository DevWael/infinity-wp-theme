<?php

if ( ! function_exists( 'dw_simple_grid' ) ) {
	function dw_simple_grid( $cat_ids, $posts_count = 6, $block_title = '' ) {
		$i           = 1;
		$arguments   = array(
			'posts_per_page'      => $posts_count,
			'category__in'        => $cat_ids,
			'ignore_sticky_posts' => 1,
			'no_found_rows'       => true
		);
		$posts_query = new WP_Query( $arguments );
		if ( $posts_query->have_posts() ):
			?>
            <div class="posts-area">
				<?php if ( $block_title ) :
					$category_link = ( isset( $cat_ids[0] ) ) ? get_category_link( $cat_ids[0] ) : '';
					?>
                    <h2 class="post-wrapper-title">
						<?php if ( $category_link ): ?>
                        <a href="<?php echo esc_url( $category_link ); ?>"
                           title="<?php echo esc_attr( $block_title ); ?>">
							<?php endif; ?>
							<?php echo esc_html( $block_title ); ?>
							<?php if ( $category_link ): ?>
                        </a>
					<?php endif; ?>
                    </h2>
				<?php endif; ?>
                <div class="content-wrapper">
                    <div class="row">
						<?php while ( $posts_query->have_posts() ):$posts_query->the_post(); ?>
							<?php if ( $i == 1 ): ?>
                                <div class="col-md-6 col-sm-6 col-xs-12">
									<?php get_template_part( 'templates/big', 'post' ); ?>
                                </div>
							<?php else : ?>
                                <div class="col-md-6 col-sm-6 col-xs-12 clearfix">
									<?php get_template_part( 'templates/small', 'post' ); ?>
                                </div>
							<?php endif; ?>
							<?php $i ++; endwhile; ?>
                    </div>
                </div>
            </div>
		<?php
		endif;
		wp_reset_postdata();
	}
}