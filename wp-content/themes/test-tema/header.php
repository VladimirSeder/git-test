<!DOCTYPE html>
<html>
    <head>
    <?php wp_head(); ?>
    </head>
<body>
<?php 
wp_nav_menu(array(
	'theme_location' => 'headerMenuLocation'
));
?>

<!--<a href="<?php //echo site_url() ?>"><?php //bloginfo('name'); ?></a>
<a href="<?php //echo site_url('/event') ?>">Events</a><br />-->
<hr />