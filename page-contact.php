<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); the_post();
?>

<?php get_template_part( 'submv-imgnone' ); ?>

<section id="contact-form" class="sec">
  <div class="wrap">
    <?php echo do_shortcode('[contact-form-7 id="59" title="コンタクトフォーム 1"]'); ?>
  </div>
</section>
<?php get_footer();
