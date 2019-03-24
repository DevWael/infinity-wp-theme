<div class="writer-info">
    <ul>
        <li>
            <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ) ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ui/pen.png" alt="icon">
                <span> <?php echo get_the_author_meta( 'display_name' ) ?> </span>
            </a>
        </li>
        <li>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ui/calender.png"
                 alt="icon">
            <span>
                <a href="<?php the_permalink() ?>">
                    <?php dw_post_time(); ?>
                </a>
            </span>
        </li>
        <li>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ui/chat.png"
                 alt="icon"> <span>
                <a href="<?php comments_link() ?>">
                    <?php comments_number() ?>
                </a>
            </span>
        </li>
    </ul>
</div>