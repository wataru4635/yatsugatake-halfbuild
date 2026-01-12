<?php
$prev_post = get_previous_post();
$next_post = get_next_post();
function yatsugatake_render_post_nav_item($post, $class, $label) {
  if ($post) {
    $url = esc_url(get_permalink($post->ID));
    ?>
    <a href="<?php echo $url; ?>" class="<?php echo esc_attr($class); ?>">
      <span class="post-label"><?php echo esc_html($label); ?></span>
    </a>
    <?php
  } else {
    echo '<span class="' . esc_attr($class) . ' empty"></span>';
  }
}
?>

<?php yatsugatake_render_post_nav_item($prev_post, 'prev-post', '＜ 前の記事へ'); ?>
<?php yatsugatake_render_post_nav_item($next_post, 'next-post', '次の記事へ ＞'); ?>