<?php 
/*
Template Name: Private Page
*/
?>

<?php get_header(); ?>

<?php get_template_part('templates/nav'); ?>

<main id="panel" class="snap-content" data-snap-ignore="true">
	<?php get_template_part('templates/mobile-nav'); ?>
	<header class="hero-image hero-image__private">
		<div class="hero-image__content">
			<h1><?php the_title(); ?></h1>
			<h2>Entertain the Possibilities</h2>
		</div>
	</header>
	<section class="page-content">
		<div class="wrapper">
			<div class="grid">
				<div class="grid-col col-1-2">
					<h3 class="menu-intro">Whatever the occasion, from signing contracts over a working lunch or raising a toast at a family celebration, our three smart rooms provide the perfect backdrop to private dining.</h3>
					<p class="paragraph2">
						Choose The Theodore Roosevelt Room for exclusive use of a private bar and a dedicated barman or for more intimate gatherings reserve the Liberty or Churchill dining rooms. Alternatively, book one or two floors of the restaurant for private hire.
					</p>
					<a class="link" href="<?php echo get_page_link(11); ?>">View Private Spaces</a>
				</div>
				<div class="grid-col col-1-2">
					<img src="<?php bloginfo('template_url'); ?>/img/private-dining2.jpg" alt="Private Dininig">
				</div>
			</div>
			<div class="sw-table">
				<h4 class="sub-heading">Private event room capacities</h4>
				<div class="scroller">
					<table class="table">
						<thead>
							<tr>
							  <th></th>
							  <th>Roosevelt Room</th>
							  <th>Churchill Room</th>
							  <th>Liberty Room</th>
							  <th>Ground Floor</th>
							  <th>Main Room</th>
							</tr>
						</thead>
						<tbody>
							<tr>
							  <td>Seated</td>
							  <td>50</td>
							  <td>28</td>
							  <td>25</td>
							  <td>116</td>
							  <td>182</td>
							</tr>
							<tr>
							  <td>Standing</td>
							  <td>60</td>
							  <td>40</td>
							  <td>30</td>
							  <td>130</td>
							  <td>240</td>
							</tr>
							<tr>
							  <td>Floor Plan</td>
							  <td><a target="_blank" href="<?php bloginfo('template_url'); ?>/pdf/TheodoreRooseveltRoom.pdf">View PDF</a></td>
							  <td><a target="_blank" href="<?php bloginfo('template_url'); ?>/pdf/ChurchillRoom.pdf">View PDF</a></td>
							  <td><a target="_blank" href="<?php bloginfo('template_url'); ?>/pdf/LibertyRoom.pdf">View PDF</a></td>
							  <td></td>
							  <td></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="grid">
				<div class="grid-col col-1-3">
					<div class="dining-menu">
						<h5 class="sub-heading">Private Dining Menus</h5>
						<ul>
							<?php

							// check if the repeater field has rows of data
							if( have_rows('menus') ):

							 	// loop through the rows of data
							    while ( have_rows('menus') ) : the_row(); ?>

									<li><a target="_blank" href="<?php the_sub_field('pdf'); ?>"><?php the_sub_field('menu_item'); ?> <span class="pdf">PDF</span></a></li>

							    <?php 

							    endwhile;

							else : ?>
								
							    	<li><a href="#0">No menus yet</a></li>

						<?php endif;

						?>
						
						</ul>
					</div>
				</div>
				<div class="grid-col col-2-3">
					<div class="form-container">
						<h5 class="sub-heading">Submit an enquiry</h5>
						<?php echo do_shortcode('[contact-form-7 id="60" title="Private Dining"]'); ?>
					</div>
				</div>
			</div>
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
