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
        'post_type' => 'now',
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
      <div class="img-wrap">
        <img src="<?php echo $wp_url ?>/lib/images/front/service01.png" alt="">
      </div>
      <div class="txt-wrap">
        <div>
        <p class="main-color b">01</p>
        <h3>注文建築</h3>
        </div>
        <div class="flex">
          <a href="<?php echo $home ?>/health-o">
            <p class="">健康住宅</p>
          </a>
        </div>
        <div class="flex">
          <a href="<?php echo $home ?>/design-o">
            <p class="">デザイン住宅</p>
          </a>
        </div>
      </div>
    </li>
    <li>
      <div class="img-wrap">
        <img src="<?php echo $wp_url ?>/lib/images/front/service02.png" alt="">
      </div>
      <div class="txt-wrap">
        <div class="">
          <p class="main-color b">02</p>
          <h3>リフォーム</h3>
        </div>
        <div class="flex">
          <a href="<?php echo $home ?>/health-r">
            <p class="">健康住宅</p>
          </a>
        </div>
        <div class="flex">
          <a href="<?php echo $home ?>/design-r">
            <p class="">デザイン住宅</p>
          </a>
        </div>
      </div>
    </li>
    <li>
      <div class="img-wrap">
        <img src="<?php echo $wp_url ?>/lib/images/front/service03.png" alt="">
      </div>
      <div class="txt-wrap">
        <div>
        <p class="main-color b">03</p>
        <h3>店舗建築</h3>
        </div>
        <div class="flex">
          <a href="<?php echo $home ?>/shop">
            <p class="">詳しく見る</p>
          </a>
        </div>
      </div>
    </li>
    <li>
      <div class="img-wrap">
        <img src="<?php echo $wp_url ?>/lib/images/front/service04.png" alt="">
      </div>
      <div class="txt-wrap">
        <div>
        <p class="main-color b">04</p>
        <h3>その他</h3>
        </div>
        <div class="flex">
          <a href="<?php echo $home ?>/revenue">
            <p class="">収益物件</p>
          </a>
        </div>
        <div class="flex">
          <a href="<?php echo $home ?>/special">
            <p class="">特殊建築</p>
          </a>
        </div>
        <div class="flex">
          <a href="<?php echo $home ?>/large">
            <p class="">大型建築</p>
          </a>
        </div>
        <div class="flex">
          <a href="<?php echo $home ?>/reno">
            <p class="">リノベーション</p>
          </a>
        </div>
      </div>
    </li>
  </ul>
</section>


<section id="fr-gallery" class="sec">
  <div class="flex">
    <div class="ttl3">
      <h2>gallery</h2>
      <p>リードアーキテクトが<br>今までお任せいただいた施工</p>
      <div class="btn mt-1">
        <a href="<?php echo $home;?>/gallery">ギャラリーページへ</a>
      </div>
    </div>
    <?php
    $arg = array(
      'posts_per_page' => 5,
      'orderby' => 'date',
      'order' => 'DESC',
      'post_type' => 'gallery',
    );
    $posts = get_posts($arg);
    if ($posts): ?>
    <div class="slide">
    <ul class="slider-fr02">
    <?php foreach ($posts as $post):
    $i = get_the_post_thumbnail_url(get_the_ID(), 'medium');
    ?>
    <li><img src="<?php echo $i_l; ?>" alt="<?php echo $t; ?>"></li>
    <?php endforeach; ?>
    </ul>
    <?php endif; wp_reset_postdata(); ?>
    </div>
</section>

</section>
<?php get_footer();
