<?php
/*
 * Template Name: Recruit
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
          <h2><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/recruit/bnr-recruiting.jpg" height="200" width="728" alt="" /></h2>
        <!-- /.main_visual --></div>
        <div class="contact">
          <div class="top_title">
            <h2>求人情報</h2>
          <!-- /.top_title --></div>
          <p class="recruit_intro">下記の情報に御記入の上、【入力内容を確認する】ボタンをクリックしてください。<br />
          折り返し当社よりご連絡させていただきます。（半角カナは使用しないでください）<br />
          <span class="request">※</span>印は必須項目です。</p>
          <?php //echo do_shortcode('[contact-form-7 id="68" title="Contact form - Recruit"]'); ?>
          <?php echo do_shortcode('[contact-form-7 id="81" title="Contact form - Recruit"]'); ?>
        <!-- /.contact --></div>
        
      <!-- /.article --></div>
     <?php get_sidebar(); ?>
    <!-- /.inner --></div>
  <!-- /#contents --></div>
<?php get_footer(); ?>