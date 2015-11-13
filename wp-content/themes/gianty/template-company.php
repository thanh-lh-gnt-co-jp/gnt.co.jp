<?php
/*
 * Template Name: Company - Home
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
          <h2><img class="img-responsive" src="<?php bloginfo('template_url') ?>/img/company/bnr-company.jpg" height="200" width="728" alt="" /></h2>
        <!-- /.main_visual --></div>

        <?php include(locate_template('inc/sub-navi.php')); ?>

        <div id="details">
          <div class="top_title">
            <!--<h2>会社基本情報</h2>-->
          <!-- /.top_title --></div>
          
          <div class="details_box clearfix">
            <div class="left_box">
              <div class="inner_box">
                <h3 class="area_box">GNT</h3>
                <table>
                  <tr>
                    <th>商号</th>
                    <td><span class="data_box">株式会社GNT</span> <span class="data_note">(英文名称:GNT Inc.)</span></td>
                  </tr>
                  <tr>
                    <th>所在地</th>
                    <td><span class="data_box">〒150-0002<br />東京都渋谷区渋谷3-11-2<br />渋谷パインビル5・6F </span></td>
                  </tr>
                  <tr>
                    <th>設立</th>
                    <td><span class="data_box">2000年5月12日</span></td>
                  </tr>
                  <tr>
                    <th>代表取締役</th>
                    <td><span class="data_box">ホー・トゥン・ラム</span></td>
                  </tr>
                  <tr>
                    <th>役員</th>
                    <td><span class="data_box">本田　慎悟<br />近藤　修康<br /> 霜島　豪介<br />山本　秀一（監査役）</span></td>
                  </tr>
                  <tr>
                    <th>従業員数</th>
                    <td><span class="data_box">85名　(2015年8月未現在）</span><!--<span class="data_note red_note">※</span><span class="data_box">グループ会社含む</span>--></td>
                  </tr>
                  <tr>
                    <th>事業内容</th>
                    <td><span class="data_box">ソーシャルゲーム事業<br />オフショア開発事業</span></td>
                  </tr>
                  <tr>
                    <th>グループ会社</th>
                    <td><span class="data_box">株式会社ICJ<br />GNT America Inc.<br />GIANTY Co.,Ltd<br />GNT VietNam Co.,Ltd</span></td>
                  </tr>
                  <tr>
                    <th>代表電話</th>
                    <td><span class="data_box">03-5766-6001</span></td>
                  </tr>
                  <tr>
                    <th>FAX番号</th>
                    <td><span class="data_box">03-5766-6009</span></td>
                  </tr>
                </table>
              <!-- /.inner_box --></div>
              <div class="details_info">
                <div class="thumb">
                  <img src="<?php bloginfo('template_url'); ?>/img/company/img-japan_company.jpg" height="155" width="343" alt="" />
                <!-- /.thumb --></div>
                <div class="map" id="japan_map"><!-- /.map --></div>
              <!-- /.details_info --></div>
            <!-- /.left_box --></div>
            <div class="right_box">
              <div class="inner_box">
                <h3 class="area_box">GNT VietNam</h3>
                <table>
                  <tr>
                    <th>社名</th>
                    <td><span class="data_box">GNT VietNam</span></td>
                  </tr>
                  <tr>
                    <th>所在地</th>
                    <td><span class="data_box">11 Floor, Green Power Building <br />
                     35 Ton Duc Thang Street District 1,Ho Chi Minh City</span></td>
                  </tr>
                  <tr>
                    <th>設立</th>
                    <td><span class="data_box">2007年11月19日</span></td>
                  </tr>
                  <tr>
                    <th>CEO</th>
                    <td><span class="data_box">ホー・トゥン・ラム</span></td>
                  </tr>
                  <tr>
                    <th>Board Member</th>
                    <td>
                      <span class="data_box">
                       ファン・ビン・グエン (CTO)<br />
                       グエン・クワン・チュン　(CIO)<br /> 
                       敷島　為久<br/>
					   グエン・アン・バング<br />
					  </span>
                    </td>
                  </tr>
				  <tr>
					<th>従業員数</th>
                    <td><span class="data_box">235名 (2015年8月未現在)</span>
				  </tr>
                  <tr>
                    <th>事業内容</th>
                    <td><span class="data_box">オフショア開発事業</span></td>
                  </tr>
                  <tr>
                    <th>代表電話</th>
                    <td><span class="data_box">+84 8 2228 1111</span></td>
                  </tr>
                  <tr>
                    <th>FAX番号</th>
                    <td><span class="data_box">+84 8 2228 2222</span></td>
                  </tr>
                </table>
              <!-- /.inner_box --></div>
              <div class="details_info">
                <div class="thumb">
                  <img src="<?php bloginfo('template_url'); ?>/img/company/img-company.jpg" height="155" width="344" alt="" />
                <!-- /.thumb --></div>
                <div class="map" id="vietnam_map"><!-- /.map --></div>
                <div class="map">
                <!-- /.map --></div>
              <!-- /.details_info --></div>
            <!-- /.right_box --></div>
          <!-- /.details_box --></div>

        <!-- /#details --></div>
      <!-- /.article --></div>
      <?php get_sidebar(); ?>
    <!-- /.inner --></div>
  <!-- /#contents --></div>
<?php get_footer(); ?>