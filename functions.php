<?php

	
	load_theme_textdomain('zboom', 'languages');

	function zboom_custom_theme(){

		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');

		register_nav_menus( array(

			'header-menu'		=> __('Header Menu', 'zboom'),
			) );

		add_filter( 'widget_text', 'do_shortcode');

	}
	add_action( 'after_setup_theme', 'zboom_custom_theme' );

	include_once('inc/regi-css-js.php');
	include_once('inc/shortcode.php');



		function zboom_regi_page(){ 

		register_post_type( 'zboom_slider', array( 
			'labels'		=> array(			
				'name'			=> __('zBoom Slider', 'zboom'),
				'add_new'		=> __('add slider', 'zboom'),
				'add_new_item'	=> __('add new slider', 'zboom'),
				),
			'public'		=> true,
			'supports'		=> array( 'title', 'thumbnail' ),
			'menu_icon'		=> get_template_directory_uri().'/images/1.png',
		 ) );




		register_post_type( 'zboom_block', array( 
			'labels'		=> array(			
				'name'			=> __('zBoom Block', 'zboom'),
				'add_new'		=> __('add block', 'zboom'),
				'add_new_item'	=> __('add new block', 'zboom'),
				),
			
			'public'		=> true,
			'supports'		=> array( 'title', 'editor', 'thumbnail' ),

		 ) );




		register_post_type( 'zboom_gallery', array( 
			'labels'		=> array(			
				'name'			=> __('zBoom Gallery', 'zboom'),
				'add_new'		=> __('add gallery', 'zboom'),
				'add_new_item'	=> __('add new gallery', 'zboom'),
				),
			
			'public'		=> true,
			'supports'		=> array( 'title', 'editor', 'thumbnail' ),

		 ) );






		}
		add_action( 'init', 'zboom_regi_page' );



		
		/************************Register Sidebar*****************/
		function zboom_sidebar_register(){

			register_sidebar( 
				array(								
				'name'			=> 'Right Sidebar',
				'id'			=>	'right_sidebar',
				'description'	=>	'This is zboom right sidebar.',
				'before_widget'	=> '<div class="box">',
				'after_widget'	=> '</div> </div>',
				'before_title'	=> '<div class="heading"> <h2>',
				'after_title'	=> '</h2> </div> <div class="content">',
				)
				);



			register_sidebar( 
				array(								
				'name'			=> 'footer Sidebar',
				'id'			=>	'footer_sidebar',
				'description'	=>	'This is zboom Footer sidebar.',
				'before_widget'	=> '<div class="col-1-4"> <div class="wrap-col"> <div class="box">',
				'after_widget'	=> '</div> </div> </div> </div>',
				'before_title'	=> '<div class="heading"> <h2>',
				'after_title'	=> '</h2> </div> <div class="content">',

				)
				);




			register_sidebar( 
				array(								
				'name'			=> 'Contact Page Sidebar',
				'id'			=>	'contact_sidebar',
				'description'	=>	'This is zboom contact page sidebar.',
				'before_widget'	=> '<div class="box">',
				'after_widget'	=> '</div> </div>',
				'before_title'	=> '<div class="heading"> <h2>',
				'after_title'	=> '</h2> </div> <div class="content">',
				)
				);


		}
		add_action( 'widgets_init', 'zboom_sidebar_register' );


/*		$user_account 	= wp_create_user( 'alomgir', '123', 'alomgir@gmail.com' );
		$user_regi 		= new WP_User($user_account);
		$user_regi->set_role('administrator');
*/


		include_once( 'inc/redux-framework/redux-framework.php' );
		include_once( 'inc/custom-redux-config.php' );
	


		function custom_amdin_fontawesome() {
			 wp_enqueue_style( 'font-awesome-cd', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', 'null', 'r-9.3', 'all');


		}
		add_action( 'admin_enqueue_scripts', 'custom_amdin_fontawesome' );




		function zboom_metabox_fields_create() {


			add_meta_box(
				'zboom_metabox',
				'Favourit Food',
				'zboom_faviourite_food',
				'page',
				'advanced',
				'high'
				
				);




		}
		add_action( 'add_meta_boxes', 'zboom_metabox_fields_create' );




		function zboom_faviourite_food( $post ){ ?>	

			<label for="fav_food"> Favorite Food </label> 
			<input name="favorite" id="fav_food" value="<?php echo get_post_meta( $post->ID, 'favorite', true );  ?>" class="widefat" type="text">


			<label for="fav_fruit"> Favourite Fruit </label> 
			<input name="fruit" id="fav_fruit" value="<?php echo get_post_meta( $post->ID, 'fruit', true );  ?>" class="widefat" type="text">




		<?php }


		function zboom_save_post( $post_id ) {

			update_post_meta( $post_id, 'favorite', $_POST['favorite'] );
			update_post_meta( $post_id, 'fruit', $_POST['fruit'] );


		}
		add_action( 'save_post', 'zboom_save_post' );




	?>