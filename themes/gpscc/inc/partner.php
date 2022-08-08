<?php


function prefix_partner()
{

    $labels = array(
        'name'              => __('Partners', 'gpscc'),
        'singular_name'     => __('Partner', 'gpscc', 'gpscc'),
        'add_new'           => _x('Add new Partner', 'gpscc'),
        'add_new_item'      => __('Add New Partner', 'gpscc'),
        'edit_item'          => __('Edit Partner', 'gpscc'),
        'new_item'           => __('New Partner', 'gpscc'),
        'view_item'          => __('View Partner', 'gpscc'),
        'search_items'       => __('Search Partners', 'gpscc'),
        'not_found'          => __('No Partners found', 'gpscc'),
        'not_found_in_trash' => __('No Partners found in Trash', 'gpscc'),
        'parent_item_colon'  => __('Parent Partner', 'gpscc'),
        'menu_name'          => __('Partners', 'gpscc'),
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
        'menu_icon'           => 'dashicons-buddicons-buddypress-logo',
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

    register_post_type('partner', $args);
}

add_action('init', 'prefix_partner');
