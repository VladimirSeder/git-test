<?php 
get_header();
if (have_posts()) {
	while (have_posts()) {
		the_post(); 
        ?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
        <span>Datum odrzavanja: </span><?php the_field('datum_odrzavanja'); ?><br />        
        <?php   
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;     
	} 
}
get_footer();
?>
