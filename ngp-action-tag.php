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

class NGPActionTag {
  
  const NGP_API_ENDPOINT = 'https://api.myngp.com/';
  
  protected $loader;
  protected $plugin_slug;
  protected $version;
  
  public function __construct() {
    
    $this->plugin_slug = 'ngp-action-tag';
    $this->version = '2.1.0'; 
    
    $this->load_dependencies();
    
    if(is_admin()) {
      
      $this->define_admin_hooks();
    } else {
      
      $this->define_site_hooks();
    }
  }
  
  private function load_dependencies() {
    
    require_once plugin_dir_path(dirname(__FILE__)).$this->plugin_slug.'/includes/class-ngp-action-tag-loader.php';
    require_once plugin_dir_path(dirname(__FILE__)).$this->plugin_slug.'/includes/class-ngp-action-tag-api.php';
    
    if(is_admin()) {
      
      require_once plugin_dir_path(dirname(__FILE__)).$this->plugin_slug.'/admin/class-ngp-action-tag-admin.php';
    } else {
      
      require_once plugin_dir_path(dirname(__FILE__)).$this->plugin_slug.'/site/class-ngp-action-tag-site.php';
    }
    
    $this->loader = new NGPActionTag_Loader();
  }
  
  private function define_admin_hooks() {
    
    $admin = new NGPActionTag_Admin($this->get_version());
    
    $this->loader->add_action('admin_menu', $admin, 'create_admin_menus');
    $this->loader->add_action('admin_init', $admin, 'register_settings');
  }
  
  public function define_site_hooks() {
    
    $site = new NGPActionTag_Site($this->get_version());
    
    //$this->loader->add_action('init', $site, 'init');
    $this->loader->add_filter('query_vars', $site, 'register_query_vars');
    $this->loader->add_action('parse_request', $site, 'parse_request');
    
    add_shortcode('actiontag', array(&$site, 'create_shortcode'));
  }
  
  public function run() {
    
    $this->loader->run();
  }
  
  public function get_version() {
    
    return $this->version; 
  }
}

if(!defined('WPINC')) {
  
  die;
}

function run_ngp_action_tag() {
  
  $ngp_action_tag = new NGPActionTag();
  $ngp_action_tag->run();
}

run_ngp_action_tag();


/*function ngp_action_tag_styles() {

	wp_enqueue_style( 'ngp_action_tag_styles', plugins_url( 'ngp-action-tag/ngp-action-tag.css' ) );

}
add_action( 'admin_head', 'ngp_action_tag_styles' );*/