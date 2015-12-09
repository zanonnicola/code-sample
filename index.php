<?php 
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>

<?php get_template_part('templates/nav'); ?>

<main id="panel" class="snap-content" data-snap-ignore="true">
	<?php get_template_part('templates/mobile-nav'); ?>
	<header class="header-container">
		<div class="wrapper">
			<h1><?php single_post_title(); ?></h1>
			<ul class="post-categories">
				<li class="cat-selected"><a href="<?php echo get_page_link(13); ?>">All</a></li>
				<?php
					$args = array(
					  'orderby' => 'name',
					  'exclude' => 1,
					  'parent' => 0,
					  'hide_empty' => 0 // Toggles the display of categories with no posts
					  );

					$categories = get_categories( $args );
					foreach ( $categories as $category ) {
						echo '<li><a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a></li>';
					}
				?>
			</ul>
		</div>
	</header>
	<section class="page-blog_content">
		<div class="wrapper">
			<div class="grid-blog">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="blog-col col-1-2">
						<article class="blog-content">
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<?php the_post_thumbnail('zero-thumb-500'); ?>
							<p class="match"><?php  echo get_excerpt() ?>... <a href="<?php the_permalink(); ?>">read more</a></p>
							<div class="blog-info">
								<?php $category = get_the_category(); ?>
								<a href="<?php echo get_category_link($category[0]->term_id ) ?>"><?php echo $category[0]->cat_name; ?></a>
								<span>Posted on: <?php the_date('d M Y'); ?></span>
							</div>
						</article>
					</div>
				<?php endwhile; ?>
			</div>
			<section class="pagiation">
				<?php
					/* ------------------------------------------------------------------*/
					/* PAGINATION */
					/* ------------------------------------------------------------------*/
					 
					global $wp_query;
					$total = $wp_query->max_num_pages;
					// only bother with the rest if we have more than 1 page!
					if ( $total > 1 )  {
					     // get the current page
					     if ( !$current_page = get_query_var('paged') )
					          $current_page = 1;
					     // structure of "format" depends on whether we're using pretty permalinks
					     if( get_option('permalink_structure') ) {
						     $format = '?paged=%#%';
					     } else {
						     $format = 'page/%#%/';
					     }
					     echo paginate_links(array(
					          'base'     => get_pagenum_link(1) . '%_%',
					          'format'   => $format,
					          'current'  => $current_page,
					          'total'    => $total,
					          'mid_size' => 4,
					          'type'     => 'list'
					     ));
					}
				?>
			</section>
			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
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
