<?php get_header(); ?>
<?php 
	if (have_posts()) :
		the_post();
		get_template_part('content');
	endif;
?>
<?php get_footer(); ?>
