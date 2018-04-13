<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
<head>
	<meta charset="<?php bloginfo('charset'); ?>">			    
	<link href='<?php echo esc_url( get_template_directory_uri() ); ?>/./images/favicon.ico' rel='icon' type='image/x-icon'/>	
<?php global $zboom_music; ?>
	<style type="text/css">
			header{
				background-color: <?php echo $zboom_music['bg_color']; ?> !important;
				background-color: <?php echo $zboom_music['bg_color']; ?> !important;
			}

			header {
				border-style:<?php echo $zboom_music['border_sel']['border-style']; ?> !important;
				border-color:<?php echo $zboom_music['border_sel']['border-color']; ?> !important;
				border-top:<?php echo $zboom_music['border_sel']['border-top']; ?> !important;
				border-bottom:<?php echo $zboom_music['border_sel']['border-bottom']; ?> !important;
				border-right:<?php echo $zboom_music['border_sel']['border-right']; ?> !important;
				border-left:<?php echo $zboom_music['border_sel']['border-left']; ?> !important;			

			}

		body{
			background-color: <?php echo $zboom_music['sel_bg_color']['background-color']; ?> !important;
			background-image:  url(<?php echo $zboom_music['sel_bg_color']['background-image']; ?>) !important;
			background-repeat:  <?php echo $zboom_music['sel_bg_color']['background-repeat']; ?> !important;
			background-position:   <?php echo $zboom_music['sel_bg_color']['background-position']; ?>!important;
		}

	</style>
	<?php wp_head(); ?>
</head>
<body>

<header>



	<div class="wrap-header zerogrid" >
	<?php 

		if ( $zboom_music['select_button'] == 1 ) { ?>
		
		<div id="logo"><a href="<?php bloginfo('home'); ?>"><img src="<?php global $zboom_music; echo $zboom_music['header_logo']['url']; ?>"/></a></div>
		<?php }
		elseif ( $zboom_music['select_button'] == 2 ) {			
		}
		
	?>
		

		<div id="search">
			<div class="button-search"></div>
			<form action="<?php esc_url(bloginfo('home')); ?>" method="get"> 
			<input type="text" name="s" value="Search..." onfocus="if (this.value == &#39;Search...&#39;) {this.value = &#39;&#39;;}" onblur="if (this.value == &#39;&#39;) {this.value = &#39;Search...&#39;;}">
			</form>
		</div>
	</div>
</header>

<nav>
	<div class="wrap-nav zerogrid">
		<div class="menu">
			<?php 
			wp_nav_menu( array(
			'theme_location'		=> 'header-menu',
			'container'				=> ' ',
			'fallback_cb'			=> 'zboom_default_menu',
			) );

			?>
		</div>
		
		<div class="minimenu"><div>MENU</div>
			<select onchange="location=this.value">
				<option></option>
				<option value="index.html">Home</option>
				<option value="blog.html">Blog</option>
				<option value="gallery.html">Gallery</option>
				<option value="single.html">About</option>
				<option value="contact.html">Contact</option>
			</select>
		</div>		
	</div>
</nav>



