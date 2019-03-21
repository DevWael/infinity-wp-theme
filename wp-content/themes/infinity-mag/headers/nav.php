<div class="dw-menu">
	<nav class="dw_navigation" id="dw_navigation">
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'header_menu',
				'depth'          => 3,
				'container'      => false,
				'menu_class'     => 'menu',
				'fallback_cb'    => 'dw_nav_fallback'
			)
		);
		?>
	</nav>
</div>