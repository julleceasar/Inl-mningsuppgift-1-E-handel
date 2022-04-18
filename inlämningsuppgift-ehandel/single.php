<?php
get_header();
?>


<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
                        
						    <article>
                        
                            <?php while ( have_posts() ) { 
                            
                            the_post(); ?>

                            <?php the_post_thumbnail(); ?>

                                <h2 class="title">
								<a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
								</h2>

                                <ul class="meta">
									<li>
										<i class="fa fa-calendar"></i> <?php the_time(get_option('date_format')); ?> 
									</li>
									<li>
										<i class="fa fa-user"></i> <a href="forfattare.html"><?php the_author_posts_link(); ?> </a>
									</li>
									<li>
                                
										<i class="fa fa-tag"></i> <a href="kategori.html"> <?php the_category(' '); ?> </a>
									</li>
								</ul>

                                <p>
                                  <?php the_content(); ?> 
                             </p>

                            <?php }?>  
                                
								
								
							</article>
							<article>
								
								
							
					
							<nav class="navigation pagination">
	
                                <?php echo paginate_links(); ?>
							</nav>
						</div>
						<aside id="secondary" class="col-xs-12 col-md-3">
							<div id="sidebar">
								<ul>
									<li>
										<form id="searchform" class="searchform">
                                            <h4>Sök efter:</h4>
                                            <?php get_search_form(); ?>	
										</form>
									</li>
								</ul>
								<ul role="navigation">
									<li class="pagenav">
                                        <?php dynamic_sidebar('sidebar') ?>
                                    </li>
								</ul>
									
								
							</div>
						</aside>
					</div>
				</div>
			</section>
		</main>


<?php	
get_footer();
?>