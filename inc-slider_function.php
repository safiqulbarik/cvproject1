<?php

register_post_type('sl',
array(
'public' => true,
'labels' => array(
'name' => 'Slider',
'all_items' => 'All Sliders',
'add_new' => 'Add New Slider',
'add_new_item' =>'Add New Slider',
'featured_image' =>'Featured Slider',
'set_featured_image' =>'Set Fratured Slider'

),

'supports' => array('title', 'thumbnail','')
)
 );