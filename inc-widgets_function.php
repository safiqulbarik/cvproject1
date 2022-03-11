<?php

function right_sidebar() {
    register_sidebar( array(
        'name'          => __( 'Right Sidebar' ),
        'id'            => 'msb_right_sidebar',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
        'before_widget' => '<div class="abt-1">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'right_sidebar' );

