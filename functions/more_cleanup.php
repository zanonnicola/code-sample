<?php
/**
 * More Clean-up
 */

if ( !function_exists('more_zero_cleanup') ) :

  function more_zero_cleanup() {

    // remove the p from around imgs (http://css-tricks.com/snippets/wordpress/remove-paragraph-tags-from-around-images/)
    function zero_filter_ptags_on_images($content){
      return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
    }

    // This removes inline width/height from images
    function remove_thumbnail_dimensions( $html ) {
        $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
        return $html;
    }

    add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );
    add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 );
    // Removes attached image sizes as well
    add_filter( 'the_content', 'remove_thumbnail_dimensions', 10 );

    // Uses WordPress filter for responsive images (max-width:100%). It gets rid of the inline style (width, height)

    add_shortcode( 'wp_caption', 'fixed_img_caption_shortcode' );
    add_shortcode( 'caption', 'fixed_img_caption_shortcode' );
 
    function fixed_img_caption_shortcode($attr, $content = null) {
         if ( ! isset( $attr['caption'] ) ) {
             if ( preg_match( '#((?:<a [^>]+>\s*)?<img [^>]+>(?:\s*</a>)?)(.*)#is', $content, $matches ) ) {
               $content = $matches[1];
               $attr['caption'] = trim( $matches[2] );
             }
         }
         $output = apply_filters( 'img_caption_shortcode', '', $attr, $content );
             if ( $output != '' )
               return $output;
           extract( shortcode_atts(array(
          'id'      => '',
          'align'   => 'alignnone',
          'width'   => '',
          'caption' => ''
          ), $attr));
           if ( 1 > (int) $width || empty($caption) )
             return $content;
           if ( $id ) $id = 'id="' . esc_attr($id) . '" ';
             return '<div ' . $id . 'class="wp-caption ' . esc_attr($align) . '" >'. do_shortcode( $content ) . '<p class="wp-caption-text">' . $caption . '</p></div>';
    }


  }//more_zero_cleanup

endif;

add_action('after_setup_theme', 'more_zero_cleanup'); 
