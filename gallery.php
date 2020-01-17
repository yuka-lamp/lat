<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
<section id="gallery" class="sec">
  <div class="wrap">
    <div class="ttl3">
      <h2>gallery</h2>
      <p>リードアーキテクトの<br>内覧ができるOB宅</p>
    </div>
    <?php
    $arg = array(
      'posts_per_page' => 3,
      'orderby' => 'date',
      'order' => 'DESC',
      'post_type' => 'gallery',
      'category_name' => 'order',
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
