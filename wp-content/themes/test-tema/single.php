<?php 
get_header();
if (have_posts()) {
	while (have_posts()) {
		the_post(); 
        ?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
        <?php if(get_field('dodatni_opis')) { 
        echo('<span>Dodatni opis: </span>'); 
        the_field('dodatni_opis'); 
        echo('<br />');
        }?>
        <span>Postavio: </span><?php the_author_posts_link(); ?>       
        <?php   
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;     
	} 
}
get_footer();
?>