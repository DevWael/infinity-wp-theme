<div <?php post_class( 'side-post' ) ?> itemscope itemtype="http://schema.org/Article">
    <div class="img-box">
	    <?php if ( function_exists( 'the_post_thumbnail' ) && has_post_thumbnail() ): ?>
            <a rel="bookmark" href="<?php the_permalink(); ?>"
               title="<?php the_title_attribute(); ?>">
			    <?php the_post_thumbnail( 'dw_small_pic_post', array( 'class' => 'img-responsive' ) ); ?>
            </a>
	    <?php endif; ?>
        <div class="overlay"> <i class="fa fa-microphone" aria-hidden="true"></i> </div>
    </div>
    <div class="data">
	    <?php the_title( sprintf( '<h3 itemprop="name headline"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
	    <?php get_template_part('loop/meta'); ?>
    </div>
</div>