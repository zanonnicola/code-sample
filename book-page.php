<?php 
/*
Template Name: Book page
*/
?>

<?php get_header(); ?>

<?php get_template_part('templates/nav'); ?>

<main id="panel" class="snap-content" data-snap-ignore="true">
	<?php get_template_part('templates/mobile-nav'); ?>
	<header class="header-container">
		<div class="wrapper">
			<h1><?php single_post_title(); ?></h1>
		</div>
	</header>
	<article class="single-content">
		<div class="wrapper-single">
			<div class="grid">
				<div class="grid-col col-1-2">
					<div class="opentable-horiz">
					  <div id="OT_searchWrapperAll">
				    	<link href="https://www.opentable.co.uk/ism/feed_transparent_vertical_alt.css" rel="stylesheet" type="text/css" /><script type="text/javascript" src="https://www.opentable.co.uk/ism/default.aspx?rid=107505&restref=107505&mode=vert-transparent-black"></script>
				    </div>
					</div>
					<style>	
						#OT_partySizeLbl, #OT_dateLbl, #OT_timeLbl {
							font-size:13px !important;
							color: #fff !important;
							font-family: "Franklin Gothic", Helvetica, Arial, sans-serif !important;
							font-style: normal !important;
							text-transform:uppercase;
						}
					</style>
				</div>
				<div class="grid-col col-1-2">
					<?php

		                global $post;
		                $content = $post->post_content;
		                $content = apply_filters ("the_content", $post->post_content);

		                if ( !empty( $content ) ) :
		                    echo $content;
		                endif;

		            ?>
				</div>
			</div>
			
            <?php

				// check if the repeater field has rows of data
				if( have_rows('itmes') ):

				 	// loop through the rows of data
				    while ( have_rows('itmes') ) : the_row(); ?>

				<div class="partner">
					<h3><?php the_sub_field('title'); ?></h3>
					<?php the_sub_field('text'); ?>
					<a class="text-link" target="_blank" href="<?php the_sub_field('link'); ?>">Find Out More</a>
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
