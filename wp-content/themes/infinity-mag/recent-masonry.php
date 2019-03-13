<div class="masonry-grid row">
	<?php
	while ( have_posts() ):the_post();
		?>
		<div class="item col-md-6 col-sm-6 col-xs-12" itemscope itemtype="http://schema.org/Article">
			<?php
			get_template_part( 'templates/big', 'post' );
			?>
		</div>
		<?php
	endwhile;
	?>
</div>