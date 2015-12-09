<nav class="top-nav <?php if (is_page(11) || is_blog() || is_page_template( array('generic-page.php', 'book-page.php', 'partners-page.php' )) )  {
	echo 'stickit2';
} ?>" id="topbar">
	<div class="logo" itemscope itemtype="http://schema.org/Organization">
  		<a itemprop="url" href="<?php echo esc_url( home_url() ); ?>">
    		<img itemprop="logo" src="<?php bloginfo('template_url'); ?>/img/sw-logo.svg" alt="Smith&amp;Wollensky">
    	</a>
		</div>
		<div class="nav">
			<?php 
	      if ( has_nav_menu( 'primary-nav' ) ) { 
	        wp_nav_menu( array( 
	          'theme_location' => 'primary-nav', 
	          'container' => false,
	          'before' => '',                                 // before the menu
	          'after' => '',                                // after the menu
	          'link_before' => '',                            // before each link
	          'link_after' => '',                             // after each link
	          'depth' => 0  
	          ) 
	        ); 
	      }
	    ?>
	</div>
	<div class="book">
		<a id="book" href="#0">Book a table <img class="open-ico" src="<?php bloginfo('template_url'); ?>/img/booking_open.svg" alt="Open"></a>
	</div>
</nav>

 <?php get_template_part('templates/overlay-nav'); ?>

 <?php get_template_part("templates/modal"); ?>