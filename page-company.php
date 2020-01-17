<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<?php get_template_part( 'submv-imgnone' ); ?>

<section id="company" class="sec">
  <div class="wrap">
    <ul>
      <li class="flex">
        <p>会社名</p>
        <p>リード・アーキテクト株式会社</p>
      </li>
      <li class="flex">
        <p>住所</p>
        <p>京都市南区西九条藤ノ木町97番地</p>
      </li>
      <li class="flex">
        <p>TEL / FAX</p>
        <p>075-693-2880 / 075-693-2881</p>
      </li>
      <li class="flex">
        <p>E-mail</p>
        <p>info@lead-a.co.jp</p>
      </li>
      <li class="flex">
        <p>設立</p>
        <p>2001年02月21日(有限会社　リード建設)<br>2003年11月17日リード・アーキテクト(株)に組織変更</p>
      </li>
      <li class="flex">
        <p>資本金</p>
        <p>1,000万円</p>
      </li>
      <li class="flex">
        <p>役員</p>
        <p>代表取締役　遠藤 達彦</p>
      </li>
      <li class="flex">
        <p>社員数</p>
        <p>社員12名</p>
      </li>
      <li class="flex">
        <p>資格者</p>
        <p>一級建築士:3名<br>二級建築士:5名<br>木造耐震診断士:2名<br>一級土木管理士:1名<br>シックハウス診断士補:7名</p>
      </li>
      <li class="flex">
        <p>業種</p>
        <p>建築業務全般(一級建築士事務所)<br>インテリアデザイン<br>分譲住宅 企画・設計・施工<br>リフォーム<br>リノベーション</p>
      </li>
      <li class="flex">
        <p>営業所</p>
        <p>沖縄営業所<br>〒900-0006　沖縄県那覇市おもろまち4-7-2　アーベイン21　101号室<br>098-894-8027</p>
      </li>
      <li class="flex">
        <p>施工エリア</p>
        <p>京都府・滋賀県・奈良県・大阪府・石川県・福井県・兵庫県・三重県・愛知県・沖縄県<br>(一部地域はご相談によります)</p>
      </li>
      <li class="flex">
        <p>会社名</p>
        <p>リード・アーキテクト株式会社</p>
      </li>
      <li class="flex">
        <p>許認可建設業許可</p>
        <p>一般　建設工事業　京都府知事(般-26)第35374号<br>一級建築士事務所登録　京都府知事　登録　第26A35374号</p>
      </li>
      <li class="flex">
        <p>所属団体</p>
        <p>東京大学 木質構造研究会員<br>京都大学 生存圏研究所 生存圏フォーラム<br>ベストデザイン大阪<br>一般社団法人 日本ツーバイフォー建築協会<br>一般社団法人 日本建築学会<br>一般社団法人 京都府建築士会<br>公益社団法人 日本地盤工学会<br>一般社団法人 日本水石協会<br>保証日本住宅保証検査機構(JIO)  </p>
      </li>
    </ul>
  </div>
</section>
<section id="perfor" class="sec">
  <div class="wrap">
    <h2 class="ttl2 txt-c"><span>過去10年間の実績</span></h2>
    <div class="flex m-30">
      <p>住宅<span class="main-color">10</span>棟</p>
      <p>マンション<span class="main-color">10</span>棟</p>
      <p>リフォーム<span class="main-color">10</span>棟</p>
    </div>
  </div>
  <div class="slide">

  </div>
  <ul class="slider">
    <li><img src="<?php echo $wp_url ?>/lib/images/order/slide/01.png" alt="スライドショー画像"></li>
    <li><img src="<?php echo $wp_url ?>/lib/images/order/slide/02.png" alt="スライドショー画像"></li>
    <li><img src="<?php echo $wp_url ?>/lib/images/order/slide/03.png" alt="スライドショー画像"></li>
    <li><img src="<?php echo $wp_url ?>/lib/images/order/slide/04.png" alt="スライドショー画像"></li>
    <li><img src="<?php echo $wp_url ?>/lib/images/order/slide/05.png" alt="スライドショー画像"></li>
    <li><img src="<?php echo $wp_url ?>/lib/images/order/slide/06.png" alt="スライドショー画像"></li>
    <li><img src="<?php echo $wp_url ?>/lib/images/order/slide/07.png" alt="スライドショー画像"></li>
  </ul>
</section>
<?php get_footer();
