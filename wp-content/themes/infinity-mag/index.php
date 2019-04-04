<?php global $wp_query;
get_header();
if ( 'on' === dw_get_setting( 'carousel_switch/query_type' ) ) {
	get_template_part( 'hero/' . dw_get_setting( 'carousel_switch/on/carousel_style' ) );
}
//display first half width blocks
do_action( 'dw_full_width_builder', 1 );

//dw_display_half_width_blocks( 1 );
?>
    <!-- SECOND PEODUCT   -->
    <div class="products-wrapper">
        <div class="container">
            <h2 class="post-wrapper-title-6"><span> SECOND Products </span></h2>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="second-product">
                        <div class="img-box">
                            <img src="images/mobile.png" alt="post" class="img-responsive">
                        </div>
                        <h3><a href="product-page.html"> Headline of Tobic Headline of Tobic </a></h3>
                        <div class="price">
                            <span class="old-price">  87778 SAR </span>
                            <span class="new-price">  3658 SAR </span>
                        </div>
                        <div class="prod-footer">
                            <button type="button" class="prod-btn add-to-cart"><img src="images/shopping-cart.png"
                                                                                    alt="cart" class="img-responsive">
                            </button>
                            <button type="button" class="prod-btn add-to-favourite"><i class="fa fa-heart"
                                                                                       aria-hidden="true"></i></button>
                            <button type="button" class="prod-btn add-to-compare"><img src="images/bars.png" alt="cart"
                                                                                       class="img-responsive"></button>
                        </div>
                        <div class="offer"> Sale</div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="second-product">
                        <div class="img-box">
                            <img src="images/mobile.png" alt="post" class="img-responsive">
                        </div>
                        <h3><a href="product-page.html"> Headline of Tobic Headline of Tobic </a></h3>
                        <div class="price">
                            <span class="old-price">  87778 SAR </span>
                            <span class="new-price">  3658 SAR </span>
                        </div>
                        <div class="prod-footer">
                            <button type="button" class="prod-btn add-to-cart"><img src="images/shopping-cart.png"
                                                                                    alt="cart" class="img-responsive">
                            </button>
                            <button type="button" class="prod-btn add-to-favourite in-favourite"><i class="fa fa-heart"
                                                                                                    aria-hidden="true"></i>
                            </button>
                            <button type="button" class="prod-btn add-to-compare"><img src="images/bars.png" alt="cart"
                                                                                       class="img-responsive"></button>
                        </div>
                        <div class="offer"> Sale</div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="second-product">
                        <div class="img-box">
                            <img src="images/mobile.png" alt="post" class="img-responsive">
                        </div>
                        <h3><a href="product-page.html"> Headline of Tobic Headline of Tobic </a></h3>
                        <div class="price">
                            <span class="old-price">  87778 SAR </span>
                            <span class="new-price">  3658 SAR </span>
                        </div>
                        <div class="prod-footer">
                            <button type="button" class="prod-btn add-to-cart"><img src="images/shopping-cart.png"
                                                                                    alt="cart" class="img-responsive">
                            </button>
                            <button type="button" class="prod-btn add-to-favourite"><i class="fa fa-heart"
                                                                                       aria-hidden="true"></i></button>
                            <button type="button" class="prod-btn add-to-compare"><img src="images/bars.png" alt="cart"
                                                                                       class="img-responsive"></button>
                        </div>
                        <div class="offer"> Sale</div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="second-product">
                        <div class="img-box">
                            <img src="images/mobile.png" alt="post" class="img-responsive">
                        </div>
                        <h3><a href="product-page.html"> Headline of Tobic Headline of Tobic </a></h3>
                        <div class="price">
                            <span class="old-price">  87778 SAR </span>
                            <span class="new-price">  3658 SAR </span>
                        </div>
                        <div class="prod-footer">
                            <button type="button" class="prod-btn add-to-cart"><img src="images/shopping-cart.png"
                                                                                    alt="cart" class="img-responsive">
                            </button>
                            <button type="button" class="prod-btn add-to-favourite"><i class="fa fa-heart"
                                                                                       aria-hidden="true"></i></button>
                            <button type="button" class="prod-btn add-to-compare"><img src="images/bars.png" alt="cart"
                                                                                       class="img-responsive"></button>
                        </div>
                        <div class="offer"> Sale</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- third PEODUCT   -->
    <div class="products-wrapper">
        <div class="container">
            <h2 class="post-wrapper-title-6"><span> SECOND Products </span></h2>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-lg-6">
                    <div class="third-product">
                        <div class="img-box">
                            <img src="images/mobile.png" alt="post" class="img-responsive">
                            <div class="offer"> Sale</div>
                        </div>
                        <div class="data">
                            <h3><a href="product-page.html"> Headline of Tobic Headline of Tobic </a></h3>
                            <div class="price">
                                <span class="old-price">  87778 SAR </span>
                                <span class="new-price">  3658 SAR </span>
                            </div>
                            <div class="prod-footer">
                                <button type="button" class="prod-btn add-to-cart"><img src="images/shopping-cart.png"
                                                                                        alt="cart"
                                                                                        class="img-responsive"></button>
                                <button type="button" class="prod-btn add-to-favourite"><i class="fa fa-heart"
                                                                                           aria-hidden="true"></i>
                                </button>
                                <button type="button" class="prod-btn add-to-compare"><img src="images/bars.png"
                                                                                           alt="cart"
                                                                                           class="img-responsive">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-lg-6">
                    <div class="third-product">
                        <div class="img-box">
                            <img src="images/mobile.png" alt="post" class="img-responsive">
                            <div class="offer"> Sale</div>
                        </div>
                        <div class="data">
                            <h3><a href="product-page.html"> Headline of Tobic Headline of Tobic </a></h3>
                            <div class="price">
                                <span class="old-price">  87778 SAR </span>
                                <span class="new-price">  3658 SAR </span>
                            </div>
                            <div class="prod-footer">
                                <button type="button" class="prod-btn add-to-cart"><img src="images/shopping-cart.png"
                                                                                        alt="cart"
                                                                                        class="img-responsive"></button>
                                <button type="button" class="prod-btn add-to-favourite"><i class="fa fa-heart"
                                                                                           aria-hidden="true"></i>
                                </button>
                                <button type="button" class="prod-btn add-to-compare"><img src="images/bars.png"
                                                                                           alt="cart"
                                                                                           class="img-responsive">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-lg-6">
                    <div class="third-product">
                        <div class="img-box">
                            <img src="images/mobile.png" alt="post" class="img-responsive">
                            <div class="offer"> Sale</div>
                        </div>
                        <div class="data">
                            <h3><a href="product-page.html"> Headline of Tobic Headline of Tobic </a></h3>
                            <div class="price">
                                <span class="old-price">  87778 SAR </span>
                                <span class="new-price">  3658 SAR </span>
                            </div>
                            <div class="prod-footer">
                                <button type="button" class="prod-btn add-to-cart"><img src="images/shopping-cart.png"
                                                                                        alt="cart"
                                                                                        class="img-responsive"></button>
                                <button type="button" class="prod-btn add-to-favourite"><i class="fa fa-heart"
                                                                                           aria-hidden="true"></i>
                                </button>
                                <button type="button" class="prod-btn add-to-compare"><img src="images/bars.png"
                                                                                           alt="cart"
                                                                                           class="img-responsive">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-lg-6">
                    <div class="third-product">
                        <div class="img-box">
                            <img src="images/mobile.png" alt="post" class="img-responsive">
                            <div class="offer"> Sale</div>
                        </div>
                        <div class="data">
                            <h3><a href="product-page.html"> Headline of Tobic Headline of Tobic </a></h3>
                            <div class="price">
                                <span class="old-price">  87778 SAR </span>
                                <span class="new-price">  3658 SAR </span>
                            </div>
                            <div class="prod-footer">
                                <button type="button" class="prod-btn add-to-cart"><img src="images/shopping-cart.png"
                                                                                        alt="cart"
                                                                                        class="img-responsive"></button>
                                <button type="button" class="prod-btn add-to-favourite"><i class="fa fa-heart"
                                                                                           aria-hidden="true"></i>
                                </button>
                                <button type="button" class="prod-btn add-to-compare"><img src="images/bars.png"
                                                                                           alt="cart"
                                                                                           class="img-responsive">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="home-posts">
        <div class="container">
            <div class="row">
				<?php dw_content_area_start( 'home_sidebar' );
				//Normal posts
				if ( 'yes' === dw_get_setting( 'home_recent_posts/control' ) ) {
					?>
                    <div class="blog-wrap category-box">
						<?php
						if ( have_posts() ):
							if ( dw_get_setting( 'home_recent_posts/yes/title' ) ) :
								?>
                                <h2 class="block-name">
                                    <span><?php echo esc_html( dw_get_setting( 'home_recent_posts/yes/title' ) ); ?></span>
                                </h2>
							<?php endif;
							if ( 'list' === dw_get_setting( 'home_recent_posts/yes/home_posts_style' ) ) {
								get_template_part( 'recent', 'list' );
							} elseif ( 'masonry' === dw_get_setting( 'home_recent_posts/yes/home_posts_style' ) ) {
								get_template_part( 'recent', 'masonry' );
							} else {
								get_template_part( 'recent', 'blog' );
							}
							if ( $wp_query->max_num_pages > 1 ) :
								if ( 'text' === dw_get_setting( 'pagination_style' ) ) {
									the_posts_navigation();
								} else {
									dw_pagination();
								}
							endif;
						else :
							get_template_part( 'templates/part', 'notfound' );
						endif;
						?>
                    </div>
					<?php
				} elseif ( ! function_exists( 'fw_get_db_settings_option' ) ) {
					?>
                    <div class="blog-wrap category-box">
						<?php
						if ( have_posts() ):
							get_template_part( 'recent', 'blog' );
							if ( $wp_query->max_num_pages > 1 ) :
								dw_pagination();
							endif;
						else :
							get_template_part( 'templates/part', 'notfound' );
						endif;
						?>
                    </div>
					<?php
				}
				dw_content_area_end();
				dw_sidebar_start( 'home_sidebar' );
				get_sidebar();
				dw_sidebar_end();
				?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>