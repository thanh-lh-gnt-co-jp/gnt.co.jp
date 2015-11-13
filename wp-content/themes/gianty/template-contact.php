<?php
/*
 * Template Name: Contact
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
          <h2><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/contact/bnr-contact.jpg" height="200" width="728" alt="" /></h2>
        <!-- /.main_visual --></div>
        <div class="contact">
          <div class="top_title">
            <h2>お問い合わせ</h2>
          <!-- /.top_title --></div>
          <div class="contact_title">
            <h2>お電話でのお問い合わせ</h2>
          <!-- /.contact_title --></div>
          <div class="contact_contents box">
            <p class="number_phone"><span>03-5766-6002(オフショア開発事業部直通)</span></p>
          <!-- /.contact_contents --></div>
          <div class="contact_title">
            <h2>メールでのお問い合わせ</h2>
          <!-- /.contact_title --></div>
          <div class="contact_box">
            <?php echo do_shortcode('[contact-form-7 id="67" title="Contact form"]'); ?>
          <!-- /.contact_box --></div>
        <!-- /.contact --></div>
      <!-- /.article --></div>
     <?php get_sidebar(); ?>
    <!-- /.inner --></div>
  <!-- /#contents --></div>
<?php get_footer(); ?>