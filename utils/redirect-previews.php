<?php
/**
 * Placeholder function for determining the frontend origin.
 *
 * @return str Frontend origin URL, i.e., http://localhost:3000.
 */
function get_frontend_origin() {
	return 'https://grosvenorhousehotel.co.uk';
}


/**
 * Customize the preview button in the WordPress admin to point to the headless client.
 *
 * @param  str $link The WordPress preview link.
 * @return str The headless WordPress preview link.
 */
function set_headless_preview_link( $link ) {
	return get_frontend_origin() . '/';
}

add_filter( 'preview_post_link', 'set_headless_preview_link' );
