<div <?php post_class( 'main-post' ); ?> itemscope itemtype="http://schema.org/Article">
    <div class="img-box">
		<?php if ( function_exists( 'the_post_thumbnail' ) && has_post_thumbnail() ): ?>
            <a rel="bookmark" href="<?php the_permalink(); ?>"
               title="<?php the_title_attribute(); ?>">
				<?php the_post_thumbnail( 'window_mag_big_post', array( 'class' => 'img-responsive' ) ); ?>
            </a>
		<?php endif; ?>
    </div>
	<?php the_title( sprintf( '<h3 itemprop="name headline"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
    <p><?php dw_excerpt(); ?></p>
	<?php get_template_part( 'loop/meta' ); ?>
</div>