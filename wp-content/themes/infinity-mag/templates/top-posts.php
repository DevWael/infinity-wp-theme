<?php
/**
 * Top posts carousel (Above header)
 */
global $post;
$old_post        = $post;
$cat_ids         = $tags_ids = $author_id = $top_posts_count = $visible_class = '';
$query_type      = dw_get_setting( 'top_posts_switch/on/top_posts_query/type' );
$show_mobile     = dw_get_setting( 'top_posts_switch/on/visible_mobile' );
$top_posts_count = dw_get_setting( 'top_posts_switch/on/posts_count' );
$cat_ids         = dw_get_setting( 'top_posts_switch/on/top_posts_query/category/cat_select' );
$tags_ids        = dw_get_setting( 'top_posts_switch/on/top_posts_query/tag/tag_select' );
$author_id       = dw_get_setting( 'top_posts_switch/on/top_posts_query/author/author_select' );
if ( 'off' === $show_mobile ) {
	$visible_class = ' hidden-xs';
}
if ( $query_type == 'likes' ) {
	//Query based on Likes
	$args = array(
		'posts_per_page' => absint( $top_posts_count ),
		'no_found_rows'  => 1,
		'orderby'        => 'meta_value_num',
		'meta_query'     => array(
			array(
				'key' => '_post_like_count'
			),
			array(
				'key' => '_thumbnail_id'
			)
		)
	);
} elseif ( $query_type == 'views' ) {
	//Query based on post views
	$args = array(
		'posts_per_page' => absint( $top_posts_count ),
		'no_found_rows'  => 1,
		'orderby'        => 'meta_value_num',
		'meta_query'     => array(
			array(
				'key' => 'bbioon_post_views'
			),
			array(
				'key' => '_thumbnail_id'
			)
		)
	);
} elseif ( $query_type == 'author' ) {
	//Query based on Author
	$args = array(
		'posts_per_page'      => absint( $top_posts_count ),
		'author'              => $author_id,
		'ignore_sticky_posts' => 1,
		'meta_key'            => '_thumbnail_id',
		'no_found_rows'       => 1
	);
} elseif ( $query_type == 'category' ) {
	//Query based on Categories
	$args = array(
		'posts_per_page'      => absint( $top_posts_count ),
		'category__in'        => $cat_ids,
		'ignore_sticky_posts' => 1,
		'meta_key'            => '_thumbnail_id',
		'no_found_rows'       => 1
	);
} elseif ( $query_type == 'tag' ) {
	//Query based on tags
	$args = array(
		'posts_per_page'      => absint( $top_posts_count ),
		'tag__in'             => $tags_ids,
		'ignore_sticky_posts' => 1,
		'meta_key'            => '_thumbnail_id',
		'no_found_rows'       => 1
	);
} elseif ( $query_type == 'trend' ) {
	//Query based on Comments count
	$args = array(
		'posts_per_page'      => absint( $top_posts_count ),
		'orderby'             => 'comment_count',
		'ignore_sticky_posts' => 1,
		'meta_key'            => '_thumbnail_id',
		'no_found_rows'       => 1
	);
} else {
	//Query based on nothing (Error handling)
	$args = array(
		'posts_per_page'      => absint( $top_posts_count ),
		'ignore_sticky_posts' => 1,
		'meta_key'            => '_thumbnail_id',
		'no_found_rows'       => 1
	);
}
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ): ?>
    <div class="top-header-posts<?php echo esc_attr( $visible_class ); ?>">
        <div class="container">
            <div class="carousel-container">
                <div class="posts-carousel owl-carousel">
					<?php while ( $the_query->have_posts() ):$the_query->the_post(); ?>
                        <div <?php post_class( 'top-post' ) ?>>
                            <a href="<?php echo esc_url( get_permalink() ); ?>">
                                <div class="article" itemscope itemtype="http://schema.org/Article" role="article">
									<?php if ( has_post_thumbnail() ): ?>
										<?php the_post_thumbnail( 'window_mag_big_post', array( 'class' => 'img-responsive' ) ); ?>
									<?php endif; ?>
                                    <div class="listing-content">
										<?php the_title( '<div class="post-title entry-header" itemprop="name headline">', '</div>' ); ?>
                                        <aside class="top-post-time">
											<?php if ( dw_post_time( true ) ): ?>
                                                <span class="time">
													<?php dw_post_time(); ?>
												</span>
											<?php endif; ?>
                                        </aside>
                                    </div>
                                </div>
                            </a>
                        </div>
					<?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
	<?php
	$post = $old_post;
	wp_reset_postdata();
endif;
