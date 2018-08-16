<?php 
get_header();
//$today = date('Ymd');
$homepageEvents = new WP_Query(array(
  'posts_per_page' => -1,
  'post_type' => 'event',
  //sortiranje
  //'meta_key' => 'event_date',
  'orderby' => 'meta_value_num',
  'order' => 'ASC',
  /*'meta_query' => array(
   array(
     'key' => 'event_date',
     'compare' => '>=',
     'value' => $today,
     'type' => 'numeric'
    )
   )*/
 ));

 while($homepageEvents->have_posts()) {
  $homepageEvents->the_post(); 

  ?>

  <h2><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h2>
  <?php the_content();?> 
  <span>Datum odrzavanja: </span><?php the_field('datum_odrzavanja'); ?><br />
  <?php  ?>
  <hr />
  <?php
}

echo paginate_links();
get_footer();
?>