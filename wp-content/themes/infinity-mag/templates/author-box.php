<?php
/**
 * use this template for view author info box
 * this file is visible in author.php , single.php , page.php --> with each conditions
 */
$user_id         = get_the_author_meta( 'ID' );
$author_desc     = get_the_author_meta( 'description', $user_id );
$user_post_count = count_user_posts( $user_id );
?>
<div class="author-bio-box category-box" itemscope itemtype="http://schema.org/Person">
    <div class="author-avatar">
        <div class="thumb">
			<?php echo get_avatar( $user_id, 100 ); ?>
        </div>
    </div>
    <div class="author-info">
        <h4 class="auhtor-name text-center">
            <span class="word"><?php esc_html_e( 'Written by', 'dw' ); ?></span>
            <span class="name">
				<?php
				if ( is_singular() ) {
					the_author_posts_link();
				} else {
					the_author();
				}
				?>
			</span>
        </h4>
		<?php if ( $author_desc ): ?>
            <p class="author-description text-center">
				<?php echo esc_html( $author_desc ); ?>
            </p>
		<?php endif; ?>
		<?php if ( dw_author_socials( $user_id, true ) ): ?>
            <div class="user-social text-center" title="<?php esc_attr_e( 'Follow me', 'dw' ); ?>">
				<?php dw_author_socials( $user_id ); ?>
            </div>
		<?php endif; ?>
    </div>
</div>