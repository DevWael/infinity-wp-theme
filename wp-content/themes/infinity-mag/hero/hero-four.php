<?php
global $post;
$dw_old_post    = $post;
$dw_posts_count = $dw_exclude_posts = $dw_thumbnail_size = $dw_image_url = '';
// center-slide or many-slides or double-slides
$dw_carousel_style = dw_get_setting( 'carousel_switch/on/carousel_style' );
// trend - likes - views - category - tag - author
$dw_query_type = dw_get_setting( 'carousel_switch/on/carousel_control/query_type' );
//integer of posts count
$dw_posts_count = dw_get_setting( 'carousel_switch/on/posts_count' );
//array of post ids to exclude
$dw_exclude_posts = dw_get_setting( 'carousel_switch/on/exclude' );
//array of categories ids
$dw_cat_ids = dw_get_setting( 'carousel_switch/on/carousel_control/category/cat_select' );
//array of tags ids
$dw_tag_ids = dw_get_setting( 'carousel_switch/on/carousel_control/tag/tag_select' );
//integer of author id
$dw_author_id = dw_get_setting( 'carousel_switch/on/carousel_control/author/author_select' );
//Carousel style
if ( ! $dw_carousel_style ) {
	$dw_carousel_style = 'center-slide';
}
//image size
//todo set the optimal image size
if ( 'center-slide' === $dw_carousel_style ) {
	$dw_thumbnail_size = 'dw_slider_center';
} elseif ( 'many-slides' === $dw_carousel_style ) {
	$dw_thumbnail_size = 'dw_slider_many';
} else {
	$dw_thumbnail_size = 'dw_slider_double';
}
//Query
if ( $dw_query_type == 'likes' ) {
	//Query based on Likes
	$args = array(
		'posts_per_page'      => absint( $dw_posts_count ),
		'no_found_rows'       => 1,
		'ignore_sticky_posts' => 1,
		'orderby'             => 'meta_value_num',
		'post__not_in'        => $dw_exclude_posts,
		'meta_query'          => array(
			array(
				'key' => '_post_like_count'
			),
			array(
				'key' => '_thumbnail_id'
			)
		)
	);
} elseif ( $dw_query_type == 'views' ) {
	//Query based on post views
	$args = array(
		'posts_per_page'      => absint( $dw_posts_count ),
		'no_found_rows'       => 1,
		'ignore_sticky_posts' => 1,
		'orderby'             => 'meta_value_num',
		'post__not_in'        => $dw_exclude_posts,
		'meta_query'          => array(
			array(
				'key' => 'bbioon_post_views'
			),
			array(
				'key' => '_thumbnail_id'
			)
		)
	);
} elseif ( $dw_query_type == 'author' ) {
	//Query based on Author
	$args = array(
		'posts_per_page'      => absint( $dw_posts_count ),
		'author'              => $dw_author_id,
		'ignore_sticky_posts' => 1,
		'post__not_in'        => $dw_exclude_posts,
		'meta_key'            => '_thumbnail_id',
		'no_found_rows'       => 1
	);
} elseif ( $dw_query_type == 'category' ) {
	//Query based on Categories
	$args = array(
		'posts_per_page'      => absint( $dw_posts_count ),
		'category__in'        => $dw_cat_ids,
		'ignore_sticky_posts' => 1,
		'post__not_in'        => $dw_exclude_posts,
		'meta_key'            => '_thumbnail_id',
		'no_found_rows'       => 1
	);
} elseif ( $dw_query_type == 'tag' ) {
	//Query based on tags
	$args = array(
		'posts_per_page'      => absint( $dw_posts_count ),
		'tag__in'             => $dw_tag_ids,
		'ignore_sticky_posts' => 1,
		'post__not_in'        => $dw_exclude_posts,
		'meta_key'            => '_thumbnail_id',
		'no_found_rows'       => 1
	);
} elseif ( $dw_query_type == 'trend' ) {
	//Query based on Comments count
	$args = array(
		'posts_per_page'      => absint( $dw_posts_count ),
		'orderby'             => 'comment_count',
		'ignore_sticky_posts' => 1,
		'post__not_in'        => $dw_exclude_posts,
		'meta_key'            => '_thumbnail_id',
		'no_found_rows'       => 1
	);
} else {
	//Query based on nothing
	$args = array(
		'posts_per_page'      => absint( $dw_posts_count ),
		'ignore_sticky_posts' => 1,
		'post__not_in'        => $dw_exclude_posts,
		'meta_key'            => '_thumbnail_id',
		'no_found_rows'       => 1
	);
}
$query = new WP_Query( $args );
if ( $query->have_posts() ):
	?>


    <div class="atricels-colums two-column">
        <div class="container">
            <div class="owl-carousel owl-theme two-block-owl">
				<?php while ( $query->have_posts() ):$query->the_post(); ?>
                    <div <?php post_class( 'item' ); ?>>
						<?php
						$dw_image_url = get_the_post_thumbnail_url( get_the_ID(), $dw_thumbnail_size );
						?>
                        <div class="main-article big">
                            <div class="transition-img" <?php if ( $dw_image_url ) {
								echo 'style="background-image: url(' . esc_url( $dw_image_url ) . ');"';
							} ?>></div>
                            <div class="text-overlay">
								<?php the_title( sprintf( '<h3 class="post-title"><a href = "%s" rel = "bookmark" > ', esc_url( get_permalink() ) ), '</a ></h3>' ); ?>
                                <p>
									<?php dw_excerpt(); ?>
                                </p>
								<?php get_template_part('loop/meta'); ?>
                            </div>
                        </div>
                    </div>
				<?php endwhile; ?>
            </div>
        </div>
    </div>


	<?php
	$post = $dw_old_post;
	wp_reset_postdata();
endif;
?>