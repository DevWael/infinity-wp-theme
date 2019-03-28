<div class="dw-links">
	<?php $social = dw_social_media_urls();
	if ( $social ) { ?>
        <ul class="dw-nav-social">
			<?php
			foreach ( $social as $item ) {
				?>
                <li>
					<?php echo $item; ?>
                </li>
			<?php } ?>
        </ul>
	<?php } ?>
    <div class="buttons">
		<?php if ( class_exists( 'woocommerce' ) ) { ?>
            <div class="dw-cart">
                <a href="#">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    <span> 5 </span>
                </a>
            </div>
		<?php } ?>
        <div class="dw-search-btn"><i class="fa fa-search" aria-hidden="true"></i></div>
    </div>
</div>