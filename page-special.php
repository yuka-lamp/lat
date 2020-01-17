<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<?php get_template_part( 'submv-img' ); ?>

<section id="special" class="sec">
  <div class="wrap">
    <div class="flex mb-60">
      <div class="txt-wrap">
        <h2 class="ttl2">健康住宅で、<br><span>暮らし</span>を変えよう。</h2>
        <p>リード・アーキテクトは数多くの特殊建築物の設計・施工を行っています。特殊建築物とは、建築基準法第二条二項で定められた学校、体育館、病院、集会場、ダンスホール、共同住宅、工場、倉庫などのことです。<br>リード・アーキテクトではこのすべての建物に対応しております。<br>また特殊建築物の改修や設備リニューアル等の改装工事実績も豊富です。リード・アーキテクトは数多くの特殊建築物の設計・施工を行っています。</p>
      </div>
      <div class="img-wrap">
        <img src="<?php echo $wp_url ?>/lib/images/special/about.png" alt="健康住宅で暮らしを変えよう。">
      </div>
    </div>
  </div>
  <div class="mt-60">
    <div class="layout-02 wrap">
      <h3>有資格者に調査点検はおまかせ</h3>
      <p class="txt-l mb-60"> 一定規模以上の共同住宅や店舗等、特殊建物をお持ちの方は各自治体より3年に1度、有資格者に建築物の調査・検査をさせ、結果を特定行政庁に報告しなければなりません。<br>報告書の提出は自治体によって異なります。<br>このため、時期や内容の詳細についてはその地域の情報を確認することが必要です。<br>リード・アーキテクトでは、予備段階から調査・検査の実施、報告作成まですべての業務を行っております。</p>
    </div>
  </div>
</section>
<?php get_template_part( 'gallery' ); ?>
<?php get_footer();
