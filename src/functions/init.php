<?php
// imageパス
define('ImgPath', get_template_directory_uri() . "/assets/images");

// ナビメニューの追加
function theme_setup()
{
    //メニュー
    register_nav_menus(
        array(
            'g-nav' => 'ヘッダーメニュー',
            'f-nav' => 'フッターメニュー',
        )
    );
}
add_action('after_setup_theme', 'theme_setup');

// 管理画面本文入力欄を非表示
add_action('init', 'my_remove_post_support');
function my_remove_post_support()
{
    remove_post_type_support('works', 'editor');
}
