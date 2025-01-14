<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}
?>
<div class="qodef-e-media">
	<?php
	switch ( get_post_format() ) {
		case 'gallery':
			qi_template_part( 'qode-essential-addons/blog', 'templates/parts/post-format/gallery' );
			break;
		case 'video':
			qi_template_part( 'blog', 'templates/parts/post-format/video' );
			break;
		case 'audio':
			qi_template_part( 'blog', 'templates/parts/post-format/audio' );
			break;
		default:
			qi_template_part( 'qode-essential-addons/blog', 'templates/parts/post-info/image' );
			break;
	}
	?>
</div>
