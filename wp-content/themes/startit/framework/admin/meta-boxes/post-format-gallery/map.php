<?php

/*** Gallery Post Format ***/

$gallery_post_format_meta_box = startit_qode_create_meta_box(
	array(
		'scope' =>	array('post'),
		'title' => 'Gallery Post Format',
		'name' 	=> 'post_format_gallery_meta'
	)
);

startit_qode_add_multiple_images_field(
	array(
		'name'        => 'qodef_post_gallery_images_meta',
		'label'       => 'Gallery Images',
		'description' => 'Choose your gallery images',
		'parent'      => $gallery_post_format_meta_box,
	)
);
