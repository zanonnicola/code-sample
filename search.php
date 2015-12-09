<?php 
/*
Template Name: Search Page
*/
?>

<?php get_header(); ?>

	<?php get_template_part('templates/nav'); ?>

	<main>

		<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		
		<?php
			// We’re just going to get the eight most recent posts using the showposts parameter
			query_posts('showposts=4');

			if ( have_posts() ) : while ( have_posts() ) : the_post();
		?>

		<h2>
			<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
		</h2>

		 <?php endwhile; else : ?>

		 <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

		 <?php endif; ?>


	</main>

<?php get_footer(); ?>

