<div <?php post_class( 'cover-post' ); ?>>
	<?php if ( has_post_thumbnail() ) { ?>
        <div class="transition-img" style="background: url(<?php the_post_thumbnail_url( 'full' ); ?>);"></div>
	<?php } ?>
    <div class="text-block">
		<?php get_template_part( 'loop/meta' ); ?>
		<?php the_title( sprintf( '<h3 itemprop="name headline"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
        <p><?php dw_excerpt(); ?></p>
		<?php get_template_part( 'loop/read-more' ); ?>
    </div>
</div>