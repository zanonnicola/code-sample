<?php 
/*
Template Name: Menu Page
*/
?>

<?php get_header(); ?>

<?php get_template_part('templates/nav'); ?>

<main id="panel" class="snap-content" data-snap-ignore="true">
	<?php get_template_part('templates/mobile-nav'); ?>
	<header class="hero-image hero-image__menu">
		<div class="hero-image__content">
			<h1><?php the_title(); ?></h1>
			<h2>Our seasonal food and drink</h2>
		</div>
	</header>
	<section class="page-content">
		<div class="wrapper">
			<div class="grid">
				<div class="grid-col col-1-2">
					<img src="<?php bloginfo('template_url'); ?>/img/menu-image.jpg" alt="Menu">
				</div>
				<div class="grid-col col-1-2">
					<h3 class="menu-intro">Our signature steaks include the 24oz USDA Prime dry-aged signature bone-in rib-eye and 21oz NY cut bone-in sirloin.</h4>
					<p class="paragraph">Start your evening with one of our seafood platters; enjoy star-studded sides ranging from truffled macaroni and cheese to creamed spinach; or indulge in our legendary chocolate layer cake for dessert.</h3>
					<h4 class="sub-heading gold">Restaurant menus</p>
					<ul class="food-menu">
						<?php

							// check if the repeater field has rows of data
							if( have_rows('menus') ):

							 	// loop through the rows of data
							    while ( have_rows('menus') ) : the_row(); ?>

									<li><a rel="external" href="<?php the_sub_field('pdf'); ?>"><?php the_sub_field('menu_item'); ?> <span class="pdf">PDF</span></a></li>

							    <?php 

							    endwhile;

							else : ?>
								
							    	<li><a href="#0">No menus yet</a></li>

						<?php endif;

						?>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<?php get_template_part('templates/footer'); ?>
</main>

<aside id="menu" class="snap-drawers">
	<div class="snap-drawer snap-drawer-right">
		<?php get_template_part('templates/book'); ?>
	</div>
</aside>


<?php get_footer(); ?>
