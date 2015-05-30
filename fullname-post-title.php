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

/*
 * HELPFUL REFERENCES
 * https://mondaybynoon.com/pulling-pods-data/
 * http://stackoverflow.com/questions/21717159/get-custom-fields-values-in-filter-on-wp-insert-post-data
 * http://pods.io/forums/topic/need-code-sample-for-pods-custom-setting-page/
 * http://wordpress.stackexchange.com/questions/67262/change-post-title-during-post-saving-process
 */

add_filter('wp_insert_post_data', 'set_title');

function set_title( $data ) {

//	$students = pods( 'students' );
//
//	$firstname = $students->field( 'student_first_name' );
//	$lastname  = $students->field( 'student_last_name' );
//
//	var_dump( $firstname );

//	$firstname = get_field('student_first_name',$post_id);
//	$lastname = get_field('student_last_name',$post_id);
//	$post_title = $firstname . ' ' . $lastname;

	// for testing
	$post_title = "Full Name";

	$data['post_title'] = $post_title;

	return $data;

}

?>