<?php
/**
 * MIMDESIGN LP — 404.php
 */
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>404 Not Found | MIMDESIGN</title>
<?php wp_head(); ?>
</head>
<body style="background:#050816;color:#fff;font-family:sans-serif;margin:0;">
<div style="display:flex;align-items:center;justify-content:center;min-height:100vh;flex-direction:column;gap:20px;">
  <h1 style="font-size:4rem;color:#00e5ff;margin:0;">404</h1>
  <p style="color:rgba(255,255,255,.6);">ページが見つかりませんでした</p>
  <a href="<?php echo home_url('/'); ?>" style="color:#00e5ff;border:1px solid #00e5ff;padding:12px 32px;border-radius:100px;text-decoration:none;">ホームへ戻る</a>
</div>
<?php wp_footer(); ?>
</body>
</html>
