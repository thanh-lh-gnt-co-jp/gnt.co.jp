<?php
/**
 * Short FAQ
 *
 * @package WordPress
 * @subpackage Gianty Vietnam
 * @since Gianty Vietnam 2015
 */
?>
<div id="news_box" class="section">
  <div class="section_title">
    <h2>ニュース</h2>
  <!-- /.section_title --></div>
  <div class="section_content">
    <?php
      $args = array(
        'post_type' => 'news',
        'posts_per_page' => 3
      );
      query_posts($args);
    ?>
    <div class="news_list">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <dl>
        <dt><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></dt>
        <dd>
          <span class="date"><?php echo the_time('Y.m.d'); ?></span>
          <p><?php the_excerpt(); ?></p>
        </dd>
      </dl>
    <?php endwhile; ?>
    <!-- /.news_list --></div>
    <?php endif; wp_reset_query(); ?>
    <p class="pright"><a class="readmore" href="/news/">さらに詳しく &gt;</a></p>
  <!-- /.section_content --></div>
<!-- /.section --></div>