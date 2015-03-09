<?php
  
class NGPActionTag_Admin {
 
  protected $version;
  protected $api;
 
  public function __construct($version) {
    
    $this->version = $version;   
    $this->api = new NGPActionTag_API(); 
  }
  
  public function create_admin_menus() {
    
    //add_options_page('NGP ActionTag Plugin', 'NGP ActionTag', 'manage_options', 'ngp-action-tag', array(&$this, 'settings'));
		
		add_menu_page('NGP ActionTag', 'NGP ActionTag', 'administrator', 'ngp-action-tag-global', array(&$this, 'global_settings'));
    add_submenu_page('ngp-action-tag-global', 'Page Type Settings', 'Page Type Settings', 'administrator', 'ngp-action-tag-type', array(&$this, 'type_settings'));
    add_submenu_page('ngp-action-tag-global', 'Form Settings', 'Form Settings', 'administrator', 'ngp-action-tag-form', array(&$this, 'form_settings'));
  }
  
  public function register_settings() {
    
    // API Level Settings
    register_setting('ngp-action-tag-global-settings', 'api_key');
    register_setting('ngp-action-tag-global-settings', 'endpoint');
    register_setting('ngp-action-tag-global-settings', 'default_form_action');
    register_setting('ngp-action-tag-global-settings', 'default_form_message');
    register_setting('ngp-action-tag-global-settings', 'default_form_redirect');
    register_setting('ngp-action-tag-global-settings', 'default_data_template');
    register_setting('ngp-action-tag-global-settings', 'default_data_labels');
    register_setting('ngp-action-tag-global-settings', 'default_data_databags');
    
    // Page Type Settings
    register_setting('ngp-action-tag-type-settings', 'signup_form_slug');
    register_setting('ngp-action-tag-type-settings', 'contribution_form_slug');
    register_setting('ngp-action-tag-type-settings', 'petition_form_slug');
    register_setting('ngp-action-tag-type-settings', 'volunteer_form_slug');
    
    register_setting('ngp-action-tag-type-settings', 'signup_form_action');
    register_setting('ngp-action-tag-type-settings', 'contribution_form_action');
    register_setting('ngp-action-tag-type-settings', 'petition_form_action');
    register_setting('ngp-action-tag-type-settings', 'volunteer_form_action');
    
    register_setting('ngp-action-tag-type-settings', 'signup_form_message');
    register_setting('ngp-action-tag-type-settings', 'contribution_form_message');
    register_setting('ngp-action-tag-type-settings', 'petition_form_message');
    register_setting('ngp-action-tag-type-settings', 'volunteer_form_message');
    
    register_setting('ngp-action-tag-type-settings', 'signup_form_redirect');
    register_setting('ngp-action-tag-type-settings', 'contribution_form_redirect');
    register_setting('ngp-action-tag-type-settings', 'petition_form_redirect');
    register_setting('ngp-action-tag-type-settings', 'volunteer_form_redirect');
    
    register_setting('ngp-action-tag-type-settings', 'signup_form_template');
    register_setting('ngp-action-tag-type-settings', 'contribution_form_template');
    register_setting('ngp-action-tag-type-settings', 'petition_form_template');
    register_setting('ngp-action-tag-type-settings', 'volunteer_form_template');
    
    register_setting('ngp-action-tag-type-settings', 'signup_form_labels');
    register_setting('ngp-action-tag-type-settings', 'contribution_form_labels');
    register_setting('ngp-action-tag-type-settings', 'petition_form_labels');
    register_setting('ngp-action-tag-type-settings', 'volunteer_form_labels');
    
    register_setting('ngp-action-tag-type-settings', 'signup_form_databags');
    register_setting('ngp-action-tag-type-settings', 'contribution_form_databags');
    register_setting('ngp-action-tag-type-settings', 'petition_form_databags');
    register_setting('ngp-action-tag-type-settings', 'volunteer_form_databags');
    
    /*register_setting('ngp-action-tag-settings-group', 'ngp_action_tag_signup_form_message');
    register_setting('ngp-action-tag-settings-group', 'ngp_action_tag_contribution_form_message');
    register_setting('ngp-action-tag-settings-group', 'ngp_action_tag_petition_form_message');
    register_setting('ngp-action-tag-settings-group', 'ngp_action_tag_volunteer_form_message');
    register_setting('ngp-action-tag-settings-group', 'ngp_action_tag_signup_form_redirect');
    register_setting('ngp-action-tag-settings-group', 'ngp_action_tag_contribution_form_redirect');
    register_setting('ngp-action-tag-settings-group', 'ngp_action_tag_petition_form_redirect');
    register_setting('ngp-action-tag-settings-group', 'ngp_action_tag_volunteer_form_redirect');*/
  }
  
  public function global_settings() {
    
	  
    include 'templates/global_settings.php';
  }
  
  public function type_settings() {
	  
	  $update_rewrites = false;
	  
	  if(get_option('signup_form_slug') != '') {
      
      $update_rewrites = true;
      add_rewrite_rule('^'.get_option('signup_form_slug').'/(.*)$', 'index.php?ngp_actiontag_type=signup&ngp_actiontag_name=$1', 'top'); 
    }
    
    if(get_option('contribution_form_slug') != '') {
      
      $update_rewrites = true;
      add_rewrite_rule('^'.get_option('contribution_form_slug').'/(.*)$', 'index.php?ngp_actiontag_type=contribution&ngp_actiontag_name=$1', 'top'); 
    }
    
    if(get_option('petition_form_slug') != '') {
      
      $update_rewrites = true;
      add_rewrite_rule('^'.get_option('petition_form_slug').'/(.*)$', 'index.php?ngp_actiontag_type=petition&ngp_actiontag_name=$1', 'top'); 
    }
    
    if(get_option('volunteer_form_slug') != '') {
      
      $update_rewrites = true;
      add_rewrite_rule('^'.get_option('volunteer_form_slug').'/(.*)$', 'index.php?ngp_actiontag_type=volunteer&ngp_actiontag_name=$1', 'top'); 
    }
    
    if($update_rewrites) {
      
      global $wp_rewrite;
      $wp_rewrite->flush_rules(false);
    }
    
	  include 'templates/type_settings.php';
	}
	
	public function form_settings() {
		
		$forms = $this->api->load_forms();
		
		include 'templates/form_settings.php';
	}
}