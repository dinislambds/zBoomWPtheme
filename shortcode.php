<?php 
/*
Template Name: Dhaka Shortcode
*/
get_header(); ?>



<section id="content">
	<div class="wrap-content zerogrid">
		
	
	<?php while( have_posts() ){  the_post() ?>



	<?php the_content() ?>

	<?php } ?>






	</div>
	</section>







<?php get_footer(); ?>