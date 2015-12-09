<footer class="footer">
	<div class="wrapper">
		<div class="grid">
			<div class="grid-col col-2-3">
				<a href="tel:02073216007" class="f-link"><img src="<?php bloginfo('template_url'); ?>/img/phone.svg" alt="Call us">020 7321 6007</a>
				<a target="_blank" href="https://goo.gl/maps/tkBt8" class="f-link"><img src="<?php bloginfo('template_url'); ?>/img/location.svg" alt="Address">The Adelphi Building, 1-11 John Adam St, London wc2n 6ht, uk</a>
			</div>
			<div class="grid-col col-1-3 txt-right">
				<a class="newsletter" href="#0" id="modal">Sign Up To Our Newsletter</a>
				<div class="social">
					<a href="https://www.facebook.com/smithandwollenskylondon"><img src="<?php bloginfo('template_url'); ?>/img/facebook.svg" alt="Facebook"></a>
					<a href="https://twitter.com/sandwollenskyuk"><img src="<?php bloginfo('template_url'); ?>/img/twitter.svg" alt="Twitter"></a>
					<a href="https://instagram.com/smithwollensky/"><img src="<?php bloginfo('template_url'); ?>/img/instagram.svg" alt="Instagram"></a>
					<a href="https://www.pinterest.com/smithwollensky/london-uk/"><img src="<?php bloginfo('template_url'); ?>/img/pinterest.svg" alt="Pinterest"></a>
					<a href="#0"><img src="<?php bloginfo('template_url'); ?>/img/google.svg" alt="Google"></a>
				</div>
			</div>
		</div>
		<hr class="divider" />
		<div class="row">
			<div class="col-1-2">
				<nav class="footer-nav">
					<?php 
					  if ( has_nav_menu( 'footer-nav' ) ) { 
					    wp_nav_menu( array( 
					      'theme_location' => 'footer-nav', 
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
			<div class="col-1-2 txt-right">
				<p class="footer-copy"> &copy; <?php date('Y') ?> Smith &amp; Wollensky - All rights reserved. Website by <a href="http://www.ignitehospitality.com">Ignite Hospitality Marketing</a></p>
			</div>	
		</div>
	</div>
</footer>