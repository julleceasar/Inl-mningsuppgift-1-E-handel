<?php
get_header();
?>

	<main>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="hero">
						
							<?php
							/* Visar inläggets bild */
							the_post_thumbnail();
							?>

							<div class="text">
								<h1>
									<?php
									/* Visar inläggets titel/rubrik */
									the_title();
									?>
								</h1>
								<p>
									<?php
									/* Visar inhållet i inlägget, dvs huvudtexten */
									the_content();
									?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>


<?php

get_footer();

?>