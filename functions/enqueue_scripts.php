<?php
/**
 * Enqueue JS - http://eamann.com/tech/dont-dequeue-wordpress-jquery/
 */

function is_IE() {
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') ) {
        return true;
    } else {
        return false;
    }
}


if ( !function_exists('zero_scripts') ) {

  function zero_scripts() {
    
    if (!is_admin()) {

        //Call Modernizr
        wp_register_script('modernizr', get_template_directory_uri() . '/js/libs/modernizr.dev.js', array(), null, false);
        wp_enqueue_script('modernizr');

        //Call JQuery
        wp_deregister_script('jquery');
        wp_register_script( 'jquery', '/wp-includes/js/jquery/jquery.js', '', '', true);
        wp_enqueue_script( 'jquery' );

        if (is_front_page() || is_page_template('new-story-page.php')) {
            wp_register_script('slider_js', get_template_directory_uri() . '/js/libs/slider.min.js', array('jquery'), null, true);
            wp_enqueue_script( 'slider_js' );
        }

        if ( is_page(11) || is_child(11) ) {
            wp_register_script('gallery_js', get_template_directory_uri() . '/js/libs/gallery.js', array('jquery'), null, true);
            wp_enqueue_script( 'gallery_js' );
        }

         //Call Framework js file
        wp_register_script('main_js', get_template_directory_uri() . '/js/build/concat.js', array('jquery'), '', true);
        wp_enqueue_script( 'main_js' );

         
    }

    // Setting the site URL as a global variable
    // You can use it to access the template URL in the mainJSfile
    
    $site_parameters = array(
        'site_url' => get_site_url(),
        'theme_directory' => get_template_directory_uri()
    );
    wp_localize_script( 'main_js', 'SiteParameters', $site_parameters );
    }
  }//zero_script


add_action('wp_enqueue_scripts', 'zero_scripts'); // Initiate the function

?>