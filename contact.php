<?php 
/*
Template Name: Contact
*/

get_header(); ?>


<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">

				<?php while( have_posts() ) : the_post(); ?>


					<article>
					<h2> <?php the_title(); ?> </h2>
						<?php 
						 the_content(); 
						//echo do_shortcode('[contact-form-7 id="70" title="Contact"]');
						?>
						
					</article>

				<?php endwhile; ?>


				</div>
			</div>



			<div class="col-1-3">
				<div class="wrap-col">
					

					<?php dynamic_sidebar('contact_sidebar'); ?>



				</div>
			</div>
		</div>
	</div>
</section>



<?php get_footer(); ?>