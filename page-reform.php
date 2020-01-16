<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<?php get_template_part( 'submv-img' ); ?>

<section id="select" class="sec">
  <div class="wrap">
    <ul class="flex ul-style-01">
      <li>
        <a href="<?php echo $home ?>/health-r">
          <div class="txt-wrap">
            <p class="main-color b">01</p>
            <p class="main-color b">helth</p>
            <h2 class="m-30">健康を考えたリフォーム</h2>
          </div>
          <div class="img-wrap">
            <img src="<?php echo $wp_url ?>/lib/images/reform/01.png" alt="健康住宅">
          </div>
          <div class="link txt-r mt-1">
            <p class="main-color">READ MORE ■</p>
          </div>
        </a>
      </li>
      <li>
        <a href="<?php echo $home ?>/design-r">
          <div class="txt-wrap">
            <p class="main-color b">02</p>
            <p class="main-color b">design</p>
            <h2 class="m-30">デザインを考えたリフォーム</h2>
          </div>
          <div class="img-wrap">
            <img src="<?php echo $wp_url ?>/lib/images/reform/02.png" alt="デザイン住宅">
          </div>
          <div class="link txt-r mt-1">
            <p class="main-color">READ MORE ■</p>
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
<?php get_template_part( 'gallery' ); ?>
<?php get_footer();
