<?php
get_header();
?>

<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="hero">
								<!-- <img src="img/city.jpg" /> -->
								<div class="text">
									<h1>
                                    <?php
                                        the_title();
                                    ?>
                                    </h1>
									<p></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
</main>


    <?php
		/* $menuarray = ['theme_location' => 'socialmenu']; 
		wp_nav_menu($menuarray); */
        get_footer();
	
    ?>

		