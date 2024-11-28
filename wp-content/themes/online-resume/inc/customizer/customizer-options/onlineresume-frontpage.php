<?php
function onlineresume_blog_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	$wp_customize->add_panel(
		'onlineresume_frontpage_sections', array(
			'priority' => 32,
			'title' => esc_html__( 'Frontpage Sections', 'online-resume' ),
		)
	);
	

	
	/*=========================================
	banner Section
	=========================================*/
	$wp_customize->add_section(
		'banner_setting', array(
			'title' => esc_html__( 'Banner Section', 'online-resume' ),
			'description'=> __('<a>Note :</a> Image Size Should Be 1500*800','online-resume'),
			'priority' => 1,
			'panel' => 'onlineresume_frontpage_sections',
		)
	);


	$wp_customize->add_setting('onlineresume_banner_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new onlineresume_Tab_Control($wp_customize, 'onlineresume_banner_tabs', array(
	   'section' => 'banner_setting',
	   'priority' => 3,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'online-resume'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'banner_Heading',
            	'banner_Headingspan',
            	'banner_subHeading',
            ),
            'active' => true,
         ), 
	      array(
            'name' => esc_html__('Style', 'online-resume'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
                'banner_headingcolor',
				'banner_subheadingcolor',
				'banner_bgcolor'
            ),
     	)
	    
    	),
	))); 


	

	// General Tab

	// banner Heading
	$bannerHeading = esc_html__('HELLO I AM YOUR', 'online-resume' );
	$wp_customize->add_setting(
		'banner_Heading',
		array(
			'default' => $bannerHeading,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'banner_Heading',
		array(
			'label'   		=> __('Heading 1','online-resume'),
			'section'		=> 'banner_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// banner Heading
	$bannerbrekHeading = esc_html__('GRAPHIC DESIGNER', 'online-resume' );
	$wp_customize->add_setting(
		'banner_Headingspan',
		array(
			'default' => $bannerbrekHeading,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'banner_Headingspan',
		array(
			'label'   		=> __('Heading 2','online-resume'),
			'section'		=> 'banner_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// banner subHeading
	$bannersubHeading = esc_html__('AVAILABLE FOR FREELANCE', 'online-resume' );
	$wp_customize->add_setting(
		'banner_subHeading',
		array(
			'default' => $bannersubHeading,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'banner_subHeading',
		array(
			'label'   		=> __('SubHeading','online-resume'),
			'section'		=> 'banner_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	//style

    // banner heading Color
	$bannerheadingcolor = esc_html__('#353535', 'online-resume' );
	$wp_customize->add_setting(
    	'banner_headingcolor',
    	array(
			'default' => $bannerheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'banner_headingcolor',
		array(
		    'label'   		=> __('Heading Color','online-resume'),
		    'section'		=> 'banner_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// banner subheading Color
	$bannersubheadingcolor = esc_html__('#353535', 'online-resume' );
	$wp_customize->add_setting(
    	'banner_subheadingcolor',
    	array(
			'default' => $bannersubheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'banner_subheadingcolor',
		array(
		    'label'   		=> __('SubHeading Color','online-resume'),
		    'section'		=> 'banner_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// banner bg Color
	$bannerbgcolor = esc_html__('#f1f1f1', 'online-resume' );
	$wp_customize->add_setting(
    	'banner_bgcolor',
    	array(
			'default' => $bannerbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'banner_bgcolor',
		array(
		    'label'   		=> __('BG Color','online-resume'),
		    'section'		=> 'banner_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);



	/*=========================================
	education Section
	=========================================*/
	$wp_customize->add_section(
		'education_setting', array(
			'title' => esc_html__( 'Education Section', 'online-resume' ),
			'priority' => 2,
			'panel' => 'onlineresume_frontpage_sections',
		)
	);
	

	$wp_customize->add_setting('onlineresume_education_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new onlineresume_Tab_Control($wp_customize, 'onlineresume_education_tabs', array(
	   'section' => 'education_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'online-resume'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'education_disable_section',
				'education_heading',
            	'education1',
				'education_1yeartext',
				'education_1universityname',
            	'education2',
				'education_2yeartext',
				'education_2universityname'
            ),
            'active' => true,
         ),
	      array(
            'name' => esc_html__('Style', 'online-resume'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
            	'education_headingcolor',
				'education_yeartextcolor',
				'education_universitynamecolor',
            	'education_bordcolor',
				'education_boxtitlecolor',
				'education_boxdescriptioncolor'
            ),
     	)
	    
    	),
	))); 



	// General

	// hide show education section
	$wp_customize->add_setting(
        'education_disable_section',
        array(
            'sanitize_callback' => 'wp_kses_post',
        )
    ); 
    $wp_customize->add_control(
        new onlineresume_Toggle_Switch_Custom_Control(
            $wp_customize,
            'education_disable_section',
            array(
                'settings'      => 'education_disable_section',
                'section'       => 'education_setting',
                'label'         => __( 'Disable Section', 'online-resume' ),
                'on_off_label'  => array(
                    'on' => __( 'Yes', 'online-resume' ),
                    'off' => __( 'No', 'online-resume' )
                ),
            )
        )
    );


    // education_heading
	$educationheading = esc_html__('EDUCATION', 'online-resume' );
	$wp_customize->add_setting(
    	'education_heading',
    	array(
			'default' => $educationheading,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'education_heading',
		array(
		    'label'   		=> __('Heading','online-resume'),
		    'section'		=> 'education_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// education 1
	$wp_customize->add_setting( 
    	'education1',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'education1',
		array(
		    'label'   		=> __('Education 1','online-resume'),
		    'section'		=> 'education_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	
	
	// education_1yeartext
	$education1yeartext = esc_html__('2008', 'online-resume' );
	$wp_customize->add_setting(
    	'education_1yeartext',
    	array(
			'default' => $education1yeartext,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'education_1yeartext',
		array(
		    'label'   		=> __('Education 1 Year Text','online-resume'),
		    'section'		=> 'education_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// education_1universityname
	$education1universityname = esc_html__('University of studies', 'online-resume' );
	$wp_customize->add_setting(
    	'education_1universityname',
    	array(
			'default' => $education1universityname,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'education_1universityname',
		array(
		    'label'   		=> __('Education 1 University Name','online-resume'),
		    'section'		=> 'education_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// education 2
	$wp_customize->add_setting(
    	'education2',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 2,
		)
	);	

	$wp_customize->add_control( 
		'education2',
		array(
		    'label'   		=> __('Education 2','online-resume'),
		    'section'		=> 'education_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	

	// education_2yeartext
	$education2yeartext = esc_html__('2007', 'online-resume' );
	$wp_customize->add_setting(
    	'education_2yeartext',
    	array(
			'default' => $education2yeartext,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'education_2yeartext',
		array(
		    'label'   		=> __('Education 2 Year Text','online-resume'),
		    'section'		=> 'education_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// education_2universityname
	$education2universityname = esc_html__('University of studies', 'online-resume' );
	$wp_customize->add_setting(
    	'education_2universityname',
    	array(
			'default' => $education2universityname,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'education_2universityname',
		array(
		    'label'   		=> __('Education 2 University Name','online-resume'),
		    'section'		=> 'education_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	

	// style

	// education heading color
	$educationheadingcolor = esc_html__('#3A3A3A', 'online-resume' );
	$wp_customize->add_setting(
    	'education_headingcolor',
    	array(
			'default' => $educationheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'education_headingcolor',
		array(
		    'label'   		=> __('Heading Color','online-resume'),
		    'section'		=> 'education_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// education yeartext color
	$educationyeartextcolor = esc_html__('#243984', 'online-resume' );
	$wp_customize->add_setting(
    	'education_yeartextcolor',
    	array(
			'default' => $educationyeartextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'education_yeartextcolor',
		array(
		    'label'   		=> __('Year Text Color','online-resume'),
		    'section'		=> 'education_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// education universityname color
	$educationuniversitynamecolor = esc_html__('#a5a3a3', 'online-resume' );
	$wp_customize->add_setting(
    	'education_universitynamecolor',
    	array(
			'default' => $educationuniversitynamecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'education_universitynamecolor',
		array(
		    'label'   		=> __('University Name Color','online-resume'),
		    'section'		=> 'education_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// education bord color
	$educationbordcolor = esc_html__('#a5a3a3', 'online-resume' );
	$wp_customize->add_setting(
    	'education_bordcolor',
    	array(
			'default' => $educationbordcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'education_bordcolor',
		array(
		    'label'   		=> __('Border Color','online-resume'),
		    'section'		=> 'education_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	
	// education boxtitle color
	$educationboxtitlecolor = esc_html__('#000', 'online-resume' );
	$wp_customize->add_setting(
    	'education_boxtitlecolor',
    	array(
			'default' => $educationboxtitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'education_boxtitlecolor',
		array(
		    'label'   		=> __('Title Color','online-resume'),
		    'section'		=> 'education_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// education boxdescription color
	$educationboxdescriptioncolor = esc_html__('#969696', 'online-resume' );
	$wp_customize->add_setting(
    	'education_boxdescriptioncolor',
    	array(
			'default' => $educationboxdescriptioncolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'education_boxdescriptioncolor',
		array(
		    'label'   		=> __('Description Color','online-resume'),
		    'section'		=> 'education_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	/*=========================================
	experience Section
	=========================================*/
	$wp_customize->add_section(
		'experience_setting', array(
			'title' => esc_html__( 'Experience Section', 'online-resume' ),
			'priority' => 2,
			'panel' => 'onlineresume_frontpage_sections',
		)
	);
	

	$wp_customize->add_setting('onlineresume_experience_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new onlineresume_Tab_Control($wp_customize, 'onlineresume_experience_tabs', array(
	   'section' => 'experience_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'online-resume'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'experience_disable_section',
				'experience_heading',
            	'experience1',
				'experience_1yeartext',
				'experience_1universityname',
            	'experience2',
				'experience_2yeartext',
				'experience_2universityname',
				'experience3',
				'experience_3yeartext',
				'experience_3universityname'
            ),
            'active' => true,
         ),
	      array(
            'name' => esc_html__('Style', 'online-resume'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
            	'experience_headingcolor',
				'experience_yeartextcolor',
				'experience_universitynamecolor',
            	'experience_bordcolor',
				'experience_boxtitlecolor',
				'experience_boxdescriptioncolor'
            ),
     	)
	    
    	),
	))); 



	// General

	// hide show experience section
	$wp_customize->add_setting(
        'experience_disable_section',
        array(
            'sanitize_callback' => 'wp_kses_post',
        )
    ); 
    $wp_customize->add_control(
        new onlineresume_Toggle_Switch_Custom_Control(
            $wp_customize,
            'experience_disable_section',
            array(
                'settings'      => 'experience_disable_section',
                'section'       => 'experience_setting',
                'label'         => __( 'Disable Section', 'online-resume' ),
                'on_off_label'  => array(
                    'on' => __( 'Yes', 'online-resume' ),
                    'off' => __( 'No', 'online-resume' )
                ),
            )
        )
    );


    // experience_heading
	$experienceheading = esc_html__('Experience', 'online-resume' );
	$wp_customize->add_setting(
    	'experience_heading',
    	array(
			'default' => $experienceheading,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'experience_heading',
		array(
		    'label'   		=> __('Heading','online-resume'),
		    'section'		=> 'experience_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// experience 1
	$wp_customize->add_setting( 
    	'experience1',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'experience1',
		array(
		    'label'   		=> __('Experience 1','online-resume'),
		    'section'		=> 'experience_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	
	
	// experience_1yeartext
	$experience1yeartext = esc_html__('2011 engineering software', 'online-resume' );
	$wp_customize->add_setting(
    	'experience_1yeartext',
    	array(
			'default' => $experience1yeartext,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'experience_1yeartext',
		array(
		    'label'   		=> __('Experience 1 Year Text','online-resume'),
		    'section'		=> 'experience_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// experience_1universityname
	$experience1universityname = esc_html__('University of studies', 'online-resume' );
	$wp_customize->add_setting(
    	'experience_1universityname',
    	array(
			'default' => $experience1universityname,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'experience_1universityname',
		array(
		    'label'   		=> __('Experience 1 University Name','online-resume'),
		    'section'		=> 'experience_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// experience 2
	$wp_customize->add_setting(
    	'experience2',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 2,
		)
	);	

	$wp_customize->add_control( 
		'experience2',
		array(
		    'label'   		=> __('Experience 2','online-resume'),
		    'section'		=> 'experience_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	

	// experience_2yeartext
	$experience2yeartext = esc_html__('2013 engineering software', 'online-resume' );
	$wp_customize->add_setting(
    	'experience_2yeartext',
    	array(
			'default' => $experience2yeartext,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'experience_2yeartext',
		array(
		    'label'   		=> __('Experience 2 Year Text','online-resume'),
		    'section'		=> 'experience_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// experience_2universityname
	$experience2universityname = esc_html__('University of studies', 'online-resume' );
	$wp_customize->add_setting(
    	'experience_2universityname',
    	array(
			'default' => $experience2universityname,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'experience_2universityname',
		array(
		    'label'   		=> __('Experience 2 University Name','online-resume'),
		    'section'		=> 'experience_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// experience 3
	$wp_customize->add_setting(
    	'experience3',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'experience3',
		array(
		    'label'   		=> __('Experience 3','online-resume'),
		    'section'		=> 'experience_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	

	// experience_3yeartext
	$experience3yeartext = esc_html__('2018 engineering software', 'online-resume' );
	$wp_customize->add_setting(
    	'experience_3yeartext',
    	array(
			'default' => $experience3yeartext,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'experience_3yeartext',
		array(
		    'label'   		=> __('Experience 3 Year Text','online-resume'),
		    'section'		=> 'experience_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// experience_3universityname
	$experience3universityname = esc_html__('University of studies', 'online-resume' );
	$wp_customize->add_setting(
    	'experience_3universityname',
    	array(
			'default' => $experience3universityname,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'experience_3universityname',
		array(
		    'label'   		=> __('Experience 3 University Name','online-resume'),
		    'section'		=> 'experience_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	
	

	// style

	// experience heading color
	$experienceheadingcolor = esc_html__('#3A3A3A', 'online-resume' );
	$wp_customize->add_setting(
    	'experience_headingcolor',
    	array(
			'default' => $experienceheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'experience_headingcolor',
		array(
		    'label'   		=> __('Heading Color','online-resume'),
		    'section'		=> 'experience_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// experience yeartext color
	$experienceyeartextcolor = esc_html__('#243984', 'online-resume' );
	$wp_customize->add_setting(
    	'experience_yeartextcolor',
    	array(
			'default' => $experienceyeartextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'experience_yeartextcolor',
		array(
		    'label'   		=> __('Year Text Color','online-resume'),
		    'section'		=> 'experience_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// experience universityname color
	$experienceuniversitynamecolor = esc_html__('#a5a3a3', 'online-resume' );
	$wp_customize->add_setting(
    	'experience_universitynamecolor',
    	array(
			'default' => $experienceuniversitynamecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'experience_universitynamecolor',
		array(
		    'label'   		=> __('University Name Color','online-resume'),
		    'section'		=> 'experience_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// experience bord color
	$experiencebordcolor = esc_html__('#a5a3a3', 'online-resume' );
	$wp_customize->add_setting(
    	'experience_bordcolor',
    	array(
			'default' => $experiencebordcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'experience_bordcolor',
		array(
		    'label'   		=> __('Border Color','online-resume'),
		    'section'		=> 'experience_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	
	// experience boxtitle color
	$experienceboxtitlecolor = esc_html__('#000', 'online-resume' );
	$wp_customize->add_setting(
    	'experience_boxtitlecolor',
    	array(
			'default' => $experienceboxtitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'experience_boxtitlecolor',
		array(
		    'label'   		=> __('Title Color','online-resume'),
		    'section'		=> 'experience_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// experience boxdescription color
	$experienceboxdescriptioncolor = esc_html__('#969696', 'online-resume' );
	$wp_customize->add_setting(
    	'experience_boxdescriptioncolor',
    	array(
			'default' => $experienceboxdescriptioncolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'experience_boxdescriptioncolor',
		array(
		    'label'   		=> __('Description Color','online-resume'),
		    'section'		=> 'experience_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	/*=========================================
	aboutus Section
	=========================================*/
	$wp_customize->add_section(
		'aboutus_setting', array(
			'title' => esc_html__( 'AboutUs Section', 'online-resume' ),
			'priority' => 2,
			'panel' => 'onlineresume_frontpage_sections',
		)
	);

	$wp_customize->add_setting('onlineresume_aboutus_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new onlineresume_Tab_Control($wp_customize, 'onlineresume_aboutus_tabs', array(
	   'section' => 'aboutus_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'online-resume'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
				'aboutus_disable_section',
				'aboutus_title',
				'aboutus_description',
				'aboutus_logo1',
				'aboutus_logo2',
				'aboutus_logo3',
				'aboutus_logo4',
				'aboutus_logo5',
				'aboutus_yearofexperiencenum',
				'aboutus_yearofexperiencetext',
				'aboutus_age',
				'aboutus_freelance',
				'aboutus_phoneno',
				'aboutus_residence',
				'aboutus_address',
				'aboutus_email'
            ),
            'active' => true,
		),
		array(
		'name' => esc_html__('Style', 'online-resume'),
		'icon' => 'dashicons dashicons-art',
		'fields' => array(
			'aboutus_titlecolor',
			'aboutus_descriptioncolor',
			'aboutus_yearofexpreincenumcolor',
			'aboutus_yearofexpreincetextcolor',
			'aboutus_personalinfoheadingcolor',
			'aboutus_personalinfotitlecolor',
			'aboutus_personalinfotitlehrvcolor'
		),
     	)
    	),
	))); 


	// hide show aboutus section
	$wp_customize->add_setting(
        'aboutus_disable_section',
        array(
            'sanitize_callback' => 'wp_kses_post',
        )
    ); 
    $wp_customize->add_control(
        new onlineresume_Toggle_Switch_Custom_Control(
            $wp_customize,
            'aboutus_disable_section',
            array(
                'settings'      => 'aboutus_disable_section',
                'section'       => 'aboutus_setting',
                'label'         => __( 'Disable Section', 'online-resume' ),
                'on_off_label'  => array(
                    'on' => __( 'Yes', 'online-resume' ),
                    'off' => __( 'No', 'online-resume' )
                ),
            )
        )
    );


	// aboutus_title
	$aboutustitle = esc_html__('- GRAPHIC DESIGNER', 'online-resume' );
	$wp_customize->add_setting(
    	'aboutus_title',
    	array(
			'default' => $aboutustitle,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_title',
		array(
		    'label'   		=> __('Title','online-resume'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// aboutus_description
	$aboutusdescription = esc_html__('Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer', 'online-resume' );
	$wp_customize->add_setting(
    	'aboutus_description',
    	array(
			'default' => $aboutusdescription,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_description',
		array(
		    'label'   		=> __('Description','online-resume'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// aboutus_logo1
	$wp_customize->add_setting(
    	'aboutus_logo1',
	    array(
	        'sanitize_callback' => 'esc_url_raw'
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'aboutus_logo1',
	        array(
			    'label'   		=> __('Logo 1','online-resume'),
				'description'=> __('Logo Size Should Be 162*148','online-resume'),
	            'section' => 'aboutus_setting',
	            'settings' => 'aboutus_logo1'
	        )
	    )
	);


	// aboutus_logo2
	$wp_customize->add_setting(
    	'aboutus_logo2',
	    array(
	        'sanitize_callback' => 'esc_url_raw'
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'aboutus_logo2',
	        array(
			    'label'   		=> __('Logo 2','online-resume'),
				'description'=> __('Logo Size Should Be 162*148','online-resume'),
	            'section' => 'aboutus_setting',
	            'settings' => 'aboutus_logo2'
	        )
	    )
	);

	// aboutus_logo3
	$wp_customize->add_setting(
    	'aboutus_logo3',
	    array(
	        'sanitize_callback' => 'esc_url_raw'
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'aboutus_logo3',
	        array(
			    'label'   		=> __('Logo 3','online-resume'),
				'description'=> __('Logo Size Should Be 162*148','online-resume'),
	            'section' => 'aboutus_setting',
	            'settings' => 'aboutus_logo3'
	        )
	    )
	);

	// aboutus_logo4
	$wp_customize->add_setting(
    	'aboutus_logo4',
	    array(
	        'sanitize_callback' => 'esc_url_raw'
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'aboutus_logo4',
	        array(
			    'label'   		=> __('Logo 4','online-resume'),
				'description'=> __('Logo Size Should Be 162*148','online-resume'),
	            'section' => 'aboutus_setting',
	            'settings' => 'aboutus_logo4'
	        )
	    )
	);

	// aboutus_logo5
	$wp_customize->add_setting(
    	'aboutus_logo5',
	    array(
	        'sanitize_callback' => 'esc_url_raw'
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'aboutus_logo5',
	        array(
			    'label'   		=> __('Logo 5','online-resume'),
				'description'=> __('Logo Size Should Be 162*148','online-resume'),
	            'section' => 'aboutus_setting',
	            'settings' => 'aboutus_logo5'
	        )
	    )
	);

	// aboutus_yearofexperiencenum
	$aboutusyearofexperiencenum = esc_html__('+ 10 years', 'online-resume' );
	$wp_customize->add_setting(
    	'aboutus_yearofexperiencenum',
    	array(
			'default' => $aboutusyearofexperiencenum,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_yearofexperiencenum',
		array(
		    'label'   		=> __('Year Of Experience Number','online-resume'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// aboutus_yearofexperience
	$aboutusyearofexperiencetext = esc_html__('with professional design software', 'online-resume' );
	$wp_customize->add_setting(
    	'aboutus_yearofexperiencetext',
    	array(
			'default' => $aboutusyearofexperiencetext,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_yearofexperiencetext',
		array(
		    'label'   		=> __('Year Of Experience Text','online-resume'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// aboutus_yearofexperience
	$aboutusyearofexperiencetext = esc_html__('with professional design software', 'online-resume' );
	$wp_customize->add_setting(
    	'aboutus_yearofexperiencetext',
    	array(
			'default' => $aboutusyearofexperiencetext,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_yearofexperiencetext',
		array(
		    'label'   		=> __('Year Of Experience Number','online-resume'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// aboutus age
	$aboutusage = esc_html__('24', 'online-resume' );
	$wp_customize->add_setting(
    	'aboutus_age',
    	array(
			'default' => $aboutusage,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_age',
		array(
		    'label'   		=> __('Age','online-resume'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// aboutus freelance
	$aboutusfreelance = esc_html__('Available', 'online-resume' );
	$wp_customize->add_setting(
    	'aboutus_freelance',
    	array(
			'default' => $aboutusfreelance,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_freelance',
		array(
		    'label'   		=> __('Freelance','online-resume'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// aboutus phoneno
	$aboutusphoneno = esc_html__('+1 256 254 84 56', 'online-resume' );
	$wp_customize->add_setting(
    	'aboutus_phoneno',
    	array(
			'default' => $aboutusphoneno,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_phoneno',
		array(
		    'label'   		=> __('Phone Number','online-resume'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// aboutus residence
	$aboutusresidence = esc_html__('USA', 'online-resume' );
	$wp_customize->add_setting(
    	'aboutus_residence',
    	array(
			'default' => $aboutusresidence,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_residence',
		array(
		    'label'   		=> __('Residence','online-resume'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// aboutus address
	$aboutusaddress = esc_html__('San Francisco', 'online-resume' );
	$wp_customize->add_setting(
    	'aboutus_address',
    	array(
			'default' => $aboutusaddress,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_address',
		array(
		    'label'   		=> __('Address','online-resume'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// aboutus email
	$aboutusemail = esc_html__('john.76@ example.com', 'online-resume' );
	$wp_customize->add_setting(
    	'aboutus_email',
    	array(
			'default' => $aboutusemail,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_email',
		array(
		    'label'   		=> __('Email','online-resume'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	
	//style

	
	// aboutus title Color
	$aboutustitlecolor = esc_html__('#3A3A3A', 'online-resume' );
	$wp_customize->add_setting(
    	'aboutus_titlecolor',
    	array(
			'default' => $aboutustitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_titlecolor',
		array(
		    'label'   		=> __('Title Color','online-resume'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// aboutus description Color
	$aboutusdescriptioncolor = esc_html__('#3A3A3A', 'online-resume' );
	$wp_customize->add_setting(
    	'aboutus_descriptioncolor',
    	array(
			'default' => $aboutusdescriptioncolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_descriptioncolor',
		array(
		    'label'   		=> __('Description Color','online-resume'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	
	// aboutus yearofexpreincenum Color
	$aboutusyearofexpreincenumcolor = esc_html__('#243984', 'online-resume' );
	$wp_customize->add_setting(
    	'aboutus_yearofexpreincenumcolor',
    	array(
			'default' => $aboutusyearofexpreincenumcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_yearofexpreincenumcolor',
		array(
		    'label'   		=> __('Year Of Experience Number Color','online-resume'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);
	
	// aboutus yearofexpreincetext Color
	$aboutusyearofexpreincetextcolor = esc_html__('#363636', 'online-resume' );
	$wp_customize->add_setting(
    	'aboutus_yearofexpreincetextcolor',
    	array(
			'default' => $aboutusyearofexpreincetextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_yearofexpreincetextcolor',
		array(
		    'label'   		=> __('Year Of Experience Text Color','online-resume'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// aboutus personalinfoheading Color
	$aboutuspersonalinfoheadingcolor = esc_html__('#000', 'online-resume' );
	$wp_customize->add_setting(
    	'aboutus_personalinfoheadingcolor',
    	array(
			'default' => $aboutuspersonalinfoheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_personalinfoheadingcolor',
		array(
		    'label'   		=> __('Personal Info Heading Color','online-resume'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// aboutus personalinfotitle Color
	$aboutuspersonalinfotitlecolor = esc_html__('#7e7c7c', 'online-resume' );
	$wp_customize->add_setting(
    	'aboutus_personalinfotitlecolor',
    	array(
			'default' => $aboutuspersonalinfotitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_personalinfotitlecolor',
		array(
		    'label'   		=> __('Personal Info Text Color','online-resume'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// aboutus personalinfotitlehrv Color
	$aboutuspersonalinfotitlehrvcolor = esc_html__('#243984', 'online-resume' );
	$wp_customize->add_setting(
    	'aboutus_personalinfotitlehrvcolor',
    	array(
			'default' => $aboutuspersonalinfotitlehrvcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_personalinfotitlehrvcolor',
		array(
		    'label'   		=> __('Personal Info Text Hover Color','online-resume'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	

	$wp_customize->register_control_type('onlineresume_Tab_Control');

}

add_action( 'customize_register', 'onlineresume_blog_setting' );

// feature selective refresh
function onlineresume_blog_section_partials( $wp_customize ){	
	// blog_title
	$wp_customize->selective_refresh->add_partial( 'blog_title', array(
		'selector'            => '.home-blog .title h6',
		'settings'            => 'blog_title',
		'render_callback'  => 'onlineresume_blog_title_render_callback',
	
	) );
	
	// blog_subtitle
	$wp_customize->selective_refresh->add_partial( 'blog_subtitle', array(
		'selector'            => '.home-blog .title h2',
		'settings'            => 'blog_subtitle',
		'render_callback'  => 'onlineresume_blog_subtitle_render_callback',
	
	) );
	
	// blog_description
	$wp_customize->selective_refresh->add_partial( 'blog_description', array(
		'selector'            => '.home-blog .title p',
		'settings'            => 'blog_description',
		'render_callback'  => 'onlineresume_blog_description_render_callback',
	
	) );	
	}

add_action( 'customize_register', 'onlineresume_blog_section_partials' );

// blog_title
function onlineresume_blog_title_render_callback() {
	return get_theme_mod( 'blog_title' );
}

// blog_subtitle
function onlineresume_blog_subtitle_render_callback() {
	return get_theme_mod( 'blog_subtitle' );
}

// feature description
function onlineresume_blog_description_render_callback() {
	return get_theme_mod( 'blog_description' );
}


