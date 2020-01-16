<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
</main>
<!-- メインコンテンツ終了 -->

<!-- パンくず開始 -->
<?php
if (!is_home() && !is_front_page()) {
    if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
    }
}
?>
<!-- パンく終了 -->

<!-- フッター -->
<footer>
  <div class="p-60">
    <div class="wrap flex">
      <div class="left">
        <a href="<?php echo $home ?>">
          <img src="<?php echo $wp_url ?>/lib/images/common/logo.png" alt="リードアーキテクトロゴ">
        </a>
        <p class="mt-1">京都府京都市南区西九条藤ノ木町<br>97番地<br>TEL：075-693-2880</p>
      </div>
      <div class="right pc-only flex">
        <div>
          <p class="ttl">わたしたちについて</p>
          <ul>
            <li><a href="<?php echo $home ?>/company">会社情報</a></li>
            <li><a href="<?php echo $home ?>/recruit">採用情報</a></li>
            <li><a href="<?php echo $home ?>/event">内覧会</a></li>
          </ul>
        </div>
        <div>
          <p class="ttl">サービス</p>
          <div class="flex">
            <ul>
              <li><a href="<?php echo $home ?>/order">注文住宅</a></li>
              <li><a href="<?php echo $home ?>/reform">リフォーム</a></li>
              <li><a href="<?php echo $home ?>/shop">店舗</a></li>
              <li><a href="<?php echo $home ?>/large">大型建築</a></li>
            </ul>
            <ul>
              <li><a href="<?php echo $home ?>/health-o">健康住宅</a></li>
              <li><a href="<?php echo $home ?>/design-o">デザイン住宅</a></li>
              <li><a href="<?php echo $home ?>/health-r">健康リフォーム</a></li>
              <li><a href="<?php echo $home ?>/design-r">デザインリフォーム</a></li>
            </ul>
            <ul>
              <li><a href="<?php echo $home ?>/consul">コンサルティング</a></li>
              <li><a href="<?php echo $home ?>/revenue">収益物件</a></li>
              <li><a href="<?php echo $home ?>/special">特殊建築</a></li>
              <li><a href="<?php echo $home ?>/works">事例紹介</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="small">
    <div class="wrap flex">
      <p><a href="<?php echo $home ?>/pp">プライバシーポリシー</a>｜<a href="<?php echo $home ?>/sitemap">サイトマップ</a></p>
      <small class="d-block">(c) LEAD ARCHITECT.</small>
    </div>
  </div>
</footer>
<!-- フッター終了 -->
<?php wp_footer(); ?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>
<script type="text/javascript" src="<?php echo $wp_url ?>/lib/js/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
$(document).ready(function() {
  /*--drawer設定--*/
  $('.drawer').drawer();
  /*--slick初期化--*/
  $('.slider').slick({
    autoplay:true,
    autoplaySpeed:0,
    dots:false,
    arrows:false,
    slidesToShow:6,
    slidesToScroll:1,
    cssEase: 'linear',
    speed: 5000,
  });
  $('.slider-02').slick({
    autoplay:false,
    autoplaySpeed:3000,
    slidesToShow:1,
    slidesToScroll:1,
    dots:true,
    customPaging: function(slider, i) {
    return $('<button type="button" />').text(i + 1);
  },
    prevArrow: '<img src="<?php echo $wp_url ?>/lib/images/common/arrow_l.png" class="slide-arrow prev-arrow">',
    nextArrow: '<img src="<?php echo $wp_url ?>/lib/images/common/arrow_r.png" class="slide-arrow next-arrow">'
  });
});
</script>
</html>
