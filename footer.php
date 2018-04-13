
<footer>
	<div class="wrap-footer zerogrid">
		<div class="row block09">
			

			<?php 
			dynamic_sidebar('footer_sidebar');
			?>

			



		</div>
		
		<div class="row copyright">
			<?php global $zboom_music; echo $zboom_music['footer-text']; ?>
		</div>
	</div>
</footer>


<?php wp_footer(); ?>


</body>
</html>