<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( 'Forbidden' );
}
function dw_individual_icon_posts( $cat_ids, $posts_count = 6, $block_title = '' ) {
	$arguments   = array(
		'posts_per_page'      => $posts_count,
		'category__in'        => $cat_ids,
		'ignore_sticky_posts' => 1,
		'no_found_rows'       => true
	);
	$posts_query = new WP_Query( $arguments );
	if ( $posts_query->have_posts() ) {
		?>
        <!-- INDIVIDUAL POSTS  -->
        <div class="individual-icon-posts full-width-section">
            <div class="container">
                <div class="posts-area">
					<?php if ( $block_title ) {
						$category_link = ( isset( $cat_ids[0] ) ) ? get_category_link( $cat_ids[0] ) : '';
						?>
                        <h2 class="post-wrapper-title">
							<?php if ( $category_link ){ ?>
                            <a href="<?php echo esc_url( $category_link ); ?>"
                               title="<?php echo esc_attr( $block_title ); ?>">
								<?php } ?>
								<?php echo esc_html( $block_title ); ?>
								<?php if ( $category_link ){ ?>
                            </a>
						<?php } ?>
                        </h2>
					<?php } ?>
                    <div class="content-wrapper">
                        <div class="row">
							<?php
							$i = 1;
							while ( $posts_query->have_posts() ) {
								$posts_query->the_post();
								?>
                                <div class="col-xs-12 col-sm-6 col-md-4">
									<?php get_template_part( 'templates/individual-icon-post' ); ?>
                                </div>
								<?php
								if ( $i % 3 == 0 ) {
									?>
                                    <div class="col-md-12"></div>
									<?php
								}
								$i ++;
							} ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<?php
	}
	wp_reset_postdata();
}