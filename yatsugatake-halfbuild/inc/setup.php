<?php
// ==========================================================================
// WordPress テーマの基本設定
// ==========================================================================
function my_theme_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('customize-selective-refresh-widgets');
}
add_action('after_setup_theme', 'my_theme_setup');

// ==========================================================================
// スクリプトとスタイルのエンキュー（共通 + 特定ページ）
// ==========================================================================
function enqueue_custom_scripts() {
    $theme_path = get_theme_file_path();
    $asset_uri  = get_theme_file_uri('/assets');

    // ファイルのバージョンを取得（存在すれば filemtime、なければテーマバージョン）
    $get_ver = function($file_path) {
        return file_exists($file_path) ? filemtime($file_path) : wp_get_theme()->get('Version');
    };

    // トップページ専用JS・CSS
    if (is_front_page()) {
        // Swiper JS
        wp_enqueue_script(
            'swiper-js',
            'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js',
            [],
            '12.0.0',
            true
        );
        
        // Swiper CSS
        wp_enqueue_style(
            'swiper-css',
            'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css',
            [],
            '12.0.0'
        );
        // トップページ専用JS
        $script = '/js/top.js';
        wp_enqueue_script(
            'top-script',
            "{$asset_uri}{$script}",
            ['swiper-js'],
            $get_ver("{$theme_path}/assets{$script}"),
            true
        );
    }

    // スケジュールコストページ専用JS

    if (is_page('schedule-cost') || is_page_template('page-schedule-cost.php')) {
        $script = '/js/schedule-cost.js';
        wp_enqueue_script(
            'schedule-cost-script',
            "{$asset_uri}{$script}",
            [],
            $get_ver("{$theme_path}/assets{$script}"),
            true
        );
    }

    // お問い合わせページ専用JS
    if (is_page('contact') || is_page_template('page-contact.php')) {
        $script = '/js/form.js';
        wp_enqueue_script(
            'form-script',
            "{$asset_uri}{$script}",
            [],
            $get_ver("{$theme_path}/assets{$script}"),
            true
        );
    }

    // CSS（共通）- 最後に読み込む
    $style_file = '/css/style.css';
    wp_enqueue_style(
        'common-style',
        "{$asset_uri}{$style_file}",
        [],
        $get_ver("{$theme_path}/assets{$style_file}")
    );

    // JS（共通）- 最後に読み込む
    $script_file = '/js/script.js';
    wp_enqueue_script(
        'common-script',
        "{$asset_uri}{$script_file}",
        [],
        $get_ver("{$theme_path}/assets{$script_file}"),
        true
    );
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');


// ==========================================================================
// ヘッダーへのプリロード
// ==========================================================================
function enqueue_preload_headers() {
  ?>
<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;600;700&family=Zen+Old+Mincho:wght@400;500;600;700;900&family=Kaisei+HarunoUmi:wght@400&display=swap" rel="preload"
    as="style" fetchpriority="high">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;600;700&family=Zen+Old+Mincho:wght@400;500;600;700;900&family=Kaisei+HarunoUmi:wght@500&display=swap" rel="stylesheet"
    media="print" onload="this.media='all'">
<?php
}
add_action('wp_head', 'enqueue_preload_headers');

// ==========================================================================
// 不要な head内のタグやスクリプトを削除する関数
// ==========================================================================
function codeups_clean_up_head() {
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'feed_links_extra', 3);
}

add_action('after_setup_theme', 'codeups_clean_up_head');

// ==========================================================================
// ブロックエディタのスタイルを追加
// ==========================================================================

function add_block_editor_styles() {
    wp_enqueue_style( 'editor-styles', get_stylesheet_directory_uri() . '/assets/css/editor.css' );
    
    // エディターにフォントファミリーを追加
    add_editor_style( array(
        'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Zen+Old+Mincho:wght@400;500;700&family=Kaisei+HarunoUmi:wght@400&display=swap',
    ) );
    
    // インラインスタイルでフォントファミリーを設定
    wp_add_inline_style( 'editor-styles', '
        .editor-styles-wrapper {
            font-family:"Zen Old Mincho", "Noto Sans JP", "Kaisei HarunoUmi", "Noto Sans", sans-serif !important;
        }
    ' );
}
add_action( 'enqueue_block_editor_assets', 'add_block_editor_styles' );