<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

$video_meta = get_post_meta( get_the_ID(), 'qodef_post_format_video_url', true );

if ( ! empty( $video_meta ) ) {
	// Video player settings.
	$settings = apply_filters(
		'qi_filter_video_post_format_settings',
		array(
			// Aspect ration is 16:9.
			'width'  => 1100,
			'height' => round( 1100 * 9 / 16 ),
			'loop'   => true,
		)
	);

	$oembed = wp_oembed_get( $video_meta );
	?>
	<div class="qodef-e-media-video">
		<?php
		if ( ! empty( $oembed ) ) {
			// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			echo wp_oembed_get( $video_meta, $settings );
		} else {
			// Init video player.
			// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			echo wp_video_shortcode( array_merge( array( 'src' => esc_url( $video_meta ) ), $settings ) );
		}
		?>
	</div>
	<?php
} else {
	// Include featured image.
	qi_template_part( 'blog', 'templates/parts/post-info/image' );
}
?>
