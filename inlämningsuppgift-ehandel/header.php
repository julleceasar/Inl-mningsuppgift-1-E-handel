<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Labb 1</title>
	<!-- Gör så att man kan kroka in sig i head -->
	<?php wp_head(); ?>
</head>
<body>

	<div id="wrap">

		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-6">
						<!-- En länk till förstasidan -->
						<a class="logo" href="<?php echo home_url(); ?>">
							Julius Hemsida
						</a>
					
					</div>
					<div class="col-sm-6 hidden-xs">
						<form id="searchform" class="searchform">
						
							<div>
							<!-- Importerar wordpress egna sökformulär med dess inbydda funktionalitet -->
							<?php get_search_form(); ?>	
								
							</div>
						</form>
					</div>
					<div class="col-xs-4 text-right visible-xs">
						<div class="mobile-menu-wrap">
							<i class="fa fa-search"></i>
							<i class="fa fa-bars menu-icon"></i>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="mobile-search">
			<form id="searchform" class="searchform">
				
					<?php get_search_form(); ?>
			
			</form>
		</div>

		<nav id="nav">
	
			<div class="container">

				<div class="row">
					<div class="col-xs-12">
			
	
		
		<?php $menuarray = ['theme_location' => 'mainmenu']; ?>

		<!-- Laddar in huvudmenyn i headern -->
		<?php wp_nav_menu($menuarray); ?>
	
  
					</div>
				</div>
			</div>
		</nav>

