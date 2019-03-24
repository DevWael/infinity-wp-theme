<div <?php post_class( 'carousel-post' ); ?> itemscope itemtype="http://schema.org/Article">
	<?php if ( function_exists( 'the_post_thumbnail' ) && has_post_thumbnail() ): ?>
        <div class="post-image">
            <a rel="bookmark" href="<?php the_permalink(); ?>"
               title="<?php the_title_attribute(); ?>">
				<?php the_post_thumbnail( 'dw_slider_many', array( 'class' => 'img-responsive' ) ); ?>
                <span class="overlay"></span>
            </a>
        </div>
	<?php endif; ?>
    <div class="data">
		<?php the_title( sprintf( '<h3 class="post-title h5" itemprop="name headline"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
		<?php get_template_part('loop/meta'); ?>
    </div>
</div>