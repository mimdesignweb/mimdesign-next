<?php
/* front-page.php — フロントページテンプレート */
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MIMDESIGN | Webサイト改善で、問い合わせ・予約を増やします。</title>
  <meta name="description" content="Googleマップで高評価なのに、Webで損していませんか？デザイン・導線・情報設計を見直し、「見つけてもらう」から「選ばれる」へ。">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="MIMDESIGN">
  <meta property="og:title" content="MIMDESIGN | Webサイト改善で、問い合わせ・予約を増やします。">
  <meta property="og:description" content="Googleマップで高評価なのに、Webで損していませんか？デザイン・導線・情報設計を見直し、「見つけてもらう」から「選ばれる」へ。">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="MIMDESIGN | Webサイト改善で、問い合わせ・予約を増やします。">
  <meta name="twitter:description" content="Googleマップで高評価なのに、Webで損していませんか？デザイン・導線・情報設計を見直し、「見つけてもらう」から「選ばれる」へ。">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Noto+Sans+JP:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="icon" href="favicon.webp" type="image/webp">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/style.css">
<?php wp_head(); ?>
</head>
<body>

  <!-- ========== NAV OVERLAY (mobile) ========== -->
  <div class="nav-overlay" id="nav-overlay" aria-hidden="true"></div>

  <!-- ========== HEADER ========== -->
  <header class="header" id="header">
    <div class="header-inner">
      <a href="#" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/mimdesign_logo.svg" alt="MIMDESIGN" class="logo-img"></a>
      <nav class="nav" id="nav">
        <a href="#service" class="nav-link">サービス</a>
        <a href="#cases" class="nav-link">改善事例</a>
        <a href="#about" class="nav-link">実績</a>
        <a href="#flow" class="nav-link">フロー</a>
        <a href="#price" class="nav-link">料金</a>
        <a href="#faq" class="nav-link">よくある質問</a>
        <a href="#contact" class="btn btn-outline nav-cta">無料で相談する</a>
      </nav>
      <button class="hamburger" id="hamburger" aria-label="メニューを開く">
        <span></span><span></span><span></span>
      </button>
    </div>
  </header>

  <!-- ========== HERO ========== -->
  <section class="hero" id="top">
    <div class="hero-inner">
      <div class="hero-content">
        <p class="hero-sub-label">
          <span class="label-bar"></span>
          Googleマップからの問い合わせ導線を改善
        </p>
        <h1 class="hero-headline">
          Webサイト改善で、<br>問い合わせ・予約を<br>増やします。
        </h1>
        <p class="hero-desc">
          デザイン・導線・情報設計を見直し、<br>
          「見つけてもらう」から「選ばれる」へ。
        </p>
        <div class="hero-cta-group">
          <a href="#contact" class="btn btn-primary">無料で相談してみる <span class="arrow">›</span></a>
          <a href="#service" class="btn btn-ghost">サービス内容を見る</a>
        </div>
      </div>
    </div>

    <!-- Hero Features -->
    <div class="hero-features">
      <div class="hero-features-inner">
        <div class="hero-feature">
          <div class="feature-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
              <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z"/>
              <circle cx="12" cy="9" r="2.5"/>
            </svg>
          </div>
          <p>Googleマップ流入を<br>成果につなげる設計</p>
        </div>
        <div class="feature-divider" aria-hidden="true"></div>
        <div class="hero-feature">
          <div class="feature-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
              <rect x="5" y="2" width="14" height="20" rx="2"/>
              <line x1="9" y1="7" x2="15" y2="7"/>
              <line x1="9" y1="11" x2="15" y2="11"/>
              <line x1="9" y1="15" x2="13" y2="15"/>
            </svg>
          </div>
          <p>スマホで見やすく<br>迷わない導線へ改善</p>
        </div>
        <div class="feature-divider" aria-hidden="true"></div>
        <div class="hero-feature">
          <div class="feature-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
              <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/>
              <polyline points="16 7 22 7 22 13"/>
            </svg>
          </div>
          <p>問い合わせ・予約の<br>増加をサポート</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== PROBLEM ========== -->
  <section class="section section-light" id="problem">
    <div class="container">
      <div class="section-header fade-in">
        <p class="section-eyebrow">PROBLEM</p>
        <h2 class="section-title">こんなお悩みは<br>ありませんか？</h2>
        <div class="title-line"></div>
      </div>
      <div class="problem-grid">

        <div class="problem-card fade-in">
          <div class="problem-icon-wrap">
            <div class="problem-icon">
              <!-- Smartphone with broken/warning lines — 離脱 -->
              <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <rect x="5" y="2" width="14" height="20" rx="2.5"/>
                <line x1="9" y1="7" x2="15" y2="7"/>
                <line x1="9" y1="11" x2="13" y2="11"/>
                <path d="M12 15.5l1.5 1.5-1.5 1.5" stroke-width="1.6"/>
              </svg>
            </div>
          </div>
          <h3>スマホで見づらく<br>離脱されている</h3>
          <p>文字が小さく、情報が探しにくいなどユーザーがストレスを感じている。</p>
        </div>

        <div class="problem-card fade-in">
          <div class="problem-icon-wrap">
            <div class="problem-icon">
              <!-- Search / find — 情報が見つからない -->
              <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="7"/>
                <line x1="16.5" y1="16.5" x2="21" y2="21"/>
                <line x1="8" y1="11" x2="14" y2="11"/>
                <line x1="11" y1="8" x2="11" y2="14"/>
              </svg>
            </div>
          </div>
          <h3>必要な情報が<br>すぐに見つからない</h3>
          <p>サービス内容や料金、アクセスなど知りたい情報にたどり着けない。</p>
        </div>

        <div class="problem-card fade-in">
          <div class="problem-icon-wrap">
            <div class="problem-icon">
              <!-- Cursor + arrow — 行動につながらない -->
              <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <path d="M4 4l6.5 16 2.5-6 6-2.5L4 4z"/>
                <line x1="14.5" y1="14.5" x2="20" y2="20"/>
              </svg>
            </div>
          </div>
          <h3>問い合わせ・予約に<br>つながらない</h3>
          <p>導線やボタンの配置が不十分で行動してもらえない。</p>
        </div>

        <div class="problem-card fade-in">
          <div class="problem-icon-wrap">
            <div class="problem-icon">
              <!-- Award / medal — 選ばれにくい -->
              <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="9" r="6"/>
                <path d="M7.5 14.5L5 22l7-3 7 3-2.5-7.5"/>
              </svg>
            </div>
          </div>
          <h3>他社と比べて<br>選ばれにくい</h3>
          <p>サイトの印象や信頼感が弱く、競合に負けてしまっている。</p>
        </div>

      </div>
    </div>
  </section>

  <!-- ========== SERVICE ========== -->
  <section class="section section-dark" id="service">
    <div class="grid-bg-subtle" aria-hidden="true"></div>
    <div class="container">
      <div class="section-header fade-in">
        <p class="section-eyebrow">SERVICE</p>
        <h2 class="section-title" style="color:#fff;">Webで損している部分を、<br>ユーザー目線で改善します。</h2>
        <div class="title-line"></div>
      </div>
      <div class="service-grid">

        <div class="service-card fade-in">
          <div class="service-num">01</div>
          <div class="service-icon-wrap">
            <div class="service-icon">
              <!-- Layout / FV — ファーストビュー -->
              <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <rect x="2" y="3" width="20" height="18" rx="2.5"/>
                <line x1="2" y1="9" x2="22" y2="9"/>
                <line x1="8" y1="3" x2="8" y2="9"/>
                <rect x="12" y="13" width="6" height="4" rx="1"/>
              </svg>
            </div>
          </div>
          <h3>ファーストビュー改善</h3>
          <p>訪問直後の印象を整え、離脱を防ぐFV設計へ。</p>
        </div>

        <div class="service-card fade-in">
          <div class="service-num">02</div>
          <div class="service-icon-wrap">
            <div class="service-icon">
              <!-- Arrow + button — CTA導線 -->
              <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="14" width="10" height="6" rx="2"/>
                <path d="M13 17h5"/>
                <path d="M15 14.5l2.5 2.5-2.5 2.5"/>
                <line x1="3" y1="4" x2="21" y2="4"/>
                <line x1="3" y1="8" x2="16" y2="8"/>
              </svg>
            </div>
          </div>
          <h3>CTA・問い合わせ導線改善</h3>
          <p>行動を促すCTAの配置と文言を見直し、成果につなげます。</p>
        </div>

        <div class="service-card fade-in">
          <div class="service-num">03</div>
          <div class="service-icon-wrap">
            <div class="service-icon">
              <!-- Mobile + check — スマホUI -->
              <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <rect x="6" y="2" width="12" height="20" rx="2.5"/>
                <line x1="10" y1="7" x2="14" y2="7"/>
                <polyline points="9.5 12 11.5 14 14.5 11"/>
                <circle cx="12" cy="18" r="0.8" fill="currentColor"/>
              </svg>
            </div>
          </div>
          <h3>スマホUI改善</h3>
          <p>スマートフォンユーザーが快適に閲覧・操作できるUI改善。</p>
        </div>

        <div class="service-card fade-in">
          <div class="service-num">04</div>
          <div class="service-icon-wrap">
            <div class="service-icon">
              <!-- Layers / info architecture — 情報設計 -->
              <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <polygon points="12 2 22 8.5 12 15 2 8.5 12 2"/>
                <polyline points="2 13.5 12 20 22 13.5"/>
                <line x1="12" y1="15" x2="12" y2="20"/>
              </svg>
            </div>
          </div>
          <h3>情報整理・構成改善</h3>
          <p>伝えたい情報を優先度に沿って整理し、分かりやすいページ構成へ。</p>
        </div>

        <div class="service-card fade-in">
          <div class="service-num">05</div>
          <div class="service-icon-wrap">
            <div class="service-icon">
              <!-- Map pin + pulse — Googleマップ流入 -->
              <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 2C8.5 2 5.5 5 5.5 8.5c0 5.25 6.5 12.5 6.5 12.5S18.5 13.75 18.5 8.5C18.5 5 15.5 2 12 2z"/>
                <circle cx="12" cy="8.5" r="2.2"/>
                <path d="M5 19.5c2-1 4.5-1.5 7-1.5s5 .5 7 1.5" stroke-width="1.4" stroke-dasharray="1.5 1.5"/>
              </svg>
            </div>
          </div>
          <h3>Googleマップ流入後の<br>受け皿改善</h3>
          <p>マップ検索からの流入者を逃さない、受け皿ページの設計。</p>
        </div>

        <div class="service-card fade-in">
          <div class="service-num">06</div>
          <div class="service-icon-wrap">
            <div class="service-icon">
              <!-- Code / editor — STUDIOリニューアル -->
              <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <rect x="2" y="3" width="20" height="18" rx="2.5"/>
                <line x1="2" y1="8" x2="22" y2="8"/>
                <circle cx="5.5" cy="5.5" r="0.8" fill="currentColor"/>
                <circle cx="8.5" cy="5.5" r="0.8" fill="currentColor"/>
                <circle cx="11.5" cy="5.5" r="0.8" fill="currentColor"/>
                <polyline points="7 13 9.5 15.5 7 18"/>
                <line x1="12" y1="18" x2="17" y2="18"/>
              </svg>
            </div>
          </div>
          <h3>STUDIO等での<br>簡易リニューアル相談</h3>
          <p>STUDIOを使った低コスト・高品質なリニューアル対応も可能。</p>
        </div>

      </div>
    </div>
  </section>

  <!-- ========== BEFORE / AFTER ========== -->
  <section class="section section-light" id="ba">
    <div class="container">
      <div class="section-header fade-in">
        <p class="section-eyebrow">BEFORE / AFTER</p>
        <h2 class="section-title">少し整えるだけで、<br>印象と行動は変わります。</h2>
        <div class="title-line"></div>
      </div>
      <div class="ba-container fade-in">
        <div class="ba-col ba-before">
          <div class="ba-label ba-label-before">Before</div>
          <ul class="ba-list">
            <li>
              <span class="ba-icon ba-icon-before">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
              </span>
              情報が多く整理されていない
            </li>
            <li>
              <span class="ba-icon ba-icon-before">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
              </span>
              CTAが目立たない
            </li>
            <li>
              <span class="ba-icon ba-icon-before">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
              </span>
              スマホで見づらい
            </li>
            <li>
              <span class="ba-icon ba-icon-before">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
              </span>
              信頼感が伝わりにくい
            </li>
          </ul>
        </div>

        <div class="ba-arrow" aria-hidden="true">
          <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="url(#arrowGrad)" stroke-width="1.5">
            <defs>
              <linearGradient id="arrowGrad" x1="0" y1="0" x2="1" y2="0">
                <stop offset="0%" stop-color="#FF6B9F"/>
                <stop offset="100%" stop-color="#2563FF"/>
              </linearGradient>
            </defs>
            <line x1="5" y1="12" x2="19" y2="12"/>
            <polyline points="12 5 19 12 12 19"/>
          </svg>
        </div>

        <div class="ba-col ba-after">
          <div class="ba-label ba-label-after">After</div>
          <ul class="ba-list">
            <li>
              <span class="ba-icon ba-icon-after">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              </span>
              必要情報がすぐ分かる
            </li>
            <li>
              <span class="ba-icon ba-icon-after">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              </span>
              問い合わせ導線が明確
            </li>
            <li>
              <span class="ba-icon ba-icon-after">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              </span>
              スマホで迷わない
            </li>
            <li>
              <span class="ba-icon ba-icon-after">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              </span>
              口コミや強みが伝わる
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== CASES ========== -->
  <section class="section section-offwhite" id="cases">
    <div class="container">
      <div class="section-header fade-in">
        <p class="section-eyebrow">WORKS</p>
        <h2 class="section-title">制作事例</h2>
        <div class="title-line"></div>
        <p class="section-desc">Web改善・LP制作・UIデザインなど、目的に合わせて情報設計からデザインまで対応しています。</p>
      </div>
      <div class="cases-grid">
        <a href="<?php echo mimdesign_works_url('works-ec'); ?>" class="case-card fade-in">
          <div class="case-visual case-visual-1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/vd.jpg" alt="コーポレートサイト制作">
          </div>
          <div class="case-content">
            <div class="case-tag">コーポレートサイト</div>
            <h3>コーポレートサイト制作</h3>
            <ul>
              <li>信頼性・採用訴求・ブランド表現</li>
              <li>企業としての存在感を高める</li>
              <li>信頼性を高めるコンテンツ設計</li>
            </ul>
          </div>
        </a>
        <a href="<?php echo mimdesign_works_url('works-seitai'); ?>" class="case-card fade-in">
          <div class="case-visual case-visual-2">
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
        <a href="<?php echo mimdesign_works_url('works-farm'); ?>" class="case-card fade-in">
          <div class="case-visual case-visual-3">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fujimoto.png" alt="農園サイトリニューアル">
          </div>
          <div class="case-content">
            <div class="case-tag">農園 / Web制作</div>
            <h3>農園サイトリニューアル</h3>
            <ul>
              <li>注文導線の整理・改善</li>
              <li>運用しやすい構成に再設計</li>
              <li>スマホ対応UI改善</li>
            </ul>
          </div>
        </a>
        <a href="<?php echo mimdesign_works_url('works-rentacar'); ?>" class="case-card fade-in">
          <div class="case-visual case-visual-4">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/camp.jpg" alt="レンタカー予約サイト">
          </div>
          <div class="case-content">
            <div class="case-tag">ウェブデザイン・UI/UX</div>
            <h3>レンタカー予約サイト</h3>
            <ul>
              <li>ロゴデザイン</li>
              <li>UIデザイン・画面設計</li>
              <li>デザイン〜実装まで一貫対応</li>
            </ul>
          </div>
        </a>
      </div>
    </div>
  </section>

  <!-- ========== ABOUT / TRUST ========== -->
  <section class="section section-light" id="about">
    <div class="container">
      <div class="section-header fade-in">
        <p class="section-eyebrow">ABOUT</p>
        <h2 class="section-title">EC運営・UI/UX・LP改善の<br>経験をもとに設計します。</h2>
        <div class="title-line"></div>
      </div>
      <div class="about-grid">
        <!-- 左カラム：人物写真プレースホルダー -->
        <div class="about-photo-col fade-in">
          <div class="about-photo-wrap">
            <div class="about-photo-grid" aria-hidden="true"></div>
            <div class="about-photo-placeholder">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profile_img.png" alt="MIMDESIGN" class="about-profile-img">
            </div>
          </div>
        </div>

        <!-- 右カラム：実績リスト -->
        <div class="about-list-col fade-in">
          <ul class="about-list">
            <li>
              <span class="check-icon">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              </span>
              <div>
                <strong>ECサイト運営・Webデザイン経験10年以上</strong>
                <p>長年の実務を通じた現場感覚で改善を提案します。</p>
              </div>
            </li>
            <li>
              <span class="check-icon">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              </span>
              <div>
                <strong>年商8億円規模ECサイトのデザインディレクション</strong>
                <p>大規模EC運営で培った成果重視のデザイン思考。</p>
              </div>
            </li>
            <li>
              <span class="check-icon">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              </span>
              <div>
                <strong>大手証券会社でのLP/UIデザイン経験</strong>
                <p>金融という信頼性が問われる分野でのUI設計経験。</p>
              </div>
            </li>
            <li>
              <span class="check-icon">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              </span>
              <div>
                <strong>SaaS・業務システムのUIデザイン経験</strong>
                <p>複雑な情報を整理するUI/UX設計を得意としています。</p>
              </div>
            </li>
            <li>
              <span class="check-icon">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              </span>
              <div>
                <strong>LP改善・購入導線・CV改善の知見</strong>
                <p>数値を見ながら改善を続けた実践的な経験があります。</p>
              </div>
            </li>
            <li>
              <span class="check-icon">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              </span>
              <div>
                <strong>Figmaを用いたUI設計・デザイン制作</strong>
                <p>プロトタイプから実装仕様まで一貫して対応します。</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== FLOW ========== -->
  <section class="section section-dark" id="flow">
    <div class="grid-bg-subtle" aria-hidden="true"></div>
    <div class="container">
      <div class="section-header fade-in">
        <p class="section-eyebrow">FLOW</p>
        <h2 class="section-title" style="color:#fff;">制作・改善の流れ</h2>
        <div class="title-line"></div>
      </div>
      <div class="flow-list">
        <div class="flow-item fade-in">
          <div class="flow-num">01</div>
          <div class="flow-body">
            <div class="flow-icon">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                <path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/>
              </svg>
            </div>
            <div>
              <h3>無料相談</h3>
              <p>現在のサイトの課題や改善したい点をヒアリングします。お気軽にご相談ください。</p>
            </div>
          </div>
        </div>
        <div class="flow-connector" aria-hidden="true"></div>
        <div class="flow-item fade-in">
          <div class="flow-num">02</div>
          <div class="flow-body">
            <div class="flow-icon">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                <circle cx="11" cy="11" r="8"/>
                <line x1="21" y1="21" x2="16.65" y2="16.65"/>
              </svg>
            </div>
            <div>
              <h3>サイト診断</h3>
              <p>現在のWebサイトを分析し、課題点と改善ポイントを整理します。</p>
            </div>
          </div>
        </div>
        <div class="flow-connector" aria-hidden="true"></div>
        <div class="flow-item fade-in">
          <div class="flow-num">03</div>
          <div class="flow-body">
            <div class="flow-icon">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
              </svg>
            </div>
            <div>
              <h3>改善提案</h3>
              <p>診断結果をもとに、具体的な改善案とお見積もりをご提案します。</p>
            </div>
          </div>
        </div>
        <div class="flow-connector" aria-hidden="true"></div>
        <div class="flow-item fade-in">
          <div class="flow-num">04</div>
          <div class="flow-body">
            <div class="flow-icon">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                <rect x="3" y="3" width="18" height="18" rx="2"/>
                <circle cx="12" cy="12" r="3"/>
                <line x1="3" y1="9" x2="21" y2="9"/>
                <line x1="9" y1="21" x2="9" y2="9"/>
              </svg>
            </div>
            <div>
              <h3>デザイン作成</h3>
              <p>Figmaでデザインを制作。確認・修正を経て最終デザインに仕上げます。</p>
            </div>
          </div>
        </div>
        <div class="flow-connector" aria-hidden="true"></div>
        <div class="flow-item fade-in">
          <div class="flow-num">05</div>
          <div class="flow-body">
            <div class="flow-icon">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                <polyline points="16 18 22 12 16 6"/>
                <polyline points="8 6 2 12 8 18"/>
              </svg>
            </div>
            <div>
              <h3>実装・公開</h3>
              <p>デザインを実装し、テスト・確認後に公開します。</p>
            </div>
          </div>
        </div>
        <div class="flow-connector" aria-hidden="true"></div>
        <div class="flow-item fade-in">
          <div class="flow-num">06</div>
          <div class="flow-body">
            <div class="flow-icon">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                <polyline points="23 4 23 10 17 10"/>
                <path d="M20.49 15a9 9 0 11-2.12-9.36L23 10"/>
              </svg>
            </div>
            <div>
              <h3>改善サポート</h3>
              <p>公開後も必要に応じて改善・修正をサポートします。</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== PRICE ========== -->
  <section class="section section-light" id="price">
    <div class="container">
      <div class="section-header fade-in">
        <p class="section-eyebrow">PRICE</p>
        <h2 class="section-title">料金</h2>
        <div class="title-line"></div>
        <p class="section-desc">あくまで目安としての料金です。正式なお見積もりは、現在のサイト状況・ページ数・実装範囲を確認したうえでご提案します。</p>
      </div>
      <div class="price-grid">
        <div class="price-card fade-in">
          <div class="price-badge">LIGHT</div>
          <h3 class="price-plan">ライト改善</h3>
          <div class="price-amount">¥100,000<span>〜</span></div>
          <ul class="price-list">
            <li>FV改善</li>
            <li>CTA改善</li>
            <li>1ページ改善提案</li>
          </ul>
          <a href="#contact" class="btn btn-outline-dark">相談してみる</a>
        </div>
        <div class="price-card price-card-featured fade-in">
          <div class="price-badge price-badge-featured">STANDARD</div>
          <h3 class="price-plan">スタンダード改善</h3>
          <div class="price-amount">¥200,000<span>〜¥400,000</span></div>
          <ul class="price-list">
            <li>LP/TOP改善</li>
            <li>導線設計</li>
            <li>スマホ最適化</li>
          </ul>
          <a href="#contact" class="btn btn-primary">相談してみる</a>
        </div>
        <div class="price-card fade-in">
          <div class="price-badge">RENEWAL</div>
          <h3 class="price-plan">サイト改善・リニューアル</h3>
          <div class="price-amount">¥400,000<span>〜</span></div>
          <ul class="price-list">
            <li>小規模サイト改善</li>
            <li>STUDIO構築相談</li>
            <li>情報設計・デザイン込み</li>
          </ul>
          <a href="#contact" class="btn btn-outline-dark">相談してみる</a>
        </div>
      </div>
      <p class="price-note fade-in">※正式なお見積もりは、現在のサイト状況・ページ数・実装範囲を確認したうえでご提案します。</p>
    </div>
  </section>

  <!-- ========== FAQ ========== -->
  <section class="section section-offwhite" id="faq">
    <div class="container">
      <div class="section-header fade-in">
        <p class="section-eyebrow">FAQ</p>
        <h2 class="section-title">よくある質問</h2>
        <div class="title-line"></div>
      </div>
      <div class="faq-list">
        <div class="faq-item fade-in">
          <button class="faq-q" aria-expanded="false">
            <span>まだ依頼するか決めていなくても相談できますか？</span>
            <span class="faq-icon" aria-hidden="true">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
            </span>
          </button>
          <div class="faq-a">
            <p>はい、もちろんです。「まずは現状を聞いてほしい」「どのくらいの費用がかかるか知りたい」という段階でも歓迎します。気軽にご相談ください。</p>
          </div>
        </div>
        <div class="faq-item fade-in">
          <button class="faq-q" aria-expanded="false">
            <span>今のサイトを残したまま一部改善できますか？</span>
            <span class="faq-icon" aria-hidden="true">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
            </span>
          </button>
          <div class="faq-a">
            <p>可能です。FV改善やCTA改善など、一部のみの改善にも対応しています。まず現状を確認し、最適な進め方をご提案します。</p>
          </div>
        </div>
        <div class="faq-item fade-in">
          <button class="faq-q" aria-expanded="false">
            <span>STUDIOでの制作は可能ですか？</span>
            <span class="faq-icon" aria-hidden="true">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
            </span>
          </button>
          <div class="faq-a">
            <p>はい、対応可能です。STUDIOを使った簡易リニューアルや新規構築もお受けしています。お持ちのアカウントへの制作代行も可能です。</p>
          </div>
        </div>
        <div class="faq-item fade-in">
          <button class="faq-q" aria-expanded="false">
            <span>SEOへの影響はありますか？</span>
            <span class="faq-icon" aria-hidden="true">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
            </span>
          </button>
          <div class="faq-a">
            <p>デザインや導線の改善はSEOへの直接的な悪影響はほとんどありません。むしろ表示速度改善やモバイル最適化はSEOにもプラスになります。必要に応じてご相談ください。</p>
          </div>
        </div>
        <div class="faq-item fade-in">
          <button class="faq-q" aria-expanded="false">
            <span>実装までお願いできますか？</span>
            <span class="faq-icon" aria-hidden="true">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
            </span>
          </button>
          <div class="faq-a">
            <p>はい、デザインだけでなく実装・公開まで一貫して対応できます。既存のCMSやSTUDIO、WordPressなど、使用環境に合わせてご提案します。</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== FINAL CTA ========== -->
  <section class="section final-cta" id="contact">
    <div class="grid-bg" aria-hidden="true"></div>
    <div class="container">
      <div class="final-cta-inner fade-in">
        <p class="section-eyebrow">CONTACT</p>
        <h2 class="final-cta-title">レビューの高さを、<br>Webでも伝わる形へ。</h2>
        <p class="final-cta-desc">まずはお気軽にご相談ください。現在のサイトを確認したうえで、改善できる点をお伝えします。</p>
        <a href="mailto:info@mimdesign.jp" class="btn btn-primary btn-large">
          無料で相談してみる <span class="arrow">›</span>
        </a>
        <p class="final-cta-note">返信は通常1〜2営業日以内</p>
      </div>
    </div>
  </section>

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
