<?php 
/*
Template Name: New Story Page
*/
?>

<?php get_header(); ?>

<?php get_template_part('templates/nav'); ?>

<main id="panel" class="snap-content" data-snap-ignore="true">
	<?php get_template_part('templates/mobile-nav'); ?>

	<div class="marginTop"></div>

	<?php if ( !my_wp_is_mobile() ) { ?>
	
	<div class="flexslider">
		<ul class="slides">
		   	<li>
				<div class="display-table">
					<section class="story">
						<article class="story-content">
							<h1><?php the_title(); ?></h1>
							<?php the_field('text_block_1'); ?>
							<div class="slider-nav">
								<a class="prev" href="#0"><img src="<?php bloginfo('template_url'); ?>/img/left.svg" alt="Left">Previous</a>
								<a class="next" href="#0"><img src="<?php bloginfo('template_url'); ?>/img/right.svg" alt="Right">Next</a>
							</div>
						</article>
					</section>
					<aside class="stroy-image" style="background-image: url(<?php bloginfo('template_url'); ?>/img/story/1.jpg);">
						
					</aside>
				</div>
			</li>
			<li>
				<div class="display-table">
					<section class="story">
						<article class="story-content">
							<?php the_field('text_block_2'); ?>
							<div class="slider-nav">
								<a class="prev" href="#0"><img src="<?php bloginfo('template_url'); ?>/img/left.svg" alt="Left">Previous</a>
								<a class="next" href="#0"><img src="<?php bloginfo('template_url'); ?>/img/right.svg" alt="Right">Next</a>
							</div>
						</article>
					</section>
					<aside class="stroy-image" style="background-image: url(<?php bloginfo('template_url'); ?>/img/story/2.jpg);">
						
					</aside>
				</div>
			</li>
			<li>
				<div class="display-table">
					<section class="story">
						<article class="story-content">
							<?php the_field('text_block_3'); ?>
							<div class="slider-nav">
								<a class="prev" href="#0"><img src="<?php bloginfo('template_url'); ?>/img/left.svg" alt="Left">Previous</a>
								<a class="next" href="#0"><img src="<?php bloginfo('template_url'); ?>/img/right.svg" alt="Right">Next</a>
							</div>
						</article>
					</section>
					<aside class="stroy-image" style="background-image: url(<?php bloginfo('template_url'); ?>/img/story/3.jpg);">
						
					</aside>
				</div>
			</li>
			<li>
				<div class="display-table">
					<section class="story">
						<article class="story-content">
							<?php the_field('text_block_4'); ?>
							<div class="slider-nav">
								<a class="prev" href="#0"><img src="<?php bloginfo('template_url'); ?>/img/left.svg" alt="Left">Previous</a>
								<a class="next" href="#0"><img src="<?php bloginfo('template_url'); ?>/img/right.svg" alt="Right">Next</a>
							</div>
						</article>
					</section>
					<aside class="stroy-image" style="background-image: url(<?php bloginfo('template_url'); ?>/img/story/4.jpg);">
						
					</aside>
				</div>
			</li>
		</ul>
	</div>

	<?php }  else { ?>
		<div class="display-table">
			<section class="story">
				<article class="story-content">
					<h1><?php the_title(); ?></h1>
					<?php the_field('text_block_1'); ?>
				</article>
			</section>
			<aside class="stroy-image" style="background-image: url(<?php bloginfo('template_url'); ?>/img/story/1-mobile.jpg);"></aside>
		</div>
		<div class="display-table">
			<section class="story">
				<article class="story-content">
					<?php the_field('text_block_2'); ?>
				</article>
			</section>
			<aside class="stroy-image" style="background-image: url(<?php bloginfo('template_url'); ?>/img/story/2-mobile.jpg);">
				
			</aside>
		</div>
		<div class="display-table">
			<section class="story">
				<article class="story-content">
					<?php the_field('text_block_3'); ?>
				</article>
			</section>
			<aside class="stroy-image" style="background-image: url(<?php bloginfo('template_url'); ?>/img/story/3-mobile.jpg);">
				
			</aside>
		</div>
		<div class="display-table">
			<section class="story">
				<article class="story-content">
					<?php the_field('text_block_4'); ?>
				</article>
			</section>
			<aside class="stroy-image" style="background-image: url(<?php bloginfo('template_url'); ?>/img/story/4-mobile.jpg);">
				
			</aside>
		</div>
	<?php } ?>
	<?php get_template_part('templates/footer'); ?>
</main>

<aside id="menu" class="snap-drawers">
	<div class="snap-drawer snap-drawer-right">
		<?php get_template_part('templates/book'); ?>
	</div>
</aside>


<?php get_footer(); ?>
