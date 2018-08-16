<?php 
get_header();
if (have_posts()) {
	while (have_posts()) {
		the_post(); 
        ?>
        <h2><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h2>
        <?php the_content(); ?>
        <?php if(get_field('dodatni_opis')) { 
        echo('<span>Dodatni opis: </span>'); 
        the_field('dodatni_opis'); 
        }?><br />
        <span>Postavljeno: </span> <?php the_time('j.n.y');?> 
        
        <hr />
        <?php
        
	} 
}
echo paginate_links();
get_footer();
?>

