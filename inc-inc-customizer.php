


<?php

function social_icon( $wp_customize ) {


$wp_customize->add_section( 'id_social_link' , array(
    'title'      =>'Add Social Link ',
    'priority'   => 50,
) );

$wp_customize->add_setting( 'id_fb_section' , array(
    'default'   => 'www.facebook.com',
    'transport' => 'refresh',
) );

$wp_customize->add_control( 'id_fb_section', array(
    'label'      =>'Facebook',
    'section'    =>'id_social_link',
    'type'       => 'text',
));



$wp_customize->add_setting( 'id_tw_section' , array(
    'default'   => 'www.twitter.com',
    'transport' => 'refresh',
) );

$wp_customize->add_control( 'id_tw_section', array(
    'label'      =>'Twitter',
    'section'    =>'id_social_link',
    'type'       => 'text',
));


//Add  Text Header Secction 

$wp_customize->add_setting( 'id_header_text' , array(
    'default'   => 'Wordpress MSB',
    'transport' => 'refresh',
) );

$wp_customize->add_control( 'id_header_text', array(
    'label'      =>'Drop Your Header Image Text ',
    'section'    =>'header_image',
    'type'       => 'text',
));


//Add  Text box Backgroun Color Section 

$wp_customize->add_setting( 'id_text_bg_color' , array(
    'default'   => '#333',
    'transport' => 'refresh',
) );

$wp_customize->add_control(
    new WP_Customize_Color_Control($wp_customize,'id_text_bg_color',array(
   
    'label'      =>'Pick a color',
    'section'    =>'header_image',
  
))
    );








}
add_action( 'customize_register', 'social_icon' );


?>
