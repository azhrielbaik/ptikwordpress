<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

if ( ! function_exists( 'qi_include_blog_single_author_info_template' ) ) {
	/**
	 * Function which includes additional module on single posts page
	 */
	function qi_include_blog_single_author_info_template() {
		if ( is_single() ) {
			qi_template_part( 'blog', 'templates/author-info/templates/author' );
		}
	}

	// permission 15 is set to define template position.
	add_action( 'qi_action_after_blog_post_item', 'qi_include_blog_single_author_info_template', 15 );
}
