<style>
    .top-alert-bar{
        background-color: <?php echo dw_get_setting( 'alert_bar/on/bar_bg' )?>;
    }
    .top-alert-bar .text,
    .top-alert-bar .text a{
        color: <?php echo dw_get_setting( 'alert_bar/on/bar_text' )?>;
    }
</style>
<div class="top-alert-bar<?php echo ' ' . esc_attr(dw_get_setting('alert_bar/on/text_style'))?>">
    <div class="container">
        <div class="text">
			<?php echo wp_kses_post( dw_get_setting( 'alert_bar/on/bar_content' ) ); ?>
        </div>
    </div>
</div>

