<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
</main>
<!-- メインコンテンツ終了 -->

<!-- フッター -->
<footer class="py-4 bg-dark text-white">
  <div class="container">
    <small class="d-block">©2019 .inc</small>
  </div>
</footer>
<!-- フッター終了 -->
<?php wp_footer(); ?>
</body>
</html>