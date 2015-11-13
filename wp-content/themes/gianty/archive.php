<?php
/**
 * Archive Post
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
    <!-- /.article --></div>
    <?php get_sidebar(); ?>
  <!-- /.inner --></div>
<!-- /#contents --></div>
<?php get_footer(); ?>