<?php

if ( ! function_exists( 'startit_qode_load_elements_map' ) ) {
	/**
	 * Add Elements option page for shortcodes
	 */
	function startit_qode_load_elements_map() {

		startit_qode_add_admin_page(
			array(
				'slug' => '_elements_page',
				'title' => 'Elements',
				'icon' => 'fa fa-diamond'
			)
		);

		do_action( 'qode_startit_options_elements_map' );

	}

	add_action('qode_startit_options_map', 'startit_qode_load_elements_map', 8);

}