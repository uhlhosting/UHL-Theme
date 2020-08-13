<?php
if ( ! defined( 'WPINC' ) ) {
	die;
} elseif ( ! defined( 'ABSPATH' ) ) {
    exit;
} else {
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
   }
   add_filter('upload_mimes', 'cc_mime_types');
}
?>