<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section id="submv_imgnone" class="mv list">
  <div class="wrap">
    <h2 class="">内覧会</h2>
    <p class="gray ml-1">open house</p>
  </div>
</section>

<section id="news" class="sec oblique ">
<div class="wrap">
  <ul class="list">
    <?php if (have_posts()): while (have_posts()):
    the_post();
    $t = get_the_title();
    if (mb_strlen($t, 'UTF-8') > 28) {
        $t = mb_substr($t, 0, 28, 'UTF-8').'…';
    }
    $i = get_the_post_thumbnail_url(get_the_ID(), 'large');
    $cats = get_the_category();
    $tag = get_the_term_list(get_the_ID(),'post_tag');
    ?>
      <li>
        <a href="<?php the_permalink(); ?>" class="">
        <p class="tag"><?php echo $tag; ?></p>
        <div class="img-wrap">
          <img class="" src="<?php echo $i; ?>" alt="<?php echo $t; ?>">
        </div>
        <div class="txt-wrap">
        <h3><?php echo $t; ?></h3>
        <p class="gray"><?php the_date(); ?></p>
        </div>
      </a>
      </li>
    <?php endwhile; endif; ?>
  </ul>
<?php get_template_part('pagenav'); ?>
</div>
</section>


<?php get_footer();
