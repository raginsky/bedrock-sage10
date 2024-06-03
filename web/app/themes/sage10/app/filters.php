<?php

/**
 * Theme filters.
 */

namespace App;

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