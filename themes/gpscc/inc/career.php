<?php


function prefix_career()
{

    $labels = array(
        'name'              => __('Careers', 'gpscc'),
        'singular_name'     => __('Career', 'gpscc', 'gpscc'),
        'add_new'           => _x('Add new Career', 'gpscc'),
        'add_new_item'      => __('Add New Career', 'gpscc'),
        'edit_item'          => __('Edit Career', 'gpscc'),
        'new_item'           => __('New Career', 'gpscc'),
        'view_item'          => __('View Career', 'gpscc'),
        'search_items'       => __('Search Careers', 'gpscc'),
        'not_found'          => __('No Careers found', 'gpscc'),
        'not_found_in_trash' => __('No Careers found in Trash', 'gpscc'),
        'parent_item_colon'  => __('Parent Career', 'gpscc'),
        'menu_name'          => __('Careers', 'gpscc'),
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
        'menu_icon'           => 'dashicons-clipboard',
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

    register_post_type('career', $args);
}

add_action('init', 'prefix_career');
