<?php


add_action( 'init', 'candor_scmb_initialize_cmb_meta_boxes', 9999 );
/*
 * Initialize the metabox class.
 */
function candor_scmb_initialize_cmb_meta_boxes() {

	if ( ! class_exists( 'cmb_Meta_Box' ) ) {
		require_once 'init.php';

		require_once 'cmb-field-select2/cmb-field-select2.php';
	}

}
