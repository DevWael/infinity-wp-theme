<?php
$dw_theme = wp_get_theme();
define( 'DW_NAME', $dw_theme->name );
define( 'DW_DIR', get_template_directory() );
define( 'DW_URI', get_template_directory_uri() );
define( 'DW_CSS_URI', DW_URI . '/assets/css/' );
define( 'DW_JS_URI', DW_URI . '/assets/js/' );
define( 'DW_IMAGES_DIR', DW_URI . '/assets/images/' );
define( 'DW_CORE', DW_DIR . '/core/' );
define( 'DW_CORE_URI', DW_URI . '/core/' );
require_once DW_CORE . 'init.php'; //Theme Core functions