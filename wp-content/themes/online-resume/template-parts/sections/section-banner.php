<section id="banner-section" class="banner-area">
    <div class="contentbx">
        <h2><?php echo esc_html(get_theme_mod('banner_Heading', 'HELLO I AM YOUR')); ?>
           <br> <span><?php echo esc_html(get_theme_mod('banner_Headingspan', 'GRAPHIC DESIGNER')); ?></span>
        </h2>
        <?php if ( get_theme_mod('banner_subHeading', 'AVAILABLE FOR FREELANCE') ) : ?> 
            <h6><?php echo esc_html(get_theme_mod('banner_subHeading', 'AVAILABLE FOR FREELANCE')); ?></h6>
        <?php endif; ?>
    </div>
</section>