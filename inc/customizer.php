<?php
/**
 * Adventure Us Theme Customizer.
 *
 * @package Adventure Us
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function adventure_us_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	// remove Tagline
	$wp_customize->remove_section( 'blogdescription' );
	$wp_customize->remove_control('blogdescription');
		$wp_customize->remove_section( 'colors' );
	$wp_customize->remove_control('colors');

	// Adds Site Quote Section
	$wp_customize->add_section( 'site_quote', array(
    'title'          => __( 'Site Quote', 'themename' ),
    'priority'       => 36,
) );
	$wp_customize->add_setting( 'site_quote', array(
		  'default'        => '',
	    'type'           => 'theme_mod',
	    'capability'     => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'site_quote', array(
    'label'      => __( 'Site Quote', 'themename' ),
    'section'    => 'site_quote',
    'settings'   => 'site_quote',
    'type'       => 'text',
	) );
	// Adds Custom Logo Settings
	$wp_customize->add_section( 'site_logo', array(
		'title'          => __( 'Site Logo', 'themename' ),
		'priority'       => 35,
	) );
	$wp_customize->add_setting( 'site_logo', array(
			'default'        => '',
			'type'           => 'theme_mod',
			'capability'     => 'edit_theme_options',
	) );
	$wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'site_logo',
           array(
               'label'      => __( 'Upload a logo', 'theme_name' ),
               'section'    => 'site_logo',
               'settings'   => 'site_logo',
               'context'    => 'site_logo'
           )
       )
   );
	 // Adds Featured Title Section
 	$wp_customize->add_section( 'featured_title', array(
     'title'          => __( 'Featured Post Title', 'themename' ),
     'priority'       => 40,
 ) );
 	$wp_customize->add_setting( 'featured_title', array(
 		  'default'        => '',
 	    'type'           => 'theme_mod',
 	    'capability'     => 'edit_theme_options',
 	) );
 	$wp_customize->add_control( 'featured_title', array(
     'label'      => __( 'Featured Post Title', 'themename' ),
     'section'    => 'featured_title',
     'settings'   => 'featured_title',
     'type'       => 'text',
 	) );
	// Adds Regular Title Section
 $wp_customize->add_section( 'regular_title', array(
		'title'          => __( 'Secondary Post Title', 'themename' ),
		'priority'       => 41,
) );
 $wp_customize->add_setting( 'regular_title', array(
		 'default'        => '',
		 'type'           => 'theme_mod',
		 'capability'     => 'edit_theme_options',
 ) );
 $wp_customize->add_control( 'regular_title', array(
		'label'      => __( 'Secondary Post Title', 'themename' ),
		'section'    => 'regular_title',
		'settings'   => 'regular_title',
		'type'       => 'text',
 ) );
 // Adds Custom About me section to sidebar
 $wp_customize->add_section( 'about_me', array(
 	'title'          => __( 'About Me', 'themename' ),
 	'priority'       => 43,
 ) );
 $wp_customize->add_setting( 'about_me_image', array(
 		'default'        => '',
 		'type'           => 'theme_mod',
 		'capability'     => 'edit_theme_options',
 ) );
 $wp_customize->add_setting( 'about_me_checkbox', array(
		'default'        => '',
		'type'           => 'theme_mod',
		'capability'     => 'edit_theme_options',
 ) );
 $wp_customize->add_control( 'about_me_checkbox', array(
	 'label'      => __( 'Hide about me section in sidebar', 'themename' ),
	 'section'    => 'about_me',
	 'settings'   => 'about_me_checkbox',
	 'type'       => 'checkbox',
	 'priority'   => 0
 ) );
 $wp_customize->add_control(
 		 new WP_Customize_Image_Control(
 				 $wp_customize,
 				 'about_me_image',
 				 array(
 						 'label'      => __( 'Upload an image', 'theme_name' ),
 						 'section'    => 'about_me',
 						 'settings'   => 'about_me_image',
 						 'context'    => 'about_me_image'
 				 )
 		 )
  );
	$wp_customize->add_setting( 'about_me_title', array(
 		 'default'        => '',
 		 'type'           => 'theme_mod',
 		 'capability'     => 'edit_theme_options',
  ) );
  $wp_customize->add_control( 'about_me_title', array(
 		'label'      => __( 'About Me Title Section', 'themename' ),
 		'section'    => 'about_me',
 		'settings'   => 'about_me_title',
 		'type'       => 'text',
  ) );
	$wp_customize->add_setting( 'about_me_text', array(
		 'default'        => '',
		 'type'           => 'theme_mod',
		 'capability'     => 'edit_theme_options',
	) );
  $wp_customize->add_control( 'about_me_text', array(
 		'label'      => __( 'About Me Text', 'themename' ),
 		'section'    => 'about_me',
 		'settings'   => 'about_me_text',
 		'type'       => 'textarea',
  ) );


	// SOCIAL MEDIA BUTTONS STARTING HERE
	$wp_customize->add_section( 'socials',
		array(
			'title'		=> __('Social Icons', 'themename'),
			'priority'	=> 50
		)
	);
	$wp_customize->add_setting( 'social_checkbox_sidebar', array(
		 'default'        => '',
		 'type'           => 'theme_mod',
		 'capability'     => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'social_checkbox_sidebar', array(
		'label'      => __( 'Hide social media in sidebar', 'themename' ),
		'section'    => 'socials',
		'settings'   => 'social_checkbox_sidebar',
		'type'       => 'checkbox',
		'priority'   => 0
	) );
	$wp_customize->add_setting( 'social_checkbox_footer', array(
		 'default'        => '',
		 'type'           => 'theme_mod',
		 'capability'     => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'social_checkbox_footer', array(
		'label'      => __( 'Hide social media in footer', 'themename' ),
		'section'    => 'socials',
		'settings'   => 'social_checkbox_footer',
		'type'       => 'checkbox',
		'priority'   => 0
	) );

	$wp_customize->add_setting(
		'wi_facebook'
	);
	$wp_customize->add_control(
		'wi_facebook',
		array(
			'label'		=> __('Facebook URL', 'themename'),
			'section'	=> 'socials',
			'type'		=> 'text',
			'priority'	=> 1
		)
	);

	$wp_customize->add_setting(
		'wi_twitter'
	);
	$wp_customize->add_control(
		'wi_twitter',
		array(
			'label'		=> __('Twitter URL', 'themename'),
			'section'	=> 'socials',
			'type'		=> 'text',
			'priority'	=> 2
		)
	);

	$wp_customize->add_setting(
		'wi_flickr'
	);
	$wp_customize->add_control(
		'wi_flickr',
		array(
			'label'		=> __('Flickr URL', 'themename'),
			'section'	=> 'socials',
			'type'		=> 'text',
			'priority'	=> 5
		)
	);

	$wp_customize->add_setting(
		'wi_instagram'
	);
	$wp_customize->add_control(
		'wi_instagram',
		array(
			'label'		=> __('Instagram URL', 'themename'),
			'section'	=> 'socials',
			'type'		=> 'text',
			'priority'	=> 6
		)
	);

	$wp_customize->add_setting(
		'wi_googleplus'
	);
	$wp_customize->add_control(
		'wi_googleplus',
		array(
			'label'		=> __('Google+ URL', 'themename'),
			'section'	=> 'socials',
			'type'		=> 'text',
			'priority'	=> 7
		)
	);

	$wp_customize->add_setting(
		'wi_youtube'
	);
	$wp_customize->add_control(
		'wi_youtube',
		array(
			'label'		=> __('YouTube URL', 'themename'),
			'section'	=> 'socials',
			'type'		=> 'text',
			'priority'	=> 8
		)
	);

	$wp_customize->add_setting(
		'wi_vimeo'
	);
	$wp_customize->add_control(
		'wi_vimeo', array(
			'label'		=> __('Vimeo URL', 'themename'),
			'section'	=> 'socials',
			'type'		=> 'text',
			'priority'	=> 9
		)
	);

	$wp_customize->add_setting(
		'wi_pinterest'
	);
	$wp_customize->add_control(
		'wi_pinterest',
		array(
			'label'		=> __('Pinterest URL', 'themename'),
			'section'	=> 'socials',
			'type'		=> 'text',
			'priority'	=> 10
		)
	);

	$wp_customize->add_setting(
		'wi_linkedin'
	);
	$wp_customize->add_control(
		'wi_linkedin',
		array(
			'label'		=> __('LinkedIn URL', 'themename'),
			'section'	=> 'socials',
			'type'		=> 'text',
			'priority'	=> 12
		)
	);

	$wp_customize->add_setting(
		'wi_rss'
	);
	$wp_customize->add_control(
		'wi_rss',
		array(
			'label'		=> __('RSS URL', 'themename'),
			'section'	=> 'socials',
			'type'		=> 'text',
			'priority'	=> 13
		)
	);

	// add new section
	$wp_customize->add_section( 'theme_colors', array(
		'title' => __( 'Theme Color', 'bwpy' ),
		'priority' => 100,
	) );

	// add color picker setting
	$wp_customize->add_setting( 'theme_colors', array(
		'default' => '#b98822'
	) );

	// add color picker control
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
		'label' => 'Theme Color',
		'section' => 'theme_colors',
		'settings' => 'theme_colors',
	) ) );


}


function bwpy_customizer_head_styles() {
	$theme_color = get_theme_mod( 'theme_colors' );

	if ( $theme_color != '#b98822' ) :
	?>
		<style type="text/css">
		a, a:visited {
				color: <?php echo $theme_color; ?> !important;
			}
			nav.main-navigation li a:before, nav.main-navigation li a:after  {
				background: <?php echo $theme_color; ?>;
			}
			nav.main-navigation li a,
			nav.main-navigation li a:visited {
				color: #24232b !important;
			}
			nav.main-navigation li a:hover {
				color: <?php echo $theme_color; ?> !important;
			}
			.featured-post .entry-content .category a, .featured-post .entry-content .category a:visited,
			.regular-post .entry-content .category a, .regular-post .entry-content .category a:visited {
				color: <?php echo $theme_color; ?>;
			}
			.featured-post .entry-meta a, .featured-post .entry-meta a:visited,
			.regular-post .entry-content .entry-meta a, .regular-post .entry-content .entry-meta a:visited {
				color: <?php echo $theme_color; ?>;
			}
			.featured-post .entry-content a.readmore {
				color: <?php echo $theme_color; ?>;
				border: 2px solid <?php echo $theme_color; ?>;
			}
			.regular-post a.readmore {
				color: <?php echo $theme_color; ?>;
			}
			h2.entry-title a:hover {
				color: <?php echo $theme_color; ?>;
			}
			h2.section-title::after,
			.widget-title:after,
			.sidebar-about-me h2:after,
			.sidebar-social h2:after {
			 background: <?php echo $theme_color; ?>;
			}
			.header-search input[type="submit"],
			input[type="submit"] {
			 background: <?php echo $theme_color; ?>;
			}
			.widget li {
				color: <?php echo $theme_color; ?>;
			}


		</style>
	<?php
	endif;
}
add_action( 'wp_head', 'bwpy_customizer_head_styles' );


add_action( 'customize_register', 'adventure_us_customize_register' );


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function adventure_us_customize_preview_js() {
	wp_enqueue_script( 'adventure_us_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'adventure_us_customize_preview_js' );
