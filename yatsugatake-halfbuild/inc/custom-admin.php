<?php

// ==========================================================================
// トップページのブロックエディターを無効化
// ==========================================================================
function disable_block_editor_for_front_page($use_block_editor, $post) {
	$front_page_id = get_option('page_on_front');
	if ($post && $post->ID == $front_page_id) {
		return false;
	}
	return $use_block_editor;
}
add_filter('use_block_editor_for_post', 'disable_block_editor_for_front_page', 10, 2);

// ==========================================================================
// トップページのエディター部分を非表示化
// ==========================================================================
function hide_editor_for_front_page() {
	global $post;
	$front_page_id = get_option('page_on_front');
	if ($post && $post->ID == $front_page_id) {
		echo '<style>
			#postdivrich,
			.wp-editor-wrap,
			#wp-content-editor-container,
			#content-editor,
			.postarea,
			#post-body-content .postbox:has(#postdivrich),
			#post-body-content .postbox:has(.wp-editor-wrap),
			#post-body-content .postbox:has(#wp-content-editor-container) {
				display: none !important;
			}
		</style>';
	}
}
add_action('admin_head', 'hide_editor_for_front_page');

// ==========================================================================
// デフォルトの投稿を非表示化
// ==========================================================================
function remove_default_post_type() {
	remove_menu_page('edit.php');
}
add_action('admin_menu', 'remove_default_post_type');

function remove_default_post_type_from_admin_bar() {
	global $wp_admin_bar;
	$wp_admin_bar->remove_node('new-post');
}
add_action('admin_bar_menu', 'remove_default_post_type_from_admin_bar', 999);

// ==========================================================================
// コメントの無効化
// ==========================================================================
function comment_status_none( $open, $post_id ) {
    $post = get_post( $post_id );
    if( $post->post_type == 'post' ) {
        return false;
    }
    if( $post->post_type == 'page' ) {
        return false;
    }
    if( $post->post_type == 'attachment' ) {
        return false;
    }
    return false;
}

add_filter( 'comments_open', 'comment_status_none', 10 , 2 );
function remove_menus() {
    remove_menu_page( 'edit-comments.php' ); // コメント
  }
  add_action( 'admin_menu', 'remove_menus', 999 );