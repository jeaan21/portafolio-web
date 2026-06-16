<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $site_name ?> | <?= $site_description ?></title>
  <meta name="description" content="<?= $site_description ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&family=Syne:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          fontFamily: {
            sans: ['DM Sans', 'system-ui', 'sans-serif'],
            heading: ['Syne', 'sans-serif'],
            mono: ['JetBrains Mono', 'monospace'],
          }
        }
      }
    }
  </script>
  <?php
  $config = require __DIR__ . '/../../../config/app.php';
  $base_dir = $config['base_dir'];
  require_once __DIR__ . '/../../../config/security.php';
  Security::initSession();
  ?>
  <link rel="stylesheet" href="<?= $base_dir ?>/public/css/app.css">
  <meta name="csrf-token" content="<?= Security::getCSRFToken() ?>">
  <meta name="base-url" content="<?= $base_dir ?>">
</head>
<body class="text-slate-900 antialiased transition-colors duration-300">
