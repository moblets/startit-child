<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

function qode_startit_read_more_button($option = '', $class = '') {
	if($option != '') {
		$show_read_more_button = qode_startit_options()->getOptionValue($option) == 'yes';
	}else {
		$show_read_more_button = 'yes';
	}
	if($show_read_more_button && !qode_startit_post_has_read_more() && !post_password_required()) {
		echo qode_startit_get_button_html(array(
			'size'         => 'small',
			'link'         => get_the_permalink(),
			'text'         => 'Ler post',
			'custom_class' => 'olar'
		));
	}
}
