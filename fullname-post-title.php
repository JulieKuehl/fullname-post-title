<?php

/*
Plugin Name: Fullname Post Title
Description: A custom plugin to automatically generate a post title using the "fullname" field from Pods.
Version: 1.0
Author: juliekuehl
Author URI: http://juliekuehl.com
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

//function agt_shortcode( $atts, $content = null ) {
//	return $content;
//}
//add_shortcode("agt", "agt_shortcode");
//
//add_filter( 'wp_insert_post_data' , 'auto_generate_title' , '99', 2 );
//function auto_generate_title( $data , $postarr )
//{
//	$title_of_post = ltrim($data['post_title']);
//	$length_of_title = strlen($title_of_post);
//	$postdata = ltrim($data['post_content']);
//	if($length_of_title<1)
//	{
//		$matchPattern = "/\[agt\](.*?)\[\/agt\]/";
//		preg_match_all($matchPattern, $postdata, $foundIt, PREG_PATTERN_ORDER);
//		if (isset($foundIt[1][0]))
//			$data['post_title'] =  $foundIt[1][0];
//		else
//			$data['post_title'] = substr($postdata,0,30);
//	}
//	return $data;
//}



function fullname_post_title_shortcode( $atts, $content = null ) {
	return $content;
}
add_shortcode("fullname_post_title", "fullname_post_title_shortcode");


function fullname_post_title_title() {

	$title_of_post = ; 	// Pods fullname
	$length_of_title = strlen($title_of_post);

	if($length_of_title < 1) {
		// use Pods fullname
	}

}

?>