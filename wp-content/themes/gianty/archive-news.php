<?php
/**
 * Archive: News
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
        <div class="news_contents">
          <div class="top_title">
            <h2>ニュース</h2>
          <!-- /.top_title --></div>
          <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
              'post_type' => 'news',
              'posts_per_page' => 5,
              'paged' => $paged
            );
            query_posts($args);
          ?>
        <div class="news_list">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <dl>
            <dt><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></dt>
            <dd>
              <span class="date"><?php echo the_time('Y.m.d'); ?></span>
              <?php the_content(); ?>
            </dd>
          </dl>
        <?php endwhile; ?>
        <!-- /.news_list --></div>
        
        <?php
          global $wp_rewrite;
          if (function_exists(custom_pagination)) {
            custom_pagination($wp_query->max_num_pages,"",$paged);
          }
        ?>
        <?php endif; wp_reset_query(); ?>
        <!-- /.news_contents --></div>
      <!-- /.article --></div>
      <?php get_sidebar(); ?>
    <!-- /.inner --></div>
  <!-- /#contents --></div>
<?php get_footer(); ?>