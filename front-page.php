<?php 
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

<?php get_template_part('templates/nav'); ?>

<main id="panel" class="snap-content" data-snap-ignore="true">

	<?php get_template_part('templates/mobile-nav'); ?>

	<div class="container">
		<div class="flexslider">
			<ul class="slides">
			   	<li>
					<div class="vh slide-1">
						<div class="slide__content">
							<img class="hide" src="<?php bloginfo('template_url'); ?>/img/sw-logo-big.svg" alt="Smith&amp;Wollensky">
							<h1 id="showhere">The Wait Is Over</h1>
							<h2>America’s classic steakhouse, now in london</h2>
						</div>
					</div>
				</li>
				<li>
					<div class="vh slide-2">
						<div class="slide__content">
							<img class="hide" src="<?php bloginfo('template_url'); ?>/img/sw-logo-big.svg" alt="Smith&amp;Wollensky">
							<h3>USDA Prime, dry-aged steaks</h3>
							<h4>Fine Wines &amp; Classic Cocktails</h4>
						</div>
					</div>
				</li>
				<li>
					<div class="vh slide-3">
						<div class="slide__content">
							<img class="hide" src="<?php bloginfo('template_url'); ?>/img/sw-logo-big.svg" alt="Smith&amp;Wollensky">
							<h3>Premium Seafood</h3>
							<h4>Delivered Daily From The Coast</h4>
						</div>
					</div>
				</li>
			</ul>
		</div>	
	</div>

	<section class="quote">
		<div class="wrapper">
			<img src="<?php bloginfo('template_url'); ?>/img/building.jpg" alt="Smith&amp;Wollensky">
			<h5 class="cite">“A steakhouse to end all arguments”</h5>
			<img src="<?php bloginfo('template_url'); ?>/img/NYT-Logo.png" alt="New York Times">
		</div>
	</section>

	<section class="promo">
		<div class="wrapper">
			<div class="grid">
				<?php
					global $wp_query;

				    $args = array(
				      'post_type' => 'promo',
				      'post_status' => 'publish',
				      'order' => 'ASC'
				    );

				    $wp_query = new WP_Query( $args );
				    if( $wp_query->have_posts() ) {
				    	while ( $wp_query->have_posts() ) : $wp_query->the_post();
				  
				?>
				<div class="grid-col col-1-2">
					<h4 class="promo__title"><?php the_title(); ?></h4>
					<a href="<?php the_field('link'); ?>" class="promo__box" style="background-image: url(<?php the_field('image'); ?>);">
						<div class="gradient"></div>
						<div class="promo__text">
							<h5><?php the_field('title'); ?></h5>
							<h6><?php the_field('sub_title'); ?></h6>
						</div>
					</a>
				</div>
				<?php
			    	endwhile;
				    }
				    else {
				      echo 'Oh ohm no promos!';
				    }
				    wp_reset_postdata();
		  		?>
		  	</div>
		</div>
	</section>

	<div class="wrapper">
		<section class="blog-feed">
			<?php $my_query = new WP_Query( 'posts_per_page=1' );
			if ( $my_query->have_posts() ) : ?>
				<?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
					<div class="grid">
						<div class="grid-col col-1-4">
							<?php the_post_thumbnail('zero-thumb-front'); ?>
						</div>
						<div class="grid-col col-3-4">
							<?php $category = get_the_category(); ?>
							<p class="category-tag"><?php echo $category[0]->cat_name; ?></p>
							<h6><?php the_title(); ?></h6>
							<p class="excerpt"><?php echo get_sentence_by_id($post->ID); ?> <a class="read" href="<?php the_permalink(); ?>">Read More</a></p>
							<a class="view" href="<?php echo get_page_link(13); ?>">View all news &amp; events</a>
						</div>
					</div>
				<?php endwhile; ?>
			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</section>
	</div>
	<?php get_template_part('templates/footer'); ?>
</main>

<aside id="menu" class="snap-drawers">
	<div class="snap-drawer snap-drawer-right">
		<?php get_template_part('templates/book'); ?>
	</div>
</aside>


<?php get_footer(); ?>
