<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$slug      = $post_data->post_name;
 ?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<?php wp_head(); ?>
<?php if (!is_user_logged_in()): ?>
<!-- ここにGAトラッキングタグ -->
<?php endif; ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/first.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/common.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/header.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/footer.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/front.css">
</head>
<body class="drawer drawer--right">

<!-- ヘッダー -->
<header id="header">
  <div class="wrap">
    <a class="sp-only" href="<?php echo $home ?>">
      <img src="<?php echo $wp_url ?>/lib/images/common/logo.png" alt="リードアーキテクトロゴ">
    </a>
    <button type="button" class="drawer-toggle drawer-hamburger">
        <span class="sr-only"></span>
        <span class="drawer-hamburger-icon"></span>
    </button>
    <nav class="drawer-nav flex" role="navigation">
      <a class="pc-only" href="<?php echo $home ?>">
        <img src="<?php echo $wp_url ?>/lib/images/common/logo.png" alt="リードアーキテクトロゴ">
      </a>
      <ul class="drawer-menu flex">
        <li class="drawer-dropdown">
          <a class="drawer-menu-item" href="#" data-toggle="dropdown" role="button" aria-expanded="false">サービス紹介<span class="drawer-caret"></span></a>
          <ul class="drawer-dropdown-menu">
            <li><a class="flex drawer-dropdown-menu-item" href="<?php echo $home ?>/order">
              <img src="<?php echo $wp_url ?>/lib/images/common/nav_01.png" alt="注文建築">
              <p>注文建築</p>
            </a></li>
            <li><a class="flex drawer-dropdown-menu-item" href="<?php echo $home ?>/reform">
              <img src="<?php echo $wp_url ?>/lib/images/common/nav_02.png" alt="リフォーム">
              <p>リフォーム</p>
            </a></li>
            <li><a class="flex drawer-dropdown-menu-item" href="<?php echo $home ?>/shop">
              <img src="<?php echo $wp_url ?>/lib/images/common/nav_03.png" alt="店舗建築">
              <p>店舗建築</p>
            </a></li>
            <li><a class="flex drawer-dropdown-menu-item" href="<?php echo $home ?>/large">
              <img src="<?php echo $wp_url ?>/lib/images/common/nav_04.png" alt="大型建築">
              <p>大型建築</p>
            </a></li>
          </ul>
        </li>
        <li><a class="drawer-menu-item" href="<?php echo $home ?>/works">事例紹介</a></li>
        <li><a class="drawer-menu-item" href="<?php echo $home ?>/company">会社情報</a></li>
        <li><a class="drawer-menu-item" href="<?php echo $home ?>/recruit">採用情報</a></li>
        <li><a class="drawer-menu-item" href="<?php echo $home ?>/contact">お問い合わせ</a></li>
      </ul>
    </nav>
  </div>
</header>
<!-- ヘッダー終了 -->

<!-- メインビジュアル開始 -->
<?php if (is_home() || is_front_page()): ?>
<section id="mv">
  <div class="wrap">
  </div>
<div class="callout-square"></div>
</section>

<?php else: ?>

<?php endif; ?>

<!-- メインビジュアル終了 -->

<!-- メインコンテンツ -->
<main>
