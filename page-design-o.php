<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<?php get_template_part( 'submv-img' ); ?>

<section id="slide" class="sec">
  <ul class="slider-03">
    <li><img src="<?php echo $wp_url ?>/lib/images/design-o/slide/01.png" alt="スライドショー画像"></li>
    <li><img src="<?php echo $wp_url ?>/lib/images/design-o/slide/01.png" alt="スライドショー画像"></li>
  </ul>
</section>

<section id="about-0" class="sec">
  <div class="wrap">
    <div class="ttl3">
      <h2>about</h2>
      <p>リードアーキテクトの<br>デザイン住宅の特徴</p>
    </div>
    <h3 class="m-60">設計と工事を<span class="main-color">ワンストップ</span>で</h3>
    <p class="gray">設計と工事をワンストップで行うため、どんなデザインもできる。設計と工事をワンストップで行うため、どんなデザインもできる。設計と工事をワンストップで行うため、どんなデザインもできる。設計と工事をワンストップで行うため、どんなデザインもできる。</p>
    <ul class="flex ul-style-02 mt-60">
      <li class="txt-c">
        <div class="img-wrap">
          <img src="<?php echo $wp_url ?>/lib/images/design-o/about_01.png" alt="健康住宅">
        </div>
        <div class="txt-wrap">
          <h3 class="m-30">フルオーダーで<br>何でもできる</h3>
          <p class="gray txt-l">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
        </div>
      </li>
      <li class="txt-c">
        <div class="img-wrap">
          <img src="<?php echo $wp_url ?>/lib/images/design-o/about_02.png" alt="健康住宅">
        </div>
        <div class="txt-wrap">
          <h3 class="m-30">収納インテリアを考えた<br>トータル設計</h3>
          <p class="gray txt-l">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
        </div>
      </li>
      <li class="txt-c">
        <div class="img-wrap">
          <img src="<?php echo $wp_url ?>/lib/images/design-o/about_03.png" alt="健康住宅">
        </div>
        <div class="txt-wrap">
          <h3 class="m-30">鉄筋コンクリート<br>木造にも対応</h3>
          <p class="gray txt-l">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
        </div>
      </li>
    </ul>
  </div>
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
      'category_name' => 'order design',
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
