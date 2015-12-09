<?php 
/*
Template Name: Thank you
*/
?>

<?php get_header(); ?>

<?php get_template_part('templates/nav'); ?>

<main id="panel" class="snap-content" data-snap-ignore="true">
	<?php get_template_part('templates/mobile-nav'); ?>
	<header class="header-container">
		<div class="wrapper">
			<h1><?php the_title(); ?></h1>
		</div>
	</header>
	<article class="single-content">
		<div class="wrapper-single">
			<?php

                global $post;
                $content = $post->post_content;
                $content = apply_filters ("the_content", $post->post_content);

                if ( !empty( $content ) ) :
                    echo $content;
                endif;

            ?>
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
