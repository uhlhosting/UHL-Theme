<?php
if ( ! defined( 'WPINC' ) ) {
	die;
} elseif ( ! defined( 'ABSPATH' ) ) {
    exit;
} else {
// disable for individual posts
add_filter('use_block_editor_for_post', '__return_false', 10);

// disable at the custom post type level
add_filter('use_block_editor_for_post_type', '__return_false', 10);
}
?>