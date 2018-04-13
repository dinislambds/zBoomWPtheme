
<?php 
	function zboom_js_css_file(){
		/*******CSS File Regi********/
		wp_register_style( 'zerogrid-1', get_template_directory_uri().'/css/zerogrid.css', array(), 'r-9.2', 'all' );
		wp_register_style( 'style-2', get_template_directory_uri().'/css/style.css', array(), 'r-9.2', 'all' );
		wp_register_style( 'responsive-3', get_template_directory_uri().'/css/responsive.css', array(), 'r-9.2', 'all' );
		wp_register_style( 'responsiveslides-4', get_template_directory_uri().'/css/responsiveslides.css', array(), 'r-9.2', 'all' );
		wp_register_style( 'main-style-5', get_template_directory_uri().'/style.css', array(), 'r-9.2', 'all' );

		wp_enqueue_style('zerogrid-1');
		wp_enqueue_style('style-2');
		wp_enqueue_style('responsive-3');
		wp_enqueue_style('responsiveslides-4');
		wp_enqueue_style('main-style-5');

		/*************JS File Rggi******************/
		
		wp_register_script( 'responsiveslides-5', get_template_directory_uri().'/js/responsiveslides.js', array('jquery'), 'r-9.2', true );
		
		wp_enqueue_script('jquery');
		wp_enqueue_script('responsiveslides-5');
		
    
	}

	add_action( 'wp_enqueue_scripts', 'zboom_js_css_file' );



	function custom_jquer_file(){ ?>



<script>

		(function($){

		$(function () {
		  $("#slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 500,
			maxwidth: 962,
			namespace: "centered-btns"
		  });
		});

}) (jQuery);		
	</script>
	
	<?php }

	add_action( 'wp_footer', 'custom_jquer_file', 100);

	


	function zboom_default_menu(){ ?>


			<ul>
				<li class="current"><a href="index.html">Home</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">Gallery</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
			


	<?php }






	function read_more( $limit = 5 ){
		$content_post 		= explode( ' ', get_the_content() );
		$content_less 		= array_slice( $content_post, 0, $limit );

		 echo implode( ' ', $content_less );


	}

?>
