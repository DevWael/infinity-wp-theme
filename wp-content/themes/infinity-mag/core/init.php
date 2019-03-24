<?php
//disable gutenberg editor
add_filter( 'use_block_editor_for_post', '__return_false', 10 );
add_filter( 'use_block_editor_for_page', '__return_false', 10 );
/**
 * Post and comment like system
 */
require_once DW_CORE . 'blocks/init.php';

/**
 * Load Required Plugins
 */
require DW_CORE . 'required-plugins.php';
require DW_CORE . 'instagram.php';

/**
 * Load custom widgets
 */
if ( file_exists( DW_CORE . 'widgets/widgets.php' ) ) {
	require DW_CORE . 'widgets/widgets.php';
}

/**
 * Set the content width based on the theme's design.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 748;/* pixels */
}

/**
 * Load magazine blocks
 */
require DW_CORE . 'blocks/blocks.php';

add_action( 'after_setup_theme', 'dw_theme_setup' );
if ( ! function_exists( 'dw_theme_setup' ) ) {
	function dw_theme_setup() {
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'dw_slider_center', 800, 450, true );
		add_image_size( 'dw_slider_double', 600, 450, true );
		add_image_size( 'dw_slider_many', 350, 500, true );
		add_image_size( 'dw_big_post', 360, 310, true );
		add_image_size( 'dw_pic_post', 150, 100, true );
		add_image_size( 'dw_small_pic_post', 120, 80, true );
		add_theme_support( 'post-formats', array( 'quote', 'gallery', 'video', 'audio', 'link' ) );
		load_theme_textdomain( 'dw', get_template_directory() . '/languages' );
		register_nav_menus( array(
			'header_menu' => esc_html__( 'Primary Menu', 'dw' ),
			'footer_menu' => esc_html__( 'Footer Menu', 'dw' )
		) );
		add_theme_support( 'woocommerce', array(
			'thumbnail_image_width' => 150,
			'single_image_width'    => 300,

			'product_grid' => array(
				'default_rows'    => 3,
				'min_rows'        => 2,
				'max_rows'        => 8,
				'default_columns' => 4,
				'min_columns'     => 2,
				'max_columns'     => 5,
			),
		) );
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );
	}
}

/**
 * Get all theme setting from database when unyson framework plugin is activated
 */
if ( ! function_exists( 'dw_get_setting' ) ) {
	function dw_get_setting( $option_id, $default_value = null ) {
		if ( function_exists( 'fw_get_db_settings_option' ) ) {
			return fw_get_db_settings_option( $option_id, $default_value );
		} else {
			return false;
		}
	}
}

/**
 * Get all post meta from database when unyson framework plugin is activated
 */
if ( ! function_exists( 'dw_get_meta' ) ) {
	function dw_get_meta( $post_id, $option_id, $default_value = null ) {
		if ( function_exists( 'fw_get_db_post_option' ) ) {
			return fw_get_db_post_option( $post_id, $option_id, $default_value );
		} else {
			return false;
		}
	}
}

/**
 * Get term meta from database when unyson framework plugin is activated
 */
if ( ! function_exists( 'dw_get_term_setting' ) ) {
	function dw_get_term_setting( $cat_id, $option_id, $default_value = null ) {
		if ( function_exists( 'fw_get_db_term_option' ) ) {
			$tax = '';
			if ( is_category() ) {
				$tax = 'category';
			} elseif ( is_tag() ) {
				$tax = 'post_tag';
			}

			return fw_get_db_term_option( $cat_id, $tax, $option_id, $default_value );
		} else {
			return false;
		}
	}
}

/**
 * load theme scripts
 */
add_action( 'wp_enqueue_scripts', 'dw_enqueue_scripts' );
if ( ! function_exists( 'dw_enqueue_scripts' ) ) {
	function dw_enqueue_scripts() {
		// Css files
		$styles = array(
			'font-awesome' => 'font-awesome.css',//font awesome lib
			'bootstrap'    => 'bootstrap.css',//Bootstrap lib
			'magnific'     => 'magnific-popup.css', //Magnific Popup
			'owl-css'      => 'owl.carousel.css'//Owl carousel
		);
		foreach ( $styles as $key => $sc ) {
			wp_enqueue_style( $key, DW_CSS_URI . $sc );
		}

		wp_enqueue_style( 'default-font', 'https://fonts.googleapis.com/css?family=Ubuntu' );

		//Default stylesheet file (style.css)
		wp_enqueue_style( 'style', get_stylesheet_uri() );
		wp_enqueue_style( 'main-style', get_template_directory_uri() . '/main-style.css' );

		wp_enqueue_script( 'masonry' );
		$scripts = array(
			'bootstrap'      => 'bootstrap.js',
			'magnific-popup' => 'jquery.magnific-popup.js',
			'theia-sticky'   => 'theia-sticky-sidebar.js',
			'slick-nav'      => 'jquery.slicknav.min.js',
			'fitvids'        => 'jquery.fitvids.js',
			'owl-carousel'   => 'owl.carousel.min.js',
			'main'           => 'main.js'
		);
		foreach ( $scripts as $alias => $src ) {
			wp_enqueue_script( $alias, DW_JS_URI . $src, array( 'jquery' ), '1.0', true );
		}

		wp_enqueue_script( 'main-js', get_template_directory_uri() . '/main.js', array( 'jquery' ),false , true );
		if ( is_singular() ) {
			wp_enqueue_script( "comment-reply" );
		}
		dw_open_graph();
	}
}

/**
 * For improving page loading speed
 * Removing Query String From The Static Resources
 */
add_filter( 'script_loader_src', 'dw_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', 'dw_remove_script_version', 15, 1 );
function dw_remove_script_version( $src ) {
	if ( strpos( $src, '?ver=' ) ) {
		$src = remove_query_arg( 'ver', $src );
	}

	return $src;
}

/**
 * Review system
 */
if ( ! function_exists( 'dw_review_system' ) ) {
	function dw_review_system( $post_id, $size = 'small', $before = '', $after = '' ) {
		$review_title  = dw_get_meta( $post_id, 'window_review-title' );
		$review_desc   = dw_get_meta( $post_id, 'window_review-desc' );
		$rating_scores = dw_get_meta( $post_id, 'window_review-rating' );
		$rates         = array();
		$rates_average = '';
		if ( $rating_scores ) {
			if ( 'large' === $size ) {
				/**
				 * Display the review system block in the single post
				 */
				echo $before;
				if ( $review_title ):
					?>
                    <div class="review-header">
                        <div class="review-title h4">
							<?php echo esc_html( $review_title ); ?>
                        </div>
                        <div class="name hide entry-title" itemprop="name"><?php the_title(); ?></div>
                        <div class="entry-title hide" itemprop="itemReviewed" itemscope=""
                             itemtype="http://schema.org/Thing"><span
                                    itemprop="name"><?php echo esc_html( $review_title ); ?></span></div>
                        <div class="hide" itemprop="reviewBody">
							<?php dw_excerpt(); ?>
                        </div>

                        <div class="updated hide"><?php echo get_the_time( get_option( 'date_format' ) ); ?></div>
                        <div class="vcard hide author" itemprop="author" itemscope=""
                             itemtype="http://schema.org/Person">
                            <strong class="fn" itemprop="name"><?php the_author(); ?></strong></div>
                        <meta itemprop="datePublished"
                              content="<?php echo get_the_time( get_option( 'date_format' ) ); ?>">
                    </div>
				<?php
				endif;
				foreach ( $rating_scores as $score ) {
					if ( is_numeric( $score['score'] ) ) {
						if ( $score['score'] > 10 ) {
							$score['score'] = 10;
						} elseif ( $score['score'] < 0 ) {
							$score['score'] = 0;
						}
						$rates[] = $score['score'];//Saving all scores into one array
						$width   = ( $score['score'] / 10 ) * 100 . '%';//The width of the progress bar
						?>
                        <div class="criteria">
							<?php if ( $score['feature_name'] ) : ?>
                                <div class="criteria-title">
									<?php echo $score['feature_name'] . ' - ' . $score['score']; ?>
                                    <span class="out-of"><?php esc_html_e( '/ 10', 'dw' ); ?></span>
                                </div>
							<?php endif; ?>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar"
                                     style="width: <?php echo esc_attr( $width ); ?>;"></div>
                            </div>
                        </div>
						<?php
					}
				}
				/**
				 * Rating average calculation
				 */
				if ( $rates ) {
					$rates_average = array_sum( $rates ) / count( $rates );
				}
				if ( $review_desc or $rates_average ): ?>
                    <div class="review-footer" itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
						<?php
						if ( $rates_average ):
							/**
							 * The rate score
							 */
							?>
							<?php $final_score = round( $rates_average, 1 ); ?>
                            <div class="review-score">
                                <meta itemprop="worstRating" content="1">
                                <meta itemprop="bestRating" content="10">
                                <span class="rating hide points">
									<span class="rating points" itemprop="ratingValue">
										<?php echo esc_html( $final_score ) ?>
									</span>
								</span>
                                <h3>
									<?php echo esc_html( $final_score ) ?>
                                </h3>
                                <h4>
									<?php
									/**
									 * The rate scale
									 */
									switch ( $final_score ) {
										case ( $final_score <= 10 && $final_score >= 8.5 ) :
											esc_html_e( 'Excellent', 'dw' );
											break;
										case ( $final_score <= 8.4 && $final_score >= 7.5 ) :
											esc_html_e( 'Very Good', 'dw' );
											break;
										case ( $final_score <= 7.4 && $final_score >= 6 ) :
											esc_html_e( 'Good', 'dw' );
											break;
										case ( $final_score <= 5.9 && $final_score >= 4 ) :
											esc_html_e( 'Average', 'dw' );
											break;
										case ( $final_score < 4 ) :
											esc_html_e( 'Poor', 'dw' );
											break;
									}
									?>
                                </h4>
                            </div>
						<?php endif;
						if ( $review_desc ):
							/**
							 * Rating Description
							 */
							?>
                            <div class="review-description" itemprop="description">
								<?php echo esc_html( $review_desc ); ?>
                            </div>
						<?php
						endif;
						?>
                    </div>
				<?php endif; ?>
				<?php
				echo $after;
			} elseif ( 'small' === $size ) {
				/**
				 * Display The review score as post meta
				 */
				echo $before;
				foreach ( $rating_scores as $score ) {
					if ( is_numeric( $score['score'] ) ) {
						if ( $score['score'] > 10 ) {
							$score['score'] = 10;
						} elseif ( $score['score'] < 0 ) {
							$score['score'] = 0;
						}
						$rates[] = $score['score'];
					}
				}
				if ( $rates ) {
					$rates_average = array_sum( $rates ) / count( $rates );
				}
				if ( $rates_average ):
					?>
                    <span class="small-rating" title="<?php esc_attr_e( 'Rating Score', 'dw' ); ?>">
						<i class="fa fa-bar-chart"></i>
						<?php echo esc_html( round( $rates_average, 1 ) ); ?>
					</span>
				<?php
				endif;
				echo $after;
			}
		}
	}
}

add_action( 'wp_head', 'dw_user_custom_scripts' );
if ( ! function_exists( 'dw_user_custom_scripts' ) ) {
	function dw_user_custom_scripts() {
		if ( function_exists( 'fw_get_db_settings_option' ) ) {
			echo '<style type="text/css">';
			require DW_CORE . 'dynamic-style.php';
			echo '</style>';
		}
		//Custom Javascript code
		if ( dw_get_setting( 'js' ) ) {
			?>
            <script type="text/javascript">
				<?php echo dw_get_setting( 'js' ); ?>
            </script>
			<?php
		}
		//App icons
		if ( dw_get_setting( 'favicon/attachment_id' ) ): ?>
            <link rel="shortcut icon"
                  href="<?php echo esc_url( wp_get_attachment_image_url( dw_get_setting( 'favicon/attachment_id' ), 'thumbnail', true ) ); ?>"/>
		<?php endif;
		if ( dw_get_setting( 'apple57/url' ) ): ?>
            <link rel="apple-touch-icon-precomposed" sizes="57x57"
                  href="<?php echo esc_url( dw_get_setting( 'apple57/url' ) ); ?>"/>
		<?php endif; ?>
		<?php if ( dw_get_setting( 'apple72/url' ) ): ?>
            <link rel="apple-touch-icon-precomposed" sizes="72x72"
                  href="<?php echo esc_url( dw_get_setting( 'apple72/url' ) ); ?>"/>
		<?php endif;
		if ( dw_get_setting( 'apple114/url' ) ): ?>
            <link rel="apple-touch-icon-precomposed" sizes="114x114"
                  href="<?php echo esc_url( dw_get_setting( 'apple114/url' ) ); ?>"/>
            <meta name="msapplication-TileImage"
                  content="<?php echo esc_url( dw_get_setting( 'apple114/url' ) ); ?>">

		<?php endif; ?>
        <meta name="application-name" content="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"/>
		<?php
		//Google chrome theme color for mobile devices
		$main_color = '#CD483C'; //The Default red color
		if ( dw_get_setting( 'accent_color' ) ) {
			$main_color = dw_get_setting( 'accent_color' );
		}
		?>
        <meta name="theme-color" content="<?php echo sanitize_hex_color( $main_color ); ?>">
		<?php
	}
}

/*
 * Hex colors sanitize
 */
if ( ! function_exists( 'sanitize_hex_color' ) ) {
	function sanitize_hex_color( $color ) {
		if ( '' === $color ) {
			return '';
		}
		// 3 or 6 hex digits, or the empty string.
		if ( preg_match( '|^#([A-Fa-f0-9]{3}){1,2}$|', $color ) ) {
			return $color;
		}
	}
}

/**
 * convert colors from hex to rgb
 *
 * @param $hex string color in hexadecimal type
 *
 * @return string color in rgb type
 */
function dw_hex2rgb( $hex ) {
	$hex = sanitize_hex_color( $hex );
	$hex = str_replace( "#", "", $hex );
	if ( strlen( $hex ) == 3 ) {
		$r = hexdec( substr( $hex, 0, 1 ) . substr( $hex, 0, 1 ) );
		$g = hexdec( substr( $hex, 1, 1 ) . substr( $hex, 1, 1 ) );
		$b = hexdec( substr( $hex, 2, 1 ) . substr( $hex, 2, 1 ) );
	} else {
		$r = hexdec( substr( $hex, 0, 2 ) );
		$g = hexdec( substr( $hex, 2, 2 ) );
		$b = hexdec( substr( $hex, 4, 2 ) );
	}
	$rgb = array( $r, $g, $b );

	return implode( ",", $rgb ); // returns the rgb values separated by commas
	//return $rgb; // returns an array with the rgb values
}

if ( ! function_exists( 'dw_color_palettes' ) ) {
	function dw_color_palettes() {
		return apply_filters(
			'dw_default_color_palettes', array(
				'#2979FF',
				'#ce2189',
				'#ABBE83',
				'#074876',
				'#CDD6D5',
				'#424442',
				'#C19990',
				'#1075A0',
				'#FFF7E4',
				'#FEEABD'
			)
		);
	}
}
/**
 * Add 'window-class' class to body tag
 */
add_filter( 'body_class', 'dw_class_name' );
if ( ! function_exists( 'dw_class_name' ) ) {
	function dw_class_name( $classes ) {
		$classes[] = 'window-class';

		if ( dw_get_setting( 'code_highlight' ) == 'on' ) {
			$classes[] = 'window-code';
		}

		if ( dw_get_setting( 'headers_style' ) ) {
			$classes[] = dw_get_setting( 'headers_style' );
		}

		return $classes;
	}
}

/**
 * Window Demo content
 */
add_filter( 'fw:ext:backups-demo:demos', 'dw_demo_content' );
function dw_demo_content( $demos ) {
	$demos_array = array(
		'news-demo'   => array(
			'title'        => esc_html__( 'News Demo', 'dw' ),
			'screenshot'   => 'http://bbioon.com/window/demo_content/content/news.png',
			'preview_link' => 'http://bbioon.com/window/news'
		),
		'sport-demo'  => array(
			'title'        => esc_html__( 'Sport Demo', 'dw' ),
			'screenshot'   => 'http://bbioon.com/window/demo_content/content/sport.png',
			'preview_link' => 'http://bbioon.com/window/sport'
		),
		'food-demo'   => array(
			'title'        => esc_html__( 'Food Demo', 'dw' ),
			'screenshot'   => 'http://bbioon.com/window/demo_content/content/food.png',
			'preview_link' => 'http://bbioon.com/window/food'
		),
		'blog-demo'   => array(
			'title'        => esc_html__( 'Blog Demo', 'dw' ),
			'screenshot'   => 'http://bbioon.com/window/demo_content/content/blog.png',
			'preview_link' => 'http://bbioon.com/window/blog'
		),
		'styles-demo' => array(
			'title'        => esc_html__( 'Fashion Demo', 'dw' ),
			'screenshot'   => 'http://bbioon.com/window/demo_content/content/styles.png',
			'preview_link' => 'http://bbioon.com/window/styles'
		),
		'tech-demo'   => array(
			'title'        => esc_html__( 'Technology Demo', 'dw' ),
			'screenshot'   => 'http://bbioon.com/window/demo_content/content/techno.png',
			'preview_link' => 'http://www.bbioon.com/window/techno/'
		)
	);

	$download_url = 'http://www.bbioon.com/window/demo_content/index.php';

	foreach ( $demos_array as $id => $data ) {
		$demo = new FW_Ext_Backups_Demo( $id, 'piecemeal', array(
			'url'     => $download_url,
			'file_id' => $id,
		) );
		$demo->set_title( $data['title'] );
		$demo->set_screenshot( $data['screenshot'] );
		$demo->set_preview_link( $data['preview_link'] );

		$demos[ $demo->get_id() ] = $demo;

		unset( $demo );
	}

	return $demos;
}

/*
 * Add window version in wp-admin footer
 */
add_filter( 'update_footer', 'dw_footer_version', 12 );
function dw_footer_version( $html ) {
	if ( ( current_user_can( 'update_themes' ) || current_user_can( 'update_plugins' ) ) && defined( "FW" ) ) {
		return ( empty( $html ) ? '' : $html . ' | ' ) . fw()->theme->manifest->get( 'name' ) . ' ' . fw()->theme->manifest->get( 'version' );
	} else {
		return $html;
	}
}

/**
 * Add help links to admin bar ( Theme settings page )
 */
add_action( 'admin_bar_menu', 'dw_toolbar_links', 999 );
function dw_toolbar_links( $wp_admin_bar ) {
	if ( current_user_can( 'administrator' ) && defined( "FW" ) && ! is_admin() ) {
		//Theme options
		$args_1 = array(
			'id'    => 'window_settings',
			'title' => 'Theme Settings',
			'href'  => admin_url( 'themes.php?page=fw-settings' ),
			'meta'  => array( 'class' => 'window-mag-setting-page' )
		);
		$wp_admin_bar->add_node( $args_1 );
	}
}

/**
 * add scripts and styles to admin screen
 */
add_action( 'admin_enqueue_scripts', 'dw_admin_scripts' );
if ( ! function_exists( 'dw_admin_scripts' ) ) {
	function dw_admin_scripts() {
		wp_enqueue_style( 'admin_fontawesome', DW_CSS_URI . 'font-awesome.css' );
		wp_enqueue_style( 'admin_style', DW_CORE_URI . 'scripts/admin-stylesheet.css' );
		wp_enqueue_script( 'post_format', DW_CORE_URI . 'scripts/post-formats.js' );
	}
}

/**
 * Content area layout
 *
 * @param $page_name -- page name in theme options page
 */
if ( ! function_exists( 'dw_content_area_start' ) ) {
	function dw_content_area_start( $page_name ) {
		$sidebar_position = dw_get_setting( $page_name );

		if ( $sidebar_position == 'left_sidebar' ) {
			echo '<div class="col-md-8 col-xs-12 col-md-push-4 with-sidebar left-sidebar">';
		} elseif ( $sidebar_position == 'right_sidebar' ) {
			echo '<div class="col-md-8 col-xs-12 with-sidebar right-sidebar">';
		} else {
			echo '<div class="col-md-8 col-xs-12">';
		}
	}
}

if ( ! function_exists( 'dw_content_area_end' ) ) {
	function dw_content_area_end() {
		echo '</div>';
	}
}

/**
 * Sidebar area layout
 *
 * @param $page_name -- page name in theme options page
 */
if ( ! function_exists( 'dw_sidebar_start' ) ) {
	function dw_sidebar_start( $page_name ) {
		$sticky_sidebar   = $sidebar_position = '';
		$sidebar_position = dw_get_setting( $page_name );
		if ( 'on' === dw_get_setting( 'sticky_sidebar' ) ) {
			$sticky_sidebar = 'sticky-sidebar ';
		}
		if ( $sidebar_position == 'left_sidebar' ) {
			echo '<div class="' . esc_attr( $sticky_sidebar ) . 'col-md-4 col-xs-12 col-md-pull-8">';
		} elseif ( $sidebar_position == 'right_sidebar' ) {
			echo '<div class="' . esc_attr( $sticky_sidebar ) . 'col-md-4 col-xs-12">';
		} else {
			echo '<div class="' . esc_attr( $sticky_sidebar ) . 'col-md-4 col-xs-12">';
		}
	}
}

if ( ! function_exists( 'dw_sidebar_end' ) ) {
	function dw_sidebar_end() {
		echo '</div>';
	}
}


/**
 * Register our sidebars and widgetized areas.
 */
add_action( 'widgets_init', 'dw_widget_area' );
if ( ! function_exists( 'dw_widget_area' ) ) {
	function dw_widget_area() {
		$args = array(
			array(
				'name'          => esc_html__( 'First Half Area Sidebar', 'dw' ),
				'id'            => 'first_side_bar',
				'before_widget' => '<div class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h4 class="widget-title"><span>',
				'after_title'   => '</span></h4>'
			),
			array(
				'name'          => esc_html__( 'Second Half Area Sidebar', 'dw' ),
				'id'            => 'second_side_bar',
				'before_widget' => '<div class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h4 class="widget-title"><span>',
				'after_title'   => '</span></h4>'
			),
			array(
				'name'          => esc_html__( 'Footer one', 'dw' ),
				'id'            => 'footer1',
				'before_widget' => '<div class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h4 class="widget-title"><span>',
				'after_title'   => '</span></h4>'
			),
			array(
				'name'          => esc_html__( 'Footer two', 'dw' ),
				'id'            => 'footer2',
				'before_widget' => '<div class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h4 class="widget-title"><span>',
				'after_title'   => '</span></h4>'
			),
			array(
				'name'          => esc_html__( 'Footer three', 'dw' ),
				'id'            => 'footer3',
				'before_widget' => '<div class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h4 class="widget-title"><span>',
				'after_title'   => '</span></h4>'
			)
		);
		foreach ( $args as $arg ) {
			register_sidebar( $arg );
		}
	}
}


/**
 * @param $exstra_class
 *
 * @return int $i --> determine the count of active widget areas in footer to add bootstrap grid classes
 */
if ( ! function_exists( 'dw_active_widgets' ) ) {
	function dw_active_widgets( $exstra_class = null ) {
		$i = 0;
		if ( is_active_sidebar( 'footer1' ) ) {
			$i ++;
		}
		if ( is_active_sidebar( 'footer2' ) ) {
			$i ++;
		}
		if ( is_active_sidebar( 'footer3' ) ) {
			$i ++;
		}
		switch ( $i ) {
			case 3:
				echo 'class="col-md-4 col-xs-12 ' . esc_attr( $exstra_class ) . '"';
				break;
			case 2:
				echo 'class="col-md-6 col-xs-12 ' . esc_attr( $exstra_class ) . '"';
				break;
			case 1:
				echo 'class="col-md-12 col-sm-12 col-xs-12 ' . esc_attr( $exstra_class ) . '"';
				break;
			default :
				echo 'class="col-md-4 col-xs-12 no-active-widgets ' . esc_attr( $exstra_class ) . '"';
		}
	}
}

/**
 * WordPress Excerpt Length
 * */
if ( ! function_exists( 'dw_excerpt_global_length' ) ) {
	function dw_excerpt_global_length( $length ) {
		$len = absint( dw_get_setting( 'post_excerpt' ) );
		if ( $len ) {
			return $len;
		} else {
			return 40;
		}

	}
}

function dw_excerpt() {
	add_filter( 'excerpt_length', 'dw_excerpt_global_length', 999 );
	echo get_the_excerpt();
}

/**
 * Read More text
 * */
add_filter( 'excerpt_more', 'dw_remove_excerpt' );
if ( ! function_exists( 'dw_remove_excerpt' ) ) {
	function dw_remove_excerpt( $more ) {
		return '...';
	}
}

/**
 * Posts Pagination
 */
if ( ! function_exists( 'dw_pagination' ) ) {
	function dw_pagination() {
		if ( is_singular() ) {
			return;
		}
		global $wp_query;
		if ( $wp_query->max_num_pages <= 1 ) {
			return;
		}
		$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
		$max   = intval( $wp_query->max_num_pages );
		if ( $paged >= 1 ) {
			$links[] = $paged;
		}
		if ( $paged >= 3 ) {
			$links[] = $paged - 1;
			$links[] = $paged - 2;
		}
		if ( ( $paged + 2 ) <= $max ) {
			$links[] = $paged + 2;
			$links[] = $paged + 1;
		}
		echo '<div class="pagePagination"><ul>' . "\n";
		if ( ! in_array( 1, $links ) ) {
			$class = 1 == $paged ? ' class="active"' : '';
			printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
			if ( ! in_array( 2, $links ) ) {
				echo '<li><span>...</span></li>';
			}
		}
		sort( $links );
		foreach ( (array) $links as $link ) {
			$class = $paged == $link ? ' class="active"' : '';
			printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
		}
		if ( ! in_array( $max, $links ) ) {
			if ( ! in_array( $max - 1, $links ) ) {
				echo '<li><span>...</span></li>' . "\n";
			}

			$class = $paged == $max ? ' class="active"' : '';
			printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
		}
		echo '</ul></div>' . "\n";
	}
}

/**
 * this function returns array of social media urls (in html) with it's fontawesome icon
 * or print them if $echo is true
 *
 * @param $echo bool
 *
 * @return mixed array of social media html anchors or print them if $echo is true
 */
if ( ! function_exists( 'dw_social_media_urls' ) ) {
	function dw_social_media_urls( $echo = false ) {
		$icons = dw_get_setting( 'social_icon' );
		if ( ! $icons ) {
			return false;
		}
		$icon_html = array();
		foreach ( $icons as $icon ) {
			if ( $icon['url'] && $icon['icon'] ) {
				//create icon and add it to the array
				$tab         = $icon['tab'] ? '_blank' : '';
				$icon_html[] = '<a href="' . esc_url( $icon['url'] ) . '" ' . 'class="social-icon ' . esc_attr( strtolower( str_replace( ' ', '-', $icon['title'] ) ) ) . '" ' . 'title="' . $icon['title'] . '" target="' . esc_attr( $tab ) . '"><i class="fa ' . esc_attr( $icon['icon'] ) . '"></i></a>';
			}
		}
		// print the given icons
		if ( $echo && $icon_html ) {
			foreach ( $icon_html as $one_icon ) {
				echo $one_icon;
			}

			//Return the given icons into array
		} elseif ( $echo == false && $icon_html ) {
			return $icon_html;
		}

	}
}

/**
 * Set open graph meta data
 */
if ( ! function_exists( 'dw_open_graph' ) ) {
	function dw_open_graph() {
		global $post;
		$post_thumb = '';
		if ( function_exists( "has_post_thumbnail" ) && has_post_thumbnail() ) {
			$post_thumb = get_the_post_thumbnail_url( $post->ID );
		}
		$title       = get_bloginfo( 'name' );
		$description = get_bloginfo( 'description' );
		$type        = 'website';
		if ( is_singular() ) {
			$title       = strip_shortcodes( strip_tags( ( get_the_title() ) ) ) . ' - ' . get_bloginfo( 'name' );
			$description = strip_tags( $post->post_content );
			$type        = 'article';
			?>
            <meta property="og:url" content="<?php the_permalink(); ?>"/>
			<?php
		}
		?>
        <meta property="og:title" content="<?php echo esc_attr( $title ); ?>"/>
        <meta property="og:type" content="<?php echo esc_attr( $type ); ?>"/>
        <meta property="og:description" content="<?php echo esc_attr( wp_html_excerpt( $description, 100 ) ); ?>"/>
        <meta property="og:site_name" content="<?php echo esc_attr( get_bloginfo( 'name' ) ) ?>"/>
		<?php
		if ( ! empty( $post_thumb ) && is_singular() ) {
			echo '<meta property="og:image" content="' . esc_url( $post_thumb ) . '" />' . "\n";
		} elseif ( dw_get_setting( 'site_logo/gadget' ) == 'logo' && dw_get_setting( 'site_logo/logo/logo_select/url' ) ) {
			echo '<meta property="og:image" content="' . esc_url( dw_get_setting( 'site_logo/logo/logo_select/url' ) ) . '" />' . "\n";
		}
	}
}

/**
 * Ads area ids -> header(1) - footer(2) - top_article(3) - bottom_article(4)
 *
 * @param $ads_id int Ad area -> header(1) - footer(2) - top_article(3) - bottom_article(4)
 * @param string $class_attr html class attribute
 */
function dw_ads( $ads_id, $class_attr = 'ads-banner' ) {
	$control = dw_get_setting( 'banner_box' . $ads_id . '/gadget' );
	if ( 'code' == $control ) {
		if ( dw_get_setting( 'banner_box' . $ads_id . '/code/code_block' ) ) { ?>
            <div class="<?php echo esc_attr( $class_attr ) ?>">
				<?php echo do_shortcode( htmlspecialchars_decode( dw_get_setting( 'banner_box' . $ads_id . '/code/code_block' ) ) ); ?>
            </div>
		<?php }
	} elseif ( 'image' == $control ) {
		if ( dw_get_setting( 'banner_box' . $ads_id . '/image/img' ) ) {
			$target = $nofollow = false;
			if ( dw_get_setting( 'banner_box' . $ads_id . '/image/tab' ) ) {
				$target = true;
			}
			if ( dw_get_setting( 'banner_box' . $ads_id . '/image/follow' ) ) {
				$nofollow = true;
			}
			?>
            <div class="<?php echo esc_attr( $class_attr ) ?>">
                <a href="<?php echo esc_url( dw_get_setting( 'banner_box' . $ads_id . '/image/url' ) ); ?>"
                   title="<?php echo esc_attr( dw_get_setting( 'banner_box' . $ads_id . '/image/alt' ) ); ?>"<?php if ( $target ) { ?> target="_blank"<?php } ?><?php if ( $nofollow ) { ?> rel="nofollow"<?php } ?>>
                    <img
                            src="<?php echo esc_url( dw_get_setting( 'banner_box' . $ads_id . '/image/img/url' ) ); ?>"
                            alt="<?php echo esc_attr( dw_get_setting( 'banner_box' . $ads_id . '/image/alt' ) ); ?>"
                            class="img-responsive"/>
                </a>
            </div>
			<?php

		}
	}
}

/**
 * This function returns the views count for the current post id
 *
 * @param $postID -> The current post id
 *
 * @return string -> post views count
 */
function dw_getPostViews( $postID ) {
	$count_key = 'bbioon_post_views';
	$count     = get_post_meta( $postID, $count_key, true );
	if ( $count == '' ) {
		delete_post_meta( $postID, $count_key );
		add_post_meta( $postID, $count_key, '0' );

		return esc_html__( '0 view', 'dw' );
	} else {
		return $count;
	}
}


function dw_setPostViews( $postID ) {
	$count_key = 'bbioon_post_views';
	$count     = get_post_meta( $postID, $count_key, true );
	if ( $count == '' ) {
		$count = 0;
		delete_post_meta( $postID, $count_key );
		add_post_meta( $postID, $count_key, '0' );
	} else {
		$count ++;
		update_post_meta( $postID, $count_key, $count );
	}

}

/**
 * This function set post view count for the current post id only for visitor not the logged-in user
 *
 * @param $post_id -> The current post id
 */
add_action( 'wp_head', 'dw_count_popular_posts' );
function dw_count_popular_posts( $post_id ) {
	if ( ! is_singular() ) {
		return;
	}
	if ( ! is_user_logged_in() ) {
		if ( empty ( $post_id ) ) {
			global $post;
			$post_id = $post->ID;
		}
		dw_setPostViews( $post_id );
	}
}


// Add it to a column in WP-Admin
add_filter( 'manage_posts_columns', 'dw_posts_column_views' );
function dw_posts_column_views( $defaults ) {
	$defaults['post_views'] = esc_html__( 'Views Count', 'dw' );

	return $defaults;
}

add_action( 'manage_posts_custom_column', 'dw_posts_custom_column_views', 5, 2 );
function dw_posts_custom_column_views( $column_name ) {
	if ( $column_name === 'post_views' ) {
		echo (int) get_post_meta( get_the_ID(), 'bbioon_post_views', true );
	}
}

/*
 * Navbar Fallback
 */
if ( ! function_exists( 'dw_nav_fallback' ) ) {
	function dw_nav_fallback() {
		echo '<ul class="navbar-alert"><li><span class="fall-back">' . esc_html__( 'Use WP menu builder to build menus', 'dw' ) . '</span></li></ul>';
	}
}

/**
 * Display html code for login form or logged in user data
 */
if ( ! function_exists( 'dw_login_form' ) ) {
	function dw_login_form( $login_only = 0 ) {
		global $user_ID, $user_level, $user_identity;
		$redirect = site_url();
		if ( $user_ID ) : ?>
			<?php if ( empty( $login_only ) ): ?>
                <div class="user-login">
                    <div class="author-avatar"><?php echo get_avatar( $user_ID, $size = '80' ); ?></div>
                    <p class="welcome-text"><?php esc_html_e( 'Welcome', 'dw' ); ?>
                        <strong><?php echo $user_identity ?></strong> .</p>
                    <ul>
                        <li><a href="<?php echo admin_url() ?>"><?php esc_html_e( 'Dashboard', 'dw' ); ?> </a>
                        </li>
                        <li>
                            <a href="<?php echo admin_url() ?>profile.php"><?php esc_html_e( 'Your Profile', 'dw' ); ?> </a>
                        </li>
                        <li>
                            <a href="<?php echo wp_logout_url( $redirect ); ?>"><?php esc_html_e( 'Logout', 'dw' ); ?> </a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
			<?php endif; ?>
		<?php else: ?>
            <div class="login-form">
                <form name="loginform"
                      action="<?php echo esc_url( site_url( 'wp-login.php', 'login_post' ) ); ?>" method="post">
                    <p class="log-username">
                        <input type="text" name="log" class="log"
                               title="<?php esc_html_e( 'Username', 'dw' ); ?>"
                               placeholder="<?php esc_html_e( 'Username', 'dw' ); ?>"
                               size="33"/>
                    </p>
                    <p class="log-pass">
                        <input type="password" name="pwd" class="pwd"
                               title="<?php esc_html_e( 'Password', 'dw' ); ?>"
                               placeholder="<?php esc_html_e( 'Password', 'dw' ); ?>"
                               size="33"/>
                    </p>
                    <input type="submit" name="submit" value="<?php esc_html_e( 'Log in', 'dw' ) ?>"
                           class="login-button"/>
                    <label for="rememberme"><input name="rememberme" class="rememberme" type="checkbox"
                                                   checked="checked"
                                                   value="forever"/> <?php esc_html_e( 'Remember Me', 'dw' ); ?>
                    </label>
                    <input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>"/>
                </form>
                <ul class="login-links">
					<?php echo wp_register(); ?>
                    <li>
                        <a href="<?php echo wp_lostpassword_url( $redirect ) ?>"><?php esc_html_e( 'Lost your password?', 'dw' ); ?></a>
                    </li>
                </ul>
            </div>
		<?php endif;
	}
}

/**
 * Add user's social accounts
 *
 */
add_action( 'show_user_profile', 'dw_show_extra_profile_fields' );
add_action( 'edit_user_profile', 'dw_show_extra_profile_fields' );
if ( ! function_exists( 'dw_show_extra_profile_fields' ) ) {
	function dw_show_extra_profile_fields( $user ) {
		?>
        <h3><?php esc_html_e( 'Social Networking', 'dw' ) ?></h3>
        <table class="form-table">
            <tr>
                <th><label for="facebook"><?php esc_html_e( 'FaceBook URL', 'dw' ); ?></label></th>
                <td>
                    <input type="text" name="facebook" id="facebook"
                           value="<?php echo esc_attr( get_the_author_meta( 'facebook', $user->ID ) ); ?>"
                           class="regular-text"/><br/>
                </td>
            </tr>
            <tr>
                <th><label for="twitter"><?php esc_html_e( 'Twitter URL', 'dw' ); ?></label></th>
                <td>
                    <input type="text" name="twitter" id="twitter"
                           value="<?php echo esc_attr( get_the_author_meta( 'twitter', $user->ID ) ); ?>"
                           class="regular-text"/><br/>
                </td>
            </tr>
            <tr>
                <th><label for="google"><?php esc_html_e( 'Google + URL', 'dw' ); ?></label></th>
                <td>
                    <input type="text" name="google" id="google"
                           value="<?php echo esc_attr( get_the_author_meta( 'google', $user->ID ) ); ?>"
                           class="regular-text"/><br/>
                </td>
            </tr>
            <tr>
                <th><label for="dribbble"><?php esc_html_e( 'Dribbble URL', 'dw' ); ?></label></th>
                <td>
                    <input type="text" name="dribbble" id="dribbble"
                           value="<?php echo esc_attr( get_the_author_meta( 'dribbble', $user->ID ) ); ?>"
                           class="regular-text"/><br/>
                </td>
            </tr>
            <tr>
                <th><label for="github"><?php esc_html_e( 'Github URL', 'dw' ); ?></label></th>
                <td>
                    <input type="text" name="github" id="github"
                           value="<?php echo esc_attr( get_the_author_meta( 'github', $user->ID ) ); ?>"
                           class="regular-text"/><br/>
                </td>
            </tr>
            <tr>
                <th><label for="instagram"><?php esc_html_e( 'Instagram URL', 'dw' ); ?></label></th>
                <td>
                    <input type="text" name="instagram" id="instagram"
                           value="<?php echo esc_attr( get_the_author_meta( 'instagram', $user->ID ) ); ?>"
                           class="regular-text"/><br/>
                </td>
            </tr>
            <tr>
                <th><label for="linkedin"><?php esc_html_e( 'linkedIn URL', 'dw' ); ?></label></th>
                <td>
                    <input type="text" name="linkedin" id="linkedin"
                           value="<?php echo esc_attr( get_the_author_meta( 'linkedin', $user->ID ) ); ?>"
                           class="regular-text"/><br/>
                </td>
            </tr>
            <tr>
                <th><label for="tumblr"><?php esc_html_e( 'Tumblr URL', 'dw' ); ?></label></th>
                <td>
                    <input type="text" name="tumblr" id="tumblr"
                           value="<?php echo esc_attr( get_the_author_meta( 'tumblr', $user->ID ) ); ?>"
                           class="regular-text"/><br/>
                </td>
            </tr>
            <tr>
                <th><label for="flickr"><?php esc_html_e( 'Flickr URL', 'dw' ); ?></label></th>
                <td>
                    <input type="text" name="flickr" id="flickr"
                           value="<?php echo esc_attr( get_the_author_meta( 'flickr', $user->ID ) ); ?>"
                           class="regular-text"/><br/>
                </td>
            </tr>
            <tr>
                <th><label for="pinterest"><?php esc_html_e( 'Pinterest URL', 'dw' ); ?></label></th>
                <td>
                    <input type="text" name="pinterest" id="pinterest"
                           value="<?php echo esc_attr( get_the_author_meta( 'pinterest', $user->ID ) ); ?>"
                           class="regular-text"/><br/>
                </td>
            </tr>
            <tr>
                <th><label for="vimeo"><?php esc_html_e( 'Vimeo URL', 'dw' ); ?></label></th>
                <td>
                    <input type="text" name="vimeo" id="vimeo"
                           value="<?php echo esc_attr( get_the_author_meta( 'vimeo', $user->ID ) ); ?>"
                           class="regular-text"/><br/>
                </td>
            </tr>
            <tr>
                <th><label for="youtube"><?php esc_html_e( 'YouTube URL', 'dw' ); ?></label></th>
                <td>
                    <input type="text" name="youtube" id="youtube"
                           value="<?php echo esc_attr( get_the_author_meta( 'youtube', $user->ID ) ); ?>"
                           class="regular-text"/><br/>
                </td>
            </tr>
        </table>
		<?php
	}
}


/**
 * Save user's social accounts
 * */
add_action( 'personal_options_update', 'dw_save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'dw_save_extra_profile_fields' );
if ( ! function_exists( 'dw_save_extra_profile_fields' ) ) {
	function dw_save_extra_profile_fields( $user_id ) {
		if ( ! current_user_can( 'edit_user', $user_id ) ) {
			return false;
		}
		update_user_meta( $user_id, 'facebook', $_POST['facebook'] );
		update_user_meta( $user_id, 'twitter', $_POST['twitter'] );
		update_user_meta( $user_id, 'google', $_POST['google'] );
		update_user_meta( $user_id, 'dribbble', $_POST['dribbble'] );
		update_user_meta( $user_id, 'github', $_POST['github'] );
		update_user_meta( $user_id, 'instagram', $_POST['instagram'] );
		update_user_meta( $user_id, 'linkedin', $_POST['linkedin'] );
		update_user_meta( $user_id, 'tumblr', $_POST['tumblr'] );
		update_user_meta( $user_id, 'flickr', $_POST['flickr'] );
		update_user_meta( $user_id, 'pinterest', $_POST['pinterest'] );
		update_user_meta( $user_id, 'vimeo', $_POST['vimeo'] );
		update_user_meta( $user_id, 'youtube', $_POST['youtube'] );
	}
}


/**
 * print social urls for current user
 * or return bool for check if the user added his social links
 *
 * @param $user_id --> current user id
 * @param $bool --> for return bool
 *
 * @return mixed --> for print icons with links or bool for found links
 */
if ( ! function_exists( 'dw_author_socials' ) ) {
	function dw_author_socials( $user_id, $bool = false ) {
		$user_meta = array(
			'fa-facebook'    => get_the_author_meta( 'facebook', $user_id ),
			'fa-twitter'     => get_the_author_meta( 'twitter', $user_id ),
			'fa-google-plus' => get_the_author_meta( 'google', $user_id ),
			'fa-dribbble'    => get_the_author_meta( 'dribbble', $user_id ),
			'fa-github'      => get_the_author_meta( 'github', $user_id ),
			'fa-instagram'   => get_the_author_meta( 'instagram', $user_id ),
			'fa-linkedin'    => get_the_author_meta( 'linkedin', $user_id ),
			'fa-tumblr'      => get_the_author_meta( 'tumblr', $user_id ),
			'fa-flickr'      => get_the_author_meta( 'flickr', $user_id ),
			'fa-pinterest-p' => get_the_author_meta( 'pinterest', $user_id ),
			'fa-vimeo'       => get_the_author_meta( 'vimeo', $user_id ),
			'fa-youtube'     => get_the_author_meta( 'youtube', $user_id )
		);
		if ( $bool ) {
			$i = 0;
			foreach ( $user_meta as $key => $value ) {
				if ( $value == true ) {
					$i ++;
				}
			}
			if ( $i > 0 ) {
				return true;
			} else {
				return false;
			}
		} else {
			foreach ( $user_meta as $key => $value ) {
				if ( $value ) {
					echo '<a class="author-social" href="' . esc_url( $value ) . '" target="_blank"><i class="fa ' . esc_attr( $key ) . '"></i></a>';
				}
			}
		}
	}
}


/**
 * remove parentheses from category list and add span class to post count
 */
add_filter( 'wp_list_categories', 'dw_categories_count' );
if ( ! function_exists( 'dw_categories_count' ) ) {
	function dw_categories_count( $variable ) {
		$variable = str_replace( '(', '<span class="post-count">', $variable );
		$variable = str_replace( ')', '</span>', $variable );

		return $variable;
	}
}

/**
 * remove parentheses and ( &nbsp; ) from category list and add span class to post count
 */
add_filter( 'get_archives_link', 'dw_archive_count' );
if ( ! function_exists( 'dw_archive_count' ) ) {
	function dw_archive_count( $links ) {
		$links = str_replace( '&nbsp;(', '<span class="post-count">', $links );
		$links = str_replace( ')', '</span>', $links );

		return $links;
	}
}

/**
 * Exclude posts from search query
 */
add_filter( 'pre_get_posts', 'dw_search_filter' );
function dw_search_filter( $query ) {
	if ( is_search() && $query->is_main_query() ) {
		if ( 'yes' === dw_get_setting( 'search_exclude' ) && ! is_admin() ) {
			$post_types = get_post_types( array( 'public' => true, 'exclude_from_search' => false ) );
			unset( $post_types['page'] );
			$query->set( 'post_type', $post_types );
		}
	}

	return $query;
}


/**
 * Get all users data to select it in theme options and custom widgets
 * the output is array key->author_id, Value->Author_name ordered by posts count of each user
 */
if ( ! function_exists( 'dw_users' ) ) {
	function dw_users() {
		$users     = array();
		$args      = array(
			'orderby' => 'post_count',
			'order'   => 'DESC',
			'fields'  => array( 'ID', 'display_name' )
		);
		$all_users = get_users( $args );
		$i         = 1;
		foreach ( $all_users as $user_data ) {
			if ( $i == 1 ) {
				$users[''] = esc_html__( 'Please select an author...', 'dw' );
			}
			$users[ $user_data->ID ] = $user_data->display_name;
			$i ++;
		}

		return $users;
	}
}

/**
 * Get all categories data to select it in theme options and custom widgets
 * the output is array key->term_id, Value->cat_name
 */
if ( ! function_exists( 'dw_categories' ) ) {
	function dw_categories() {
		$cats           = array();
		$all_categories = get_categories();
		foreach ( $all_categories as $category ) {
			$cats[ $category->term_id ] = $category->name;
		}

		return $cats;
	}
}

/**
 * Get Time
 * @return string time format with the selected style in theme options
 */
if ( ! function_exists( 'dw_post_time' ) ) {
	function dw_post_time( $bool = false ) {
		$since = '';
		if ( dw_get_setting( 'blog_time' ) == 'ago' ) {
			$to   = current_time( 'timestamp' ); //time();
			$from = get_the_time( 'U' );
			$diff = (int) abs( $to - $from );
			if ( $diff <= 3600 ) {
				$mins = round( $diff / 60 );
				if ( $mins <= 1 ) {
					$mins = 1;
				}
				$since = sprintf( _n( '%s Min', '%s Mins', $mins, 'dw' ), $mins ) . ' ' . esc_html__( 'ago', 'dw' );
			} else if ( ( $diff <= 86400 ) && ( $diff > 3600 ) ) {
				$hours = round( $diff / 3600 );
				if ( $hours <= 1 ) {
					$hours = 1;
				}
				$since = sprintf( _n( '%s Hour', '%s Hours', $hours, 'dw' ), $hours ) . ' ' . esc_html__( 'ago', 'dw' );
			} elseif ( $diff >= 86400 ) {
				$days = round( $diff / 86400 );
				if ( $days <= 1 ) {
					$days  = 1;
					$since = sprintf( _n( '%s Day', '%s Days', $days, 'dw' ), $days ) . ' ' . esc_html__( 'ago', 'dw' );
				} elseif ( $days > 29 ) {
					$since = get_the_time( get_option( 'date_format' ) );
				} else {
					$since = sprintf( _n( '%s Day', '%s Days', $days, 'dw' ), $days ) . ' ' . esc_html__( 'ago', 'dw' );
				}
			}
		} else {
			$since = get_the_time( get_option( 'date_format' ) );
		}
		if ( $bool != false ) {
			return esc_html( $since );
		} else {
			echo esc_html( $since );
		}
	}
}

add_action( 'wp_footer', 'dw_fly_box' );
function dw_fly_box( $post_id = false ) {
	if ( ! is_single() ) {
		return;
	}
	if ( dw_get_setting( 'fly_box' ) == 'off' ) {
		return; //hide fly box at all
	}
	if ( ! $post_id ) {
		$post_id = get_the_ID();
	}
	if ( dw_get_meta( $post_id, 'fly_box' ) == 'off' ) {
		return; //hide if turned off in specific post
	}
	if ( get_next_post() ) {
		$fly_post = get_next_post();
	} elseif ( get_previous_post() ) {
		$fly_post = get_previous_post();
	} else {
		return;
	}
	setup_postdata( $fly_post );
	?>
    <div class="bbioon-fly-box">
        <div class="box-title">
            <div class="delete-fly-box" title="<?php esc_attr_e( 'Disable it', 'dw' ); ?>">
                <i class="fa fa-trash-o"></i>
            </div>
            <div class="close-fly-box"><i class="fa fa-times"></i></div>
            <span>
                <?php esc_attr_e( 'Check Also', 'dw' ) ?>
            </span>
        </div>
        <div class="box-content">
            <div class="post-image">
                <a href="<?php echo esc_url( get_permalink( $fly_post->ID ) ); ?>">
					<?php echo get_the_post_thumbnail( $fly_post->ID, 'dw_big_post', array( 'class' => 'img-responsive' ) ); ?>
                </a>
            </div>
            <div class="post-title">
                <a href="<?php echo esc_url( get_permalink( $fly_post->ID ) ); ?>">
					<?php echo get_the_title( $fly_post->ID ); ?>
                </a>
            </div>
            <div class="post-text">
				<?php echo wp_trim_words( get_the_excerpt( $fly_post ), 15, ' ...' ); ?>
            </div>
        </div>
    </div>
	<?php
}

/**
 * Set accent color to theme options page title background
 */
add_action( 'admin_head', 'dw_theme_options_color' );
function dw_theme_options_color() {
	$accent_color = dw_get_setting( 'accent_color' );
	?>
    <style>
        .fw-backend-side-tabs .fw-settings-form-header {
            background-color: <?php echo sanitize_hex_color($accent_color); ?>;
        }
    </style>
	<?php
}

/**
 * Get current category id
 * @return int category id
 */
function dw_current_cat_id() {
	$window_category = get_category( get_query_var( 'cat' ) );

	return $window_category->cat_ID;
}

/**
 * print category cover html
 */
function dw_category_cover() {
	if ( 'on' === dw_get_term_setting( dw_current_cat_id(), 'cat_cover/control' ) && 'show' === dw_get_setting( 'category_page_description' ) ) {
		//category cover image url
		$window_mag_cover_image = dw_get_term_setting( dw_current_cat_id(), 'cat_cover/on/photo/url' );
		?>
        <div class="post-cover category-cover"<?php if ( $window_mag_cover_image ) { ?>
            style="background-image: url('<?php echo esc_url( $window_mag_cover_image ); ?>')" <?php } ?>>
            <div class="dark-bg"></div>
            <div class="post-data">
				<?php
				the_archive_title( '<h2 class="post-box-title h3">', '</h2>' );
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
				if ( dw_get_setting( 'category_posts_count' ) !== 'off' ) {
					$window_mag_cat = get_queried_object();//Posts count
					echo sprintf( '<div class="count">' . esc_html( '%s ' ) . esc_html( _n( 'Post ', 'Posts', $window_mag_cat->count, 'dw' ) ) . '</div>', $window_mag_cat->count );
				}
				?>
            </div>
			<?php if ( $window_mag_cover_image ) { ?>
                <a href="<?php echo esc_url( $window_mag_cover_image ); ?>" class="magnific-gallery zoom-in">
                    <i class="fa fa-arrows-alt"></i>
                </a>
			<?php } ?>
        </div>
	<?php }
}

add_action( 'wp_footer', 'dw_reading_indicator' );
function dw_reading_indicator() {
	if ( is_singular() ) {
		$html = '<div class="reading-indicator"></div>';
		if ( dw_get_meta( get_the_ID(), 'reading_indicator' ) == 'off' ) {
			return false;
		}
		if ( dw_get_setting( 'reading_indicator_post' ) == 'off' ) {
			return false;
		}
		echo $html;
	}
}

/**
 * Comments callback
 */
if ( ! function_exists( 'dw_comment' ) ) {
	function dw_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment;
		switch ( $comment->comment_type ) :
			case 'pingback' :
			case 'trackback' :
				?>
                <li <?php comment_class( 'single-comment base-box' ); ?> id="comment-<?php comment_ID(); ?>">
                <p><?php esc_html_e( 'Pingback:', 'dw' );
					comment_author_link();
					edit_comment_link( esc_html__( '(Edit)', 'dw' ), '<span class="edit-link">', '</span>' ); ?>
                </p>
				<?php
				break;
			default :
				global $wpdb;
				?>
            <li <?php comment_class( 'single-comment' ); ?> id="li-comment-<?php comment_ID(); ?>">
                <div id="comment-<?php comment_ID(); ?>" class="comment-wrap base-box">
					<?php if ( '0' == $comment->comment_approved ) : ?>
                        <em class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'dw' ); ?></em>
					<?php endif; ?>
                    <div class="commentHead">
						<?php echo get_avatar( $comment, 80 ); ?>
                        <div class="CommentHeadDetails">
							<?php
							printf( '<h4 class="comment-author fn">%1$s %2$s</h4>', get_comment_author_link(),
								// If current post author is also comment author, make it known visually.
								( $comment->user_id ) ? '' : ''
							);
							?>
							<?php
							printf( '<span class="comment-meta commentmetadata "><a href="%1$s"><time datetime="%2$s">%3$s</time></a></span>', esc_url( get_comment_link( $comment->comment_ID ) ), get_comment_time( 'c' ),
								/* translators: 1: date, 2: time */
								sprintf( esc_html__( '%1$s at %2$s', 'dw' ), get_comment_date(), get_comment_time() )
							);
							?>
                        </div>
                        <div class="CommentHeadLinks">
							<?php comment_reply_link( array_merge( $args, array(
								'reply_text' => esc_html__( 'Reply', 'dw' ),
								'after'      => '',
								'depth'      => $depth,
								'max_depth'  => $args['max_depth']
							) ) );
							edit_comment_link( esc_html__( 'Edit', 'dw' ) ); ?>
                        </div>
                    </div>
                    <div class="comment-content">
                        <div class="comment-text"><?php comment_text(); ?></div>
                    </div>
                </div>
				<?php
				break;
		endswitch;
	}
}