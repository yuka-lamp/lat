<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<?php get_template_part( 'submv-img' ); ?>

<section id="" class="sec">
  <div class="wrap layout-01">
    <h2 class="ttl2">リフォームで、<br><span>暮らし</span>を見直そう。</h2>
    <div class="under flex">
      <p>「国が認めた基準だから安心!」「大手メーカーだから間違いない!」
        <br>家を建てる時も同様、誰しもがそんな常識を信じているものです。
        <br>しかし、2003年以降シックハウスが社会問題化し、国が「建材から出るホルムアルデヒド、クロルピリホス量を制限するという法律制定」を行った後も、アレルギー症状をはじめとするシックハウス患者は増加傾向にあります。
        <br>
        <br>事実、建築業者のほとんどが、日本の住宅の短寿命の原因やシックハウスという事実を知りながらも国の定めた「最低限の基準」に則った家づくりをしております。</p>
      <div class="img-wrap">
        <img src="<?php echo $wp_url ?>/lib/images/health-r/about.png" alt="健康住宅で暮らしを変えよう。">
      </div>
    </div>
  </div>
</section>

<section id="health-r" class="sec">
  <div class="wrap">
    <div class="ttl3">
      <h2>service</h2>
      <p>リードアーキテクトの<br>得意分野</p>
    </div>
    <h3 class="m-60">暮らしの<span class="main-color">お悩み</span>を何でもご相談ください。</h3>
    <p class="gray mb-60">リード・アーキテクトは一級建築士事務所としての機能もございます。そのため、難解な法規制や細かい構造建築知識等をすべて持ち合わせておりますので、どのような案件にも的確に対応いたします。他社で不可能と言われた案件も是非ご相談くださいませ。</p>
    <ul class="flex ul-style-01 slider-04">
      <li>
        <div class="txt-wrap">
          <p class="main-color b">01</p>
          <h2 class="m-30">古民家再生リフォーム</h2>
          <p class="gray txt-l">内部結露の発生を抑えることで、建物の耐久性を高め、住宅の長寿命化を実現しております。アトピーの原因とされるカビ・ダニを軽減し、健康的な住まいにします。</p>
        </div>
        <div class="img-wrap">
          <img src="<?php echo $wp_url ?>/lib/images/health-r/slide/01.png" alt="健康住宅">
        </div>
      </li>
      <li>
        <div class="txt-wrap">
          <p class="main-color b">02</p>
          <h2 class="m-30">耐震リフォーム</h2>
          <p class="gray txt-l">内部結露の発生を抑えることで、建物の耐久性を高め、住宅の長寿命化を実現しております。アトピーの原因とされるカビ・ダニを軽減し、健康的な住まいにします。</p>
        </div>
        <div class="img-wrap">
          <img src="<?php echo $wp_url ?>/lib/images/health-r/slide/02.png" alt="健康住宅">
        </div>
      </li>
      <li>
        <div class="txt-wrap">
          <p class="main-color b">03</p>
          <h2 class="m-30">全面リフォーム</h2>
          <p class="gray txt-l">内部結露の発生を抑えることで、建物の耐久性を高め、住宅の長寿命化を実現しております。アトピーの原因とされるカビ・ダニを軽減し、健康的な住まいにします。</p>
        </div>
        <div class="img-wrap">
          <img src="<?php echo $wp_url ?>/lib/images/health-r/slide/03.png" alt="健康住宅">
        </div>
      </li>
      <li>
        <div class="txt-wrap">
          <p class="main-color b">04</p>
          <h2 class="m-30">古民家再生リフォーム</h2>
          <p class="gray txt-l">内部結露の発生を抑えることで、建物の耐久性を高め、住宅の長寿命化を実現しております。アトピーの原因とされるカビ・ダニを軽減し、健康的な住まいにします。</p>
        </div>
        <div class="img-wrap">
          <img src="<?php echo $wp_url ?>/lib/images/health-r/slide/04.png" alt="健康住宅">
        </div>
      </li>
      <li>
        <div class="txt-wrap">
          <p class="main-color b">05</p>
          <h2 class="m-30">耐震リフォーム</h2>
          <p class="gray txt-l">内部結露の発生を抑えることで、建物の耐久性を高め、住宅の長寿命化を実現しております。アトピーの原因とされるカビ・ダニを軽減し、健康的な住まいにします。</p>
        </div>
        <div class="img-wrap">
          <img src="<?php echo $wp_url ?>/lib/images/health-r/slide/05.png" alt="健康住宅">
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
      'category_name' => 'reform health',
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
