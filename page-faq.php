<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<?php get_template_part( 'submv-imgnone' ); ?>

<section id="faq" class="sec">
  <div class="wrap">
    <table>
      <dl class="ac">
        <dt>
        <h3>リード・アーキテクトはどんな家づくりをしているのですか?</h3>
        </dt>
        <dd>
        <p>リード・アーキテクトの家は長持ちしない建材や健康に悪影響を及ぼす建材、資材を徹底的に排除した、住む人が健康になる家づくりをしています。<br>0宣言の家ともよばれるこの健康住宅は、多くの医師も参加している「住医学研究会」とも密接に連携し、嘘のない本物の自然素材住宅を提供しております。<br>また住医学研究会との連携で他の自然住宅を扱う会社とは違い、エビデンス(病気にならないための科学的根拠)を公開しております。</p>
        </dd>
      </dl>
    </table>
  </div>
</section>
<?php get_footer();
