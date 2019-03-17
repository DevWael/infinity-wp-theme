<nav id="dw_navigation">
	<?php
	wp_nav_menu(
		array(
			'theme_location' => 'header_menu',
			'depth'          => 3,
			'container'      => false,
			'menu_class'     => 'menu',
			'fallback_cb'    => 'window_mag_nav_fallback'
		)
	);
	?>
</nav>