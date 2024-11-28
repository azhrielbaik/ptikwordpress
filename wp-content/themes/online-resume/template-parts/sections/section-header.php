<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="custom-header" rel="home">
		<img src="<?php esc_url(header_image()); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr(get_bloginfo( 'title' )); ?>">
	</a>	
<?php endif;  ?>
<!-- Header Area -->

	<?php 

		// header

		$topheader_btntext = esc_attr(get_theme_mod('topheader_btntext','DOWNLOAD CV'));
		$topheader_btntextlink = esc_attr(get_theme_mod('topheader_btntextlink','#'));
		$stickyheader = esc_attr(onlineresume_sticky_menu());
	?>

<div class="main">
    <header class="main-header site-header <?php echo esc_attr(onlineresume_sticky_menu()); ?>">		
		<div class="header-section">
			<div class="container">
				<div class="btmmhead ">
					<div class=" row mr-0">
						<div class="col-lg-1 col-md-1 col-sm-12 col-12">
							
						</div>
						<div class="col-lg-11 col-md-11 col-sm-12 col-12 pd-0">
							<div class="bottomhead ">
								<div class=" row mr-0">
									<div class="col-lg-10 col-md-8 col-sm-7 ">
										<div class="menus">
											<nav class="navbar navbar-expand-lg navbaroffcanvase">
											<div class="navbar-menubar">
												<!-- Small Divice Menu-->
												<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-menu"  aria-label="<?php echo esc_attr_e('Toggle navigation','online-resume'); ?>"> 
													<i class="fa fa-bars"></i>
												</button>
												<div class="collapse navbar-collapse navbar-menu">
													<button class="navbar-toggler navbar-toggler-close" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-menu"  aria-label="<?php echo esc_attr_e('Toggle navigation','online-resume'); ?>"> 
														<i class="fa fa-times"></i>
													</button> 
													<?php 
														wp_nav_menu( 
															array(  
																'theme_location' => 'primary_menu',
																'container'  => '',
																'container_id'    => '',
																'menu_class' => 'navbar-nav main-nav',
																'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
																'walker' => new WP_Bootstrap_Navwalker()
																) 
															);
													?>
												</div>
											</div>
											</nav>
										</div>
									</div>
									<div class="col-lg-2 col-md-4 col-sm-5  pl-0">
										<?php if ($topheader_btntext) { ?>
											<div class="hbtn">
												<a class="contactus" href="<?php echo apply_filters('onlineresume_header', $topheader_btntextlink); ?>">
													<?php echo apply_filters('onlineresume_header', $topheader_btntext); ?>
												</a> 
											</div>
										<?php } ?>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </header>
	<div class="clearfix"></div>
</div>
