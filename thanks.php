<?php
/* Template Name: Thanks Page */
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせありがとうございます | MIMDESIGN</title>
  <meta name="description" content="お問い合わせを受け付けました。1〜2営業日以内にご連絡いたします。">
  <meta name="robots" content="noindex, nofollow">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.webp" type="image/webp">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/style.css">
  <style>
    .thanks-page {
      min-height: 100dvh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 40px 20px;
      background: var(--deep-navy);
      position: relative;
      overflow: hidden;
    }

    /* 背景グロー */
    .thanks-page::before {
      content: '';
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 600px;
      height: 600px;
      background: radial-gradient(circle, rgba(0,229,255,0.07) 0%, transparent 65%);
      pointer-events: none;
    }

    .thanks-card {
      text-align: center;
      max-width: 520px;
      width: 100%;
      position: relative;
    }

    .thanks-icon {
      width: 80px;
      height: 80px;
      margin: 0 auto 32px;
      border-radius: 50%;
      background: rgba(0,229,255,0.1);
      border: 1px solid rgba(0,229,255,0.3);
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .thanks-icon svg {
      width: 36px;
      height: 36px;
      color: var(--cyan-glow, #00e5ff);
    }

    .thanks-eyebrow {
      font-size: 11px;
      font-weight: 600;
      letter-spacing: 0.2em;
      color: var(--cyan-glow, #00e5ff);
      margin-bottom: 16px;
      text-transform: uppercase;
    }

    .thanks-title {
      font-size: clamp(1.5rem, 5vw, 2.25rem);
      font-weight: 700;
      line-height: 1.3;
      margin-bottom: 20px;
      color: #fff;
    }

    .thanks-desc {
      font-size: 15px;
      color: rgba(255,255,255,0.6);
      line-height: 1.85;
      margin-bottom: 40px;
    }

    .thanks-steps {
      display: flex;
      flex-direction: column;
      gap: 12px;
      margin-bottom: 40px;
      text-align: left;
    }

    .thanks-step {
      display: flex;
      align-items: flex-start;
      gap: 14px;
      padding: 16px 20px;
      background: rgba(255,255,255,0.04);
      border: 1px solid rgba(255,255,255,0.08);
      border-radius: 12px;
    }

    .thanks-step-num {
      flex-shrink: 0;
      width: 26px;
      height: 26px;
      border-radius: 50%;
      background: rgba(0,229,255,0.15);
      border: 1px solid rgba(0,229,255,0.3);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 11px;
      font-weight: 700;
      color: var(--cyan-glow, #00e5ff);
      margin-top: 1px;
    }

    .thanks-step-text {
      font-size: 14px;
      color: rgba(255,255,255,0.65);
      line-height: 1.7;
    }

    .thanks-step-text strong {
      color: #fff;
      font-weight: 600;
    }

    .thanks-back {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 14px 36px;
      border-radius: 100px;
      font-size: 15px;
      font-weight: 600;
      background: linear-gradient(135deg, #00e5ff 0%, #3d5afe 50%, #7c4dff 100%);
      color: #050816;
      transition: opacity 0.2s, transform 0.25s cubic-bezier(0.16,1,0.3,1);
      text-decoration: none;
    }

    .thanks-back:hover {
      opacity: 0.9;
      transform: translateY(-2px);
    }

    .thanks-back svg {
      width: 16px;
      height: 16px;
    }

    @media (max-width: 480px) {
      .thanks-card { padding: 0 4px; }
      .thanks-icon { width: 68px; height: 68px; margin-bottom: 24px; }
      .thanks-steps { gap: 10px; }
    }
  </style>
<?php wp_head(); ?>
</head>
<body>

<main class="thanks-page">
  <div class="thanks-card">

    <!-- アイコン -->
    <div class="thanks-icon">
      <svg viewBox="0 0 36 36" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M6 18l8 8L30 10"/>
      </svg>
    </div>

    <p class="thanks-eyebrow">THANK YOU</p>
    <h1 class="thanks-title">
      お問い合わせ<br>ありがとうございます
    </h1>
    <p class="thanks-desc">
      内容を確認のうえ、担当者より<br>
      <strong style="color:#fff;">1〜2営業日以内</strong>にご連絡いたします。<br>
      しばらくお待ちください。
    </p>

    <!-- 今後の流れ -->
    <div class="thanks-steps">
      <div class="thanks-step">
        <span class="thanks-step-num">1</span>
        <p class="thanks-step-text">
          <strong>受付完了メールを送信</strong><br>
          ご入力のメールアドレス宛に自動返信メールをお送りします。
        </p>
      </div>
      <div class="thanks-step">
        <span class="thanks-step-num">2</span>
        <p class="thanks-step-text">
          <strong>現在のサイトを確認</strong><br>
          ご記入いただいた URL をもとに、改善ポイントを事前にチェックします。
        </p>
      </div>
      <div class="thanks-step">
        <span class="thanks-step-num">3</span>
        <p class="thanks-step-text">
          <strong>担当者からご連絡</strong><br>
          1〜2営業日以内にメールまたはお電話にてご連絡します。
        </p>
      </div>
    </div>

    <a href="<?php echo home_url('/'); ?>" class="thanks-back">
      <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
        <path d="M10 3L5 8l5 5"/>
      </svg>
      トップページへ戻る
    </a>

  </div>
</main>

<?php wp_footer(); ?>
</body>
</html>
