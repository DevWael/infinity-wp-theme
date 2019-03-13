<?php
/**
 * Top posts carousel (Above header)
 * Since V1.2
 */
global $post;
$old_post        = $post;
$cat_ids         = $tags_ids = $author_id = $top_posts_count = $visible_class = $ticker_title = '';
$query_type      = dw_get_setting( 'news_ticker_switch/on/top_posts_query/type' );
$ticker_title    = dw_get_setting( 'news_ticker_switch/on/ticker_title' );
$show_mobile     = dw_get_setting( 'news_ticker_switch/on/visible_mobile' );
$top_posts_count = dw_get_setting( 'news_ticker_switch/on/posts_count' );
$cat_ids         = dw_get_setting( 'news_ticker_switch/on/top_posts_query/category/cat_select' );
$tags_ids        = dw_get_setting( 'news_ticker_switch/on/top_posts_query/tag/tag_select' );
$author_id       = dw_get_setting( 'news_ticker_switch/on/top_posts_query/author/author_select' );
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
			)
		)
	);
} elseif ( $query_type == 'author' ) {
	//Query based on Author
	$args = array(
		'posts_per_page'      => absint( $top_posts_count ),
		'author'              => $author_id,
		'ignore_sticky_posts' => 1,
		'no_found_rows'       => 1
	);
} elseif ( $query_type == 'category' ) {
	//Query based on Categories
	$args = array(
		'posts_per_page'      => absint( $top_posts_count ),
		'category__in'        => $cat_ids,
		'ignore_sticky_posts' => 1,
		'no_found_rows'       => 1
	);
} elseif ( $query_type == 'tag' ) {
	//Query based on tags
	$args = array(
		'posts_per_page'      => absint( $top_posts_count ),
		'tag__in'             => $tags_ids,
		'ignore_sticky_posts' => 1,
		'no_found_rows'       => 1
	);
} elseif ( $query_type == 'trend' ) {
	//Query based on Comments count
	$args = array(
		'posts_per_page'      => absint( $top_posts_count ),
		'orderby'             => 'comment_count',
		'ignore_sticky_posts' => 1,
		'no_found_rows'       => 1
	);
} else {
	//Query based on nothing (Error handling)
	$args = array(
		'posts_per_page'      => absint( $top_posts_count ),
		'ignore_sticky_posts' => 1,
		'no_found_rows'       => 1
	);
}
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ): ?>
    <div class="news-ticker clearfix<?php echo esc_attr( $visible_class ); ?>">
        <div class="ticker-section container">
			<?php if ( $ticker_title ) { ?>
                <div class="ticker-title">
                    <div class="title">
						<?php echo esc_html( $ticker_title ); ?>
                    </div>
                </div>
			<?php } ?>
            <div class="ticker-container">
                <div class="posts-carousel owl-carousel">
					<?php while ( $the_query->have_posts() ):$the_query->the_post(); ?>
                        <div <?php post_class( 'ticker-post' ) ?> itemscope itemtype="http://schema.org/Article">
							<?php the_title( sprintf( '<h5 class="post-title" itemprop="name headline"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h5>' ); ?>
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
