<?php
function onlineresume_profilepage_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	$wp_customize->add_panel(
		'onlineresume_profilepage_sections', array(
			'priority' => 32,
			'title' => esc_html__( 'Profile Page', 'online-resume' ),
		)
	);
    

    /*=========================================
	profile Section
	=========================================*/
	$wp_customize->add_section(
		'profile_setting', array(
			'title' => esc_html__( 'Profile Section', 'online-resume' ),
			'priority' => 1,
			'panel' => 'onlineresume_profilepage_sections',
		)
	);


	$wp_customize->add_setting('onlineresume_profile_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new onlineresume_Tab_Control($wp_customize, 'onlineresume_profile_tabs', array(
	   'section' => 'profile_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'online-resume'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'profile_Heading',
            	'profile_subHeading',
                'profile_title',
				'profile_photo',
				'profile_name',
				'profile_designation',
				'profile_copyrighttext',
				'profile_facebookiconlink',
				'profile_linkediniconlink',
				'profile_youtubeiconlink',
				'profile_btntext',
				'profile_btnlink'
            ),
            'active' => true,
         ), 
	      array(
            'name' => esc_html__('Style', 'online-resume'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
                'profile_bgcolor',
                'profile_headingcolor',
                'profile_titlecolor',
                'profile_namecolor',
                'profile_designationcolor',
                'profile_copyrightcolor',
                'profile_socialiconscolor',
                'profile_socialiconshrvcolor',
                'profile_buttontextcolor',
                'profile_buttonbgcolor',
                'profile_buttonbghrvcolor'

            ),
     	)
	    
    	),
	))); 


	

	// General Tab

	// profile Heading
	$profileHeading = esc_html__('HELLO', 'online-resume' );
	$wp_customize->add_setting(
		'profile_Heading',
		array(
			'default' => $profileHeading,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'profile_Heading',
		array(
			'label'   		=> __('Heading','online-resume'),
			'section'		=> 'profile_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

    
	// profile subHeading
	$profilesubHeading = esc_html__('I AM YOUR', 'online-resume' );
	$wp_customize->add_setting(
		'profile_subHeading',
		array(
			'default' => $profilesubHeading,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'profile_subHeading',
		array(
			'label'   		=> __('SubHeading','online-resume'),
			'section'		=> 'profile_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

    // profile title
	$profiletitle = esc_html__('Graphic Designer & Developer', 'online-resume' );
	$wp_customize->add_setting(
		'profile_title',
		array(
			'default' => $profiletitle,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'profile_title',
		array(
			'label'   		=> __('Title','online-resume'),
			'section'		=> 'profile_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// profile_photo
	$wp_customize->add_setting(
    	'profile_photo',
	    array(
	        'sanitize_callback' => 'esc_url_raw'
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'profile_photo',
	        array(
			    'label'   		=> __('Photo','online-resume'),
				'description'=> __('Profile Photo Size Should Be 260*260','online-resume'),
	            'section' => 'profile_setting',
	            'settings' => 'profile_photo'
	        )
	    )
	);

	// profile name
	$profilename = esc_html__('John. Smith', 'online-resume' );
	$wp_customize->add_setting(
		'profile_name',
		array(
			'default' => $profilename,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'profile_name',
		array(
			'label'   		=> __('Name','online-resume'),
			'section'		=> 'profile_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// profile designation
	$profiledesignation = esc_html__('Graphic Designer', 'online-resume' );
	$wp_customize->add_setting(
		'profile_designation',
		array(
			'default' => $profiledesignation,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'profile_designation',
		array(
			'label'   		=> __('Designation','online-resume'),
			'section'		=> 'profile_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// profile copyrighttext
	$profilecopyrighttext = esc_html__('© 2023 Designer. All Rights Reserved', 'online-resume' );
	$wp_customize->add_setting(
		'profile_copyrighttext',
		array(
			'default' => $profilecopyrighttext,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'profile_copyrighttext',
		array(
			'label'   		=> __('Copyright Text','online-resume'),
			'section'		=> 'profile_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// profile facebookiconlink
	$profilefacebookiconlink = esc_html__('#', 'online-resume' );
	$wp_customize->add_setting(
		'profile_facebookiconlink',
		array(
			'default' => $profilefacebookiconlink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'esc_url_raw',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'profile_facebookiconlink',
		array(
			'label'   		=> __('Facebook Icon Link','online-resume'),
			'section'		=> 'profile_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// profile linkediniconlink
	$profilelinkediniconlink = esc_html__('#', 'online-resume' );
	$wp_customize->add_setting(
		'profile_linkediniconlink',
		array(
			'default' => $profilelinkediniconlink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'esc_url_raw',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'profile_linkediniconlink',
		array(
			'label'   		=> __('Linkedin Icon Link','online-resume'),
			'section'		=> 'profile_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// profile youtubeiconlink
	$profileyoutubeiconlink = esc_html__('#', 'online-resume' );
	$wp_customize->add_setting(
		'profile_youtubeiconlink',
		array(
			'default' => $profileyoutubeiconlink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'esc_url_raw',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'profile_youtubeiconlink',
		array(
			'label'   		=> __('Youtube Icon Link','online-resume'),
			'section'		=> 'profile_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// profile btntext
	$profilebtntext = esc_html__('QUICK INQUIRY', 'online-resume' );
	$wp_customize->add_setting(
		'profile_btntext',
		array(
			'default' => $profilebtntext,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'profile_btntext',
		array(
			'label'   		=> __('Button Text','online-resume'),
			'section'		=> 'profile_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// profile btnlink
	$profilebtnlink = esc_html__('#', 'online-resume' );
	$wp_customize->add_setting(
		'profile_btnlink',
		array(
			'default' => $profilebtnlink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'esc_url_raw',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'profile_btnlink',
		array(
			'label'   		=> __('Button Link','online-resume'),
			'section'		=> 'profile_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

    //style

    // profile bg Color
	$profilebgcolor = esc_html__('#fff', 'online-resume' );
	$wp_customize->add_setting(
    	'profile_bgcolor',
    	array(
			'default' => $profilebgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'profile_bgcolor',
		array(
		    'label'   		=> __('BG Color','online-resume'),
		    'section'		=> 'profile_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

    //heading color
    $profileheadingcolor = esc_html__('#000', 'online-resume' );
	$wp_customize->add_setting(
    	'profile_headingcolor',
    	array(
			'default' => $profileheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'profile_headingcolor',
		array(
		    'label'   		=> __('Heading Color','online-resume'),
		    'section'		=> 'profile_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

    //title color
    $profiletitlecolor = esc_html__('#3A3A3A', 'online-resume' );
	$wp_customize->add_setting(
    	'profile_titlecolor',
    	array(
			'default' => $profiletitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'profile_titlecolor',
		array(
		    'label'   		=> __('Title Color','online-resume'),
		    'section'		=> 'profile_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

    //name color
    $profilenamecolor = esc_html__('#3A3A3A', 'online-resume' );
	$wp_customize->add_setting(
    	'profile_namecolor',
    	array(
			'default' => $profilenamecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'profile_namecolor',
		array(
		    'label'   		=> __('Name Color','online-resume'),
		    'section'		=> 'profile_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

     //designation color
     $profiledesignationcolor = esc_html__('#3A3A3A', 'online-resume' );
     $wp_customize->add_setting(
         'profile_designationcolor',
         array(
             'default' => $profiledesignationcolor,
             'capability'     	=> 'edit_theme_options',
             'sanitize_callback' => 'wp_kses_post',
             'priority'      => 3,
         )
     );	
 
     $wp_customize->add_control( 
         'profile_designationcolor',
         array(
             'label'   		=> __('Designation Color','online-resume'),
             'section'		=> 'profile_setting',
             'type' 			=> 'color',
             'transport'         => $selective_refresh,
         )  
     );

    //copyright color
    $profilecopyrightcolor = esc_html__('#000', 'online-resume' );
    $wp_customize->add_setting(
        'profile_copyrightcolor',
        array(
            'default' => $profilecopyrightcolor,
            'capability'     	=> 'edit_theme_options',
            'sanitize_callback' => 'wp_kses_post',
            'priority'      => 3,
        )
    );	

    $wp_customize->add_control( 
        'profile_copyrightcolor',
        array(
            'label'   		=> __('Copyright Color','online-resume'),
            'section'		=> 'profile_setting',
            'type' 			=> 'color',
            'transport'         => $selective_refresh,
        )  
    );

    //socialicons color
    $profilesocialiconscolor = esc_html__('#9F9F9F', 'online-resume' );
    $wp_customize->add_setting(
        'profile_socialiconscolor',
        array(
            'default' => $profilesocialiconscolor,
            'capability'     	=> 'edit_theme_options',
            'sanitize_callback' => 'wp_kses_post',
            'priority'      => 3,
        )
    );	

    $wp_customize->add_control( 
        'profile_socialiconscolor',
        array(
            'label'   		=> __('Social Icons Color','online-resume'),
            'section'		=> 'profile_setting',
            'type' 			=> 'color',
            'transport'         => $selective_refresh,
        )  
    );

    //socialiconshrv color
    $profilesocialiconshrvcolor = esc_html__('#243984', 'online-resume' );
    $wp_customize->add_setting(
        'profile_socialiconshrvcolor',
        array(
            'default' => $profilesocialiconshrvcolor,
            'capability'     	=> 'edit_theme_options',
            'sanitize_callback' => 'wp_kses_post',
            'priority'      => 3,
        )
    );	

    $wp_customize->add_control( 
        'profile_socialiconshrvcolor',
        array(
            'label'   		=> __('Social Icons Hover Color','online-resume'),
            'section'		=> 'profile_setting',
            'type' 			=> 'color',
            'transport'         => $selective_refresh,
        )  
    );

    //buttontext color
    $profilebuttontextcolor = esc_html__('#fff', 'online-resume' );
    $wp_customize->add_setting(
        'profile_buttontextcolor',
        array(
            'default' => $profilebuttontextcolor,
            'capability'     	=> 'edit_theme_options',
            'sanitize_callback' => 'wp_kses_post',
            'priority'      => 3,
        )
    );	

    $wp_customize->add_control( 
        'profile_buttontextcolor',
        array(
            'label'   		=> __('Button Text Color','online-resume'),
            'section'		=> 'profile_setting',
            'type' 			=> 'color',
            'transport'         => $selective_refresh,
        )  
    );

    //buttonbg color
    $profilebuttonbgcolor = esc_html__('#243984', 'online-resume' );
    $wp_customize->add_setting(
        'profile_buttonbgcolor',
        array(
            'default' => $profilebuttonbgcolor,
            'capability'     	=> 'edit_theme_options',
            'sanitize_callback' => 'wp_kses_post',
            'priority'      => 3,
        )
    );	

    $wp_customize->add_control( 
        'profile_buttonbgcolor',
        array(
            'label'   		=> __('Button BG Color','online-resume'),
            'section'		=> 'profile_setting',
            'type' 			=> 'color',
            'transport'         => $selective_refresh,
        )  
    );

    //buttonbghrv color
    $profilebuttonbghrvcolor = esc_html__('#9F9F9F', 'online-resume' );
    $wp_customize->add_setting(
        'profile_buttonbghrvcolor',
        array(
            'default' => $profilebuttonbghrvcolor,
            'capability'     	=> 'edit_theme_options',
            'sanitize_callback' => 'wp_kses_post',
            'priority'      => 3,
        )
    );	

    $wp_customize->add_control( 
        'profile_buttonbghrvcolor',
        array(
            'label'   		=> __('Button BG Hover Color','online-resume'),
            'section'		=> 'profile_setting',
            'type' 			=> 'color',
            'transport'         => $selective_refresh,
        )  
    );
 

}

add_action( 'customize_register', 'onlineresume_profilepage_setting' );
