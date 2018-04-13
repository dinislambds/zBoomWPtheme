<?php 
/*
Template Name: Test
*/
get_header();
global $zboom_music;
 ?>



 	



 	



<section id="content">
	<div class="wrap-content zerogrid">
		





		<div class="row block02">
			<div class="col-2-3">
				<div class="wrap-col">
					<div class="heading"><h2>National Category</h2></div>
					


			<?php 
			$category_name = get_the_category_by_id($zboom_music['top_cat_sel']);

				$zboom_post = null;
				$zboom_post = new WP_Query( array(
					'post_type'			=> 'post',
					'posts_per_page'	=> 5,
					'order'				=> 'ASC',
					'category_name'		=> $category_name

					) );

					while ($zboom_post->have_posts() ) {						
						$zboom_post->the_post();	 ?>				
				


					<article class="row">	
						<div class="col-1-3">
							<div class="wrap-col">
								<?php the_post_thumbnail();  ?>
							</div>
						</div>

						<div class="col-2-3">
							<div class="wrap-col">
								<h2><a href="<?php the_permalink(); ?>"> <?php the_title();  ?>  </a></h2>
								<div class="info"> By <?php the_author(); ?> on <?php the_time('F m,Y'); ?>   with <?php comments_popup_link( 'No Comments', '1 Comments', '% Comments', 'rahul', 'Comments Off' ); ?> </div>
								<p> <?php echo wp_trim_words( get_the_content(), 20, ''); ?>  [...]</p>
							</div>
						</div>
					</article>

				<?php } ?>

				</div>
			</div>







			<div class="col-1-3">
				<div class="wrap-col">

					<?php get_sidebar(); ?>

					


				</div>
			</div>
		</div>
	</div>
</section>








<section id="content">
	<div class="wrap-content zerogrid">
		





		<div class="row block02">
			<div class="col-2-3">
				<div class="wrap-col">
					<div class="heading"><h2>International Category</h2></div>
					


			<?php 
			$buttom_cat_sel = get_the_category_by_id($zboom_music['buttom_cat_sel']);

				$zboom_post = null;
				$zboom_post = new WP_Query( array(
					'post_type'			=> 'post',
					'posts_per_page'	=> 5,
					'order'				=> 'ASC',
					'category_name'		=> $buttom_cat_sel

					) );

					while ($zboom_post->have_posts() ) {						
						$zboom_post->the_post();	 ?>				
				


					<article class="row">	
						<div class="col-1-3">
							<div class="wrap-col">
								<?php the_post_thumbnail();  ?>
							</div>
						</div>

						<div class="col-2-3">
							<div class="wrap-col">
								<h2><a href="<?php the_permalink(); ?>"> <?php the_title();  ?>  </a></h2>
								<div class="info"> By <?php the_author(); ?> on <?php the_time('F m,Y'); ?>   with <?php comments_popup_link( 'No Comments', '1 Comments', '% Comments', 'rahul', 'Comments Off' ); ?> </div>
								<p> <?php echo wp_trim_words( get_the_content(), 20, ''); ?>  [...]</p>
							</div>
						</div>
					</article>

				<?php } ?>

				</div>
			</div>







			<div class="col-1-3">
				<div class="wrap-col">

					<?php get_sidebar(); ?>

					


				</div>
			</div>
		</div>
	</div>
</section>
















<?php get_footer(); ?>