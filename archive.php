<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section id="submv_img" class="mv list">
    <h2 class="">事例紹介</h2>
</section>

<section id="works" class="sec oblique">
<div class="wrap cat">
  <p class="b">カテゴリ一覧</p>
  <ul>
    <li><a href="<?php echo $home ?>/gallery">全て</a></li>
    <?php wp_list_categories('title_li=&exclude=1'); ?>
  </ul>
</div>
<div class="wrap">
  <ul class="list">
    <?php if (have_posts()): while (have_posts()):
    the_post();
    $t = get_the_title();
    if (mb_strlen($t, 'UTF-8') > 28) {
        $t = mb_substr($t, 0, 28, 'UTF-8').'…';
    }
    $i = get_the_post_thumbnail_url(get_the_ID(), 'large');
    $cats = get_the_category(); ?>
      <li>
        <a href="<?php the_permalink(); ?>" class="flex">
        <div class="img-wrap">
          <img class="" src="<?php echo $i; ?>" alt="<?php echo $t; ?>">
        </div>
        <div class="txt-wrap">
          <p>
            <?php foreach ($cats as $category) {
                echo '<span>'.$category->name.'</span>';
            } ?>
            <span><?php echo get_the_date(); ?></span>
          </p>
        <h3><?php echo $t; ?></h3>
        <div class="content"><?php the_content(); ?></div>
        </div>
      </a>
      </li>
    <?php endwhile; endif; ?>
  </ul>
<?php get_template_part('pagenav'); ?>
</div>
</section>


<?php get_footer();
