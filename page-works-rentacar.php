<?php
/* Template Name: Works: レンタカーサイト */
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>キャンピングカーレンタルサイト | MIMDESIGN 制作事例</title>
  <meta name="description" content="ロゴ制作からサイト設計・デザイン・実装まで一人で担当したキャンピングカーレンタルサービスのWebサイト制作事例。">
  <meta property="og:type" content="article">
  <meta property="og:site_name" content="MIMDESIGN">
  <meta property="og:title" content="キャンピングカーレンタルサイト | MIMDESIGN 制作事例">
  <meta property="og:description" content="ロゴ制作からサイト設計・デザイン・実装まで一人で担当したキャンピングカーレンタルサービスのWebサイト制作事例。">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="キャンピングカーレンタルサイト | MIMDESIGN 制作事例">
  <meta name="twitter:description" content="ロゴ制作からサイト設計・デザイン・実装まで一人で担当したキャンピングカーレンタルサービスのWebサイト制作事例。">
  <link rel="icon" href="favicon.webp" type="image/webp">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Noto+Sans+JP:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/style.css">
  <style>
    #header { background: rgba(5,8,22,.96) !important; box-shadow: 0 1px 0 rgba(255,255,255,.07) !important; }

    .works-hero {
      background: linear-gradient(135deg, #05081a 0%, #080c22 100%);
      padding-top: 68px;
      overflow: hidden;
    }
    .works-hero-inner {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 56px;
      align-items: flex-end;
      padding: 64px 0 0;
    }
    .works-hero-content { padding-bottom: 56px; }
    .works-hero-img { align-self: flex-end; line-height: 0; }
    .works-hero-img img {
      width: 100%; height: auto; display: block;
      border-radius: 10px 10px 0 0;
      box-shadow: 0 -12px 60px rgba(37,99,255,.18), 0 0 0 1px rgba(255,255,255,.08);
      transform: perspective(800px) rotateX(2deg);
      transform-origin: bottom center;
    }
    .works-breadcrumb {
      display: flex; align-items: center; gap: 8px;
      font-size: 12px; color: rgba(255,255,255,.45);
      margin-bottom: 24px; font-family: var(--font-en); letter-spacing: .05em;
    }
    .works-breadcrumb a { color: rgba(255,255,255,.45); transition: color .2s; }
    .works-breadcrumb a:hover { color: rgba(255,255,255,.8); }
    .works-breadcrumb-sep { font-size: 10px; }
    .works-site-link {
      display: inline-flex; align-items: center; gap: 5px;
      margin-top: 20px; font-size: 13px; font-weight: 500;
      color: rgba(255,255,255,.65);
      border-bottom: 1px solid rgba(255,255,255,.25); padding-bottom: 2px;
      transition: color .2s, border-color .2s;
    }
    .works-site-link:hover { color: var(--cyan-glow); border-color: var(--cyan-glow); }
    .works-category-badge {
      display: inline-block; font-family: var(--font-en);
      font-size: 11px; font-weight: 600; letter-spacing: .14em; text-transform: uppercase;
      color: var(--cyan-glow); background: rgba(49,215,255,.10);
      border: 1px solid rgba(49,215,255,.22); padding: 5px 14px;
      border-radius: 99px; margin-bottom: 20px;
    }
    .works-title {
      font-size: clamp(28px, 4.5vw, 52px); font-weight: 800;
      color: var(--white); line-height: 1.25; letter-spacing: -.02em; margin-bottom: 16px;
    }
    .works-subtitle { font-size: 16px; color: var(--pale-gray); font-weight: 300; line-height: 1.7; }

    .works-info-bar {
      background: var(--deep-navy);
      border-top: 1px solid rgba(255,255,255,.08);
      border-bottom: 1px solid rgba(255,255,255,.08);
    }
    .works-info-grid { display: grid; grid-template-columns: repeat(4, 1fr); }
    .works-info-item { padding: 24px 28px; border-right: 1px solid rgba(255,255,255,.08); }
    .works-info-item:last-child { border-right: none; }
    .works-info-label {
      display: block; font-family: var(--font-en); font-size: 10px; font-weight: 600;
      letter-spacing: .15em; text-transform: uppercase; color: var(--cyan-glow); margin-bottom: 10px;
    }
    .works-info-tags { display: flex; flex-wrap: wrap; gap: 6px; }
    .works-info-tag {
      display: inline-block; font-size: 11px; font-weight: 500;
      color: rgba(255,255,255,.82); background: rgba(255,255,255,.07);
      border: 1px solid rgba(255,255,255,.14); border-radius: 99px;
      padding: 3px 11px; white-space: nowrap;
    }
    a.works-info-tag {
      color: var(--cyan-glow); background: rgba(49,215,255,.08);
      border-color: rgba(49,215,255,.22); transition: background .2s, border-color .2s;
    }
    a.works-info-tag:hover { background: rgba(49,215,255,.16); border-color: rgba(49,215,255,.4); }

    .works-section-label {
      display: inline-block; font-family: var(--font-en); font-size: 11px; font-weight: 600;
      letter-spacing: .18em; text-transform: uppercase; color: var(--neon-blue); margin-bottom: 12px;
    }
    .works-section-title {
      font-size: clamp(20px, 2.5vw, 28px); font-weight: 700;
      line-height: 1.4; letter-spacing: -.01em; margin-bottom: 24px;
    }
    .works-section-text { font-size: 15px; color: var(--body-text); line-height: 2; max-width: 680px; }
    .works-content-wrap { max-width: 860px; margin-left: auto; margin-right: auto; }

    .works-list {
      list-style: none; padding: 0; margin: 0;
      display: flex; flex-direction: column; gap: 14px;
    }
    .works-list li {
      display: flex; align-items: flex-start; gap: 12px;
      font-size: 15px; color: var(--body-text); line-height: 1.75;
    }
    .works-list li::before {
      content: ''; display: block; flex-shrink: 0;
      width: 6px; height: 6px; border-radius: 50%;
      background: var(--neon-blue); margin-top: 9px;
    }
    .section-dark .works-list li { color: var(--pale-gray); }
    .section-dark .works-list li::before { background: var(--cyan-glow); }

    .works-two-col { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; margin-top: 40px; }
    .works-two-col-block h4 {
      font-size: 14px; font-weight: 700; color: var(--neon-blue); margin-bottom: 14px;
    }

    .works-nav-bar { background: var(--offwhite); border-top: 1px solid var(--border); padding: 40px 0; }
    .works-nav-inner {
      max-width: var(--container-max); margin: 0 auto; padding: 0 var(--container-px);
      display: flex; align-items: center; justify-content: space-between; gap: 16px;
    }
    .works-back-link {
      display: inline-flex; align-items: center; gap: 8px;
      font-size: 14px; font-weight: 500; color: var(--body-text); transition: color .2s;
    }
    .works-back-link:hover { color: var(--neon-blue); }
    .works-back-link svg { flex-shrink: 0; }

    .section-dark .works-section-label { color: var(--cyan-glow); }
    .section-dark .works-section-title { color: var(--white); }
    .section-dark .works-section-text  { color: var(--pale-gray); }

    .fade-in { opacity: 1 !important; transform: none !important; }

    @media (max-width: 768px) {
      .works-hero-inner   { grid-template-columns: 1fr; gap: 40px; padding: 48px 0 0; }
      .works-hero-content { padding-bottom: 0; }
      .works-hero-img img { border-radius: 8px 8px 0 0; transform: none; }
      .works-info-grid    { grid-template-columns: repeat(2, 1fr); }
      .works-info-item    { border-bottom: 1px solid rgba(255,255,255,.08); }
      .works-info-item:nth-child(2n) { border-right: none; }
      .works-info-item:nth-last-child(-n+2) { border-bottom: none; }
      .works-two-col      { grid-template-columns: 1fr; gap: 32px; }
      .works-nav-inner    { flex-direction: column; align-items: flex-start; gap: 16px; }
    }
    @media (max-width: 480px) {
      .works-info-grid { grid-template-columns: 1fr 1fr; }
      .works-info-item { border-bottom: 1px solid rgba(255,255,255,.08); }
      .works-info-item:nth-child(2n) { border-right: none; }
      .works-info-item:last-child, .works-info-item:nth-last-child(2) { border-bottom: none; }
    }
  </style>
<?php wp_head(); ?>
</head>
<body>

  <div class="nav-overlay" id="nav-overlay" aria-hidden="true"></div>

  <header class="header scrolled" id="header">
    <div class="header-inner">
      <a href="<?php echo home_url('/'); ?>" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/mimdesign_logo.svg" alt="MIMDESIGN" class="logo-img"></a>
      <nav class="nav" id="nav">
        <a href="index.html#service" class="nav-link">サービス</a>
        <a href="index.html#cases" class="nav-link">改善事例</a>
        <a href="index.html#about" class="nav-link">実績</a>
        <a href="index.html#flow" class="nav-link">フロー</a>
        <a href="index.html#price" class="nav-link">料金</a>
        <a href="index.html#faq" class="nav-link">よくある質問</a>
        <a href="index.html#contact" class="btn btn-outline nav-cta">無料で相談する</a>
      </nav>
      <button class="hamburger" id="hamburger" aria-label="メニューを開く">
        <span></span><span></span><span></span>
      </button>
    </div>
  </header>

  <!-- ========== HERO ========== -->
  <section class="works-hero">
    <div class="container">
      <div class="works-hero-inner">
        <div class="works-hero-content">
          <div class="works-breadcrumb">
            <a href="<?php echo home_url('/'); ?>">HOME</a>
            <span class="works-breadcrumb-sep">›</span>
            <a href="index.html#cases">WORKS</a>
            <span class="works-breadcrumb-sep">›</span>
            <span>キャンピングカーレンタルサイト</span>
          </div>
          <span class="works-category-badge">ウェブデザイン・UI/UX</span>
          <h1 class="works-title">キャンピングカー<br>レンタルサイト</h1>
          <p class="works-subtitle">ロゴ制作からサイト設計・デザイン・実装まで一人で担当</p>
          <a href="https://orchid460936.studio.site" target="_blank" rel="noopener" class="works-site-link">
            公開サイトを見る
            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
              <line x1="7" y1="17" x2="17" y2="7"/><polyline points="7 7 17 7 17 17"/>
            </svg>
          </a>
        </div>
        <div class="works-hero-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/camp.jpg" alt="キャンピングカーレンタルサイト — 制作実績">
        </div>
      </div>
    </div>
  </section>

  <!-- ========== INFO BAR ========== -->
  <div class="works-info-bar">
    <div class="works-info-grid" style="max-width:var(--container-max);margin:0 auto;padding:0 var(--container-px);">
      <div class="works-info-item">
        <span class="works-info-label">Category</span>
        <div class="works-info-tags">
          <span class="works-info-tag">ウェブデザイン</span>
          <span class="works-info-tag">UI/UX</span>
        </div>
      </div>
      <div class="works-info-item">
        <span class="works-info-label">Role</span>
        <div class="works-info-tags">
          <span class="works-info-tag">ロゴデザイン</span>
          <span class="works-info-tag">UI/UX設計</span>
          <span class="works-info-tag">STUDIO実装</span>
        </div>
      </div>
      <div class="works-info-item">
        <span class="works-info-label">Tool</span>
        <div class="works-info-tags">
          <span class="works-info-tag">Figma</span>
          <span class="works-info-tag">STUDIO</span>
          <span class="works-info-tag">Illustrator</span>
        </div>
      </div>
      <div class="works-info-item">
        <span class="works-info-label">Link</span>
        <div class="works-info-tags">
          <a href="https://orchid460936.studio.site" target="_blank" rel="noopener" class="works-info-tag">公開サイト ↗</a>
        </div>
      </div>
    </div>
  </div>

  <!-- ========== OVERVIEW ========== -->
  <section class="section section-light">
    <div class="container works-content-wrap">
      <span class="works-section-label">Overview</span>
      <h2 class="works-section-title">プロジェクト概要</h2>
      <p class="works-section-text">
        キャンピングカーレンタルサービスのWebサイトを制作。ロゴ制作からサイト設計・デザイン・実装まで一人で担当。<br><br>
        ターゲットは小さなお子様がいるファミリー層。キャンピングカーに馴染みがない方にも「楽しそう・使えそう」と感じてもらえるよう、コピーライティングと視覚表現の両面からアプローチしました。
      </p>

      <div class="works-two-col" style="margin-top:40px;padding-top:40px;border-top:1px solid var(--border);">
        <div class="works-two-col-block">
          <h4>ターゲット</h4>
          <ul class="works-list">
            <li>小さなお子様がいるファミリー層</li>
          </ul>
        </div>
        <div class="works-two-col-block">
          <h4>担当範囲</h4>
          <ul class="works-list">
            <li>ロゴデザイン</li>
            <li>ブランド設計</li>
            <li>UI/UX設計</li>
            <li>情報設計</li>
            <li>STUDIO実装</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== 想定した課題 ========== -->
  <section class="section section-dark">
    <div class="container works-content-wrap">
      <span class="works-section-label">Challenge</span>
      <h2 class="works-section-title">想定した課題</h2>
      <ul class="works-list">
        <li>キャンピングカーへの馴染みがない層に対して、利用シーンをイメージさせる必要がある</li>
        <li>予約・問い合わせまでの導線が不明瞭だと離脱につながる</li>
        <li>競合サービスとの差別化ポイントを明確にする必要がある</li>
      </ul>
    </div>
  </section>

  <!-- ========== デザインの意図 ========== -->
  <section class="section section-light">
    <div class="container works-content-wrap">
      <span class="works-section-label">Design Intent</span>
      <h2 class="works-section-title">デザインの意図</h2>
      <ul class="works-list">
        <li>「非日常感」と「ファミリー向けの安心感」を両立するデザイン</li>
        <li>自然・アウトドアを感じさせるアースカラー＋清潔感のある白を基調に</li>
        <li>写真と余白を活用し、旅への期待感を高めるレイアウト</li>
      </ul>
    </div>
  </section>

  <!-- ========== ロゴデザインの意図 ========== -->
  <section class="section section-offwhite">
    <div class="container works-content-wrap">
      <span class="works-section-label">Logo Design</span>
      <h2 class="works-section-title">ロゴデザインの意図</h2>
      <ul class="works-list">
        <li>木と道を組み合わせたシンプルなアイコンでアウトドア感を表現</li>
        <li>ファミリーが安心して使えるサービスと感じてもらえるよう、丸みを帯びたデザインに</li>
        <li>ロゴ単体でもWebやSNSで視認性を確保できるよう、シンプルさを優先</li>
      </ul>
    </div>
  </section>

  <!-- ========== UI設計 ========== -->
  <section class="section section-light">
    <div class="container works-content-wrap">
      <span class="works-section-label">UI Design</span>
      <h2 class="works-section-title">UI設計</h2>
      <ul class="works-list">
        <li>FVにキャンピングカーの利用シーンを連想させるビジュアルを配置</li>
        <li>「なぜこのサービスか」→「利用の流れ」→「予約」という自然な流れで構成</li>
        <li>よくある質問（FAQ）セクションを設け、初めて利用するユーザーの不安を解消</li>
        <li>レスポンシブ対応で、スマホからも快適に閲覧・予約できる設計</li>
      </ul>
    </div>
  </section>

  <!-- ========== 工夫したポイント ========== -->
  <section class="section section-offwhite">
    <div class="container works-content-wrap">
      <span class="works-section-label">Key Points</span>
      <h2 class="works-section-title">工夫したポイント</h2>
      <ul class="works-list">
        <li>キャンピングカーになじみのない層にも「楽しそう・使えそう」と感じてもらえるよう、コピーライティングにこだわった</li>
        <li>ファミリー層が安心して予約できるよう、スタッフ紹介・よくある質問・利用規約へのリンクをわかりやすく配置</li>
        <li>予約・問い合わせへのCTAをFV・中間・フッターの3箇所に設置し、離脱を防ぐ導線設計</li>
        <li>サービスの特徴（車種・オプション・料金）をシンプルなカードUIで整理し、比較しやすくした</li>
      </ul>
    </div>
  </section>

  <!-- ========== OTHER WORKS ========== -->
  <section class="section section-offwhite">
    <div class="container">
      <div class="section-header" style="margin-bottom:48px;">
        <p class="section-eyebrow">OTHER WORKS</p>
        <h2 class="section-title">他の制作事例</h2>
        <div class="title-line"></div>
      </div>
      <div class="cases-grid cases-grid-3">

        <a href="<?php echo mimdesign_works_url('works-seitai'); ?>" class="case-card">
          <div class="case-visual">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/seitaiin.webp" alt="整体院のサイトリニューアル">
          </div>
          <div class="case-content">
            <div class="case-tag">医療・整体</div>
            <h3>整体院のサイトリニューアル</h3>
            <ul>
              <li>来院前の不安を減らす導線設計</li>
              <li>スマホ対応とFV改善</li>
              <li>予約・問い合わせCTA改善</li>
            </ul>
          </div>
        </a>

        <a href="<?php echo mimdesign_works_url('works-farm'); ?>" class="case-card">
          <div class="case-visual">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fujimoto.png" alt="農園サイトリニューアル">
          </div>
          <div class="case-content">
            <div class="case-tag">農園 / Web制作</div>
            <h3>農園サイトリニューアル</h3>
            <ul>
              <li>ブランド設計・ロゴデザイン</li>
              <li>注文導線の整理・改善</li>
              <li>スマホ対応UI改善</li>
            </ul>
          </div>
        </a>

        <a href="<?php echo mimdesign_works_url('works-ec'); ?>" class="case-card">
          <div class="case-visual">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/vd.jpg" alt="コーポレートサイト制作">
          </div>
          <div class="case-content">
            <div class="case-tag">Corporate / Web制作</div>
            <h3>コーポレートサイト制作</h3>
            <ul>
              <li>採用導線の明確化</li>
              <li>ブランド統一・情報設計</li>
              <li>SEO・パフォーマンス改善</li>
            </ul>
          </div>
        </a>

      </div>
      <div style="text-align:center;margin-top:40px;">
        <a href="index.html#cases" class="btn btn-outline-dark">制作事例一覧を見る</a>
      </div>
    </div>
  </section>

  <!-- ========== FINAL CTA ========== -->
  <section class="section final-cta" id="contact">
    <div class="grid-bg" aria-hidden="true"></div>
    <div class="container">
      <div class="final-cta-inner">
        <p class="section-eyebrow">CONTACT</p>
        <h2 class="final-cta-title">まずはお気軽に<br>ご相談ください。</h2>
        <p class="final-cta-desc">現在のサイトを確認したうえで、改善できる点をお伝えします。</p>
        <a href="mailto:info@mimdesign.jp" class="btn btn-primary btn-large">
          無料で相談してみる <span class="arrow">›</span>
        </a>
        <p class="final-cta-note">返信は通常1〜2営業日以内</p>
      </div>
    </div>
  </section>

  <!-- ========== WORKS NAV ========== -->
  <div class="works-nav-bar">
    <div class="works-nav-inner">
      <a href="index.html#cases" class="works-back-link">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
          <line x1="19" y1="12" x2="5" y2="12"/>
          <polyline points="12 19 5 12 12 5"/>
        </svg>
        制作事例一覧に戻る
      </a>
      <a href="mailto:info@mimdesign.jp" class="btn btn-primary" style="padding:11px 28px;font-size:14px;">
        無料で相談する <span class="arrow">›</span>
      </a>
    </div>
  </div>

  <!-- ========== FOOTER ========== -->
  <footer class="footer">
    <div class="footer-inner">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mimdesign_logo.svg" alt="MIMDESIGN" class="footer-logo-img">
      <p class="footer-copy">© 2025 MIMDESIGN. All rights reserved.</p>
    </div>
  </footer>


  <!-- ========== CONTACT MODAL ========== -->
  <div class="contact-modal-overlay" id="contact-modal" aria-hidden="true">
    <div class="contact-modal" role="dialog" aria-modal="true" aria-labelledby="modal-title">
      <button class="contact-modal-close" id="modal-close" aria-label="閉じる">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
          <line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/>
        </svg>
      </button>
      <p class="contact-modal-eyebrow">FREE CONSULTATION</p>
      <h2 id="modal-title" class="contact-modal-title">無料でご相談ください</h2>
      <p class="contact-modal-desc">現在のサイトを確認したうえで、改善できる点をお伝えします。返信は通常1〜2営業日以内。</p>
      <form class="contact-modal-form" id="contact-form" action="https://formspree.io/f/xdkovzal" method="POST">
        <div class="cf-field">
          <label for="cf-name">お名前 <span class="cf-required">※必須</span></label>
          <input type="text" id="cf-name" name="name" required placeholder="山田 太郎">
        </div>
        <div class="cf-field">
          <label for="cf-company">会社名・店舗名</label>
          <input type="text" id="cf-company" name="company" placeholder="株式会社〇〇 / 〇〇サロン">
        </div>
        <div class="cf-field">
          <label for="cf-email">メールアドレス <span class="cf-required">※必須</span></label>
          <input type="email" id="cf-email" name="email" required placeholder="example@email.com">
        </div>
        <div class="cf-field">
          <label for="cf-url">現在のサイトURL</label>
          <input type="url" id="cf-url" name="url" placeholder="https://example.com">
        </div>
        <div class="cf-field">
          <label for="cf-message">ご相談内容 <span class="cf-required">※必須</span></label>
          <textarea id="cf-message" name="message" required placeholder="例）&#10;・スマホで見づらい気がする&#10;・問い合わせが少ない&#10;・Googleマップからの離脱が気になる&#10;・サイトを整理したい&#10;・まずは改善点を相談したい"></textarea>
        </div>
        <button type="submit" class="contact-modal-submit" id="modal-submit">
          送信する <span class="arrow">›</span>
        </button>
        <p class="contact-modal-note">返信は通常1〜2営業日以内</p>
      </form>
      <div class="contact-modal-success" id="modal-success" hidden>
        <div class="contact-modal-success-icon">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="20 6 9 17 4 12"/>
          </svg>
        </div>
        <p class="contact-modal-success-title">送信が完了しました</p>
        <p class="contact-modal-success-desc">お問い合わせありがとうございます。<br>1〜2営業日以内にご連絡いたします。</p>
      </div>
    </div>
  </div>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/script.js"></script><?php wp_footer(); ?>
</body>
</html>
