<?php
if (!is_home() && !is_front_page()) :
?>
  <nav class="breadcrumb" aria-label="パンくずリスト">
    <ul class="breadcrumb__list">
      <li class="breadcrumb__item">
        <a href="<?php echo HOME_URL; ?>" class="breadcrumb__link">Home</a>
      </li>

      <?php
      // 固定ページ
      if (is_page()) :
        // 親ページがある場合の処理
        $parent_id = wp_get_post_parent_id(get_the_ID());
        if ($parent_id) {
          $parent_title = get_the_title($parent_id);
          $parent_url = get_permalink($parent_id);
        ?>
          <li class="breadcrumb__item">
            <a href="<?php echo esc_url($parent_url); ?>" class="breadcrumb__link">
              <?php echo esc_html($parent_title); ?>
            </a>
          </li>
        <?php
        }
        ?>
        <li class="breadcrumb__item">
          <?php echo esc_html(get_the_title()); ?>
        </li>

      <?php
      // 投稿（通常の投稿）
      elseif (is_single() && get_post_type() === 'post') :
        $category = get_the_category();
        if (!empty($category)) :
      ?>
          <li class="breadcrumb__item">
            <a href="<?php echo esc_url(get_category_link($category[0]->term_id)); ?>" class="breadcrumb__link">
              <?php echo esc_html($category[0]->name); ?>
            </a>
          </li>
        <?php endif; ?>
        <li class="breadcrumb__item"><?php echo esc_html(get_the_title()); ?></li>

      <?php
      // カスタム投稿タイプ
      elseif (is_singular() && get_post_type() !== 'post') :
        $post_type = get_post_type_object(get_post_type());
        if ($post_type && isset($post_type->label) && isset($post_type->name)) :
        ?>
        <li class="breadcrumb__item">
          <a href="<?php echo esc_url(get_post_type_archive_link($post_type->name)); ?>" class="breadcrumb__link">
            <?php echo esc_html($post_type->label); ?>
          </a>
        </li>
        <?php endif; ?>

        <?php
        // カスタムタクソノミーがある場合（例：genre）
        $taxonomies = get_object_taxonomies(get_post_type());
        foreach ($taxonomies as $taxonomy) {
          $terms = get_the_terms(get_the_ID(), $taxonomy);
          if (!empty($terms) && !is_wp_error($terms)) {
            $term = $terms[0]; // 最初のタームのみ表示
        ?>
            <li class="breadcrumb__item">
              <a href="<?php echo esc_url(get_term_link($term)); ?>" class="breadcrumb__link">
                <?php echo esc_html($term->name); ?>
              </a>
            </li>
        <?php
            break;
          }
        }
        ?>
        <li class="breadcrumb__item"><?php echo esc_html(get_the_title()); ?></li>

      <?php
      // カスタム投稿タイプのアーカイブページ
      elseif (is_post_type_archive()) :
        $post_type_name = get_query_var('post_type');
        if (empty($post_type_name)) {
          $queried_object = get_queried_object();
          if ($queried_object && isset($queried_object->name)) {
            $post_type_name = $queried_object->name;
          }
        }
        if ($post_type_name) {
          $post_type = get_post_type_object($post_type_name);
          if ($post_type && isset($post_type->label)) :
      ?>
        <li class="breadcrumb__item">
          <?php echo esc_html($post_type->label); ?>
        </li>
      <?php 
          endif;
        }
      ?>

      <?php
      // カテゴリーアーカイブ
      elseif (is_category()) :
      ?>
        <li class="breadcrumb__item"><?php echo esc_html(single_cat_title('', false)); ?></li>

      <?php
      // カスタム分類アーカイブ
      elseif (is_tax()) :
        $term = get_queried_object();
        if ($term && isset($term->name)) :
      ?>
        <li class="breadcrumb__item"><?php echo esc_html($term->name); ?></li>
      <?php endif; ?>
      <?php
      // 404ページ
      elseif (is_404()) :
      ?>
        <li class="breadcrumb__item">404 Not Found</li>
      <?php endif; ?>
    </ul>
  </nav>
<?php endif; ?>
