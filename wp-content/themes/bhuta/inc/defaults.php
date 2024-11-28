<?php
/**
 * Overwrite all of parent theme defaults to child theme.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'martanda_get_defaults' ) ) {
	/**
	 * Set default options
	 *
	 */
	function martanda_get_defaults() {
		$martanda_defaults = array(
			'fixed_side_content' => '',
			'socials_facebook_url' => '',
			'socials_twitter_url' => '',
			'socials_instagram_url' => '',
			'socials_youtube_url' => '',
			'socials_tiktok_url' => '',
			'socials_twitch_url' => '',
			'socials_tumblr_url' => '',
			'socials_pinterest_url' => '',
			'socials_linkedin_url' => '',
			'socials_custom_icon_1' => '',
			'socials_custom_icon_2' => '',
			'socials_custom_icon_3' => '',
			'socials_custom_icon_url_1' => '',
			'socials_custom_icon_url_2' => '',
			'socials_custom_icon_url_3' => '',
			'socials_mail_url' => '',
			'button_border_style' => 'solid',
			'button_border' => '3',
			'button_radius' => '50',
			'button_rotate' => '0',
			'back_to_top' => 'enable',
			'top_bar_mobile' => 'hide',
			'sticky_header' => 'disable',
			'disable_site_info' => 'enable',
			'stylish_scrollbar' => 'enable',
			'image_cursor' => 'enable',
			'def_cursor_image' => get_stylesheet_directory_uri() . '/img/image-cursor.png',
			'pointer_cursor_image' => get_stylesheet_directory_uri() . '/img/image-pointer.png',
			'text_color' => '#ffffff',
			'link_color' => '#ffffff',
			'link_color_hover' => '#eeeeee',
			'side_inside_color' => '#1e1e1e',
			'header_background_color' => '#1e1e1e',
			'header_text_color' => '#ffffff',
			'header_link_color' => '#ffffff',
			'header_link_hover_color' => '#eeeeee',
			'sticky_header_background_color' => '#1e1e1e',
			'site_title_color' => '#ffffff',
			'navigation_background_color' => '#1e1e1e',
			'navigation_text_color' => '#ffffff',
			'navigation_background_hover_color' => '#ffffff',
			'navigation_text_hover_color' => '#1e1e1e',
			'navigation_background_current_color' => '#ffffff',
			'navigation_text_current_color' => '#1e1e1e',
			'subnavigation_background_color' => '#1e1e1e',
			'subnavigation_text_color' => '#ffffff',
			'subnavigation_background_hover_color' => '#1e1e1e',
			'subnavigation_text_hover_color' => '#eeeeee',
			'subnavigation_background_current_color' => '#1e1e1e',
			'subnavigation_text_current_color' => '#ffffff',
			'form_button_background_color' => '#1e1e1e',
			'form_button_text_color' => '#ffffff',
			'form_button_background_color_hover' => '#ffffff',
			'form_button_text_color_hover' => '#1e1e1e',
			'form_button_border_color' => '#ffffff',
			'form_button_border_color_hover' => '#ffffff',
			'fixed_side_content_background_color' => '#ffffff',
			'fixed_side_content_text_color' => '#1e1e1e',
			'fixed_side_content_link_color' => '#1e1e1e',
			'fixed_side_content_link_hover_color' => '#1e1e1e',
			'back_to_top_background_color' => '#ffffff',
			'back_to_top_background_color_hover' => '#eeeeee',
			'back_to_top_text_color' => '#1e1e1e',
			'back_to_top_text_color_hover' => '#1e1e1e',
			'form_background_color' => '#ffffff',
			'form_text_color' => '#ffffff',
			'form_border_color' => '#ffffff',
			'form_background_color_focus' => '#ffffff',
			'form_text_color_focus' => '#ffffff',
			'form_border_color_focus' => '#ffffff',
			'footer_background_color' => '#1e1e1e',
			'footer_text_color' => '#ffffff',
			'footer_link_color' => '#ffffff',
			'footer_link_hover_color' => '#eeeeee',
			'scrollbar_track_color' => '#ffffff',
			'scrollbar_thumb_color' => '#1e1e1e',
			'scrollbar_thumb_hover_color' => '#1e1e1e',
			'wc_sale_sticker_background' => '#ffffff',
			'wc_sale_sticker_text' => '#1e1e1e',
			'wc_price_color' => '#ffffff',
			'wc_product_tab' => '#555555',
			'wc_product_tab_highlight' => '#1e1e1e',
			'enable_content_width' => 'disable',
			'container_width' => '1170',
			'content_top' => '2',
			'content_right' => '4',
			'content_bottom' => '2',
			'content_left' => '4',
			'mobile_content_top' => '2',
			'mobile_content_right' => '4',
			'mobile_content_bottom' => '2',
			'mobile_content_left' => '4',
			'fixed_side_margin_top' => '200',
			'fixed_side_margin_right'=> '0',
			'fixed_side_margin_bottom' => '0',
			'fixed_side_margin_left' => '0',
			'fixed_side_top' => '15',
			'fixed_side_right' => '8',
			'fixed_side_bottom' => '15',
			'fixed_side_left' => '5',
			'fixed_side_display_mobile' => false,
			'button_top' => '10',
			'button_right' => '20',
			'button_bottom' => '8',
			'button_left' => '20',
			'side_top' => '10',
			'side_right' => '10',
			'side_bottom' => '10',
			'side_left' => '10',
			'mobile_side_top' => '5',
			'mobile_side_right' => '5',
			'mobile_side_bottom' => '5',
			'mobile_side_left' => '5',
			'side_padding_radius' => '0',
			'font_body' => 'inherit',
			'font_body_category' => '',
			'font_body_variants' => '',
			'body_font_weight' => '400',
			'body_font_transform' => 'none',
			'body_font_size' => '22',
			'body_line_height' => '1.3', // no unit
			'font_site_title' => 'inherit',
			'font_site_title_category' => '',
			'font_site_title_variants' => '',
			'site_title_font_weight' => '900',
			'site_title_font_transform' => 'uppercase',
			'site_title_font_size' => '40',
			'mobile_site_title_font_size' => '25',
			'font_navigation' => 'inherit',
			'font_navigation_category' => '',
			'font_navigation_variants' => '',
			'navigation_font_weight' => '700',
			'navigation_font_transform' => 'uppercase',
			'navigation_font_size' => '20',
			'tablet_navigation_font_size' => '15',
			'mobile_navigation_font_size' => '15',
			'font_fixed_side' => 'inherit',
			'font_fixed_side_category' => '',
			'font_fixed_side_variants' => '',
			'fixed_side_font_weight' => '700',
			'fixed_side_font_transform' => 'none',
			'fixed_side_font_size' => '22',
			'font_buttons' => 'inherit',
			'font_buttons_category' => '',
			'font_buttons_variants' => '',
			'buttons_font_weight' => '700',
			'buttons_font_transform' => 'uppercase',
			'buttons_font_size' => '18',
			'font_heading_1' => 'inherit',
			'font_heading_1_category' => '',
			'font_heading_1_variants' => '',
			'heading_1_weight' => '600',
			'heading_1_transform' => 'none',
			'heading_1_font_size' => '60',
			'heading_1_line_height' => '1.2', // em
			'mobile_heading_1_font_size' => '30',
			'font_heading_2' => 'inherit',
			'font_heading_2_category' => '',
			'font_heading_2_variants' => '',
			'heading_2_weight' => '600',
			'heading_2_transform' => 'none',
			'heading_2_font_size' => '32',
			'heading_2_line_height' => '1.2', // em
			'mobile_heading_2_font_size' => '25',
			'font_heading_3' => 'inherit',
			'font_heading_3_category' => '',
			'font_heading_3_variants' => '',
			'heading_3_weight' => '600',
			'heading_3_transform' => 'none',
			'heading_3_font_size' => '25',
			'heading_3_line_height' => '1.2', // em
			'font_heading_4' => 'inherit',
			'font_heading_4_category' => '',
			'font_heading_4_variants' => '',
			'heading_4_weight' => 'normal',
			'heading_4_transform' => 'none',
			'heading_4_font_size' => '20',
			'heading_4_line_height' => '1', // em
			'font_heading_5' => 'inherit',
			'font_heading_5_category' => '',
			'font_heading_5_variants' => '',
			'heading_5_weight' => 'normal',
			'heading_5_transform' => 'none',
			'heading_5_font_size' => '20',
			'heading_5_line_height' => '1', // em
			'font_heading_6' => 'inherit',
			'font_heading_6_category' => '',
			'font_heading_6_variants' => '',
			'heading_6_weight' => 'normal',
			'heading_6_transform' => 'none',
			'heading_6_font_size' => '20',
			'heading_6_line_height' => '1', // em
			'font_footer' => 'inherit',
			'font_footer_category' => '',
			'font_footer_variants' => '',
			'footer_weight' => '500',
			'footer_transform' => 'none',
			'footer_font_size' => '18',
			'form_padding_top' => '0.8rem',
			'form_padding_right' => '1rem',
			'form_padding_bottom' => '0.8rem',
			'form_padding_left' => '1rem',
			'form_border_radius' => '0px',
			'form_border_width' => '2px',
			'form_border_style' => 'solid',
			'form_checkbox_size' => '30px',
			'form_checkbox_innersize' => '18px',
			'form_checkbox_padding' => '4px',
			'form_checkbox_bordersize' => '2px',
			'scrollbar_width' => '12px',
			'scrollbar_radius' => '0px',
		);

		return apply_filters( 'martanda_option_defaults', $martanda_defaults );
	}
}



if ( ! function_exists( 'martanda_get_default_color_palettes' ) ) {
	/**
	 * Set up our colors for the color picker palettes and filter them so you can change them.
	 *
	 */
	function martanda_get_default_color_palettes() {
		$palettes = array(
			'#1e1e1e',
			'#3e3e3e',
			'#5e5e5e',
			'#cccccc',
			'#eeeeee',
			'#ffffff'
		);

		return apply_filters( 'martanda_default_color_palettes', $palettes );
	}
}

if ( ! function_exists( 'martanda_typography_default_fonts' ) ) {
	/**
	 * Set the default system fonts.
	 *
	 */
	function martanda_typography_default_fonts() {
		$fonts = array(
			'inherit'
		);

		return apply_filters( 'martanda_typography_default_fonts', $fonts );
	}
}