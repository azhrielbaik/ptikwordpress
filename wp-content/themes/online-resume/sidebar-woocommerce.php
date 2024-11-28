<?php
/**
 * side bar template
 *
 * @package Online Resume
 */
?>
<?php if ( ! is_active_sidebar( 'online-resume-woocommerce-sidebar' ) ) {	return; } ?>
<div class="col-lg-4 pl-lg-4 my-5 order-0">
	<div class="sidebar">
		<?php dynamic_sidebar('online-resume-woocommerce-sidebar'); ?>
	</div>
</div>