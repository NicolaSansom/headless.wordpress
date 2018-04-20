<?php
/*
* Web hooks functions
*/

add_action( 'save_post', 'postHookLive' );

function postHookLive() {
	Requests::post('https://api.netlify.com/build_hooks/5ad65baee39e7c0b4675de2c');
}
