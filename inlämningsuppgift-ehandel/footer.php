<footer id="footer">
			<div class="container">
				<div class="row top">
					<div class="col-xs-12 col-sm-6 col-md-4">
						<!-- Dessa visar widgets -->
						<?php dynamic_sidebar('about') ?>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
				
						<?php dynamic_sidebar('contact') ?>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
						
						<ul class="social">

						<?php dynamic_sidebar('social') ?>
					</div>
				</div>
				<div class="row bottom">
					<div class="col-xs-12">
						<?php dynamic_sidebar('copy') ?>
					</div>
				</div>
			</div>
		</footer>
		
	</div>
	
</body>
<?php wp_footer(); ?>
</html>