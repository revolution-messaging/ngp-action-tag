<?php 

/*
 *	Plugin Name: NGP ActionTag Plugin
 *	Plugin URI: http://www.revolutionmessaging.com
 *	Description: Provide a list of available forms. 
 *	Version: 1.0 
 *	Author: Revolution Messaging
 *	Author URI: http://www.revolutionmessaging.com
 *	License: GPL2
 *
*/

$options = array();

function ngp_action_tag_menu() {

	add_options_page(
		'NGP ActionTag Plugin',
		'NGP ActionTag',
		'manage_options',
		'ngp-action-tag',
		'ngp_action_tag_options_page'
	);

}
add_action( 'admin_menu', 'ngp_action_tag_menu' );

function ngp_action_tag_options_page() {

	if( !current_user_can( 'manage_options' ) ) {
		wp_die( 'You do not have the permissions to access this page.' );
	}

	global $options;

	if( isset( $_POST['ngp_action_tag_apikey_form_submitted'] ) ) {
	
		$hidden_field = esc_html( $_POST['ngp_action_tag_apikey_form_submitted'] );
		
		if( $hidden_field == 'Y' ) {
			
			$ngp_action_tag_apikey = esc_html( $_POST['ngp_action_tag_apikey'] );
			$ngp_action_tag_endpoint = esc_html( $_POST['ngp_action_tag_endpoint'] );

			$options['ngp_action_tag_apikey'] = $ngp_action_tag_apikey;
			$options['ngp_action_tag_endpoint'] = $ngp_action_tag_endpoint;
			$options['last_updated'] = time();

			update_option( 'ngp_action_tag', $options );

		}

	}

	$options = get_option( 'ngp_action_tag' );
	
	if(!empty($options) && isset($options['ngp_action_tag_apikey']) && $options['ngp_action_tag_apikey'] != '') {

		$ngp_action_tag_apikey = $options['ngp_action_tag_apikey'];
		$ngp_action_tag_endpoint = $options['ngp_action_tag_endpoint'];
		$username = 'apiuser';
		$password = $ngp_action_tag_apikey;
		
		//$url = 'https://api1.myngp.com/v2/designations/3/contactDisclosureFields'; 
		$url = 'https://api1.myngp.com/v2/Forms';
   	$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		//curl_setopt($ch, CURLOPT_POST, 1);
		//curl_setopt($ch, CURLOPT_POSTFIELDS, "user=".$username."&password=".$password);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    	'apiKey: '.$password
    ));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = json_decode(curl_exec ($ch));
		curl_close ($ch);
	}

	require( 'inc/options-page.php' );

}

function ngp_action_tag_styles() {

	wp_enqueue_style( 'ngp_action_tag_styles', plugins_url( 'ngp-action-tag/ngp-action-tag.css' ) );

}
add_action( 'admin_head', 'ngp_action_tag_styles' );

function actiontag_call( $atts ){
	$a = shortcode_atts( array(
    'id' => '',
    'success' => '',
  ), $atts );
  
  $is_url = filter_var($a['success'], FILTER_VALIDATE_URL);
  $options = get_option( 'ngp_action_tag' );
  $endpoint = $options['ngp_action_tag_endpoint'];
  
  $output  = '<script type="text/javascript" src="//d1aqhv4sn5kxtx.cloudfront.net/nvtag.js"></script>';
  $output .= '<div class="ngp-form" data-id="'.$a['id'].'" '.($endpoint != '' ? 'data-endpoint="'.$endpoint.'"' : '').'></div>';
  $output .= '<script type="text/javascript">var segueCallback = function() { '.($is_url ? 'window.location.href="'.$a['success'].'";' : 'alert("'.$a['success'].'");').' }; ';
  $output .= 'var nvtag_callbacks = nvtag_callbacks || {}; ';
  $output .= 'nvtag_callbacks.preSegue = nvtag_callbacks.segueCallback || []; ';
  $output .= 'nvtag_callbacks.preSegue.push(segueCallback);</script>';
  
  return $output;
}
add_shortcode( 'actiontag', 'actiontag_call' );