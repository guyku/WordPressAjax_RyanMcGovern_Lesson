<?php
/*
* Enqueue scripts.js if file scripts.js exists
*/
function load_scripts() {

	wp_enqueue_script('ajax', get_template_directory_uri() . 'scripts.js', array('jquery'), NULL, true);

	wp_localize_script('ajax' , 'wp_ajax',
		array('ajax_url' => admin_url('admin-ajax.php'))
		);

}

add_action( 'wp_enqueue_scripts', 'load_scripts');
