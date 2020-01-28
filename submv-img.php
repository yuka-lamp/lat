<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$page = get_post( get_the_ID() );
$slug = $page->post_name;
?>
<section id="submv_img" class="mv <?php echo $slug; ?>">
    <h2 class=""><?php echo get_the_title(); ?></h2>
</section>
<?php get_template_part( 'contact' ); ?>
