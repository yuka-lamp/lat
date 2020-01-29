<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<?php get_template_part( 'submv-img' ); ?>

<section id="select" class="sec">
  <div class="wrap">
    <ul class="flex ul-style-01">
      <li>
        <a href="<?php echo $home ?>/health-o">
          <div class="txt-wrap">
            <p class="main-color b">01</p>
            <p class="main-color b">revenue</p>
            <h2 class="m-30">収益物件</h2>
            <div class="link txt-c mt-1">
              <p class="main-color">READ MORE ></p>
            </div>
          </div>
          <div class="img-wrap">
            <img src="<?php echo $wp_url ?>/lib/images/other/01.png" alt="収益物件">
          </div>
        </a>
      </li>
      <li>
        <a href="<?php echo $home ?>/special">
          <div class="txt-wrap">
            <p class="main-color b">02</p>
            <p class="main-color b">special</p>
            <h2 class="m-30">特殊建築</h2>
            <div class="link txt-c mt-1">
              <p class="main-color">READ MORE ></p>
            </div>
          </div>
          <div class="img-wrap">
            <img src="<?php echo $wp_url ?>/lib/images/other/02.png" alt="特殊建築">
          </div>
        </a>
      </li>
    </ul>
    <ul class="flex ul-style-01">
      <li>
        <a href="<?php echo $home ?>/health-o">
          <div class="txt-wrap">
            <p class="main-color b">02</p>
            <p class="main-color b">large</p>
            <h2 class="m-30">大型建築</h2>
            <div class="link txt-c mt-1">
              <p class="main-color">READ MORE ></p>
            </div>
          </div>
          <div class="img-wrap">
            <img src="<?php echo $wp_url ?>/lib/images/other/03.png" alt="大型建築">
          </div>
        </a>
      </li>
      <li>
        <a href="<?php echo $home ?>/reno">
          <div class="txt-wrap">
            <p class="main-color b">03</p>
            <p class="main-color b">renovation</p>
            <h2 class="m-30">リノベーション</h2>
            <div class="link txt-c mt-1">
              <p class="main-color">READ MORE ></p>
            </div>
          </div>
          <div class="img-wrap">
            <img src="<?php echo $wp_url ?>/lib/images/other/04.png" alt="リノベーション">
          </div>
        </a>
      </li>
    </ul>
  </div>
</section>
<section id="slide" class="sec">
  <ul class="slider">
    <li><img src="<?php echo $wp_url ?>/lib/images/order/slide/01.png" alt="スライドショー画像"></li>
    <li><img src="<?php echo $wp_url ?>/lib/images/order/slide/02.png" alt="スライドショー画像"></li>
    <li><img src="<?php echo $wp_url ?>/lib/images/order/slide/03.png" alt="スライドショー画像"></li>
    <li><img src="<?php echo $wp_url ?>/lib/images/order/slide/04.png" alt="スライドショー画像"></li>
    <li><img src="<?php echo $wp_url ?>/lib/images/order/slide/05.png" alt="スライドショー画像"></li>
    <li><img src="<?php echo $wp_url ?>/lib/images/order/slide/06.png" alt="スライドショー画像"></li>
    <li><img src="<?php echo $wp_url ?>/lib/images/order/slide/07.png" alt="スライドショー画像"></li>
  </ul>
</section>

<?php get_footer();
