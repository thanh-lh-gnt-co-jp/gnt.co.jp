<?php
/**
 * Single post page
 *
 * @package WordPress
 * @subpackage Gianty Vietnam
 * @since Gianty Vietnam 2015
 */

get_header(); ?>
<div id="contents">
    <div class="inner">
      <div class="article">
        <?php include(locate_template('inc/breadcrumbs.php')); ?>
        <div class="main_visual">
          <h2><img src="<?php bloginfo('template_url'); ?>/img/news/bnr-news.jpg" height="200" width="728" alt="" /></h2>
        <!-- /.main_visual --></div>
        <div class="top_title">
          <h2>ニュース</h2>
        <!-- /.top_title --></div>
        <div class="news_contents">
          <div class="news_list">
            <?php while ( have_posts() ) : the_post(); ?>
              <dl>
                <dt><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></dt>
                <dd>
                  <span class="date"><?php echo the_time('Y.m.d'); ?></span>
                  <?php the_content(); ?>
                </dd>
              </dl>
            <?php endwhile; ?>
            <!-- /.news_list --></div>
        <!-- /.news_contents --></div>
      <!-- /.article --></div>
      <?php get_sidebar(); ?>
    <!-- /.inner --></div>
  <!-- /#contents --></div>
<?php get_footer(); ?>