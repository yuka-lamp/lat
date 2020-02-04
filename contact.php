<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
<section id="contact" class="">
  <div class="wrap txt-c p-30">
    <p class="main-color b">CONTACT</p>
    <h2 class="">まずはお気軽に<br class="sp-only">ご相談ください</h2>
    <div class="btn mt-1">
      <a href="tel:0756932880"><i class="fas fa-phone mr-1"></i>電話で相談する</a>
      <a href="<?php echo $home;?>/contact"><i class="far fa-envelope mr-1"></i>メールで相談する</a>
    </div>
  </div>
</section>
