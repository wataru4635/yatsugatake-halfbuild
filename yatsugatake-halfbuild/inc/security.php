<?php
// ==========================================================================
// 投稿者アーカイブ無効化
// ==========================================================================
add_filter('author_rewrite_rules', '__return_empty_array');

// ==========================================================================
// フロント側でのユーザー名露出防止：著者アーカイブ/クエリを 404 に
// ==========================================================================
add_action('template_redirect', function () {
    if ( is_author()
      || get_query_var('author_name')
      || get_query_var('author')
      || isset($_GET['author'])
    ) {
        global $wp_query;
        $wp_query->set_404();
        status_header(404);
        nocache_headers();
        include get_404_template();
        exit;
    }
}, 9);

// ==========================================================================
// ユーザーのサイトマップを無効化（/wp-sitemap.xml 内の users を除外）
// ==========================================================================
add_filter('wp_sitemaps_add_provider', function ($provider, $name) {
    return ($name === 'users') ? false : $provider;
}, 10, 2);

// ==========================================================================
// REST API からのユーザー列挙防止
// ==========================================================================
add_filter('rest_endpoints', function ($endpoints) {
    if ( isset($endpoints['/wp/v2/users']) ) {
        unset($endpoints['/wp/v2/users']);
    }
    if ( isset($endpoints['/wp/v2/users/(?P<id>[\d]+)']) ) {
        unset($endpoints['/wp/v2/users/(?P<id>[\d]+)']);
    }
    return $endpoints;
});

// ==========================================================================
// お問い合わせ本文（textarea）が全文日本語以外だった場合はエラー
// ==========================================================================
function wpcf7_validation_textarea_hiragana($result, $tag){
	$name = $tag['name'];
	// セキュリティ: $_POSTデータをサニタイズして取得
	$value = (isset($_POST[$name])) ? sanitize_textarea_field(wp_unslash($_POST[$name])) : '';

	if ($value !== '' && !preg_match('/[ぁ-ん]/u', $value)) {
		$result['valid'] = false;
		$result['reason'] = array($name => 'エラー / この内容は送信できません。');
	}
	return $result;
}
add_filter('wpcf7_validate_textarea', 'wpcf7_validation_textarea_hiragana', 10, 2);
add_filter('wpcf7_validate_textarea*', 'wpcf7_validation_textarea_hiragana', 10, 2);