<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

// phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
include_once QI_INC_ROOT_DIR . '/blog/helper.php';

foreach ( glob( QI_INC_ROOT_DIR . '/blog/templates/*/include.php' ) as $module ) {
	// phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
	include_once $module;
}
