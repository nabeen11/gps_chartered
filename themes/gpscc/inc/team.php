<?php


function prefix_team()
{

    $labels = array(
        'name'              => __('Teams', 'gpscc'),
        'singular_name'     => __('Team', 'gpscc', 'gpscc'),
        'add_new'           => _x('Add new Team', 'gpscc'),
        'add_new_item'      => __('Add New Team', 'gpscc'),
        'edit_item'          => __('Edit Team', 'gpscc'),
        'new_item'           => __('New Team', 'gpscc'),
        'view_item'          => __('View Team', 'gpscc'),
        'search_items'       => __('Search Teams', 'gpscc'),
        'not_found'          => __('No Teams found', 'gpscc'),
        'not_found_in_trash' => __('No Teams found in Trash', 'gpscc'),
        'parent_item_colon'  => __('Parent Team', 'gpscc'),
        'menu_name'          => __('Teams', 'gpscc'),
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
        'menu_icon'           => 'dashicons-groups',
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

    register_post_type('team', $args);
}

add_action('init', 'prefix_team');
