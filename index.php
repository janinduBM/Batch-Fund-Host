<?php

require_once __DIR__ . '/auth.php';

// Fallbacks so this page works even if config.php was not updated.
if (!defined('ORG_NAME')) define('ORG_NAME', 'Your University / Faculty and Batch name');
if (!defined('CONTACT_EMAIL')) define('CONTACT_EMAIL', 'your-email@example.com');
$u = current_user();
if ($u)
  redirect(home_for($u['role']));
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login – <?= h(APP_NAME) ?> | <?= h(ORG_NAME) ?></title>
  <meta name="description" content="<?= h(APP_NAME) ?> is the batch fund and committee management system for <?= h(ORG_NAME) ?>. Members can view collections, submit payment receipts and read financial statements.">
  <link rel="stylesheet" href="login.css">
  <style>
    /* Wrapper keeps the about text and footer OUTSIDE the two-column login card */
    .login-wrap { width: 100%; max-width: 860px; }
    .login-about {
      margin: 18px auto 0; max-width: 700px; text-align: center;
      font-size: 14px; line-height: 1.6; color: #475467;
    }
    .login-about strong { color: #1c2433; }
    .login-footer {
      margin: 14px auto 0; text-align: center; font-size: 13px; color: #667085;
    }
    .login-footer a { color: #1000a6; }
  </style>
</head>

<body class="login-body">
  <div class="login-wrap">
    <div class="login-card">
      <div class="brand center">
        <img class="logo" src="logo.png" alt="<?= h(APP_NAME) ?> logo">
        <div><strong><?= h(APP_NAME) ?></strong><small><?= h(BATCH_NAME) ?></small></div>
      </div>
      <?php foreach ($_SESSION['flash'] ?? [] as $f): ?>
        <div class="alert alert-<?= h($f['type']) ?>"><?= h($f['msg']) ?></div>
      <?php endforeach;
      unset($_SESSION['flash']); ?>
      <form method="post" action="auth.php" class="form" data-validate>
        <?= csrf_field() ?><input type="hidden" name="action" value="login">
        <label>Email address<input type="email" name="email" required autofocus autocomplete="username"></label>
        <label>Password<input type="password" name="password" required autocomplete="current-password"></label>
        <button class="btn btn-primary btn-block" type="submit">Log in</button>
      </form>
      <p class="muted small center">Forgot your password? Ask the batch coordinator to reset it.</p>
    </div>

    <div class="login-about">
      <strong>About <?= h(APP_NAME) ?></strong><br>
      <?= h(APP_NAME) ?> is the student batch fund and committee management system for
      <?= h(ORG_NAME) ?>. It lets registered batch members view collections and deadlines,
      upload payment receipts, and read the batch's financial statements and announcements.
      Access is limited to registered batch members. This site never asks for bank card
      numbers or online banking passwords.
    </div>

    <div class="login-footer">
      Contact: <a href="mailto:<?= h(CONTACT_EMAIL) ?>"><?= h(CONTACT_EMAIL) ?></a>
      · <a href="privacy.php">Privacy policy</a>
    </div>
  </div>
</body>

</html>