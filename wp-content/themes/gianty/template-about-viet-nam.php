<?php
/*
 * Template Name: About Viet Nam
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
          <h2><img class="img-responsive" src="<?php bloginfo('template_url') ?>/img/about-viet-nam/bnr-about-vietnam.jpg" height="200" width="728" alt="" /></h2>
        <!-- /.main_visual --></div>

        <div class="top_title">
          <h2>ベトナムの魅力</h2>
        <!-- /.top_title --></div>
        <div class="section green">
          <div class="section_title">
            <h3>ベトナムの魅力</h3>
          <!-- /.section_title --></div>
          <div class="section_contents">
            <dl class="edge">
              <dt class="one">1</dt><dd>
                <strong>豊富なエンジニア人口</strong>
                <p>ベトナム政府は、IT技術者の育成に積極的で、2010年に25万人だったIT業界の就業人数を、2020年までに100万人に増やす教育プログラムを組んでいます。</p>
              </dd>
            </dl>
            <dl>
              <dt class="two">2</dt><dd>
                <strong>高度な日本語習熟者</strong>
                <p>年間3,600人以上の日本語能力試験有資格者が誕生しています。また、全国3,000の高校で日本語教育が行われています。</p>
              </dd>
            </dl>
            <dl>
              <dt class="three">3</dt><dd>
                <p><strong>物価水準によるメリット</strong><br/>平均賃金は、日本を100とした時、ベトナムが18%、中国が43%、インドが40%、フィリピンが34%(JETRO2014調べ)</p>
              </dd>
            </dl>
            <dl>
              <dt class="four">4</dt><dd>
                <p><strong>日本とマイナス2時間の時差</strong><br/>ベトナムの勤務時間は午前８時から午後５時までで日本時間の午前10時から午後7時にあたります。</p>
              </dd>
            </dl>			
          <!-- /.section_contents --></div>
		  
		  <div class="section_button">
            <a href="<?php get_site_url(); ?>/contact/">GNTのコミュニケーション型ラボ開発の<br />お問合せ・ご相談はこちら</a>
          <!-- /.section_button --></div>
		  
		  
        <!-- /.section --></div>
      <!-- /.article --></div>
      <?php get_sidebar(); ?>
    <!-- /.inner --></div>
  <!-- /#contents --></div>
<?php get_footer(); ?>