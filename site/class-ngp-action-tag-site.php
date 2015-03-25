<?php 
/*
 *	Plugin Name: WP NGP ActionTag Plugin
 *	Plugin URI: http://www.revolutionmessaging.com
 *	Description: Provide a list of available forms. 
 *	Version: 2.0 
 *	Author: Revolution Messaging
 *	Author URI: http://www.revolutionmessaging.com
 *	License: GPL2
 *
*/
// Copyright (C) 2015 Revolution Messaging, LLC
  
class NGPActionTag_Site {
 
  protected $version;
  protected $api;
  protected $page_type;
  protected $page_name;
  protected $setup_complete;
  
  public function __construct($version) {
    
    $this->version = $version;  
    $this->api = new NGPActionTag_API(); 
    $this->setup_complete = false;
  }
  
  public function register_query_vars($vars) {
    
    $vars[] = 'ngp_actiontag_type';
    $vars[] = 'ngp_actiontag_name';
    return $vars;
  }
  
  public function parse_request(&$wp) {
    
    $pagename = (isset($wp->query_vars['pagename']) ? $wp->query_vars['pagename'] : '');
    $page = substr($pagename, strrpos($pagename, '/')+1);
    
    $signup_form_slug = get_option('ngp_action_tag_signup_form_slug');
    $contribution_form_slug = get_option('ngp_action_tag_contribution_form_slug');
    $petition_form_slug = get_option('ngp_action_tag_petition_form_slug');
    $volunteer_form_slug = get_option('ngp_action_tag_volunteer_form_slug');
    
    //if(isset($wp->query_vars['ngp_actiontag_type'])) {
    if($signup_form_slug != '' && strpos($pagename, $signup_form_slug) === 0) {
      
      $this->page_type = 'signup';
      $this->page_name = $page;
    } elseif($contribution_form_slug != '' && strpos($pagename, $contribution_form_slug) === 0) {
      
      $this->page_type = 'contribution';
      $this->page_name = $page;
    } elseif($petition_form_slug != '' && strpos($pagename, $petition_form_slug) === 0) {
      
      $this->page_type = 'petition';
      $this->page_name = $page;
    } elseif($volunteer_form_slug != '' && strpos($pagename, $volunteer_form_slug) === 0) {
      
      $this->page_type = 'volunteer';
      $this->page_name = $page;
    }
    
    if($this->page_type != '') {
	    
	    add_filter('wp_title', array($this, 'setup_title'));
			add_action('template_redirect', array($this, 'setup_template'));
		}
  }
  
  public function setup_title($title) {
		
		return '';
	}
  	
  public function setup_template() {
    
    if($this->setup_complete)
      return;
    
    // Set the header since it's 404 by default with this "virtual" page.
    // Set the title to the default blog title, so that it can be customized on the 
    // templates.
    status_header(200);
    $custom_title = get_bloginfo('name');
    
    $form = $this->api->load_form_by_name_or_id($this->page_name, $this->page_type);
    $template_file = locate_template($this->page_type.'-form.php');
    $endpoint = get_option('ngp_action_tag_endpoint');
    
    $action_listing = get_option('ngp_action_tag_form_action');
    $redirect_listing = get_option('ngp_action_tag_form_redirect');
    $message_listing = get_option('ngp_action_tag_form_message');
    $template_listing = get_option('ngp_action_tag_form_template');
    $labels_listing = get_option('ngp_action_tag_form_labels');
    $databag_listing = get_option('ngp_action_tag_form_databag');
    
    $action = (isset($action_listing[$form->obfuscatedId]) ? $action_listing[$form->obfuscatedId] : '');
    $redirect = (isset($redirect_listing[$form->obfuscatedId]) ? $redirect_listing[$form->obfuscatedId] : '');
    $message = (isset($message_listing[$form->obfuscatedId]) ? $message_listing[$form->obfuscatedId] : '');
    $template = (isset($template_listing[$form->obfuscatedId]) ? $template_listing[$form->obfuscatedId] : '');
    $labels = (isset($labels_listing[$form->obfuscatedId]) ? $labels_listing[$form->obfuscatedId] : '');
    $databag = (isset($databag_listing[$form->obfuscatedId]) ? $databag_listing[$form->obfuscatedId] : '');
    
    if($action == '') {
    	
    	$action = get_option('ngp_action_tag_'.$this->page_type.'_form_action');
			
			if($action == '') {
				
				$action = get_option('ngp_action_tag_default_form_action');
				$redirect = get_option('ngp_action_tag_default_form_redirect');
				$message = get_option('ngp_action_tag_default_form_message');
			} else {
				
				$redirect = get_option('ngp_action_tag_'.$this->page_type.'_form_redirect');
				$message = get_option('ngp_action_tag_'.$this->page_type.'_form_message');
			}
    }
		
    if($template == '') {
	  	
			$template = get_option('ngp_action_tag_'.$this->page_type.'_form_template');
			
			if($template == '') {
				
				$template = get_option('ngp_action_tag_default_data_template');
			}
	  }
	  
	  if($labels == '') {
	  	
			$labels = get_option('ngp_action_tag_'.$this->page_type.'_form_labels');
			
			if($labels == '') {
				
				$labels = get_option('ngp_action_tag_default_data_labels');
			}
	  }
		
		if($databag == '') {
	  	
			$databag = get_option('ngp_action_tag_'.$this->page_type.'_form_databag');
			
			if($databag == '') {
				
				$databag = get_option('ngp_action_tag_default_data_databag');
			}
	  }
    
    if(!empty($template_file)) {
      
      include $template_file;
      exit;
    } else {
      
      include 'templates/'.$this->page_type.'-form.php';
      exit;
    }
    
    $this->setup_complete = true;
  }
  
  public function create_shortcode($attributes) {
	
    $a = shortcode_atts(array(
      'id' => '',
      'success' => '',
      'template' => '',
      'labels' => '',
      'databag' => '',
    ), $attributes);
    
    $is_url = filter_var($a['success'], FILTER_VALIDATE_URL);
    $endpoint = get_option('ngp_action_tag_endpoint');
    
    $output  = '<script type="text/javascript" src="//d1aqhv4sn5kxtx.cloudfront.net/nvtag.js"></script>';
    $output .= '<div class="ngp-form" data-id="'.$a['id'].'" '.($endpoint != '' ? 'data-endpoint="'.$endpoint.'"' : '').' '.($a['template'] != '' ? 'data-template="'.$a['template'].'"' : '').' '.($a['labels'] != '' ? 'data-labels="'.$a['labels'].'"' : '').' '.($a['databag'] != '' ? 'data-databag="'.$a['databag'].'"' : '').'></div>';
    $output .= '<script type="text/javascript">var segueCallback = function() { '.($is_url ? 'window.location.href="'.$a['success'].'";' : 'alert("'.$a['success'].'");').' }; ';
    $output .= 'var nvtag_callbacks = nvtag_callbacks || {}; ';
    $output .= 'nvtag_callbacks.preSegue = nvtag_callbacks.segueCallback || []; ';
    $output .= 'nvtag_callbacks.preSegue.push(segueCallback);</script>';
    
    return $output;
  }
}