<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section id="about" class="sec">
  <div class="wrap layout-01">
    <h2 class="ttl2">お客様と、<br><span>暮らしのデザイン</span>を創る。</h2>
    <div class="under flex">
      <p>リードアーキテクトは設計と工事をワンストップで担当するため、お客様にとって最適な建築のご提案をフルオーダーで行うことができます。</p>
      <div class="img-wrap">
        <img src="<?php echo $wp_url ?>/lib/images/front/slide/photo01.png" alt="">
      </div>
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
      <a href="<?php echo $home ?>">
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
      <a href="<?php echo $home ?>">
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
      <a href="<?php echo $home ?>">
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
      <a href="<?php echo $home ?>">
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
<section id="service" class="sec">
  <div class="">
    <div class="ttl3">
      <h2>gallery</h2>
    </div>
    <p>リードアーキテクトが<br>今までお任せいただいた施工</p>
  </div>

</section>
<?php get_footer();
