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
      <?php
      $arg = array(
        'posts_per_page' => 5,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'gallery',
      );
      $posts = get_posts($arg);
      if ($posts): ?>
      <ul class="slider-fr01">
      <?php foreach ($posts as $post):
      $i = get_the_post_thumbnail_url(get_the_ID(), 'medium');
      $i_l = get_the_post_thumbnail_url(get_the_ID(), 'large');
      ?>
        <li>
          <img src="<?php echo $i_l; ?>" srcset="<?php echo $i_l; ?> 1x,<?php echo $i_l; ?> 2x" alt="<?php echo $t; ?>">
        </li>
      <?php endforeach; ?>
      </ul>
      <?php endif; wp_reset_postdata(); ?>
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
<section id="gallery" class="sec">
  <div class="wrap">
    <div class="txt-c ttl4">
      <h2>gallery</h2>
      <p>リードアーキテクトが<br>今までお任せいただいた施工</p>
    </div>
    <div class="">
      <ul class="list">
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
