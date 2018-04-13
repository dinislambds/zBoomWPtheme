
<?php
/*
Template Name: Gallery
*/ 
get_header();
?>

<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			


			<?php 
				$zboom_gallery = null;
				$zboom_gallery = new WP_Query( array(
					'post_type'			=> 'zboom_gallery',
					'posts_per_page'	=> -1,
					'order'				=> 'ASC',

					) );

					while ($zboom_gallery->have_posts() ) {						
						$zboom_gallery->the_post(); ?>

			


			<div class="col-1-4">
				<div class="wrap-col">
					<article>

						<?php the_post_thumbnail(); ?>
						<h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h2>

					</article>
				</div>
			</div>


				<?php } ?>


		</div>
	</div>
</section>




<?php get_footer(); ?>