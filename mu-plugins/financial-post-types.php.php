<?php


function financial_post_types(){
    register_post_type('event',array(
        'rewrite'=> array('slug' => 'events' ),
        'supports' => array('title', 'editor','excerpt'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
        'name' => "Events",
        'add_new_item' => 'Add New Event',
        'edit_item' => 'Edit Event',
        'all_items' => 'All Events',
        'singular_name' => "Event"
    ),
    'menu_icon' => 'dashicons-calendar'
));
}

add_action('init', 'financial_post_types');
         
?>
