<?php
if ( ! defined( 'WPINC' ) ) {
	die;
} elseif ( ! defined( 'ABSPATH' ) ) {
    exit;
} else {
// Method 1: Filter.
function my_acf_google_map_api( $api ){
    $api['key'] = 'AIzaSyDjGMz26isdFLJGtDApmQKIZVUpdBGoFu8';
    return $api;
}
function my_acf_init() {
    acf_update_setting('google_api_key', 'AIzaSyDjGMz26isdFLJGtDApmQKIZVUpdBGoFu8');
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
add_action('acf/init', 'my_acf_init');
}
?>