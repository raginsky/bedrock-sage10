<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Disable Gutenberg Editor
 *
 * @return bool
 */
add_filter('use_block_editor_for_post', '__return_false', 10);

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});

/**
 * Disable comments on Media attachments
 * 
 * @param bool $open
 */
add_filter( 'comments_open', function ( $open, $post_id ) {
    $post = get_post( $post_id );
    if ( $post->post_type == 'attachment' ) {
        return false;
    }
    return $open;
}, 10, 2 );

/**
 * Add custom class for nested submenu items.
 *
 * @return array Modified array of CSS classes.
 */
add_filter('nav_menu_css_class', function ($classes, $item, $args, $depth) {
    if ($depth > 0) {
        $classes[] = 'child-menu-item';
    }
    return $classes;
}, 10, 4);

/**
 * Add data-tab attribute with item title for slider navigation.
 *
 * @return array Modified array of attributes.
 */
add_filter('nav_menu_link_attributes', function ($attr, $item, $args) {
    if (!empty($item->title)) {
        $attr['data-tab'] = esc_attr(strtolower($item->title));
    }
    return $attr;
}, 10, 3);

/**
 * Modify the document title based on Options page
 */
add_filter('pre_get_document_title', function ($title) {
    $custom_titles = get_field('custom_page_titles', 'option');
    $current_page_id = get_queried_object_id(); // Get the current page ID

    // Check if custom titles are available
    if (!empty($custom_titles) && is_array($custom_titles)) {
        foreach ($custom_titles as $custom_title) {
            // Match the current page ID to the target page ID in the repeater
            if (!empty($custom_title['target_page']) && (int) $custom_title['target_page'] === $current_page_id) {
                if (!empty($custom_title['custom_title'])) {
                    return $custom_title['custom_title'];
                }
            }
        }
    }

    // Fallback to the default WordPress title if no conditions are met.
    return $title;
});