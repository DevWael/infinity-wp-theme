<div class="writer-info">
    <ul>
        <li>
            <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ) ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ui/pen.svg" alt="icon">
                <span> <?php echo get_the_author_meta( 'display_name' ) ?> </span>
            </a>
        </li>
        <li>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ui/calender.svg"
                 alt="icon">
            <span>
                <?php dw_post_time(); ?>
            </span>
        </li>
        <li>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ui/chat.svg"
                 alt="icon"> <span>
                <?php comments_number() ?>
            </span>
        </li>
    </ul>
</div>