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
            <li><a href="<?php echo $home ?>/company">会社概要</a></li>
            <li><a href="<?php echo $home ?>/works">事例紹介</a></li>
            <li><a href="<?php echo $home ?>/gallery">ギャラリー</a></li>
            <li><a href="<?php echo $home ?>/faq">よくあるご質問</a></li>
            <li><a href="<?php echo $home ?>/recruit">採用情報</a></li>
          </ul>
        </div>
        <div>
          <p class="ttl">サービス</p>
          <div class="flex">
            <ul>
              <li><a href="<?php echo $home ?>/health-o">健康住宅</a></li>
              <li><a href="<?php echo $home ?>/design-o">デザイン住宅</a></li>
              <li><a href="<?php echo $home ?>/health-r">健康リフォーム</a></li>
              <li><a href="<?php echo $home ?>/design-r">デザインリフォーム</a></li>
              <li><a href="<?php echo $home ?>/shop">店舗コンサルティング</a></li>
            </ul>
            <ul>
              <li><a href="<?php echo $home ?>/revenue">収益物件</a></li>
              <li><a href="<?php echo $home ?>/special">特殊建築</a></li>
              <li><a href="<?php echo $home ?>/large">大型建築</a></li>
              <li><a href="<?php echo $home ?>/reno">リノベーション</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="small">
    <div class="wrap flex">
      <p><a href="<?php echo $home ?>/privacy-policy">プライバシーポリシー</a>｜<a href="<?php echo $home ?>/sitemap">サイトマップ</a></p>
      <small class="d-block">(c) LEAD ARCHITECT.</small>
    </div>
  </div>
</footer>
<!-- フッター終了 -->
<?php wp_footer(); ?>
</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="<?php echo $wp_url ?>/lib/js/slick.min.js"></script>
<script src="<?php echo $wp_url ?>/lib/js/lightbox.min.js"></script>
<script>
$(document).ready(function() {
  /*--drawer設定--*/
  $('.drawer').drawer();
  /*--slick初期化--*/
  $('.slider').slick({
    autoplay: true,
    autoplaySpeed: 0,
    dots: false,
    arrows: false,
    slidesToShow: 6,
    slidesToScroll: 1,
    cssEase: 'linear',
    speed: 5000,
    responsive: [{
      breakpoint: 768, //767px以下のサイズに適用
      settings: {
        slidesToShow: 1.5,
        speed: 10000,
      }
    }]
  });
  $('.slider-02').slick({
    autoplay: false,
    autoplaySpeed: 0,
    Speed: 40000,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    customPaging: function(slider, i) {
      return $('<button type="button" />').text(i + 1);
    },
    prevArrow: '<img src="<?php echo $wp_url ?>/lib/images/common/arrow_l.png" class="slide-arrow prev-arrow">',
    nextArrow: '<img src="<?php echo $wp_url ?>/lib/images/common/arrow_r.png" class="slide-arrow next-arrow">',
    responsive: [{
      breakpoint: 768, //767px以下のサイズに適用
      settings: {
        slidesToShow: 1,
        centerMode:true,
      }
    }]
  });
  $('.slider-03').slick({
    autoplay: true,
    autoplaySpeed: 0,
    dots: false,
    arrows: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    cssEase: 'linear',
    speed: 40000,
  });
  $('.slider-04').slick({
    autoplay: true,
    autoplaySpeed: 3000,
    dots: true,
    arrows: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    customPaging: function(slider, i) {
      return $('<button type="button" />').text(i + 1);
    },
    prevArrow: '<img src="<?php echo $wp_url ?>/lib/images/common/arrow_l.png" class="slide-arrow prev-arrow">',
    nextArrow: '<img src="<?php echo $wp_url ?>/lib/images/common/arrow_r.png" class="slide-arrow next-arrow">',
    responsive: [{
      breakpoint: 768, //767px以下のサイズに適用
      settings: {
        slidesToShow: 1
      }
    }]
  });
  $('.slider-fr01').slick({
    dots: true,
    arrows: true,
    customPaging: function(slider, i) {
      var thumbSrc = $(slider.$slides[i]).find('img').attr('src');
      return '<img src="' + thumbSrc + '">';
    },
    prevArrow: '<img src="<?php echo $wp_url ?>/lib/images/common/arrow_l.png" class="slide-arrow prev-arrow">',
    nextArrow: '<img src="<?php echo $wp_url ?>/lib/images/common/arrow_r.png" class="slide-arrow next-arrow">',
    responsive: [{
      breakpoint: 768, //767px以下のサイズに適用
      settings: {
        slidesToShow: 1
      }
    }]
  });
  $('.slider-fr02').slick({
    autoplay: true,
    autoplaySpeed: 0,
    dots: false,
    arrows: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    cssEase: 'linear',
    speed: 10000,
    responsive: [{
      breakpoint: 768, //767px以下のサイズに適用
      settings: {
        slidesToShow: 1.5
      }
    }]
  });
  /*--よくあるご質問--*/
  $(".ac dt").on("click", function() {
    $(this).next().slideToggle();
  });
});
$(function(){
    $('.js-modal-open').on('click',function(){
        $('.js-modal').fadeIn();
        return false;
    });
    $('.js-modal-close').on('click',function(){
        $('.js-modal').fadeOut();
        return false;
    });
});

</script>
</html>
