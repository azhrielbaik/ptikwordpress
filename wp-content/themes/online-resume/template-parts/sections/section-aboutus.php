<section id="aboutus-section" class="aboutus-area home-aboutus">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="imgbx">
                    <h4><?php echo esc_html(get_theme_mod('aboutus_title', '- GRAPHIC DESIGNER')); ?></h4>
                    <p><?php echo esc_html(get_theme_mod('aboutus_description', 'Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer')); ?></p>
                    <div class="l_gobx">
                        <div class="l_go logo1">
                            <?php 
                                $aboutus_logo1 = get_theme_mod('aboutus_logo1'); 

                                if(!empty($aboutus_logo1)){
                                    echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($aboutus_logo1).'"  />';
                                }else{
                                    echo '<img src="'.get_template_directory_uri().'/assets/images/ps.png" />';
                                }
                            ?>
                        </div>
                        <div class="l_go logo2">
                            <?php 
                                $aboutus_logo2 = get_theme_mod('aboutus_logo2'); 

                                if(!empty($aboutus_logo2)){
                                    echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($aboutus_logo2).'"  />';
                                }else{
                                    echo '<img src="'.get_template_directory_uri().'/assets/images/ps.png" />';
                                }
                            ?>
                        </div>
                        <div class="l_go logo3">
                            <?php 
                                $aboutus_logo3 = get_theme_mod('aboutus_logo3'); 

                                if(!empty($aboutus_logo3)){
                                    echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($aboutus_logo3).'"  />';
                                }else{
                                    echo '<img src="'.get_template_directory_uri().'/assets/images/ps.png" />';
                                }
                            ?>
                        </div>
                        <div class="l_go logo4">
                            <?php 
                                $aboutus_logo4 = get_theme_mod('aboutus_logo4'); 

                                if(!empty($aboutus_logo4)){
                                    echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($aboutus_logo4).'"  />';
                                }else{
                                    echo '<img src="'.get_template_directory_uri().'/assets/images/ps.png" />';
                                }
                            ?>
                        </div>
                        <div class="l_go logo5">
                            <?php 
                                $aboutus_logo5 = get_theme_mod('aboutus_logo5'); 

                                if(!empty($aboutus_logo5)){
                                    echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($aboutus_logo5).'"  />';
                                }else{
                                    echo '<img src="'.get_template_directory_uri().'/assets/images/ps.png" />';
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="contbox">
                    <h4><span><?php echo esc_html(get_theme_mod('aboutus_yearofexperiencenum', '+ 10 years')); ?></span> <?php echo esc_html(get_theme_mod('aboutus_yearofexperiencetext', 'with professional design software')); ?></h4>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <?php if ( get_theme_mod('aboutus_age', '24') ) : ?>
                            <div class="details">
                                <h3> <?php esc_html_e('Age :','online-resume'); ?> <span> <?php echo esc_html(get_theme_mod('aboutus_age', '24')); ?> </span></h3>
                            </div>
                            <?php endif; ?>

                            <?php if ( get_theme_mod('aboutus_freelance', 'Available') ) : ?>
                                <div class="details">
                                    <h3><?php esc_html_e('Freelance :','online-resume'); ?>  <span><?php echo esc_html(get_theme_mod('aboutus_freelance', 'Available')); ?> </span></h3>
                                </div>
                            <?php endif; ?>

                            <?php if ( get_theme_mod('aboutus_phoneno', '+1 256 254 84 56') ) : ?>
                                <div class="details">
                                    <h3><?php esc_html_e('Phone :','online-resume'); ?>  <a href="tel:"><span><?php echo esc_html(get_theme_mod('aboutus_phoneno', '+1 256 254 84 56')); ?></span></a></h3>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <?php if ( get_theme_mod('aboutus_residence', 'USA') ) : ?>
                                <div class="details">
                                    <h3><?php esc_html_e('Residence :','online-resume'); ?>  <span><?php echo esc_html(get_theme_mod('aboutus_residence', 'USA')); ?> </span></h3>
                                </div>
                            <?php endif; ?>
                            
                            <?php if ( get_theme_mod('aboutus_address', 'San Francisco') ) : ?>
                                <div class="details">
                                    <h3><?php esc_html_e('Address :','online-resume'); ?> <span><?php echo esc_html(get_theme_mod('aboutus_address', 'San Francisco')); ?> </span></h3>
                                </div>
                            <?php endif; ?>

                            <?php if ( get_theme_mod('aboutus_email', 'john.76@example.com') ) : ?>
                                <div class="details">
                                    <h3><?php esc_html_e('E-mail :','online-resume'); ?>  <a href="mailto:"><span><?php echo esc_html(get_theme_mod('aboutus_email', 'john.76@example.com')); ?></span> </a></h3>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
