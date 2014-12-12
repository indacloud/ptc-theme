<?php

function ptc_theme_customizer( $wp_customize ) {

  // settings
  $wp_customize->add_setting( 'menu_logo' , array(
    'default'     => '',
    'transport'   => 'refresh',
    )
  );
  $wp_customize->add_setting( 'menu_logo_mobile' , array(
    'default'     => '',
    'transport'   => 'refresh',
    )
  );
  $wp_customize->add_setting( 'footer_logo' , array(
    'default'     => '',
    'transport'   => 'refresh',
    )
  );

  $wp_customize->add_setting( 'facebook_link' , array(
    'default'     => '',
    'transport'   => 'refresh',
    )
  );
  $wp_customize->add_setting( 'twitter_link' , array(
    'default'     => '',
    'transport'   => 'refresh',
    )
  );
  $wp_customize->add_setting( 'instagram_link' , array(
    'default'     => '',
    'transport'   => 'refresh',
    )
  );
  $wp_customize->add_setting( 'pinterest_link' , array(
    'default'     => '',
    'transport'   => 'refresh',
    )
  );
  $wp_customize->add_setting( 'linkedin_link' , array(
    'default'     => '',
    'transport'   => 'refresh',
    )
  );

  // sections
  $wp_customize->add_section( 'theme_images' , array(
    'title'      => __( 'Pictures', 'ptc' ),
    'priority'   => 30,
    )
  );
  $wp_customize->add_section( 'social' , array(
    'title'      => __( 'Social', 'ptc' ),
    'priority'   => 30,
    )
  );

  // controls
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'menu_logo', array(
    'label'        => __( 'Menu Logo', 'ptc' ),
    'section'    => 'theme_images',
    'settings'   => 'menu_logo',
    )
    )
  );
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'menu_logo_mobile', array(
    'label'        => __( 'Menu Logo for mobile', 'ptc' ),
    'section'    => 'theme_images',
    'settings'   => 'menu_logo_mobile',
    )
    )
  );
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_logo', array(
    'label'        => __( 'Footer Logo', 'ptc' ),
    'section'    => 'theme_images',
    'settings'   => 'footer_logo',
    )
    )
  );

  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'facebook_link', array(
    'label'        => __( 'Facebook page link', 'ptc' ),
    'section'    => 'social',
    'settings'   => 'facebook_link',
    'type'       => 'text'
    )
    )
  );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'twitter_link', array(
    'label'        => __( 'Twitter account link', 'ptc' ),
    'section'    => 'social',
    'settings'   => 'twitter_link',
    'type'       => 'text'
    )
    )
  );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'instagram_link', array(
    'label'        => __( 'Instagram link', 'ptc' ),
    'section'    => 'social',
    'settings'   => 'instagram_link',
    'type'       => 'text'
    )
    )
  );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pinterest_link', array(
    'label'        => __( 'Pinterest board link', 'ptc' ),
    'section'    => 'social',
    'settings'   => 'pinterest_link',
    'type'       => 'text'
    )
    )
  );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'linkedin_link', array(
    'label'        => __( 'LinkedIn profile link', 'ptc' ),
    'section'    => 'social',
    'settings'   => 'linkedin_link',
    'type'       => 'text'
    )
    )
  );

}
add_action( 'customize_register', 'ptc_theme_customizer' );

?>