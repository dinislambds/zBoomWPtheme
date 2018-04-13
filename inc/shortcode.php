<?php 


	function custom_zboom_shortcode( $atts, $content  ){

		$atts = shortcode_atts( array( 

			'text-align'	=> 'center',
			'color'			=> 'red',
			'font-size'			=> '18px',

		 ), $atts );



		return '<h2 style=" 
		text-align:'.$atts['text-align'].';
		color:'.$atts['color'].';

		 ">'.$content. '</h2>';

	}
	add_shortcode( 'zboom', 'custom_zboom_shortcode' );





	function custom_zboom_regi( $atts, $content ) { 
		ob_start();


		$our_atts = extract(  shortcode_atts( array( 

			'number'		=> 3,

		 ), $atts ) );

		?>


				<div class="row block01">
			

			<?php 
				$zboom_block = null;
				$zboom_block = new WP_Query( array(
					'post_type'			=> 'zboom_block',
					'posts_per_page'	=> $number,
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




	<?php
	$block = ob_get_clean();
	return $block; 

		}
	add_shortcode( 'block', 'custom_zboom_regi' );



?>