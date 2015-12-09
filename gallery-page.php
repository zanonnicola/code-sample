<?php 
/*
Template Name: Gallery Page
*/
?>

<?php get_header(); ?>

<?php get_template_part('templates/nav'); ?>

<main id="panel" class="snap-content" data-snap-ignore="true">
	<?php get_template_part('templates/mobile-nav'); ?>
	<header class="filter-container">
		<div class="wrapper">
			<ul>
				<li><a href="#0" data-filter="all" class="filter">All</a></li>
				<li><a href="#0" data-filter=".ground-floor" class="filter">Ground Floor</a></li>
				<li><a href="#0" data-filter=".lower-floor" class="filter">Lower Floor</a></li>
				<li><a href="#0" data-filter=".food-drink" class="filter">Food &amp; Drink</a></li>
				<li><a href="#0" data-filter=".private-dining" class="filter">Private Dining</a></li>
				<li><a href="#0" data-filter=".exterior" class="filter">Exterior</a></li>
				<!-- <li><a href="#0" data-filter=".events" class="filter">Events</a></li> -->
			</ul>
		</div>
	</header>
	<section class="page-content">
		<div class="wrapper">
			<div id="mixitup" class="mixitup">
				<?php 

					$images = get_field('gallery');

					if( $images ): ?>
				        <?php foreach( $images as $image ): ?>
				            <div class="<?php echo $image['title']; ?> mix">
					            <a class="gallery-item" href="<?php echo $image['url']; ?>">
					                <img src="<?php echo $image['sizes']['zero-thumb-400']; ?>" alt="<?php echo $image['alt']; ?>" />
					            </a>
				            </div>
				        
				        <?php endforeach; ?>
					<?php endif; ?>
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
