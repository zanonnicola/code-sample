<?php 
/*
Template Name: Single
*/
?>

<?php get_header(); ?>

<?php get_template_part('templates/nav'); ?>

<main id="panel" class="snap-content" data-snap-ignore="true">
	<?php get_template_part('templates/mobile-nav'); ?>
	<header class="header-container">
		<div class="wrapper">
			<h1><?php single_post_title(); ?></h1>
			<div class="blog-info">
				<?php $category = get_the_category(); ?>
				<a href="<?php echo get_category_link($category[0]->term_id ) ?>"><?php echo $category[0]->cat_name; ?></a>
				<span><?php echo get_the_time('d M Y', $post->ID); ?></span>
			</div>
		</div>
	</header>
	<article class="single-content">
		<div class="wrapper-single">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php

				if ( has_post_thumbnail($post->ID) ) {
					the_post_thumbnail($post->ID, 'zero-thumb-500');
				}
			?>
			<?php the_content(); ?>

			<p class="postmetadata"><?php the_tags('Tags: ', ', '); ?></p>

			<?php endwhile; endif; ?>
			<div class="single-content__footer">
				<a href="<?php echo get_page_link(13); ?>">Back to all articles</a>
				<div class="share-box">
					Share: 
					<a href="javascript:window.location=%22http://www.facebook.com/sharer.php?u=%22+encodeURIComponent(document.location)+%22&#38;t=%22+encodeURIComponent(document.title)">
						<img src="<?php bloginfo('template_url'); ?>/img/fb-share.svg" alt="Facebook">
					</a>
					<a href="javascript:window.location=%22https://twitter.com/share?url=%22+encodeURIComponent(document.location)+%22&amp;text=%22+encodeURIComponent(document.title)">
						<img src="<?php bloginfo('template_url'); ?>/img/tw-share.svg" alt="Twitter">
					</a>
				</div>
			</div>
		</div>
			
	</article>
	<?php get_template_part('templates/footer'); ?>
</main>

<aside id="menu" class="snap-drawers">
	<div class="snap-drawer snap-drawer-right">
		<?php get_template_part('templates/book'); ?>
	</div>
</aside>


<?php get_footer(); ?>
