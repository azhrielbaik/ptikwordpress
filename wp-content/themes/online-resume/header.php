<?php
/**
 * Header file for the Online Resume theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Online Resume
 * @since 0.1
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php echo esc_url(get_bloginfo( 'pingback_url' )); ?>">
		<?php endif; ?>
		<?php wp_head(); ?>
			
	</head>
<body <?php body_class();?> > 
<?php wp_body_open(); ?>

	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'online-resume' ); ?></a>
	
	<?php 
		get_template_part('template-parts/sections/section','header'); 
		
		if ( !is_page_template( 'templates/template-frontpage.php' ) ) {
			onlineresume_breadcrumbs_style();  
		}
	?>


<div class="row bann_mbx">
	<div class="col-lg-3 col-md-4 col-sm-12 ">
		<?php 
			get_template_part('template-parts/sections/section','profile'); 
		?>
	</div>
	<div class="col-lg-9 col-md-8 col-sm-12 ">

		<div id="content" class="onlineresume-content">

		
	