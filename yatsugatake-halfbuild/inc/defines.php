<?php
// ==========================================================================
// 定義
// ==========================================================================
/* ---------- パスの短縮 ---------- */
define('IMAGEPATH',            get_template_directory_uri() . '/assets/images');

/* ---------- 各ページのリンク ---------- */
define('HOME_URL',             esc_url(home_url('/')));                          // トップページ
define('SERVICE_URL',          esc_url(home_url('/#service')));                  // ハーフビルドについて
define('LECTURE_URL',          esc_url(home_url('/lecture/')));                  // レクチャー
define('MATERIALS_SELECT_URL', esc_url(home_url('/materials-select/')));         // 選択できる材料
define('SCHEDULE_COST_URL',    esc_url(home_url('/schedule-cost/')));            // 工期・費用
define('FLOW_URL',             esc_url(home_url('/flow/')));                     // ハーフビルドの流れ
define('MATERIALS_URL',        esc_url(home_url('/materials/')));                // 使用する材料
define('WORKS_URL',            esc_url(home_url('/works/')));                    // 施工事例：一覧
define('COLUMN_URL',           esc_url(home_url('/column/')));                   // コラム：一覧
define('VOICE_URL',            esc_url(home_url('/voice/')));                    // お客様の声
define('COMPANY_URL',          esc_url(home_url('/company/')));                  // 会社概要
define('CONTACT_URL',          esc_url(home_url('/contact/')));                  // お問い合わせ
define('CONTACT_THANKS_URL',   esc_url(home_url('/contact-thanks/')));           // お問い合わせ完了