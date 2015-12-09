<?php
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

if ( !function_exists('zero_setup') ) :

  function zero_setup() {

    // Add post thumbnails (http://codex.wordpress.org/Post_Thumbnails)
    add_theme_support('post-thumbnails');

    // default thumb size
    set_post_thumbnail_size(100, 100, true);
    add_image_size( 'zero-thumb-400', 400, 400, true );
    add_image_size( 'zero-thumb-500', 600, 425, true );
    add_image_size( 'zero-thumb-front', 772, 600, true );
    add_image_size('zero-thumb', 350, 9999); // 350px wide (and unlimited height)


    /*
    The function below adds the ability to use the dropdown menu to select
    the new images sizes you have just created from within the media manager
    when you add media to your content blocks. If you add more image sizes,
    duplicate one of the lines in the array and name it according to your
    new image size.
    */
    function zero_custom_image_sizes( $sizes ) {
      return array_merge( $sizes, array(
          'zero-thumb-front' => __('772px by 600px'),
          'zero-thumb-400' => __('400px by 400px'),
          'zero-thumb-500' => __('600px by 425px'),
      ));
    }

    add_filter( 'image_size_names_choose', 'zero_custom_image_sizes' );

  }//zero_setup

endif;

add_action('after_setup_theme', 'zero_setup');