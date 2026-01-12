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
    add_image_size('works-thumbnail', 339, 222, true);
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
    // 施工事例ページ専用JS
    if (is_singular('works')) {
        $script = '/js/single-works.js';
        wp_enqueue_script(
            'single-works-script',
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
    
    add_editor_style( array(
        'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Zen+Old+Mincho:wght@400;500;700&family=Kaisei+HarunoUmi:wght@400&display=swap',
    ) );
    
    wp_add_inline_style( 'editor-styles', '
        .editor-styles-wrapper {
            font-family:"Zen Old Mincho", "Noto Sans JP", "Kaisei HarunoUmi", "Noto Sans", sans-serif !important;
        }
    ' );
}
add_action( 'enqueue_block_editor_assets', 'add_block_editor_styles' );

// ==========================================================================
// ACF管理画面の画像プレビュースタイル（施工事例投稿ページ）
// ==========================================================================
function add_acf_works_image_preview_styles() {
    global $post_type;
    
    if ($post_type === 'works') {
        ?>
        <style>
            .acf-image-uploader .image-wrap img {
                aspect-ratio: 339 / 222;
                object-fit: cover;
            }
        </style>
        <?php
    }
}
add_action('admin_head', 'add_acf_works_image_preview_styles');

// ==========================================================================
// お問い合わせフォームの自動フォーマット設定の無効化
// ==========================================================================
function wpcf7_autop_return_false() {
    return false;
  }
  
  add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
  add_filter( 'wpcf7_validate_configuration', '__return_false' );

// ==========================================================================
// 共通関数: アイキャッチ画像取得（フォールバック付き）
// ==========================================================================
/**
 * アイキャッチ画像を取得し、ない場合はデフォルト画像を返す
 * 
 * @param string $size 画像サイズ（デフォルト: 'full'）
 * @param string $default_image デフォルト画像のパス（IMAGEPATHからの相対パス）
 * @param array $attributes 追加のimg属性（width, height, classなど）
 * @return array ['url' => string, 'alt' => string, 'html' => string]
 */
function get_thumbnail_image_with_fallback($size = 'full', $default_image = 'common/dummy-mv.webp', $attributes = array()) {
    $default_width = isset($attributes['width']) ? $attributes['width'] : '1444';
    $default_height = isset($attributes['height']) ? $attributes['height'] : '465';
    $default_class = isset($attributes['class']) ? $attributes['class'] : 'sub-mv__img sub-mv--small';
    
    $image_url = '';
    $image_alt = '';
    
    if (has_post_thumbnail()) {
        $thumbnail_id = get_post_thumbnail_id();
        $image_url = get_the_post_thumbnail_url(get_the_ID(), $size);
        $image_alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
        if (empty($image_alt)) {
            $image_alt = get_the_title();
        }
    }
    
    if (empty($image_url)) {
        $image_url = IMAGEPATH . '/' . $default_image;
        $image_alt = get_the_title();
    }
    
    $html = '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($image_alt) . '" width="' . esc_attr($default_width) . '" height="' . esc_attr($default_height) . '" class="' . esc_attr($default_class) . '">';
    
    return array(
        'url' => $image_url,
        'alt' => $image_alt,
        'html' => $html
    );
}

// ==========================================================================
// 共通関数: ACF画像データ取得
// ==========================================================================
/**
 * ACF画像フィールドから画像データを取得
 * 
 * @param mixed $image_field ACF画像フィールドの値（配列またはURL文字列）
 * @param string $default_alt デフォルトのaltテキスト
 * @param string $size_preference 未使用（互換性のため残していますが、常に 'url' (fullサイズ) を使用します）
 * @return array|false ['url' => string, 'alt' => string] または false
 */
function get_acf_image_data($image_field, $default_alt = '', $size_preference = 'url') {
    if (empty($image_field)) {
        return false;
    }
    
    $image_url = '';
    $image_alt = $default_alt;
    
    if (is_array($image_field)) {
        $image_url = $image_field['url'] ?? '';
        $image_alt = !empty($image_field['alt']) ? $image_field['alt'] : $default_alt;
    } else {
        $image_url = $image_field;
        $attachment_id = attachment_url_to_postid($image_url);
        if ($attachment_id) {
            $image_alt = get_post_meta($attachment_id, '_wp_attachment_image_alt', true);
            if (empty($image_alt)) {
                $image_alt = $default_alt;
            }
        } else {
            $image_alt = $default_alt;
        }
    }
    
    if (empty($image_url)) {
        return false;
    }
    
    return array(
        'url' => $image_url,
        'alt' => $image_alt
    );
}
