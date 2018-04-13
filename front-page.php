<?php get_header(); ?>



<div class="featured">
	<div class="wrap-featured zerogrid">
		<div class="slider">
			<div class="rslides_container">

				<?php global $zboom_music; ?>
				<ul>
					<li> <?php if( $zboom_music['select_fruit']['1'] == 1 ){ echo "Aplle";} ?>  </li>
					<li> <?php if( $zboom_music['select_fruit']['2'] == 1 ){ echo "Banana";} ?>   </li>
					<li> <?php if( $zboom_music['select_fruit']['3'] == 1){ echo "Oarang";} ?>   </li>
					<li> <?php if( $zboom_music['select_fruit']['4'] == 1){ echo "Mango";} ?>   </li>
					<li> <?php if( $zboom_music['select_fruit']['5'] == 1){ echo "Carrot";} ?>   </li>
					
				</ul>
				<ul class="rslides" id="slider">


				<?php 
				$zboom_slider = null;
				$zboom_slider = new WP_Query( array(
					'post_type'			=> 'zboom_slider',
					'posts_per_page'	=> -1,
					'order'				=> 'ASC',

					) );

					while ($zboom_slider->have_posts() ) {						
						$zboom_slider->the_post(); ?>

					<li> <?php  the_post_thumbnail() ?> </li>
				
				<?php } ?>
					
				


				</ul>
			</div>
		</div>
	</div>
</div>


<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block01">
			

			<?php 
				$zboom_block = null;
				$zboom_block = new WP_Query( array(
					'post_type'			=> 'zboom_block',
					'posts_per_page'	=> 3,
					'order'				=> 'ASC',

					) );

					while ($zboom_block->have_posts() ) {						
						$zboom_block->the_post();	 ?>				
				


			<div class="col-1-3">
				<div class="wrap-col box">
					<h2> <?php the_title(); ?> </h2>
					<p> <?php echo wp_trim_words( get_the_content(), 10, ' '); ?> </p>
					<div class="more"><a href="<?php the_permalink(); ?>">[Block]</a></div>
				</div>
			</div>

				<?php } ?>

		</div>





		<div class="row block02">
			<div class="col-2-3">
				<div class="wrap-col">
					<div class="heading"><h2>Latest Blog</h2></div>
					


			<?php 
				$zboom_post = null;
				$zboom_post = new WP_Query( array(
					'post_type'			=> 'post',
					'posts_per_page'	=> 5,
					'order'				=> 'ASC',

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