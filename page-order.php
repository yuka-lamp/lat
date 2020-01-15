<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<?php get_template_part( 'submv-img' ); ?>

<section class="sec">
  <div class="wrap">
    <ul class="flex">
      <li class="txt-c">
        <p class="main-color b">01<br>helth</p>
        <h2>健康住宅</h2>
        <div class="img-wrap">
          <img src="<?php echo $wp_url ?>/lib/images/front/order/01.png" alt="">
        </div>
      </li>
      <li class="txt-c">
        <p class="main-color b">02<br>design</p>
        <h2>デザイン住宅</h2>
        <div class="img-wrap">
          <img src="<?php echo $wp_url ?>/lib/images/front/order/02.png" alt="">
        </div>
      </li>
    </ul>
  </div>
</section>

<section class="sec">
  <div class="wrap">
    <div class="ttl3">
      <h2>gallery</h2>
      <p>内覧ができるOB宅</p>
    </div>
    <?php
    $arg = array(
      'posts_per_page' => 3,
      'orderby' => 'date',
      'order' => 'DESC',
      'category_name' => 'order',
    );
    $posts = get_posts($arg);
    if ($posts): ?>
    <ul class="">
    <?php foreach ($posts as $post):
    $t = get_the_title();
    $i = get_the_post_thumbnail_url(get_the_ID(), 'medium');
    $i_l = get_the_post_thumbnail_url(get_the_ID(), 'large');
    $c = $post->post_content; // apply_filter( 'the_content', $s->post_content );
    $url = get_permalink();
    $cats = get_the_category(); ?>
      <li>
        <div class="img-wrap">
          <a href="<?php echo $c; ?>" target="_blank">
            <img src="<?php echo $i_l; ?>" srcset="<?php echo $i_l; ?> 1x,<?php echo $i_l; ?> 2x" alt="<?php echo $t; ?>">
          </a>
        </div>
        <div class="txt-wrap">
          <a href="<?php echo $url; ?>" target="_blank">
            <p><?php echo $t; ?></p>
            <div class="link">
              <p class="main-color" href="<?php echo $home ?>/order">READ MORE ■</p>
            </div>
          </a>
        </div>
      </li>
    <?php endforeach; ?>
    </ul>
    <?php endif; wp_reset_postdata(); ?>
  </div>
</section>
<?php get_footer();
