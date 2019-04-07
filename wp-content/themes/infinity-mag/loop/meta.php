<div class="writer-info">
    <ul>
        <li class="dw-post-author">
            <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ) ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ui/pen.png" alt="icon">
                <span> <?php echo get_the_author_meta( 'display_name' ) ?> </span>
            </a>
        </li>
        <li class="dw-post-date">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ui/calender.png"
                 alt="icon">
            <span>
                <a href="<?php the_permalink() ?>">
                    <?php dw_post_time(); ?>
                </a>
            </span>
        </li>
        <li class="dw-comments-meta">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ui/chat.png"
                 alt="icon"> <span>
                <a href="<?php comments_link() ?>">
                    <?php comments_number() ?>
                </a>
            </span>
        </li>
    </ul>
</div>