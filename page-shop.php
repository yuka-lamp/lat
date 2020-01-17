<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<?php get_template_part( 'submv-img' ); ?>

<section id="shop" class="sec">
  <div class="wrap layout-01">
    <h2 class="ttl2">豊富な実績で<br>あなたの<span>理想を実現</span>。</h2>
    <ul class="flex mt-60">
      <li>
        <div class="img-wrap">
          <img src="<?php echo $wp_url ?>/lib/images/shop/01.png" alt="健康住宅">
        </div>
        <div class="txt-wrap">
          <h3>飲食店</h3>
          <p>居酒屋 / レストラン / カフェ / バー</p>
        </div>
      </li>
      <li>
        <div class="img-wrap">
          <img src="<?php echo $wp_url ?>/lib/images/shop/01.png" alt="健康住宅">
        </div>
        <div class="txt-wrap">
          <h3>飲食店</h3>
          <p>居酒屋 / レストラン / カフェ / バー</p>
        </div>
      </li>
      <li>
        <div class="img-wrap">
          <img src="<?php echo $wp_url ?>/lib/images/shop/01.png" alt="健康住宅">
        </div>
        <div class="txt-wrap">
          <h3>飲食店</h3>
          <p>居酒屋 / レストラン / カフェ / バー</p>
        </div>
      </li>
      <li>
        <div class="img-wrap">
          <img src="<?php echo $wp_url ?>/lib/images/shop/01.png" alt="健康住宅">
        </div>
        <div class="txt-wrap">
          <h3>飲食店</h3>
          <p>居酒屋 / レストラン / カフェ / バー</p>
        </div>
      </li>
      <li>
        <div class="img-wrap">
          <img src="<?php echo $wp_url ?>/lib/images/shop/01.png" alt="健康住宅">
        </div>
        <div class="txt-wrap">
          <h3>飲食店</h3>
          <p>居酒屋 / レストラン / カフェ / バー</p>
        </div>
      </li>
      <li>
        <div class="img-wrap">
          <img src="<?php echo $wp_url ?>/lib/images/shop/01.png" alt="健康住宅">
        </div>
        <div class="txt-wrap">
          <h3>飲食店</h3>
          <p>居酒屋 / レストラン / カフェ / バー</p>
        </div>
      </li>
    </ul>
  </div>
</section>

<section id="about-0" class="sec">
  <div class="wrap">
    <div class="ttl3">
      <h2>about</h2>
      <p>リードアーキテクトの<br>店舗設計施工</p>
    </div>
    <h3 class="m-60">ご提案から工事完成まで<span class="main-color">トータルで</span>おまかせ</h3>
    <p class="gray">設計と工事をワンストップで行うため、どんなデザインもできる。設計と工事をワンストップで行うため、どんなデザインもできる。設計と工事をワンストップで行うため、どんなデザインもできる。設計と工事をワンストップで行うため、どんなデザインもできる。</p>
    <ul class="flex ul-style-02 mt-60">
      <li class="txt-c">
        <div class="img-wrap">
          <img src="<?php echo $wp_url ?>/lib/images/shop/about_01.png" alt="健康住宅">
        </div>
        <div class="txt-wrap">
          <div class="mt-1 mb-1">
          <p class="gray b">窓口の一本化による</p>
          <h3>スムーズな計画</h3>
        </div>
          <p class="gray txt-l">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
        </div>
      </li>
      <li class="txt-c">
        <div class="img-wrap">
          <img src="<?php echo $wp_url ?>/lib/images/shop/about_02.png" alt="健康住宅">
        </div>
        <div class="txt-wrap">
          <div class="mt-1 mb-1">
          <p class="gray b">窓口の一本化による</p>
          <h3>コストダウン</h3>
        </div>
          <p class="gray txt-l">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
        </div>
      </li>
      <li class="txt-c">
        <div class="img-wrap">
          <img src="<?php echo $wp_url ?>/lib/images/shop/about_03.png" alt="健康住宅">
        </div>
        <div class="txt-wrap">
          <div class="mt-1 mb-1">
          <p class="gray b">窓口の一本化による</p>
          <h3>工期短縮</h3>
        </div>
          <p class="gray txt-l">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
        </div>
      </li>
    </ul>
  </div>
</section>
<?php get_template_part( 'gallery' ); ?>
<?php get_footer();
