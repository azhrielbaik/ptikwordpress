<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

include_once QI_INC_ROOT_DIR . '/qode-essential-addons/class-qodeessentialaddons-installation-notice.php';

foreach ( glob( QI_INC_ROOT_DIR . '/qode-essential-addons/*/include.php' ) as $module ) {
	// phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
	include_once $module;
}

foreach ( glob( QI_INC_ROOT_DIR . '/qode-essential-addons/*/shortcodes/*/include.php' ) as $module ) {
	// phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
	include_once $module;
}
