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
            <p class="main-color b">helth</p>
            <h2 class="m-30">健康住宅</h2>
            <div class="link txt-c mt-1">
              <p class="main-color">READ MORE ></p>
            </div>
          </div>
          <div class="img-wrap">
            <img src="<?php echo $wp_url ?>/lib/images/order/01.png" alt="健康住宅">
          </div>
        </a>
      </li>
      <li>
        <a href="<?php echo $home ?>/design-o">
          <div class="txt-wrap">
            <p class="main-color b">02</p>
            <p class="main-color b">design</p>
            <h2 class="m-30">デザイン住宅</h2>
            <div class="link txt-c mt-1">
              <p class="main-color">READ MORE ></p>
            </div>
          </div>
          <div class="img-wrap">
            <img src="<?php echo $wp_url ?>/lib/images/order/02.png" alt="デザイン住宅">
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
<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
<section id="sec-works" class="sec">
  <div class="wrap">
    <div class="ttl3">
      <h2>works</h2>
      <p>リードアーキテクトの<br>内覧ができるOB宅</p>
    </div>
    <?php
    $arg = array(
      'posts_per_page' => 3,
      'orderby' => 'date',
      'order' => 'DESC',
      'post_type' => 'works',
      'category' => '3,4',
    );
    $posts = get_posts($arg);
    if ($posts): ?>
    <ul class="flex m-60">
    <?php foreach ($posts as $post):
    $t = get_the_title();
    $i = get_the_post_thumbnail_url(get_the_ID(), 'medium');
    $i_l = get_the_post_thumbnail_url(get_the_ID(), 'large');
    $url = get_permalink();
    $cats = get_the_category();
    $tag = get_the_term_list($post->ID,'post_tag');
    ?>
      <li>
        <a href="<?php echo $url; ?>">
          <div class="img-wrap">
            <img src="<?php echo $i_l; ?>" srcset="<?php echo $i_l; ?> 1x,<?php echo $i_l; ?> 2x" alt="<?php echo $t; ?>">
          </div>
        </a>
        <a href="<?php echo $url; ?>">
          <div class="txt-wrap">
            <p class="gray"><?php echo $tag; ?></p>
            <h3><?php echo $t; ?></h3>
            <div class="link flex">
              <p class="gray">詳しく見る</p>
              <p class="main-color">READ MORE ■</p>
            </div>
          </div>
        </a>
      </li>
    <?php endforeach; ?>
    </ul>
    <?php endif; wp_reset_postdata(); ?>
    <div class="btn mt-1">
      <a href="<?php echo $home;?>/gallery/order">一覧をみる</a>
    </div>
  </div>
</section>

<?php get_footer();
