<?php
function onlineresume_header_settings( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Header Settings Panel
	=========================================*/
	$wp_customize->add_panel( 
		'header_section', 
		array(
			'priority'      => 2,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Header', 'online-resume'),
		) 
	);

	
	/*=========================================
	Online Resume Site Identity
	=========================================*/
	$wp_customize->add_section(
        'title_tagline',
        array(
        	'priority'      => 1,
            'title' 		=> __('Site Identity','online-resume'),
			'panel'  		=> 'header_section',
			'class'         => 'disable-class' // Add your custom class here
		)
    );


   
 
	/*=========================================
	Online Resume header
	=========================================*/
	$wp_customize->add_section(
        'top_header',
        array(
        	'priority'      => 5,
            'title' 		=> __('Header','online-resume'),
			'panel'  		=> 'header_section',
		)
    );	

	
    $wp_customize->add_setting('onlineresume_top_header_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new onlineresume_Tab_Control($wp_customize, 'onlineresume_top_header_tabs', array(
	   'section' => 'top_header',
	   'priority' => 1,
	   'buttons' => array(
	      array(
     		'name' => esc_html__('General', 'online-resume'),
 			'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'hide_show_sticky',
				'topheader_btntextlink',
				'topheader_btntext'

            ),
            'active' => true,
         ),
	      array(
            'name' => esc_html__('Style', 'online-resume'),
            'icon' => 'dashicons dashicons-art',
            'fields' => array(
            	'header_menuscolor',
            	'header_menushovercolor',
            	'header_submenusbgcolor',
            	'header_submenusbordercolor',
            	'header_submenutextcolor',
				'header_submenutexticoncolor',
            	'header_submenusbghovercolor',
            	'header_submenustxthovercolor',
            	'header_btntxtcolor',
            	'header_btnbgcolor',
            	'header_btnbghrvcolor'
            ),
         )
	    
    	),
	)));


	// general setting

	// sticky header
	$wp_customize->add_setting( 'hide_show_sticky',array(
        'default' => false,
        'sanitize_callback' => 'onlineresume_switch_sanitization'
   	) );
   	$wp_customize->add_control( new onlineresume_Toggle_Switch_Custom_Control( $wp_customize, 'hide_show_sticky',array(
        'label' => __( 'Show Sticky Header','online-resume' ),
        'section' => 'top_header'
   	)));


	// topheader btntext
	$topheaderbtntext = esc_html__('DOWNLOAD CV', 'online-resume' );
	$wp_customize->add_setting(
		'topheader_btntext',
		array(
			'default' => $topheaderbtntext,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'topheader_btntext',
		array(
			'label'   		=> __('Button Text','online-resume'),
			'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// topheader btntextlink
	$topheaderbtntextlink = esc_html__('#', 'online-resume' );
	$wp_customize->add_setting(
    	'topheader_btntextlink',
    	array(
			'default' => $topheaderbtntextlink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'topheader_btntextlink',
		array(
		    'label'   		=> __('Button Link','online-resume'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);


	// Style setting


	// header menus Color
	$headermenuscolor = esc_html__('#fff', 'online-resume' );
	$wp_customize->add_setting(
    	'header_menuscolor',
    	array(
			'default' => $headermenuscolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_menuscolor',
		array(
		    'label'   		=> __('Menus Color','online-resume'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header menushover Color
	$headermenushovercolor = esc_html__('#d0cdcd', 'online-resume' );
	$wp_customize->add_setting(
    	'header_menushovercolor',
    	array(
			'default' => $headermenushovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_menushovercolor',
		array(
		    'label'   		=> __('Menus Hover & Active Color','online-resume'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	$headersubmenusbgcolor = esc_html__('#fff', 'online-resume' );
	$wp_customize->add_setting(
    	'header_submenusbgcolor',
    	array(
			'default' => $headersubmenusbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenusbgcolor',
		array(
		    'label'   		=> __('SubMenus BG Color','online-resume'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	$headersubmenusbordercolor = esc_html__('#243984', 'online-resume' );
	$wp_customize->add_setting(
    	'header_submenusbordercolor',
    	array(
			'default' => $headersubmenusbordercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenusbordercolor',
		array(
		    'label'   		=> __('SubMenus Border Color','online-resume'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);
 

	// header submenutext Color
	$headersubmenutextcolor = esc_html__('#000', 'online-resume' );
	$wp_customize->add_setting(
    	'header_submenutextcolor',
    	array(
			'default' => $headersubmenutextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenutextcolor',
		array(
		    'label'   		=> __('SubMenus Text Color','online-resume'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header submenutexticon Color
	$headersubmenutexticoncolor = esc_html__('#000', 'online-resume' );
	$wp_customize->add_setting(
    	'header_submenutexticoncolor',
    	array(
			'default' => $headersubmenutexticoncolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenutexticoncolor',
		array(
		    'label'   		=> __('SubMenus Text Icon Color','online-resume'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header submenusbghover Color
	$headersubmenusbghovercolor = esc_html__('#243984', 'online-resume' );
	$wp_customize->add_setting(
    	'header_submenusbghovercolor',
    	array(
			'default' => $headersubmenusbghovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenusbghovercolor',
		array(
		    'label'   		=> __('SubMenus BG Hover Color','online-resume'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header submenustxthover Color
	$headersubmenustxthovercolor = esc_html__('#fff', 'online-resume' );
	$wp_customize->add_setting(
    	'header_submenustxthovercolor',
    	array(
			'default' => $headersubmenustxthovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenustxthovercolor',
		array(
		    'label'   		=> __('SubMenus Text Hover Color','online-resume'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);
	

	// header btntxt Color
	$headermailtxtcolor = esc_html__('#fff', 'online-resume' );
	$wp_customize->add_setting(
    	'header_btntxtcolor',
    	array(
			'default' => $headermailtxtcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_btntxtcolor',
		array(
		    'label'   		=> __('Button Text Color','online-resume'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header btnbg Color
	$headermailtxthovercolor = esc_html__('#243984', 'online-resume' );
	$wp_customize->add_setting(
    	'header_btnbgcolor',
    	array(
			'default' => $headermailtxthovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_btnbgcolor',
		array(
		    'label'   		=> __('Button BG Color','online-resume'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);
	

	// header btnbghrv Color
	$headerbtnbghrvcolor = esc_html__('#9F9F9F', 'online-resume' );
	$wp_customize->add_setting(
    	'header_btnbghrvcolor',
    	array(
			'default' => $headerbtnbghrvcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_btnbghrvcolor',
		array(
		    'label'   		=> __('Button BG Hover Color','online-resume'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);



	$wp_customize->register_control_type('onlineresume_Tab_Control');
	$wp_customize->register_panel_type( 'onlineresume_WP_Customize_Panel' );
	$wp_customize->register_section_type( 'onlineresume_WP_Customize_Section' );

}
add_action( 'customize_register', 'onlineresume_header_settings' );



if ( class_exists( 'WP_Customize_Panel' ) ) {
  	class onlineresume_WP_Customize_Panel extends WP_Customize_Panel {
	   public $panel;
	   public $type = 'onlineresume_panel';
	   public function json() {

	      $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'type', 'panel', ) );
	      $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
	      $array['content'] = $this->get_content();
	      $array['active'] = $this->active();
	      $array['instanceNumber'] = $this->instance_number;
	      return $array;
    	}
  	}
}

if ( class_exists( 'WP_Customize_Section' ) ) {
  	class onlineresume_WP_Customize_Section extends WP_Customize_Section {
	   public $section;
	   public $type = 'onlineresume_section';
	   public function json() {

	      $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'panel', 'type', 'description_hidden', 'section', ) );
	      $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
	      $array['content'] = $this->get_content();
	      $array['active'] = $this->active();
	      $array['instanceNumber'] = $this->instance_number;

	      if ( $this->panel ) {
	        $array['customizeAction'] = sprintf( 'Customizing &#9656; %s', esc_html( $this->manager->get_panel( $this->panel )->title ) );
	      } else {
	        $array['customizeAction'] = 'Customizing';
	      }
	      return $array;
    	}
  	}
}






