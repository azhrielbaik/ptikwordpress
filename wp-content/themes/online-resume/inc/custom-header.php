<?php
function onlineresume_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'onlineresume_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => 'fff',
		'width'                  => 2000, 
		'height'                 => 200,
		'flex-height'            => true,
		'wp-head-callback'       => 'onlineresume_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'onlineresume_custom_header_setup' );

if ( ! function_exists( 'onlineresume_header_style' ) ) :

function onlineresume_header_style() {
	$header_text_color = get_header_textcolor();



  	$experience_disable_section = esc_attr(get_theme_mod('experience_disable_section','YES'));
  	$education_disable_section = esc_attr(get_theme_mod('education_disable_section','YES'));
  	$aboutus_disable_section = esc_attr(get_theme_mod('aboutus_disable_section','YES'));


	?>
	<style type="text/css">


		<?php 
		
		?>


		.main-header .navbar .navbar-menu ul li a, .main-header .navbar .navbar-menu ul li.dropdown>a::after {
			color: <?php echo esc_attr(get_theme_mod('header_menuscolor')); ?>;
		}

		.main-header .navbar .navbar-nav > li:hover a, .main-header .navbar .navbar-nav > li.focus a, .main-header .navbar .navbar-nav > li.active a, .main-header .navbar .navbar-nav > li a.active,.main-header .navbar .navbar-menu ul li:hover.dropdown>a::after {
			color: <?php echo esc_attr(get_theme_mod('header_menushovercolor')); ?>;
		}

		.main-header .navbar .navbar-menu ul li.dropdown .sub-menu a:not(.remove) {
			color: <?php echo esc_attr(get_theme_mod('header_submenutextcolor')); ?>;
		}

		.main-header .navbar .navbar-menu ul li.dropdown .sub-menu>.dropdown:after {
			color: <?php echo esc_attr(get_theme_mod('header_submenutexticoncolor')); ?>;
		}

		.main-header .navbar .navbar-menu ul li.dropdown .sub-menu a {
			background: <?php echo esc_attr(get_theme_mod('header_submenusbgcolor')); ?>;
		}

		.main-header .navbar .navbar-menu ul li.dropdown .sub-menu a:not(.remove) {
			border-left-color: <?php echo esc_attr(get_theme_mod('header_submenusbordercolor')); ?>;
		}

		.main-header .navbar .navbar-menu ul li.dropdown .sub-menu li a:hover {
			background: <?php echo esc_attr(get_theme_mod('header_submenusbghovercolor')); ?>;
		}

		.main-header .navbar .navbar-menu ul li.dropdown .sub-menu li a:hover{
			color: <?php echo esc_attr(get_theme_mod('header_submenustxthovercolor')); ?> !important;
		}
	
		
		header a.contactus {
			color: <?php echo esc_attr(get_theme_mod('header_btntxtcolor')); ?>;
		}

		header a.contactus {
			background: <?php echo esc_attr(get_theme_mod('header_btnbgcolor')); ?>;
		}

		header a.contactus:hover {
			background: <?php echo esc_attr(get_theme_mod('header_btnbghrvcolor')); ?>;
		}
		


		/* Profile Page */

		#profile-section {
			background: <?php echo esc_attr(get_theme_mod('profile_bgcolor')); ?>;
		}

		.profile-area h4,
		.profile-area h6 {
			color: <?php echo esc_attr(get_theme_mod('profile_headingcolor')); ?>;
		}

		#profile-section .contbx h5 {
			color: <?php echo esc_attr(get_theme_mod('profile_titlecolor')); ?>;
		}

		#profile-section .detailbx h2 {
			color: <?php echo esc_attr(get_theme_mod('profile_namecolor')); ?>;
		}

		#profile-section .detailbx h4 {
			color: <?php echo esc_attr(get_theme_mod('profile_designationcolor')); ?>;
		}

		#profile-section .detailbx p {
			color: <?php echo esc_attr(get_theme_mod('profile_copyrightcolor')); ?>;
		}

		#profile-section .socialicons i {
			color: <?php echo esc_attr(get_theme_mod('profile_socialiconscolor')); ?>;
			border-color: <?php echo esc_attr(get_theme_mod('profile_socialiconscolor')); ?>;
		}

		#profile-section .socialicons i:hover {
			color: <?php echo esc_attr(get_theme_mod('profile_socialiconshrvcolor')); ?>;
			border-color: <?php echo esc_attr(get_theme_mod('profile_socialiconshrvcolor')); ?>;
		}

		#profile-section .profile-btn a {
			color: <?php echo esc_attr(get_theme_mod('profile_buttontextcolor')); ?>;
		}

		#profile-section .profile-btn a {
			background: <?php echo esc_attr(get_theme_mod('profile_buttonbgcolor')); ?>;
		}

		#profile-section .profile-btn a:hover {
			background: <?php echo esc_attr(get_theme_mod('profile_buttonbghrvcolor')); ?>;
		}



		/* Banner Section */

		#banner-section .contentbx h2 {
			color: <?php echo esc_attr(get_theme_mod('banner_headingcolor')); ?>;
		}

		#banner-section .contentbx h6 {
			color: <?php echo esc_attr(get_theme_mod('banner_subheadingcolor')); ?>;
		}

		#banner-section {
			background: <?php echo esc_attr(get_theme_mod('banner_bgcolor')); ?>;
		}


	
		/* Education Section */

		#education-section .heading h2 {
			color: <?php echo esc_attr(get_theme_mod('education_headingcolor')); ?>;
		}

		#education-section .ybx h4 {
			color: <?php echo esc_attr(get_theme_mod('education_yeartextcolor')); ?>;
		}

		#education-section .ybx p {
			color: <?php echo esc_attr(get_theme_mod('education_universitynamecolor')); ?>;
		}

		#education-section .ybx:after {
			border-color: <?php echo esc_attr(get_theme_mod('education_bordcolor')); ?>;
		}

		#education-section .part-2 h3 {
			color: <?php echo esc_attr(get_theme_mod('education_boxtitlecolor')); ?>;
		}

		#education-section .part-2 p {
			color: <?php echo esc_attr(get_theme_mod('education_boxdescriptioncolor')); ?>;
		}

		
		/* Experience Section */

		#experience-section .heading h2 {
			color: <?php echo esc_attr(get_theme_mod('experience_headingcolor')); ?>;
		}

		#experience-section .ybx h4 {
			color: <?php echo esc_attr(get_theme_mod('experience_yeartextcolor')); ?>;
		}

		#experience-section .ybx p {
			color: <?php echo esc_attr(get_theme_mod('experience_universitynamecolor')); ?>;
		}

		#experience-section .ybx:after {
			border-color: <?php echo esc_attr(get_theme_mod('experience_bordcolor')); ?>;
		}

		#experience-section .part-2 h3 {
			color: <?php echo esc_attr(get_theme_mod('experience_boxtitlecolor')); ?>;
		}

		#experience-section .part-2 p {
			color: <?php echo esc_attr(get_theme_mod('experience_boxdescriptioncolor')); ?>;
		}


		/* about us */
		
		#aboutus-section .imgbx h4 {
			color: <?php echo esc_attr(get_theme_mod('aboutus_titlecolor')); ?>;
		}

		#aboutus-section .imgbx p {
			color: <?php echo esc_attr(get_theme_mod('aboutus_descriptioncolor')); ?>;
		}

		#aboutus-section .contbox h4 span {
			color: <?php echo esc_attr(get_theme_mod('aboutus_yearofexpreincenumcolor')); ?>;
		}

		#aboutus-section .contbox h4 {
			color: <?php echo esc_attr(get_theme_mod('aboutus_yearofexpreincetextcolor')); ?>;
		}

		#aboutus-section .contbox h3 {
			color: <?php echo esc_attr(get_theme_mod('aboutus_personalinfoheadingcolor')); ?>;
		}

		#aboutus-section .contbox h3 span {
			color: <?php echo esc_attr(get_theme_mod('aboutus_personalinfotitlecolor')); ?>;
		}

		#aboutus-section .contbox h3 a:hover span {
			color: <?php echo esc_attr(get_theme_mod('aboutus_personalinfotitlehrvcolor')); ?>;
		}

		


		.copy-right p,.copy-right p a {
			color: <?php echo esc_attr(get_theme_mod('footer_copyrightcolor')); ?>;
		}

		.footer-area .footer-widget .w-title {
			color: <?php echo esc_attr(get_theme_mod('footer_widgettilecolor')); ?>;
		}

		.footer-area .widget_text, .footer-area .widget_text p, .wp-block-latest-comments__comment-excerpt p, .wp-block-latest-comments__comment-date, .has-avatars .wp-block-latest-comments__comment .wp-block-latest-comments__comment-excerpt, .has-avatars .wp-block-latest-comments__comment .wp-block-latest-comments__comment-meta,.footer-area .widget_block h1, .footer-area .widget_block h2, .footer-area .widget_block h3, .footer-area .widget_block h4, .footer-area .widget_block h5, .footer-area .widget_block h6,.footer-area .footer-widget .widget:not(.widget_social_widget):not(.widget_tag_cloud) li a {
			color: <?php echo esc_attr(get_theme_mod('footer_textcolor')); ?>;
		}

		.footer-area li:before, .page-template-home-template .footer-area li:before, .page .footer-area li:before, .single .footer-area li:before {
			color: <?php echo esc_attr(get_theme_mod('footer_iconcolor')); ?>;
		}

		.footer-area .footer-widget .widget:not(.widget_social_widget):not(.widget_tag_cloud) li a:hover {
			color: <?php echo esc_attr(get_theme_mod('footer_listhovercolor')); ?>;
		}

		.scroll-top i {
			color: <?php echo esc_attr(get_theme_mod('footer_scrolltotopiconcolor')); ?>;
		}

		.scroll-top {
			background: <?php echo esc_attr(get_theme_mod('footer_scrolltotopiconbgcolor')); ?>;
		}

		.scroll-top:hover {
			background: <?php echo esc_attr(get_theme_mod('footer_scrolltotopiconbghrvcolor')); ?>;
		}

		
	<?php  ?>


	<?php
		if ( ! display_header_text() ) :
	?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		else :
	?>
		.breadcrumb-section h1{
			color: #<?php echo esc_attr( $header_text_color ); ?>;
		}
	<?php endif; ?>



	<?php
        if ($experience_disable_section == 1):
	?>
		#experience-section {
			display: none;
		}
	<?php
		else :
	?>
		#experience-section {
			display: block;
		}
	<?php endif; ?>


	<?php
        if ($education_disable_section == 1):
	?>
		#education-section {
			display: none;
		}
	<?php
		else :
	?>
		#education-section {
			display: block;
		}
	<?php endif; ?>


	<?php
        if ($aboutus_disable_section == 1):
	?>
		#aboutus-section {
			display: none;
		}
	<?php
		else :
	?>
		#aboutus-section {
			display: block;
		}
	<?php endif; ?>



	</style>
	<?php
}
endif;
