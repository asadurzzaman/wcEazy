<?php
/**
 * Setup Theme.
 */
require_once get_template_directory() . '/includes/functions/theme-setup.php';

/**
 * Style Enqueue conskip.
 */
require_once get_template_directory() . '/includes/functions/enqueue.php';

/**
 * Widget.
 */
require_once get_template_directory() . '/includes/functions/widgets.php';
/**
 * Theme Customizer css
 */
require_once get_template_directory() . '/includes/custom-css.php';
/**
 * Theme Custom Comment
 */
require_once get_template_directory() . '/includes/functions/comment.php';
/**
 * Theme Custom Pagination
 */
require_once get_template_directory() . '/includes/functions/pagination.php';


if (!current_user_can('manage_options')) {
    add_filter('show_admin_bar', '__return_false');
}

