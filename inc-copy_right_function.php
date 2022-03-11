<?php

function footer_copyright( $wp_customize ) {


    $wp_customize->add_section( 'id_footer_section' , array(
        'title'      =>'Footer Area',
        'priority'   => 30,
    ) );

    $wp_customize->add_setting( 'copyright_section' , array(
        'default'   => 'Copy Right by MSB Solution 2022',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( 'copyright_section', array(
        'label'      =>'Please Writer your copy right text',
        'section'    =>'id_footer_section',
        'type'       => 'text',
    ));


 }
 add_action( 'customize_register', 'footer_copyright' );






