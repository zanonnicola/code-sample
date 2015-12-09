<div class="overlay overlay-hugeinc">
	<button type="button" class="overlay-close">Close</button>
	<nav>
		<?php 
		  if ( has_nav_menu( 'primary-nav' ) ) { 
		    wp_nav_menu( array( 
		      'theme_location' => 'primary-nav', 
		      'container' => false,
		      'before' => '',                                 // before the menu
		      'after' => '',                                  // after the menu
		      'link_before' => '',                            // before each link
		      'link_after' => '',                             // after each link
		      'depth' => 0  
		      ) 
		    ); 
		  }
		?>
	</nav>
</div>