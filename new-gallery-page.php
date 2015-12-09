<?php 
/*
Template Name: New Gallery Page
*/
?>

<?php get_header(); ?>

<?php get_template_part('templates/nav'); ?>

<main id="panel" class="snap-content" data-snap-ignore="true">
	<?php get_template_part('templates/mobile-nav'); ?>
	<header class="filter-container">
		<div class="wrapper">
			<?php
				$children = wp_list_pages('title_li=&child_of=11&echo=0');
			  	if ($children) {
			    	echo "<ul>$children</ul>";
			  	}
			?>
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
					                <img class="lazy" width="400" height="400" src="<?php bloginfo('template_url'); ?>/img/gif.gif" data-src="<?php echo $image['sizes']['zero-thumb-400']; ?>" alt="<?php echo $image['alt']; ?>" />
					                <noscript>
					                	<img src="<?php echo $image['sizes']['zero-thumb-400']; ?>" alt="<?php echo $image['alt']; ?>" />
					                </noscript>
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
