<?php
require_once __DIR__ . '/auth.php';

// Fallbacks so this page works even if config.php was not updated.
if (!defined('ORG_NAME')) define('ORG_NAME', 'Your University / Faculty and Batch name');
if (!defined('CONTACT_EMAIL')) define('CONTACT_EMAIL', 'your-email@example.com');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Privacy Policy – <?= h(APP_NAME) ?></title>
  <meta name="description" content="Privacy policy for <?= h(APP_NAME) ?>, the batch fund management system of <?= h(ORG_NAME) ?>.">
  <link rel="icon" type="image/png" href="logo.png">
  <link rel="apple-touch-icon" href="logo.png">
  <style>
    body { margin: 0; background: #eef0f4; color: #1c2433; font-family: "Roboto", "Segoe UI", system-ui, sans-serif; line-height: 1.65; }
    main { max-width: 760px; margin: 32px auto; padding: 28px 32px; background: #fff; border: 1px solid #e1e4ea; border-radius: 8px; }
    h1 { margin-top: 0; font-size: 1.8rem; }
    h2 { font-size: 1.15rem; margin-top: 1.6rem; }
    a { color: #1000a6; }
    .meta { color: #667085; font-size: .9rem; }
    @media (max-width: 800px) { main { margin: 0; border-radius: 0; padding: 20px; } }
  </style>
</head>

<body>
  <main>
    <h1>Privacy Policy</h1>
    <p class="meta">Last updated: November 2026</p>

    <p><?= h(APP_NAME) ?> is a private fund and committee management system for
      <?= h(ORG_NAME) ?>. It is run by the batch coordinator and committee, and is
      not a public or commercial service.</p>

    <h2>What information we store</h2>
    <ul>
      <li>Your name, email address, registration number, contact number and district.</li>
      <li>Your payment records: the collection, amount, reference number and the receipt file you upload.</li>
      <li>Login activity (time of login and logout) and actions taken in the system, for audit purposes.</li>
    </ul>

    <h2>What we do not collect</h2>
    <p>This site never asks for bank card numbers, card security codes or online
      banking passwords. Payments are made by bank transfer outside this site; you only upload
      the slip or receipt as proof.</p>

    <h2>Who can see your information</h2>
    <ul>
      <li>The batch coordinator and committee can see member details and payment records so they can verify payments.</li>
      <li>Other students can only see the batch's overall financial statement (total income, approved expenses and balance). They cannot see your personal details or your receipts.</li>
    </ul>

    <h2>How we use it</h2>
    <p>Only to manage batch collections, verify payments, send notifications about deadlines,
      and keep transparent financial records. We do not sell or share your information with
      advertisers or third parties.</p>

    <h2>Cookies</h2>
    <p>The site uses a single session cookie that keeps you logged in. It is not used for tracking or advertising.</p>

    <h2>Security</h2>
    <p>The site is served over HTTPS, passwords are stored as secure hashes, and access is
      limited to registered batch members.</p>

    <h2>Your choices</h2>
    <p>To correct or remove your information, or to reset your password, contact the batch coordinator
      or email <a href="mailto:<?= h(CONTACT_EMAIL) ?>"><?= h(CONTACT_EMAIL) ?></a>.</p>

    <p><a href="index.php">&larr; Back to login</a></p>
  </main>
</body>

</html>