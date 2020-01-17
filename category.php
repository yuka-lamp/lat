<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$cat_info = get_category( $cat );
get_header(); ?>

<section id="submv_img" class="mv">
    <h2 class=""><?php echo wp_specialchars( $cat_info->name ); ?></h2>
</section>

<section id="works" class="sec oblique">
<div class="wrap cat">
  <p class="b">カテゴリ一覧</p>
  <ul>
    <?php wp_list_categories('title_li=&exclude=1'); ?>
  </ul>
</div>
<div class="wrap">
  <ul class="grid">
    <?php if (have_posts()): while (have_posts()):
    the_post();
    $t = get_the_title();
    $i = get_the_post_thumbnail_url(get_the_ID(), 'medium');
    $i_l = get_the_post_thumbnail_url(get_the_ID(), 'large');
    $cats = get_the_category(); ?>
      <li>
        <a href="<?php the_permalink(); ?>">
        <div class="img-wrap">
          <img class="" src="<?php echo $i; ?>" alt="<?php echo $t; ?>">
        </div>
        <div class="txt-wrap">
          <div class="cats gray">
          <?php foreach ($cats as $category) {
              echo '<span>'.$category->name.'</span>';
          } ?>
          </div>
        <h3><?php echo $t; ?></h3>
        </div>
      </a>
      </li>
    <?php endwhile; endif; ?>
  </ul>
<?php include_once('pagenavi.php'); ?>
</div>
</section>


<?php get_footer();
