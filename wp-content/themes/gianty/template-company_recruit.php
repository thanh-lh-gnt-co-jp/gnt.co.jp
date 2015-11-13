<?php
/*
 * Template Name: Company - Recruit
 *
 * @package WordPress
 * @subpackage Gianty Vietnam
 * @since Gianty Vietnam 2015
 */
 ?>
<?php get_header(); ?>
  <div id="contents">
    <div class="inner">
      <div class="article">
        <?php include(locate_template('inc/breadcrumbs.php')); ?>
        <div class="main_visual">
          <h2><img src="<?php bloginfo('template_url') ?>/img/company/bnr-company.jpg" height="200" width="728" alt="" /></h2>
        <!-- /.main_visual --></div>

        <?php include(locate_template('inc/sub-navi.php')); ?>

        <div class="news_contents">
          <!--<div class="top_title">
            <h2>求人情報</h2>
          </div><!-- /.top_title -->
          <div id="recruiting">
            <h3>GNTが求める人材像</h3>
            <p class="txt">私たちGNT VietNamは、2007年に数名でスタートし、アプリ開発、ゲーム開発とその運営業務を通じて、現在、200名を超えるなど、圧倒的なスピードでの成長と実績を誇ってきました。
            その原動力は、「情報技術で世界に貢献したい」という強い思いです。わたしたちと「志」を共にし、さらなる飛躍を目指す方を募集します。</p>
            <h4>アジアで飛躍を目指す情熱人材求む！</h4>
            <table class="recruit_form">
              <thead>
                <tr>
                  <th>募集職種</th>
                  <td>マーケティングスタッフ（ベトナム／ホーチミン）</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>仕事内容</th>
                  <td>
                    <ul>
                      <li>・Webを活用した集客プランの立案と実行</li>
                      <li>・各種資料制作</li>
                      <li>・研修プログラム立案</li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <th>求める人材像</th>
                  <td>
                    <ul>
                      <li>・飽くなき自己成長意欲を持てる人。</li>
                      <li>・情熱を持って行動できる人。</li>
                      <li>・時代の変化を捉え、自ら進化できる人。</li>
                      <li>・最先端の技術や新しいビジネスに興味を持てる人</li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <th>給与</th>
                  <td>1,500～3,000USD　新卒/第2新卒も応募可、経験により給与応相談</td>
                </tr>
                <tr>
                  <th>推奨スキル</th>
                  <td>
                    <ul>
                      <li>・マーケティングに関する知識・経験があれば尚可</li>
                      <li>・物事や思考を整理整頓することが得意な人歓迎</li>
                      <li>・IT知識はあれば尚可、なければ学習意欲があれば可</li>
                      <li>・英語（日常会話レベル）</li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <th>福利厚生</th>
                  <td>
                    <ul>
                      <li>・海外傷害保険費用</li>
                      <li>・VISA取得更新費用</li>
                      <li>・通勤交通費支給（タクシーカード支給）</li>
                      <li>・ランチ代支給</li>
                      <li>・携帯電話支給</li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td colspan="2">
                    <p>まずは気軽にSkype面談を申し込みください。</p>
                    <p class="btn-recruit"><a href="/recruiting/"><img src="<?php bloginfo("template_url"); ?>/img/company/recruit/btn-recruit_submit.jpg" height="51" width="179" alt="応募フォーム" /></a></p>
                  </td>
                </tr>
               </tbody> 
            </table>
          <!-- /#recruiting --></div>
        <!-- /.news_contents --></div>
      <!-- /.article --></div>
      <?php get_sidebar(); ?>
    <!-- /.inner --></div>
  <!-- /#contents --></div>
<?php get_footer(); ?>