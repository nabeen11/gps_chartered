<?php


function prefix_service()
{

    $labels = array(
        'name'              => __('Services', 'gpscc'),
        'singular_name'     => __('Service', 'gpscc', 'gpscc'),
        'add_new'           => _x('Add new Service', 'gpscc'),
        'add_new_item'      => __('Add New Service', 'gpscc'),
        'edit_item'          => __('Edit Service', 'gpscc'),
        'new_item'           => __('New Service', 'gpscc'),
        'view_item'          => __('View Service', 'gpscc'),
        'search_items'       => __('Search Services', 'gpscc'),
        'not_found'          => __('No Services found', 'gpscc'),
        'not_found_in_trash' => __('No Services found in Trash', 'gpscc'),
        'parent_item_colon'  => __('Parent Service', 'gpscc'),
        'menu_name'          => __('Services', 'gpscc'),
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
        'menu_icon'           => 'dashicons-admin-tools',
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

    register_post_type('service', $args);
}

add_action('init', 'prefix_service');

/**
 * Create a taxonomy
 *
 * @uses  Inserts new taxonomy object into the list
 * @uses  Adds query vars
 *
 * @param string  Name of taxonomy object
 * @param array|string  Name of the object type for the taxonomy object.
 * @param array|string  Taxonomy arguments
 * @return null|WP_Error WP_Error if errors, otherwise null.
 */

function servicetype()
{
    $labels = array(
        'name'                  => _x('Servicetypes', 'Servicetypes', 'gpscc'),
        'singular_name'         => _x('Servicetype', 'Servicetype', 'gpscc'),
        'search_items'          => __('Search Servicetypes', 'gpscc'),
        'popular_items'         => __('Popular Servicetypes', 'gpscc'),
        'all_items'             => __('All Servicetypes', 'gpscc'),
        'parent_item'           => __('Parent Servicetype', 'gpscc'),
        'parent_item_colon'     => __('Parent Servicetype', 'gpscc'),
        'edit_item'             => __('Edit Servicetype', 'gpscc'),
        'update_item'           => __('Update Servicetype', 'gpscc'),
        'add_new_item'          => __('Add New Servicetype', 'gpscc'),
        'new_item_name'         => __('New Servicetype Name', 'gpscc'),
        'add_or_remove_items'   => __('Add or remove Servicetypes', 'gpscc'),
        'choose_from_most_used' => __('Choose from most used Servicetypes', 'gpscc'),
        'menu_name'             => __('Servicetypes', 'gpscc'),
    );
    $args = array(
        'labels'            => $labels,
        'public'            => true,
        'show_in_nav_menus' => true,
        'show_admin_column' => true,
        'hierarchical'      => true,
        'show_tagcloud'     => true,
        'show_ui'           => true,
        'query_var'         => true,
        'rewrite'           => true,
        'query_var'         => true,
        'capabilities'      => array(),
    );
    register_taxonomy('servicetype', array('service'), $args);
}
add_action('init', 'servicetype');
