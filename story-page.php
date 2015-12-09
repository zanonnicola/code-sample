<?php 
/*
Template Name: Story Page
*/
?>

<?php get_header(); ?>

<?php get_template_part('templates/nav'); ?>

<main id="panel" class="snap-content" data-snap-ignore="true">

	<?php get_template_part('templates/mobile-nav'); ?>

	<div class="container">
		<div class="section-story story-1 extra-p">
			<div class="section-story__content copy-main">
				<?php if(get_field('text_block_1')) {
					the_field("text_block_1");
				} ?>
			</div>
		</div>
		<div class="section-story story-2">
			<div class="section-story__content">
				<?php if(get_field('text_block_2')) {
					the_field("text_block_2");
				} ?>
			</div>
		</div>
		<div class="section-story story-3">
			<div class="section-story__content pos-right">
				<?php if(get_field('text_block_3')) {
					the_field("text_block_3");
				} ?>
			</div>
		</div>
		<div class="section-story story-4">
			<div class="section-story__content">
				<?php if(get_field('text_block_4')) {
					the_field("text_block_4");
				} ?>
			</div>
		</div>
	</div>

	
	<?php get_template_part('templates/footer'); ?>
</main>

<aside id="menu" class="snap-drawers">
	<div class="snap-drawer snap-drawer-right">
		<?php get_template_part('templates/book'); ?>
	</div>
</aside>


<?php get_footer(); ?>
