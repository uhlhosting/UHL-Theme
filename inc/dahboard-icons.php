<?php
if ( ! defined( 'WPINC' ) ) {
	die;
} elseif ( ! defined( 'ABSPATH' ) ) {
    exit;
} else {
function dcms_load_dashicons_front_end() {
	wp_enqueue_style( 'dashicons' );
}
add_action( 'wp_enqueue_scripts', 'dcms_load_dashicons_front_end' );
}
?>