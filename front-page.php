<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section id="about" class="sec">
  <div class="wrap layout">
    <div class="txt-wrap">
      <h2 class="ttl2">お客様と、<br><span>暮らしのデザイン</span>を<br class="sp-only">創る。</h2>
      <p>リードアーキテクトは設計と工事をワンストップで担当するため、お客様にとって最適な建築のご提案をフルオーダーで行うことができます。</p>
    </div>
    <div class="img-wrap">
      <ul class="slider-fr01">
        <li><img src="<?php echo $wp_url ?>/lib/images/front/slide/01.png" alt="施工様子01"></li>
        <li><img src="<?php echo $wp_url ?>/lib/images/front/slide/02.png" alt="施工様子02"></li>
        <li><img src="<?php echo $wp_url ?>/lib/images/front/slide/03.png" alt="施工様子03"></li>
        <li><img src="<?php echo $wp_url ?>/lib/images/front/slide/04.png" alt="施工様子04"></li>
        <li><img src="<?php echo $wp_url ?>/lib/images/front/slide/05.png" alt="施工様子05"></li>
      </ul>
    </div>
  </div>
</section>
<section id="service" class="sec">
  <div class="ttl3">
    <h2>service</h2>
    <p>リードアーキテクトが手掛ける<br>手掛ける建設業</p>
  </div>
  <ul class="flex m-60">
    <li>
      <a href="<?php echo $home ?>/order">
      <div class="img-wrap">
        <img src="<?php echo $wp_url ?>/lib/images/front/service01.png" alt="">
      </div>
      <div class="txt-wrap">
        <div>
        <p class="main-color b">01</p>
        <h3>注文建築</h3>
        </div>
        <div class="link flex">
          <p class="gray">詳しく見る</p>
          <p class="main-color" href="<?php echo $home ?>/order">READ MORE ■</p>
        </div>
      </div>
      </a>
    </li>
    <li>
      <a href="<?php echo $home ?>/reform">
      <div class="img-wrap">
        <img src="<?php echo $wp_url ?>/lib/images/front/service02.png" alt="">
      </div>
      <div class="txt-wrap">
        <div class="">
          <p class="main-color b">02</p>
          <h3>リフォーム</h3>
        </div>
        <div class="link flex">
          <p class="gray">詳しく見る</p>
          <p class="main-color" href="<?php echo $home ?>/order">READ MORE ■</p>
        </div>
      </div>
      </a>
    </li>
    <li>
      <a href="<?php echo $home ?>/shop">
      <div class="img-wrap">
        <img src="<?php echo $wp_url ?>/lib/images/front/service03.png" alt="">
      </div>
      <div class="txt-wrap">
        <div>
        <p class="main-color b">03</p>
        <h3>店舗建築</h3>
        </div>
        <div class="link flex">
          <p class="gray">詳しく見る</p>
          <p class="main-color" href="<?php echo $home ?>/order">READ MORE ■</p>
        </div>
      </div>
      </a>
    </li>
    <li>
      <a href="<?php echo $home ?>/large">
      <div class="img-wrap">
        <img src="<?php echo $wp_url ?>/lib/images/front/service04.png" alt="">
      </div>
      <div class="txt-wrap">
        <div>
        <p class="main-color b">04</p>
        <h3>大型建築</h3>
        </div>
        <div class="link flex">
          <p class="gray">詳しく見る</p>
          <p class="main-color" href="<?php echo $home ?>/order">READ MORE ■</p>
        </div>
      </div>
      </a>
    </li>
  </ul>
</section>
<section id="fr-gallery" class="sec mb-60">
  <div class="wrap">
    <div class="txt-c ttl4">
      <h2>gallery</h2>
      <p>リードアーキテクトが<br>今までお任せいただいた施工</p>
    </div>
    <div class="">
      <ul class="">
        <li><img src="<?php echo $wp_url ?>/lib/images/front/gallery/01.png" alt="スライドショー画像"></li>
        <li><img src="<?php echo $wp_url ?>/lib/images/front/gallery/02.png" alt="スライドショー画像"></li>
        <li><img src="<?php echo $wp_url ?>/lib/images/front/gallery/03.png" alt="スライドショー画像"></li>
        <li><img src="<?php echo $wp_url ?>/lib/images/front/gallery/04.png" alt="スライドショー画像"></li>
        <li><img src="<?php echo $wp_url ?>/lib/images/front/gallery/05.png" alt="スライドショー画像"></li>
        <li><img src="<?php echo $wp_url ?>/lib/images/front/gallery/06.png" alt="スライドショー画像"></li>
        <li><img src="<?php echo $wp_url ?>/lib/images/front/gallery/07.png" alt="スライドショー画像"></li>
      </ul>
      <div class="btn mt-1">
        <a href="<?php echo $home;?>/photo">一覧を見る</a>
      </div>
  </div>
  </div>

</section>
<?php get_footer();
