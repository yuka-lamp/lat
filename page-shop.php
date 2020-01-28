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
      <p>ご提案から工事完成まで<br>トータルでおまかせ</p>
    </div>
    <h3 class="m-60">ご提案から工事完成まで<span class="main-color">トータルで</span>おまかせ</h3>
    <p class="gray">リードアーキテクトでは設計と工事をワンストップで行うことが可能です。
      <br>そのため、お客様のニーズや店舗に合わせて最適なデザインをご提案することができ、多くのお客様にご満足頂いております。</p>
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
          <p class="gray txt-l">窓口を一本化することにより、よりスムーズに計画をすすめることが可能となっています。</p>
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
          <p class="gray txt-l">お客様のやり取りにおいて、余計な過程を省くことが可能な為、コストダウンにも繋がっています。</p>
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
          <p class="gray txt-l">設計から工事までがワンストップの為、工期の短縮も実現しております。</p>
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
      'category_name' => 'shop',
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
