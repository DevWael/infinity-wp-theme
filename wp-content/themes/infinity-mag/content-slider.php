<?php
global $post;
$window_mag_old_post    = $post;
$window_mag_posts_count = $window_mag_exclude_posts = $window_mag_thumbnail_size = $window_mag_image_url = '';
// center-slide or many-slides or double-slides
$window_mag_carousel_style = dw_get_setting( 'carousel_switch/on/carousel_style' );
// trend - likes - views - category - tag - author
$window_mag_query_type = dw_get_setting( 'carousel_switch/on/carousel_control/query_type' );
//integer of posts count
$window_mag_posts_count = dw_get_setting( 'carousel_switch/on/posts_count' );
//array of post ids to exclude
$window_mag_exclude_posts = dw_get_setting( 'carousel_switch/on/exclude' );
//array of categories ids
$window_mag_cat_ids = dw_get_setting( 'carousel_switch/on/carousel_control/category/cat_select' );
//array of tags ids
$window_mag_tag_ids = dw_get_setting( 'carousel_switch/on/carousel_control/tag/tag_select' );
//integer of author id
$window_mag_author_id = dw_get_setting( 'carousel_switch/on/carousel_control/author/author_select' );
//Carousel style
if ( ! $window_mag_carousel_style ) {
	$window_mag_carousel_style = 'center-slide';
}
//image size
if ( 'center-slide' === $window_mag_carousel_style ) {
	$window_mag_thumbnail_size = 'window_mag_slider_center';
} elseif ( 'many-slides' === $window_mag_carousel_style ) {
	$window_mag_thumbnail_size = 'window_mag_slider_many';
} else {
	$window_mag_thumbnail_size = 'window_mag_slider_double';
}
//Query
if ( $window_mag_query_type == 'likes' ) {
	//Query based on Likes
	$args = array(
		'posts_per_page'      => absint( $window_mag_posts_count ),
		'no_found_rows'       => 1,
		'ignore_sticky_posts' => 1,
		'orderby'             => 'meta_value_num',
		'post__not_in'        => $window_mag_exclude_posts,
		'meta_query'          => array(
			array(
				'key' => '_post_like_count'
			),
			array(
				'key' => '_thumbnail_id'
			)
		)
	);
} elseif ( $window_mag_query_type == 'views' ) {
	//Query based on post views
	$args = array(
		'posts_per_page'      => absint( $window_mag_posts_count ),
		'no_found_rows'       => 1,
		'ignore_sticky_posts' => 1,
		'orderby'             => 'meta_value_num',
		'post__not_in'        => $window_mag_exclude_posts,
		'meta_query'          => array(
			array(
				'key' => 'bbioon_post_views'
			),
			array(
				'key' => '_thumbnail_id'
			)
		)
	);
} elseif ( $window_mag_query_type == 'author' ) {
	//Query based on Author
	$args = array(
		'posts_per_page'      => absint( $window_mag_posts_count ),
		'author'              => $window_mag_author_id,
		'ignore_sticky_posts' => 1,
		'post__not_in'        => $window_mag_exclude_posts,
		'meta_key'            => '_thumbnail_id',
		'no_found_rows'       => 1
	);
} elseif ( $window_mag_query_type == 'category' ) {
	//Query based on Categories
	$args = array(
		'posts_per_page'      => absint( $window_mag_posts_count ),
		'category__in'        => $window_mag_cat_ids,
		'ignore_sticky_posts' => 1,
		'post__not_in'        => $window_mag_exclude_posts,
		'meta_key'            => '_thumbnail_id',
		'no_found_rows'       => 1
	);
} elseif ( $window_mag_query_type == 'tag' ) {
	//Query based on tags
	$args = array(
		'posts_per_page'      => absint( $window_mag_posts_count ),
		'tag__in'             => $window_mag_tag_ids,
		'ignore_sticky_posts' => 1,
		'post__not_in'        => $window_mag_exclude_posts,
		'meta_key'            => '_thumbnail_id',
		'no_found_rows'       => 1
	);
} elseif ( $window_mag_query_type == 'trend' ) {
	//Query based on Comments count
	$args = array(
		'posts_per_page'      => absint( $window_mag_posts_count ),
		'orderby'             => 'comment_count',
		'ignore_sticky_posts' => 1,
		'post__not_in'        => $window_mag_exclude_posts,
		'meta_key'            => '_thumbnail_id',
		'no_found_rows'       => 1
	);
} else {
	//Query based on nothing
	$args = array(
		'posts_per_page'      => absint( $window_mag_posts_count ),
		'ignore_sticky_posts' => 1,
		'post__not_in'        => $window_mag_exclude_posts,
		'meta_key'            => '_thumbnail_id',
		'no_found_rows'       => 1
	);
}
$query = new WP_Query( $args );
if ( $query->have_posts() ):
	?>
	<section class="main-slider">
		<div class="container">
			<div class="home-slider owl-carousel <?php echo esc_attr( $window_mag_carousel_style ); ?>"
			     id="<?php echo esc_js( $window_mag_carousel_style ); ?>">
				<?php while ( $query->have_posts() ):$query->the_post(); ?>
					<div <?php post_class( 'main-item' ); ?>>
						<?php
						if ( has_post_thumbnail() ) {
							$window_mag_image_url = '';
							$window_mag_image_url = get_the_post_thumbnail_url( get_the_ID(), $window_mag_thumbnail_size );
							?>
							<div class="slide-image" <?php if ( $window_mag_image_url ) {
								echo 'style="background-image: url(' . esc_url( $window_mag_image_url ) . ');"';
							} ?>></div>
						<?php } ?>
						<div class="overlay"></div>
						<div class="post-data">
							<div itemscope itemtype="http://schema.org/Article" class="contents">
								<?php the_title( sprintf( '<h3 class="post-title" itemprop = "name headline" ><a href = "%s" rel = "bookmark" > ', esc_url( get_permalink() ) ), '</a ></h3>' ); ?>
								<div class="slide-post-meta">
									<span class="author" title="<?php esc_attr_e( 'Author', 'dw' ); ?>">
										<i class="fa fa-user"></i>
										<?php the_author_posts_link(); ?>
									</span>
									<span class="date" title="<?php esc_attr_e( 'Created on', 'dw' ); ?>">
										<i class="fa fa-calendar"></i>
										<?php dw_post_time(); ?>
									</span>
								</div>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</section>
	<?php
	$post = $window_mag_old_post;
	wp_reset_postdata();
endif;
