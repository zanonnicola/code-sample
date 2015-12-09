<?php 
/*
Template Name: 404
*/
?>

<?php get_header(); ?>

<?php get_template_part('templates/nav'); ?>

<main id="panel" class="snap-content" data-snap-ignore="true">
	<?php get_template_part('templates/mobile-nav'); ?>
	<header class="header-container">
		<div class="wrapper">
			<h1>404 - Sorry!</h1>
		</div>
	</header>
	<article class="single-content">
		<div class="wrapper-single">
			<p> We couldn't find the page you were looking for. You may have mistyped the URL or the page may have moved. Head back to the <a href="<?php echo esc_url( home_url() ); ?>">homepage</a> and try again.</p>
			<div style="height:100px;"></div>
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
