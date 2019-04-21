<div <?php post_class( 'individual-icon-post' ); ?>>
    <div class="img-box">
		<?php if ( function_exists( 'the_post_thumbnail' ) && has_post_thumbnail() ): ?>
            <a rel="bookmark" href="<?php the_permalink(); ?>"
               title="<?php the_title_attribute(); ?>">
				<?php the_post_thumbnail( 'dw_big_post', array( 'class' => 'img-responsive' ) ); ?>
            </a>
		<?php endif; ?>
    </div>
    <div class="data">
	    <?php the_title( sprintf( '<h3 itemprop="name headline"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
	    <?php get_template_part( 'loop/meta' ); ?>
        <p><?php dw_excerpt(); ?></p>
    </div>
</div>