<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section id="submv_imgnone" class="mv list">
  <div class="wrap">
    <h2 class="">事例紹介</h2>
    <p class="gray ml-1">WORKS</p>
  </div>
</section>

<section id="works" class="sec oblique ">
<div class="cat">
  <div class="wrap">
    <p class="b mb-1">カテゴリ一覧</p>
    <ul>
      <li><a href="<?php echo $home ?>/works">全て</a></li>
      <?php wp_list_categories('title_li=&exclude=1&taxonomy=work_cat'); ?>
    </ul>
  </div>
</div>
<div class="wrap">
  <div class="list-ttl flex">
    <h2 class="ttl3">WORKS<span>事例一覧</span></h2>
    <?php
      $custom_post_name = get_post_type_object(get_post_type())->name; // カスタム投稿タイプのスラッグを表示
      $count_post = wp_count_posts( $custom_post_name , 'readable' ); // カスタム投稿タイプのスラッグを指定
      echo '<p>'.$count_post->publish.'件</p>'; // 公開済の投稿数を表示
    ?>
  </div>
  <ul class="list">
    <?php if (have_posts()): while (have_posts()):
    the_post();
    $t = get_the_title();
    if (mb_strlen($t, 'UTF-8') > 28) {
        $t = mb_substr($t, 0, 28, 'UTF-8').'…';
    }
    $i = get_the_post_thumbnail_url(get_the_ID(), 'large');
    $cats = get_the_terms(get_the_ID(), 'work_cat');
    $tag = get_the_term_list(get_the_ID(),'post_tag');
    ?>
      <li>
        <p class="tag"><?php echo $tag; ?></p>
        <a href="<?php the_permalink(); ?>" class="">
          <div class="img-wrap">
            <img class="" src="<?php echo $i; ?>" alt="<?php echo $t; ?>">
          </div>
        </a>
        <a href="<?php the_permalink(); ?>" class="">
          <div class="txt-wrap">
          <h3><?php echo $t; ?></h3>
          <p>
            <?php foreach ($cats as $category) {
                echo '<span>by '.$category->name.'</span>';
            } ?>
          </p>
          </div>
        </a>
      </li>
    <?php endwhile; endif; ?>
  </ul>
<?php get_template_part('pagenav'); ?>
</div>
</section>


<?php get_footer();
