<?php
add_filter('acf/save_post', 'gallery_to_thumbnail');
function gallery_to_thumbnail($post_id) {
	$gallery = get_field('galeria_de_fotos', $post_id, false);
	if (!empty($gallery)) {
		$image_id = $gallery[0];
		set_post_thumbnail($post_id, $image_id);
	}
}
?>