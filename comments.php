<?php

/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 */

if (post_password_required()) {
    return;
}

$is_comments = have_comments() ? 'have_comments' : 'no_comments';
?>

<!-- Comment Reply Area -->
<div class="comment-reply-area <?php echo esc_attr($is_comments); ?>">
    <?php if (have_comments()) : ?>
        <h4><?php comments_number(' ', esc_html__('1 Comment', 'wc-fusion'), esc_html__('% Comments', 'wc-fusion')); ?></h4>

        <?php
        the_comments_navigation();
        wp_list_comments(array(
            'style'      => 'comments-area-wrapper',
            'short_ping' => true,
            'callback'     => 'woofusion_comments'
        ));
        the_comments_navigation();
        ?>
    <?php endif; ?>
</div>
<!-- Comment Reply Area End-->



<div class="comments-form">
    <?php
    comment_form();
    ?>
</div>