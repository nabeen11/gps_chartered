<?php


function prefix_testimonial()
{

    $labels = array(
        'name'              => __('Testimonials', 'gpscc'),
        'singular_name'     => __('Testimonial', 'gpscc', 'gpscc'),
        'add_new'           => _x('Add new Testimonial', 'gpscc'),
        'add_new_item'      => __('Add New Testimonial', 'gpscc'),
        'edit_item'          => __('Edit Testimonial', 'gpscc'),
        'new_item'           => __('New Testimonial', 'gpscc'),
        'view_item'          => __('View Testimonial', 'gpscc'),
        'search_items'       => __('Search Testimonials', 'gpscc'),
        'not_found'          => __('No Testimonials found', 'gpscc'),
        'not_found_in_trash' => __('No Testimonials found in Trash', 'gpscc'),
        'parent_item_colon'  => __('Parent Testimonial', 'gpscc'),
        'menu_name'          => __('Testimonials', 'gpscc'),
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
        'menu_icon'           => 'dashicons-testimonial',
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

    register_post_type('testimonial', $args);
}

add_action('init', 'prefix_testimonial');
