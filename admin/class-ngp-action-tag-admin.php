<?php
  
class NGPActionTag_Admin {
 
  protected $version;
  protected $api;
 
  public function __construct($version) {
    
    $this->version = $version;   
    $this->api = new NGPActionTag_API(); 
  }
  
  public function create_admin_menus() {
    
    add_options_page('NGP ActionTag Plugin', 'NGP ActionTag', 'manage_options', 'ngp-action-tag', array(&$this, 'settings'));
  }
  
  public function register_settings() {
    
    // API Level Settings
    register_setting('ngp-action-tag-settings-group', 'ngp_action_tag_apikey');
    register_setting('ngp-action-tag-settings-group', 'ngp_action_tag_endpoint');
    
    // Redirect URL Slug/Path Settings
    register_setting('ngp-action-tag-settings-group', 'ngp_action_tag_signup_form_url_slug');
    register_setting('ngp-action-tag-settings-group', 'ngp_action_tag_contribution_form_url_slug');
    register_setting('ngp-action-tag-settings-group', 'ngp_action_tag_petition_form_url_slug');
    register_setting('ngp-action-tag-settings-group', 'ngp_action_tag_volunteer_form_url_slug');
    register_setting('ngp-action-tag-settings-group', 'ngp_action_tag_signup_form_url');
    register_setting('ngp-action-tag-settings-group', 'ngp_action_tag_contribution_form_url');
    register_setting('ngp-action-tag-settings-group', 'ngp_action_tag_petition_form_url');
    register_setting('ngp-action-tag-settings-group', 'ngp_action_tag_volunteer_form_url');
  }
  
  public function settings() {
    
    if(!current_user_can('manage_options')) {
		  
		  wp_die('You do not have the permissions to access this page.');
	  }
	  
	  // TODO:  Look for a better way to update these rewrites.  Ideally, only do on an actual update, not every load of the settings.
	  $update_rewrites = false;
	  
	  if(get_option('ngp_action_tag_signup_form_url_slug') != '' && get_option('ngp_action_tag_signup_form_url') != '') {
      
      $update_rewrites = true;
      add_rewrite_rule('^'.get_option('ngp_action_tag_signup_form_url_slug').'/'.get_option('ngp_action_tag_signup_form_url').'$', 'index.php?ngp_actiontag_type=signup&ngp_actiontag_name='.get_option('ngp_action_tag_signup_form_url'), 'top'); 
    }
    
    if(get_option('ngp_action_tag_contribution_form_url_slug') != '' && get_option('ngp_action_tag_contribution_form_url') != '') {
      
      $update_rewrites = true;
      add_rewrite_rule('^'.get_option('ngp_action_tag_contribution_form_url_slug').'/'.get_option('ngp_action_tag_contribution_form_url').'$', 'index.php?ngp_actiontag_type=contribution&ngp_actiontag_name='.get_option('ngp_action_tag_contribution_form_url'), 'top'); 
    }
    
    if(get_option('ngp_action_tag_petition_form_url_slug') != '' && get_option('ngp_action_tag_petition_form_url') != '') {
      
      $update_rewrites = true;
      add_rewrite_rule('^'.get_option('ngp_action_tag_petition_form_url_slug').'/'.get_option('ngp_action_tag_petition_form_url').'$', 'index.php?ngp_actiontag_type=petition&ngp_actiontag_name='.get_option('ngp_action_tag_petition_form_url'), 'top'); 
    }
    
    if(get_option('ngp_action_tag_volunteer_form_url_slug') != '' && get_option('ngp_action_tag_volunteer_form_url') != '') {
      
      $update_rewrites = true;
      add_rewrite_rule('^'.get_option('ngp_action_tag_volunteer_form_url_slug').'/'.get_option('ngp_action_tag_volunteer_form_url').'$', 'index.php?ngp_actiontag_type=volunteer&ngp_actiontag_name='.get_option('ngp_action_tag_volunteer_form_url'), 'top'); 
    }
    
    if($update_rewrites) {
      
      global $wp_rewrite;
      $wp_rewrite->flush_rules(false);
    }
    
    $forms = $this->api->load_forms();
	  
    include 'templates/settings.php';
  }
}