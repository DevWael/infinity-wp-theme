<?php if ( dw_get_setting( 'search_nav' ) != 'off' ) { ?>
    <!--SEARCH BOX POPUP -->
    <div class="search-big-box">
        <div class="search-form">
            <form role="search" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
                <input type="text" class="search-query-text" name="s" value="<?php echo get_search_query(); ?>"
                       id="search_input" title="<?php echo esc_attr_x( 'Search', 'search text field title', 'dw' ); ?>">
                <label for="search_input"> <?php esc_html_e( 'Search and hit enter', 'dw' ); ?> </label>
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
            <div class="search-message">
                <span class="text-message">  <?php esc_html_e( 'Input your search keywords and press Enter.', 'dw' ) ?>  </span>
            </div>
        </div>
        <div class="close-button"><i class="fa fa-times" aria-hidden="true"></i></div>
    </div>
<?php } ?>