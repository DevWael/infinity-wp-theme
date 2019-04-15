<div <?php post_class( 'small-post' ) ?> itemscope itemtype="http://schema.org/Article">
	<?php if ( function_exists( 'the_post_thumbnail' ) && has_post_thumbnail() ):
		$image_url = '';
		$image_url = get_the_post_thumbnail_url( get_the_ID(), 'dw_pic_post' );
		?>
        <div class="post-image">
            <a rel="bookmark" href="<?php the_permalink(); ?>"
               title="<?php the_title_attribute(); ?>">
                <span class="overlay"></span>
                <div class="image" <?php if ( $image_url ) {
					echo 'style="background-image: url(' . esc_url( $image_url ) . ');"';
				} ?>></div>
            </a>
        </div>
	<?php endif; ?>
    <div class="post-content">
		<?php the_title( sprintf( '<h3 class="post-title h5" itemprop="name headline"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
		<?php get_template_part( 'loop/meta' ); ?>
    </div>
</div>