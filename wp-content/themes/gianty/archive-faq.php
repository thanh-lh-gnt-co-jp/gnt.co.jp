<?php
/**
 * Archive: FAQ
 *
 * @package WordPress
 * @subpackage Gianty Vietnam
 * @since Gianty Vietnam 2015
 */

get_header(); ?>
<style>
	#contents .section_button a {
    display: block;
    text-indent: -9999px;
    font-size: 0;
    background: #a84261 url(../../wp-content/themes/gianty/img/services/btn-company-2.jpg) no-repeat 0 0;
    width: 588px;
    height: 104px;
    margin: 10px auto;
}
</style>
<div id="contents">
    <div class="inner">
      <div class="article">
        <?php include(locate_template('inc/breadcrumbs.php')); ?>
        <div class="main_visual">
          <h2><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/faq/bnr-faq.jpg" height="200" width="728" alt="FAQ" /></h2>
        <!-- /.main_visual --></div>
        <div id="faq">
          <div class="top_title">
            <h2>FAQ</h2>
          <!-- /.top_title --></div>
          <?php
          
          $post_type = 'faq';
          $tax = 'faq-category';
          $tax_terms = get_terms($tax);
          if ($tax_terms) {
            foreach ($tax_terms  as $tax_term) {
              $args=array(
                'post_type' => $post_type,
                "$tax" => $tax_term->slug,
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'caller_get_posts'=> 1
              );

              $my_query = null;
              $my_query = new WP_Query($args);
              $tax_slug = $tax_term->slug;
              if( $tax_slug == 'about-gnt'  ) {
                $color_tax = 'blue';
              } else if($tax_slug == 'about-vietnam'){
                $color_tax = 'green';
              } else {
                $color_tax = 'orange edge';  
              }
              
              if( $my_query->have_posts() ) {
                echo  '<div class="section '.$color_tax.'">';
                echo  '<div class="faq_title">';
                echo  '<h3>'.$tax_term->name.'</h3>';
                echo  '<!-- /.faq_title --></div>';
                echo  ' <div class="area_contents">';
                   
                $i = 1;
                while ($my_query->have_posts()) : $my_query->the_post(); ?>
                  <dl>
                      <dt><span class="number">Q<?php echo $i; ?></span>.<?php the_title(); ?></dt>
                      <dd><?php the_content(); ?></dd>
                    </dl>
                  <?php
                  $i++; 
                endwhile;

                echo  '<!-- /.area_contents --></div>';
                echo  '<!-- /.section --></div>';
              }
              wp_reset_query();
            }
          }
          ?>
        <!-- /#faq --></div>
		<div class="section_button text-center">
            <!--<a href="<?php get_site_url(); ?>/contact/">GNTのコミュニケーション型ラボ開発の<br>お問合せ・ご相談はこちら</a>-->
			<div class="col-md-8 col-md-offset-2" style="margin-top:10px;margin-bottom:10px;"> <img src="<?php bloginfo("template_url"); ?>/img/services/company-banner-2.jpg" class="img-responsive text-center"/></div>
          <!-- /.section_button --></div>
      <!-- /.article --></div>
	  
      <?php get_sidebar(); ?>
    <!-- /.inner --></div>
  <!-- /#contents --></div>
<?php get_footer(); ?>