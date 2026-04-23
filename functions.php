<?php
// テーマの初期設定（アイキャッチ画像などを有効化）
function my_portfolio_setup() {
    // 投稿画面で「アイキャッチ画像（サムネイル）」を設定できるようにする
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'my_portfolio_setup');

// CSSとJavaScriptの読み込み
function my_portfolio_scripts() {
    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Noto+Sans+JP:wght@400;500;700&display=swap', array(), null);
    
    // メインのCSS
    wp_enqueue_style('my-portfolio-style', get_stylesheet_uri());
    
    // メインのJS
    wp_enqueue_script('my-portfolio-script', get_template_directory_uri() . '/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'my_portfolio_scripts');
// =========================================
// 制作実績（Works）専用のメニューを作る
// =========================================
function create_post_type_works() {
    register_post_type('works', // 内部的な名前（半角英字）
        array(
            'labels' => array(
                'name' => '制作実績', // 管理画面に表示される名前
                'singular_name' => '制作実績',
                'add_new_item' => '新しい実績を追加',
                'edit_item' => '実績を編集'
            ),
            'public' => true,      // 公開設定
            'has_archive' => true, // 一覧ページを持つ設定
            'menu_position' => 5,  // メニューを出す位置（5は投稿のすぐ下）
            'menu_icon' => 'dashicons-portfolio', // アイコンをカバンに変更
            'supports' => array('title', 'editor', 'thumbnail'), // タイトル、本文、画像を使えるようにする
            'show_in_rest' => true, // 最新のエディタ（ブロックエディタ）を使う設定
        )
    );
}
add_action('init', 'create_post_type_works');