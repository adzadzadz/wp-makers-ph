<?php

if ( ! function_exists( 'qode_startit_load_shortcode_interface' ) ) {

	function qode_startit_load_shortcode_interface() {

		include_once QODE_CORE_ABS_PATH . '/modules/shortcodes/lib/shortcode-interface.php';

	}

	add_action( 'qode_core_shortcodes_load', 'qode_startit_load_shortcode_interface' );

}

if ( ! function_exists( 'qode_startit_load_shortcodes' ) ) {
	/**
	 * Loades all shortcodes by going through all folders that are placed directly in shortcodes folder
	 * and loads load.php file in each. Hooks to qode_startit_after_options_map action
	 *
	 * @see http://php.net/manual/en/function.glob.php
	 */
	function qode_startit_load_shortcodes() {
		foreach ( glob( QODE_CORE_ABS_PATH . '/modules/shortcodes/*/load.php' ) as $shortcode_load ) {
			include_once $shortcode_load;
		}

		include_once QODE_CORE_ABS_PATH . '/modules/shortcodes/lib/shortcode-loader.inc';
	}

	add_action( 'qode_core_shortcodes_load', 'qode_startit_load_shortcodes' );
}


if(!function_exists('qode_core_get_independent_shortcode_module_template_part')) {
	/**
	 * Loads module template part.
	 *
	 * @param string $template name of the template to load
	 * @param string $module name of the module folder
	 * @param string $slug
	 * @param array $params array of parameters to pass to template
	 * @return html
	 * @see startit_qode_get_template_part()
	 */
	function qode_core_get_independent_shortcode_module_template_part($template, $module, $slug = '', $params = array()) {

		//HTML Content from template
		$html = '';
		$template_path = QODE_CORE_MODULES_ABS_PATH . '/shortcodes/' . $module;

		$temp = $template_path.'/'.$template;

		if(is_array($params) && count($params)) {
			extract($params);
		}

		$template = '';

		if($temp !== '') {
			if($slug !== ''  && file_exists("{$temp}-{$slug}.php") ) {
				$temp = "{$temp}-{$slug}";
			}
			$template = $temp.'.php';
		}
		if($template) {
			ob_start();
			include($template);
			$html = ob_get_clean();
		}

		return $html;
	}
}

