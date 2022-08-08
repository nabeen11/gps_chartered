<?php


function prefix_slider()
{

    $labels = array(
        'name'              => __('Sliders', 'gpscc'),
        'singular_name'     => __('Slider', 'gpscc', 'gpscc'),
        'add_new'           => _x('Add new Slider', 'gpscc'),
        'add_new_item'      => __('Add New Slider', 'gpscc'),
        'edit_item'          => __('Edit Slider', 'gpscc'),
        'new_item'           => __('New Slider', 'gpscc'),
        'view_item'          => __('View Slider', 'gpscc'),
        'search_items'       => __('Search Sliders', 'gpscc'),
        'not_found'          => __('No Sliders found', 'gpscc'),
        'not_found_in_trash' => __('No Sliders found in Trash', 'gpscc'),
        'parent_item_colon'  => __('Parent Slider', 'gpscc'),
        'menu_name'          => __('Sliders', 'gpscc'),
    );
    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'description'         => 'description',
        'taxonomies'          => array(),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => null,
        'menu_icon'           => 'dashicons-slides',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => true,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => true,
        'capability_type'     => 'post',
        'supports'            => array(
            'title',
            'editor',
            'author',
            'thumbnail',
            'excerpt',
            // 'custom-fields',
            'trackbacks',
            'comments',
            'revisions',
            'page-attributes',
            'post-formats',
        ),
    );

    register_post_type('slider', $args);
}

add_action('init', 'prefix_slider');
