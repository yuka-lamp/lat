<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$slug = $post->post_name;
?>
<section id="submv_imgnone" class="mv list">
  <div class="wrap">
    <h2 class=""><?php echo get_the_title(); ?></h2>
    <p class="gray ml-1"><?php echo attribute_escape($post->post_name); ?></p>
  </div>
</section>
