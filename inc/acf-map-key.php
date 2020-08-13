<?php
if ( ! defined( 'WPINC' ) ) {
	die;
} elseif ( ! defined( 'ABSPATH' ) ) {
    exit;
} else {
function my_acf_google_map_api( $api ){
    $api['key'] = 'AIzaSyDjGMz26isdFLJGtDApmQKIZVUpdBGoFu8';
    return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

function my_acf_init() {
    acf_update_setting('google_api_key', 'AIzaSyDjGMz26isdFLJGtDApmQKIZVUpdBGoFu8');
}
}
?>