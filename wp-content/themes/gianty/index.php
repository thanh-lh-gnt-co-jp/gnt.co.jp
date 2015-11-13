<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Gianty Vietnam
 * @since Gianty Vietnam 2015
 */

get_header(); ?>
  
  <div id="contents">
    <div class="inner">
      <div class="title">
        <h2><span><img src="<?php bloginfo('template_url'); ?>/img/index/title-komiunike-fix2.png" height="32" width="426" alt="コミュニケーション型ラボ開発" /></span></h2>
      <!-- /.title --></div>
      <div class="sub_title">
        <h3><span><img src="<?php bloginfo('template_url'); ?>/img/share/sp/img-title02-fix.jpg" height="90" width="690" alt="それは４年間のオフショア開発経験から生まれました。PMとPDMとCTR、この３人のコミュニュケーションこそがプロジェクト成功の鍵" /></span></h3>
        <p class="pcenter"><a class="readmore" href="/services/lab/">さらに詳しく &gt;</a></p>
      <!-- /.sub_title --></div>
      <div class="wrap_content">
        <?php get_template_part('content','short_news'); ?>
        <?php get_template_part('content','short_faq'); ?>
        <?php get_sidebar('home'); ?>
      <!-- /.wrap_content --></div>
    <!-- /.inner --></div>
  <!-- /#contents --></div>

  <?php get_footer(); ?>