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

//アイキャッチ画像を有効化
add_theme_support('post-thumbnails');

function my_theme_setup() {
	 add_theme_support('post-thumbnails');
  }
add_action( 'after_setup_theme', 'my_theme_setup');



// カスタム投稿の追加 カスタムフィールド
add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( // カスタム投稿タイプの追加関数
    'menu', //カスタム投稿タイプ名（半角英数字の小文字）
    array( //オプション（以下）
      'label' => 'メニュー', // 管理画面上の表示（日本語でもOK）
      'public' => true, // 管理画面に表示するかどうかの指定
      'has_archive' => true, // 投稿した記事の一覧ページを作成する
      'menu_position' => 5, // 管理画面メニューの表示位置（投稿の下に追加）
      'show_in_rest' => true, // Gutenbergの有効化
      'supports' => array( // サポートする機能（以下）
        'title',  // タイトル
        'editor', // エディター
        'thumbnail', // アイキャッチ画像
        'revisions' // リビジョンの保存
      ),
    )
  );

  register_taxonomy(
    'menu-cat',
    'menu',
    array(
      'label' => 'カテゴリー',
      'hierarchical' => true,
      'public' => true,
      'show_in_rest' => true,
    )
  );

  register_taxonomy(
    'menu-tag',
    'menu',
    array(
      'label' => 'タグ',
      'hierarchical' => false,
      'public' => true,
      'show_in_rest' => true,
      'update_count_callback' => '_update_post_term_count',
    )
  );
}