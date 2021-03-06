<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<?php get_template_part( 'submv-imgnone' ); ?>

<section id="post" class="sec">
  <div class="wrap">
    <h2 class="ttl">わたしたちについて</h2>
    <ul>
      <li><a href="<?php echo $home ?>/company">会社概要</a></li>
      <li><a href="<?php echo $home ?>/works">事例紹介</a></li>
      <li><a href="<?php echo $home ?>/gallery">ギャラリー</a></li>
      <li><a href="<?php echo $home ?>/faq">よくあるご質問</a></li>
      <li><a href="<?php echo $home ?>/recruit">採用情報</a></li>
      <li><a href="<?php echo $home ?>/news">内覧会</a></li>
    </ul>
    <h2 class="ttl">サービス</h2>
    <ul>
     	<li><a href="<?php echo $home ?>/order">・注文住宅</a></li>
     	<li><a href="<?php echo $home ?>/reform">・リフォーム</a></li>
     	<li><a href="<?php echo $home ?>/shop">・店舗</a></li>
     	<li><a href="<?php echo $home ?>/large">・大型建築</a></li>
    </ul>
    <ul>
     	<li><a href="<?php echo $home ?>/health-o">・健康住宅</a></li>
     	<li><a href="<?php echo $home ?>/design-o">・デザイン住宅</a></li>
     	<li><a href="<?php echo $home ?>/health-r">・健康リフォーム</a></li>
     	<li><a href="<?php echo $home ?>/design-r">・デザインリフォーム</a></li>
    </ul>
    <ul>
     	<li><a href="<?php echo $home ?>/revenue">・収益物件</a></li>
     	<li><a href="<?php echo $home ?>/special">・特殊建築</a></li>
      <li><a href="<?php echo $home ?>/reno">リノベーション</a></li>
    </ul>
    <ul>
     	<li><a href="<?php echo $home ?>/privacy-policy">・プライバシーポリシー</a></li>
     	<li><a href="<?php echo $home ?>/sitemap">・サイトマップ</a></li>
    </ul>
  </div>
</section>
<?php get_footer();
