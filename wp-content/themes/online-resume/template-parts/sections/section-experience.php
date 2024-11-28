<section id="experience-section" class="experience-area home-experience">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="heading">
                    <h2><?php echo esc_html(get_theme_mod('experience_heading','EXPERIENCE')); ?></h2>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="box">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <div class="ybx">
                                <h4><?php echo esc_html(get_theme_mod('experience_1yeartext', '2011 engineering software')); ?></h4>
                                <p><?php echo esc_html(get_theme_mod('experience_1universityname', 'University of studies')); ?></p>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12">
                            <div class="ourtbx"> 
                                <div class="row">
                                    <?php for($p=1; $p<2; $p++) { ?>
                                    <?php if( get_theme_mod('experience'.$p,false)) { ?>
                                    <?php $querycolumns = new WP_query('page_id='.get_theme_mod('experience'.$p,true)); ?>
                                    <?php while( $querycolumns->have_posts() ) : $querycolumns->the_post(); 
                                    $image = wp_get_attachment_image_src(get_post_thumbnail_id() , true); ?>

                                    <div class="box-space ">
                                        <div class="threebox box<?php echo esc_attr( $p ) ?> <?php if($p % 3 == 0) { echo "last_column"; } ?>">    
                                            <div class="part-2">
                                                <a href="<?php echo esc_url( get_permalink() ); ?>">
                                                    <h3 class="title"><?php the_title_attribute(); ?></h3>
                                                </a>
                                                <div class="description"><?php the_excerpt(); ?></div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endwhile;
                                wp_reset_postdata(); ?>
                                <?php } } ?>
                                <div class="clear"></div> 
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <div class="ybx">
                                <h4><?php echo esc_html(get_theme_mod('experience_2yeartext', '2013 engineering software')); ?></h4>
                                <p><?php echo esc_html(get_theme_mod('experience_2universityname', 'University of studies')); ?></p>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12">
                            <div class="ourtbx"> 
                                <div class="row">
                                    <?php for($p=2; $p<3; $p++) { ?>
                                    <?php if( get_theme_mod('experience'.$p,false)) { ?>
                                    <?php $querycolumns = new WP_query('page_id='.get_theme_mod('experience'.$p,true)); ?>
                                    <?php while( $querycolumns->have_posts() ) : $querycolumns->the_post(); 
                                    $image = wp_get_attachment_image_src(get_post_thumbnail_id() , true); ?>

                                    <div class="box-space ">
                                        <div class="threebox box<?php echo esc_attr( $p ) ?> <?php if($p % 3 == 0) { echo "last_column"; } ?>">    
                                            <div class="part-2">
                                                <a href="<?php echo esc_url( get_permalink() ); ?>">
                                                    <h3 class="title"><?php the_title_attribute(); ?></h3>
                                                </a>
                                                <div class="description"><?php the_excerpt(); ?></div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endwhile;
                                wp_reset_postdata(); ?>
                                <?php } } ?>
                                <div class="clear"></div> 
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <div class="ybx">
                                <h4><?php echo esc_html(get_theme_mod('experience_3yeartext', '2018 engineering software')); ?></h4>
                                <p><?php echo esc_html(get_theme_mod('experience_3universityname', 'University of studies')); ?></p>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12">
                            <div class="ourtbx"> 
                                <div class="row">
                                    <?php for($p=3; $p<4; $p++) { ?>
                                    <?php if( get_theme_mod('experience'.$p,false)) { ?>
                                    <?php $querycolumns = new WP_query('page_id='.get_theme_mod('experience'.$p,true)); ?>
                                    <?php while( $querycolumns->have_posts() ) : $querycolumns->the_post(); 
                                    $image = wp_get_attachment_image_src(get_post_thumbnail_id() , true); ?>

                                    <div class="box-space ">
                                        <div class="threebox box<?php echo esc_attr( $p ) ?> <?php if($p % 3 == 0) { echo "last_column"; } ?>">    
                                            <div class="part-2">
                                                <a href="<?php echo esc_url( get_permalink() ); ?>">
                                                    <h3 class="title"><?php the_title_attribute(); ?></h3>
                                                </a>
                                                <div class="description"><?php the_excerpt(); ?></div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endwhile;
                                wp_reset_postdata(); ?>
                                <?php } } ?>
                                <div class="clear"></div> 
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</section>
