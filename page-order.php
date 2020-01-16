<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<?php get_template_part( 'submv-img' ); ?>

<section id="select" class="sec">
  <div class="wrap">
    <ul class="flex">
      <li class="txt-c">
        <a href="<?php echo $home ?>/health-o">
          <div class="txt-wrap">
            <p class="main-color b">01</p>
            <p class="main-color b">helth</p>
            <h2 class="m-30">健康住宅</h2>
          </div>
          <div class="img-wrap">
            <img src="<?php echo $wp_url ?>/lib/images/order/01.png" alt="健康住宅">
          </div>
          <div class="link txt-r mt-1">
            <p class="main-color">READ MORE ■</p>
          </div>
        </a>
      </li>
      <li class="txt-c">
        <a href="<?php echo $home ?>/design-o">
          <div class="txt-wrap">
            <p class="main-color b">02</p>
            <p class="main-color b">design</p>
            <h2 class="m-30">デザイン住宅</h2>
          </div>
          <div class="img-wrap">
            <img src="<?php echo $wp_url ?>/lib/images/order/02.png" alt="デザイン住宅">
          </div>
          <div class="link txt-r mt-1">
            <p class="main-color">READ MORE ■</p>
          </div>
        </a>
      </li>
    </ul>
  </div>
</section>
<?php get_template_part( 'gallery' ); ?>
<?php get_footer();
