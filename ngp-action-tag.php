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
		'NPG ActionTag',
		'manage_options',
		'npg-action-tag',
		'npg_action_tag_options_page'
	);

}
add_action( 'admin_menu', 'ngp_action_tag_menu' );

function npg_action_tag_options_page() {

	if( !current_user_can( 'manage_options' ) ) {
		wp_die( 'You do not have the permissions to access this page.' );
	}

	global $options;

	if( isset( $_POST['ngp_action_tag_apikey_form_submitted'] ) ) {
	
		$hidden_field = esc_html( $_POST['ngp_action_tag_apikey_form_submitted'] );
		
		if( $hidden_field == 'Y' ) {
			
			$ngp_action_tag_apikey = esc_html( $_POST['npg_action_tag_apikey'] );

			$options['npg_action_tag_apikey'] = $ngp_action_tag_apikey;
			$options['last_updated'] = time();

			update_option( 'ngp_action_tag', $options );

		}

	}

	$options = get_option( 'ngp_action_tag' );
	if( $options != '' ) {

		$ngp_action_tag_apikey = $options['npg_action_tag_apikey'];
		$username = 'apiuser';
		$password = $ngp_action_tag_apikey;
		
		$url = 'https://api1.myngp.com/v2/designations/3/contactDisclosureFields'; 
   	$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		//curl_setopt($ch, CURLOPT_POST, 1);
		//curl_setopt($ch, CURLOPT_POSTFIELDS, "user=".$username."&password=".$password);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    	'apiKey: '.$password
    ));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec ($ch);
		curl_close ($ch);	
	
	}

	require( 'inc/options-page.php' );

}

function npg_action_tag_styles() {

	wp_enqueue_style( 'npg_action_tag_styles', plugins_url( 'ngp-action-tag/ngp-action-tag.css' ) );

}
add_action( 'admin_head', 'npg_action_tag_styles' );

?>