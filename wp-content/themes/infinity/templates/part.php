<?php
/*
 * Default post thumbnail for standard and image post format
 * this file is visible in single.php only
 */
$thumbnail_size = 'window_mag_slider_center';
if ( has_post_thumbnail() && dw_get_meta( get_the_ID(), 'post_thumb' ) !== 'off' ) { ?>
    <div class="post-feature-box gallery-box normal-thumb">
		<?php
		the_post_thumbnail( $thumbnail_size, array( 'class' => 'img-responsive' ) );
		?>
        <a href="<?php the_post_thumbnail_url( 'full' ); ?>" class="magnific-gallery zoom-in">
            <i class="fa fa-arrows-alt"></i>
        </a>
    </div>
<?php } ?>