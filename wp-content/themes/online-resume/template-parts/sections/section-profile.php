<section id="profile-section" class="profile-area">
    <div class="contbx">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <h4><?php echo esc_html(get_theme_mod('profile_Heading', 'HELLO')); ?></h4>
                <h6><?php echo esc_html(get_theme_mod('profile_subHeading', 'I AM YOUR')); ?></h6>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <h5><?php echo esc_html(get_theme_mod('profile_title', 'Graphic Designer & Developer')); ?></h5>
            </div>
        </div>
        <?php
            $profile_photo = get_theme_mod('profile_photo'); 
        ?>
        <div class="imgbx">
        <?php 
            if(!empty($profile_photo)){
                echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($profile_photo).'"  />';
            }else{
                echo '<img src="'.get_template_directory_uri().'/assets/images/N-Profile.png" />';
            }
        ?>
    </div>
    <div class="detailbx">
        <h2><?php echo esc_html(get_theme_mod('profile_name', 'John. Smith')); ?></h2>
        <h4><?php echo esc_html(get_theme_mod('profile_designation', 'Graphic Designer')); ?></h4>
        <p><?php echo esc_html(get_theme_mod('profile_copyrighttext', '© 2023 Designer. All Rights Reserved')); ?></p>
        <div class="socialicons">
            <?php if ( get_theme_mod('profile_facebookiconlink', '#') ) : ?> 
                <a href="<?php echo esc_url(get_theme_mod('profile_facebookiconlink', '#')); ?>">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
            <?php endif; ?>
            <?php if ( get_theme_mod('profile_linkediniconlink', '#') ) : ?> 
                <a href="<?php echo esc_url(get_theme_mod('profile_linkediniconlink', '#')); ?>">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>
            <?php endif; ?>
            <?php if ( get_theme_mod('profile_youtubeiconlink', '#') ) : ?>
                <a href="<?php echo esc_url(get_theme_mod('profile_youtubeiconlink', '#')); ?>">
                    <i class="fa-brands fa-youtube"></i>
                </a>
            <?php endif; ?>
        </div>
    </div>
        <div class="profile-btn">
            <a href="<?php echo esc_url(get_theme_mod('profile_btnlink', '#')); ?>">
                <i class="fa-regular fa-envelope"></i>
                <?php echo esc_html(get_theme_mod('profile_btntext', 'QUICK INQUIRY')); ?>
            </a>
        </div>
    </div>  
</section>