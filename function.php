<?php

// 下層ページのCSS読み込み
function my_styles() {
	if ( is_page( 'about' ) ) {
		wp_enqueue_style( 'about', get_template_directory_uri() . '/css/about.css', array(), '1.0.0' );
	}
}
add_action( 'wp_enqueue_scripts', 'my_styles' );


function custom_print_scripts() {
	if (!is_admin()) {
			//デフォルトjquery削除
			wp_deregister_script('jquery');
	 
			//GoogleCDNから読み込む
			wp_enqueue_script('jquery-js', '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js' );
			}
	}
	add_action('wp_print_scripts', 'custom_print_scripts');
	
	
//JavaScript読み込み
wp_enqueue_script('script', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true); 