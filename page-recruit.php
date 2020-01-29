<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<?php get_template_part( 'submv-imgnone' ); ?>

<section id="recruit" class="sec">
  <div class="wrap">
    <div class="flex">
      <div class="left">
        <h2>設計士・設計アシスタント募集</h2>
        <p>リード・アーキテクトでは業務拡張に伴って、設計・現場監督・設計アシスタントを募集しています。弊社では、長持ちしない建材や健康に悪い建材は排除して人に優しい自然素材住宅を手掛けています。<br>単に商品としての家を建てるのではなく、ご家族様の健康と快適な暮らしを提供することを目標に活動しております。<br>是非私たちと共に頑張っていただける方をお待ちしております。<br>※詳しくはリード・アーキテクトまでお気軽にお問い合わせくださいませ。</p>
        <div class="btn mt-2">
          <a href="<?php echo $home; ?>/contact">問い合わせる</a>
        </div>
      </div>
      <div class="right">
        <div class="">
          <h3>仕事内容</h3>
          <p><span class="main-color">■</span>集合住宅・個人住宅・商業施設などの建築設計
             <br><span class="main-color">■</span>現場監督
             <br><span class="main-color">■</span>インテリアのデザイン設計監理</p>
        </div>
        <div class="">
          <h3>応募資格</h3>
          <p><span class="main-color">■</span>建築・インテリア系の短大卒業以上
             <br><span class="main-color">■</span>建築士資格所有者</p>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer();
