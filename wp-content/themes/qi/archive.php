<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

get_header();

// Include content template.
qi_template_part( 'content', 'templates/content', 'blog' );

get_footer();
