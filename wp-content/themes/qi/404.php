<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

get_header( 'simple' );

// Include content template.
qi_template_part( 'content', 'templates/content', '404' );

get_footer( 'simple' );
