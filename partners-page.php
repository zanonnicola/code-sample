<?php 
/*

Template Name: Partners page

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
            <?php

				// check if the repeater field has rows of data
				if( have_rows('itmes') ):

				 	// loop through the rows of data
				    while ( have_rows('itmes') ) : the_row(); ?>

				<div class="table-grid">
	            	<div class="table-cell">
	            		<?php 
	            			$image = get_sub_field('logo'); 
	            			$alt = $image['alt'];
	            			$size = 'zero-thumb';
	            			$thumb = $image['sizes'][ $size ];

	            		?>
	            		<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>">
	            	</div>
	            	<div class="table-cell">
	            		<div class="partner">
							<h3><?php the_sub_field('title'); ?></h3>
							<?php the_sub_field('text'); ?>
							<a class="text-link" target="_blank" href="<?php the_sub_field('link'); ?>">Find Out More</a>
						</div>
	            	</div>
	            </div>
			

			<?php 

				endwhile;
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
