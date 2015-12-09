<?php
/**
 * Helpers functions
 */

if ( !function_exists('zero_helpers') ) :	

	function zero_helpers() {

		function is_subpage() {
		  global $post;                               // load details about this page

		  if ( is_page() && $post->post_parent ) {    // test to see if the page has a parent
		      return $post->post_parent;              // return the ID of the parent post

		  } else {                                    // there is no parent so ...
		      return false;                           // ... the answer to the question is false
		  }
		}
	function string_limit_words($string, $word_limit) {
		$words = explode(' ', $string, ($word_limit + 1));
		if(count($words) > $word_limit) {
		array_pop($words);
		//add a ... at last article when more than limit word count
		echo implode(' ', $words)."..."; } else {
		//otherwise
		echo implode(' ', $words); 
	}
}

	}//zero_helpers

endif;

add_action('after_setup_theme','zero_helpers');