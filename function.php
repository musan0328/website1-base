<?php

// 下層ページのCSS読み込み
function my_styles() {
	if ( is_page( 'about' ) ) {
		wp_enqueue_style( 'about', get_template_directory_uri() . '/css/about.css', array(), '1.0.0' );
	}
}
add_action( 'wp_enqueue_scripts', 'my_styles' );
