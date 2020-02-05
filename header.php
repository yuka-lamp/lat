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
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oxygen:400,700&display=swap">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/slick.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/slick-theme.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/lightbox.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/first.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/common.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/layout.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/header.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/footer.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/front.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/mv.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/sec-contact.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/sec-works.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/ul-style.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/health.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/design.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/other.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/shop.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/works.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/gallery.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/post.css">
</head>
<body class="drawer drawer--right">

<!-- ヘッダー -->
<div class="pagetop">
  <a href="#pagetop"><img src="<?php echo $wp_url ?>/lib/images/common/pagetop.svg" alt="矢印"></a>
</div>

<!--PC用サービスメニュー始まり-->
<header id="header" class="pc-only">
  <div class="wrap">
    <button type="button" class="drawer-toggle drawer-hamburger">
        <span class="sr-only"></span>
        <span class="drawer-hamburger-icon"></span>
    </button>
    <nav class="drawer-nav flex" role="navigation">
      <a href="<?php echo $home ?>">
        <img src="<?php echo $wp_url ?>/lib/images/common/logo.png" alt="リードアーキテクトロゴ" style="width: 250px;">
      </a>
      <ul class="drawer-menu flex">
        <li class="drawer-dropdown">
          <a class="drawer-menu-item" href="#" data-toggle="dropdown" role="button" aria-expanded="false">サービス紹介<span class="drawer-caret"></span></a>
          <ul class="drawer-dropdown-menu">
            <li>
              <h3 class="menu-ttl">注文建築</h3>
              <div class="">
                <a href="<?php echo $home ?>/health-o">健康住宅</a>
                <a href="<?php echo $home ?>/design-o">デザイン住宅</a>
              </div>
            </li>
            <li>
              <h3 class="menu-ttl">リフォーム</h3>
              <div class="">
                <a href="<?php echo $home ?>/health-r">健康リフォーム</a>
                <a href="<?php echo $home ?>/design-r">デザインリフォーム</a>
              </div>
            </li>
            <li>
              <h3 class="menu-ttl">店舗建築</h3>
              <div class="">
                <a href="<?php echo $home ?>/shop">店舗コンサルティング</a>
              </div>
            </li>
            <li>
              <h3 class="menu-ttl">その他建築</h3>
              <div class="">
                <a href="<?php echo $home ?>/revenue">収益物件</a>
                <a href="<?php echo $home ?>/special">特殊建築</a>
                <a href="<?php echo $home ?>/large">大型建築</a>
                <a href="<?php echo $home ?>/reno">リノベーション</a>
              </div>
            </li>
          </ul>
        </li>
        <li><a class="drawer-menu-item" href="<?php echo $home ?>/works">事例紹介</a></li>
        <li><a class="drawer-menu-item" href="<?php echo $home ?>/company">会社概要</a></li>
        <li><a class="drawer-menu-item" href="<?php echo $home ?>/faq">よくあるご質問</a></li>
        <li><a class="drawer-menu-item" href="<?php echo $home ?>/recruit">採用情報</a></li>
        <!-- <li><a class="drawer-menu-item" href="<?php echo $home ?>/contact">お問い合わせ</a></li>
        <li class="tel txt-c">
          <a class="drawer-menu-item" href="tel:075-693-2880">
            <div class="img-wrap">
              <img src="<?php echo $wp_url ?>/lib/images/common/tel.png" alt="電話アイコン">
            </div>
            <p></p>
          </a>
        </li> -->
      </ul>
      <ul class="flex telmail">
        <li class="icon-tel"><a class="drawer-menu-item" href="tel:0756932880"><i class="fas fa-phone mr-1"></i></a></li>
        <li class="icon-mail"><a class="drawer-menu-item" href="<?php echo $home;?>/contact"><i class="far fa-envelope mr-1"></i></a></li>
      </ul>
    </nav>
  </div>
</header>

<!--sp用サービスメニュー始まり-->
<header id="header" class="sp-only">
  <div class="wrap">
    <a href="<?php echo $home ?>">
      <img src="<?php echo $wp_url ?>/lib/images/common/logo.png" alt="リードアーキテクトロゴ">
    </a>
    <button type="button" class="drawer-toggle drawer-hamburger">
        <span class="sr-only"></span>
        <span class="drawer-hamburger-icon"></span>
    </button>
    <nav class="drawer-nav flex" role="navigation">
      <ul class="drawer-menu flex">
        <li class="drawer-dropdown">
          <a class="drawer-menu-item" href="#" data-toggle="dropdown" role="button" aria-expanded="false">サービス紹介<span class="drawer-caret"></span></a>
          <ul class="drawer-dropdown-menu">
            <li>
              <h3 class="menu-ttl">注文建築</h3>
              <div class="">
                <a href="<?php echo $home ?>/health-o">健康住宅</a>
                <a href="<?php echo $home ?>/design-o">デザイン住宅</a>
              </div>
            </li>
            <li>
              <h3 class="menu-ttl">リフォーム</h3>
              <div class="">
                <a href="<?php echo $home ?>/health-r">健康リフォーム</a>
                <a href="<?php echo $home ?>/design-r">デザインリフォーム</a>
              </div>
            </li>
            <li>
              <h3 class="menu-ttl">店舗建築</h3>
              <div class="">
                <a href="<?php echo $home ?>/shop">店舗コンサルティング</a>
              </div>
            </li>
            <li>
              <h3 class="menu-ttl">その他建築</h3>
              <div class="">
                <a href="<?php echo $home ?>/revenue">収益物件</a>
                <a href="<?php echo $home ?>/special">特殊建築</a>
                <a href="<?php echo $home ?>/large">大型建築</a>
                <a href="<?php echo $home ?>/reno">リノベーション</a>
              </div>
            </li>
          </ul>
        </li>
        <li><a class="drawer-menu-item" href="<?php echo $home ?>/works">事例紹介</a></li>
        <li><a class="drawer-menu-item" href="<?php echo $home ?>/company">会社概要</a></li>
        <li><a class="drawer-menu-item" href="<?php echo $home ?>/recruit">採用情報</a></li>
        <li><a class="drawer-menu-item" href="<?php echo $home ?>/faq">よくあるご質問</a></li>
        <li class="btn"><a class="drawer-menu-item" href="<?php echo $home ?>/contact">お問い合わせ</a></li>
        <li class="tel txt-c">
          <a class="drawer-menu-item" href="tel:075-693-2880">
            <div class="img-wrap">
              <img src="<?php echo $wp_url ?>/lib/images/common/tel.png" alt="電話アイコン">
            </div>
            <p></p>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</header>

<!-- メインビジュアル開始 -->
<div id="pagetop">

</div>
<?php if (is_home() || is_front_page()): ?>
<section id="mv-front" class="mv">
  <div class="txt-wrap">
    <h2>Technicians<br>Group</h2>
    <p>スタッフ全員が<br class="sp-only">建築資格を持つ技術者集団。</p>
  </div>
  <div class="img-wrap">
    <img src="<?php echo $wp_url ?>/lib/images/front/mv_ttl.svg" alt="スタッフ全員が建築資格を持つ技術者集団。">
  </div>
</section>
<?php get_template_part( 'contact' ); ?>

<?php else: ?>

<?php endif; ?>

<!-- メインビジュアル終了 -->

<!-- メインコンテンツ -->
<main>
