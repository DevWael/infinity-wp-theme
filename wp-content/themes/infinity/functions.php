<?php
$window_mag_theme = wp_get_theme();
define( 'WINDOW_MAG_NAME', $window_mag_theme->name );
define( 'WINDOW_MAG_DIR', get_template_directory() );
define( 'WINDOW_MAG_URI', get_template_directory_uri() );
define( 'WINDOW_MAG_CSS_URI', WINDOW_MAG_URI . '/assets/css/' );
define( 'WINDOW_MAG_JS_URI', WINDOW_MAG_URI . '/assets/js/' );
define( 'WINDOW_MAG_IMAGES_DIR', WINDOW_MAG_URI . '/assets/images/' );
define( 'WINDOW_MAG_CORE', WINDOW_MAG_DIR . '/core/' );
define( 'WINDOW_MAG_CORE_URI', WINDOW_MAG_URI . '/core/' );
require_once WINDOW_MAG_CORE . 'init.php'; //Theme Core functions