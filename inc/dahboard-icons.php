<?php
add_action( 'wp_enqueue_scripts', 'dcms_load_dashicons_front_end' );

function dcms_load_dashicons_front_end() {
	wp_enqueue_style( 'dashicons' );
}
?>