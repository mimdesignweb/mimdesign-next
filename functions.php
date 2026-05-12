<?php
/**
 * MIMDESIGN LP — functions.php
 */

// ── タイトルタグのサポート ────────────────────────────
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );

// ── CSS / JS の読み込み ───────────────────────────────
function mimdesign_enqueue_assets() {
    $ver = '1.0.0';
    $uri = get_template_directory_uri();

    wp_enqueue_style(
        'mimdesign-style',
        $uri . '/assets/style.css',
        [],
        $ver
    );

    wp_enqueue_script(
        'mimdesign-script',
        $uri . '/assets/script.js',
        [],
        $ver,
        true  // フッターに出力
    );
}
add_action( 'wp_enqueue_scripts', 'mimdesign_enqueue_assets' );

// ── ファビコン ────────────────────────────────────────
function mimdesign_favicon() {
    $uri = get_template_directory_uri();
    echo '<link rel="icon" href="' . esc_url( $uri . '/assets/img/favicon.webp' ) . '" type="image/webp">' . "\n";
}
add_action( 'wp_head', 'mimdesign_favicon' );

// ── 不要な WordPress デフォルト出力を削除 ─────────────
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );

// ── 制作事例 URL ヘルパー ──────────────────────────────
// WordPress 内の固定ページへリンクする
function mimdesign_works_url( $slug = '' ) {
    if ( ! $slug ) {
        return home_url( '/' );
    }
    $page = get_page_by_path( $slug );
    if ( $page ) {
        return get_permalink( $page->ID );
    }
    return home_url( '/' . $slug . '/' );
}
