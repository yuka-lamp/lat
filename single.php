<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header();
if (have_posts()): while (have_posts()): the_post();
$arr = get_the_tags();
$t = get_the_title();
$i = get_the_post_thumbnail_url(get_the_ID(), 'medium');
$i_l = get_the_post_thumbnail_url(get_the_ID(), 'large');
$categories = get_the_terms($post_id, 'custom_category');
?>

<section id="post" class="sec">
<div class="wrap">
<div class="flex">
<?php if ($i != ''): ?>
<div class="thumbnail">
<img src="<?php echo $i; ?>" alt="<?php echo $t; ?>">
</div>
<?php endif; ?>
<div class="inner">
<time datetime="<?php the_time('Y-m-d'); ?>">&nbsp;<?php the_time('Y.m.d'); ?></time>
<?php
$args_taxonomies = [
'after' => '',
'template' => '%s: %l ',
];
?>
<p class="cat"><?php the_taxonomies($args_taxonomies); ?></p>
<h1><?php echo $t; ?></h1>
</div>
</div>
<div class="post-inner mt-60">
<?php the_content(); ?>
</div>
</div>
</section>
<?php
endwhile;
endif;
get_footer();
