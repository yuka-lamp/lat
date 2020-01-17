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

<section id="" class="sec">
  <div class="wrap layout-01">
    <h2 class="ttl2">あなたの要望を叶える<br><span>デザインの追求</span></h2>
    <div class="under flex">
      <p>リード・アーキテクトは、デザインの追求を怠りません。お客様の夢やこだわり、ライフスタイルを空間に替えることで、すべてのご家族様のご要望にお応えしております。<br>リード・アーキテクトは、デザインの追求を怠りません。お客様の夢やこだわり、ライフスタイルを空間に替えることで、すべてのご家族様のご要望にお応えしております。<br><br>リード・アーキテクトは、デザインの追求を怠りません。お客様の夢やこだわり、ライフスタイルを空間に替えることで、すべてのご家族様のご要望にお応えしております。</p>
      <div class="img-wrap">
        <img src="<?php echo $wp_url ?>/lib/images/design-r/about.png" alt="健康住宅で暮らしを変えよう。">
      </div>
    </div>
  </div>
</section>

<?php get_template_part( 'gallery' ); ?>
<?php get_footer();
