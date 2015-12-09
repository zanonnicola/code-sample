<?php 
/*
Template Name: Find Us
*/
?>

<?php get_header(); ?>

<?php get_template_part('templates/nav'); ?>

<main id="panel" class="snap-content" data-snap-ignore="true">
	<?php get_template_part('templates/mobile-nav'); ?>
	<header class="hero-image hero-image__find">
		<div class="hero-image__content">
			<h1><?php the_title(); ?></h1>
			<h2>In the heart of central london</h2>
		</div>
	</header>
	<section class="page-content">
		<div class="wrapper">
			<div class="grid">
				<div class="grid-col col-1-2">
					<div class="map-container">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9932.755451828392!2d-0.1226493!3d51.509751!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfc4237a3af426917!2sSmith+%26+Wollensky!5e0!3m2!1sen!2suk!4v1435935987748" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						<div class="map-overlay"></div>
					</div>
					<a href="http://smithandwollensky.com/" class="link2">Learn about Smith &amp; Wollensky in the United States.</a>
				</div>
				<div class="grid-col col-1-2">
					<div class="contacts-container">
						<h3 class="sub-heading">Contact Details</h3>
						<div class="info-table">
							<div class="info-table__cell">
								<h4 class="small-heading">Phone</h4>
								<a href="tel:02073216007">020 7321 6007</a>
							</div>
							<div class="info-table__cell">
								<h4 class="small-heading">Email</h4>
								<a href="mailto:enquiries@smithandwollensky.co.uk?subject=Reservation%20Enquiry">enquiries@smithandwollensky.co.uk</a>
							</div>
						</div>
						<div class="info-table">
							<div class="info-table__cell">
								<h4 class="small-heading">Address</h4>
								<p>The Adelphi Building <br />
								1-11 John Adam St<br /> 
								London<br />
								WC2N 6HT</p>
							</div>
							<div class="info-table__cell">
								<h4 class="small-heading">Share</h4>
								<div class="sharing">
									<a href="javascript:window.location=%22http://www.facebook.com/sharer.php?u=%22+encodeURIComponent(document.location)+%22&#38;t=%22+encodeURIComponent(document.title)">
										<img style="margin-right:9px;" src="<?php bloginfo('template_url'); ?>/img/fb-find.svg" alt="Facebook"> Share on Facebook
									</a>
									<a href="javascript:window.location=%22https://twitter.com/share?url=%22+encodeURIComponent(document.location)+%22&amp;text=%22+encodeURIComponent(document.title)">
										<img src="<?php bloginfo('template_url'); ?>/img/tw-find.svg" alt="Twitter"> Share on Twitter
									</a>
								</div>
							</div>
						</div>
						<div class="info-table">
							<div class="info-table__cell">
								<h4 class="small-heading">Opening Hours</h4>
								<p><?php the_field('opening_hours'); ?></p>
							</div>
						</div>
						<p class="small-links">
							<a href="<?php echo get_page_link(96); ?>">Book a Table</a>
							<a href="<?php echo get_page_link(9); ?>">Private Event Enquiries</a>
						</p>
						
					</div>
				</div>
			</div>
			<div class="find-extra">
				<div class="grid">
					<div class="grid-col col-1-2">
						<h5 class="sub-heading">Press Enquiries</h5>
						<?php the_field('press_enquiries'); ?>
						<!-- <a href="mailto:nicky@rochecom.com">nicky@rochecom.com</a> -->
					</div>
					<div class="grid-col col-1-2">
						<h5 class="sub-heading">Getting here</h5>
						<?php the_field('getting_here'); ?>
						<!-- <a href="<?php echo get_page_link(9); ?>">Find Out More</a> -->
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
