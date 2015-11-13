<?php
/**
 * Short FAQ
 *
 * @package WordPress
 * @subpackage Gianty Vietnam
 * @since Gianty Vietnam 2015
 */
?>
<div id="faq_box" class="section">
  <div class="section_title">
    <h2>FAQ</h2>
  <!-- /.section_title --></div>
  <div class="section_content">
    <div class="green_sec">
      <?php
        $about_gnt = 'about-gnt';
        $post_type = 'faq';
        $tax = 'faq-category';
        $tax_terms = get_terms($tax);
        
         $tax_slug = $tax_term->slug;
        if( $tax_slug == $about_gnt  ) {
          $color_tax = 'blue edge';
        } else if($tax_slug == 'about-vietnam'){
          $color_tax = 'green';
        } else {
          $color_tax = 'orange';  
        }

        $args=array(
          'post_type' => $post_type,
          "$tax" => $about_gnt,
          'post_status' => 'publish',
          'posts_per_page' => 2,
          'caller_get_posts'=> 1
        );

        $my_query = null;
        $my_query = new WP_Query($args);

       

        $term = get_term_by('slug', $about_gnt, 'faq-category'); 
        $tax_name = $term->name;

          echo  '<h4>'.$tax_name.'</h4>';
            $i = 1;
            while ($my_query->have_posts()) : $my_query->the_post(); ?>
              <dl>
                <dt><span class="number">Q.</span><strong class="f_title"><?php the_title(); ?></strong></dt>
                <dd><?php the_excerpt(); ?></dd>
              </dl>
              <?php
              $i++; 
            endwhile;
        wp_reset_query();
    ?>
    <!-- /.green_sec --></div>

    <div class="orange_sec">
      <?php
        
        $post_type = 'faq';
        $tax = 'faq-category';
        $tax_terms = get_terms($tax);
        
        $args=array(
          'post_type' => $post_type,
          "$tax" => 'for-business',
          'post_status' => 'publish',
          'posts_per_page' => 2,
          'caller_get_posts'=> 1
        );

        $my_query2 = null;
        $my_query2 = new WP_Query($args);


        $term = get_term_by('slug', 'for-business', 'faq-category'); 
        $tax_name = $term->name;

        
          echo  '<h4>'.$tax_name.'</h4>';
            $i = 1;
            while ($my_query2->have_posts()) : $my_query2->the_post(); ?>
              <dl>
                  <dt><span class="number">Q.</span><strong class="f_title"><?php the_title(); ?></strong></dt>
                  <dd><p><?php the_excerpt(); ?></p></dd>
                </dl>
              <?php
              $i++; 
            endwhile;
        wp_reset_query();
      ?>
      <!-- /.orange_sec --></div>
      <p class="pright"><a class="readmore" href="/faq/">さらに詳しく &gt;</a></p>
    <!-- /.section_content --></div>
  <!-- /.section --></div>