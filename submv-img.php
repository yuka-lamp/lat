<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
<section id="submv_img" class="mv">
    <h2 class=""><?php echo get_the_title(); ?></h2>
</section>
<?php get_template_part( 'contact' ); ?>
