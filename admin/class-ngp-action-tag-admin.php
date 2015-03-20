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
    register_setting('ngp-action-tag-global-settings', 'ngp_action_tag_api_key');
    register_setting('ngp-action-tag-global-settings', 'ngp_action_tag_endpoint');
    register_setting('ngp-action-tag-global-settings', 'ngp_action_tag_default_form_action');
    register_setting('ngp-action-tag-global-settings', 'ngp_action_tag_default_form_message');
    register_setting('ngp-action-tag-global-settings', 'ngp_action_tag_default_form_redirect');
    register_setting('ngp-action-tag-global-settings', 'ngp_action_tag_default_data_template');
    register_setting('ngp-action-tag-global-settings', 'ngp_action_tag_default_data_labels');
    register_setting('ngp-action-tag-global-settings', 'ngp_action_tag_default_data_databag');
    
    // Page Type Settings
    register_setting('ngp-action-tag-type-settings', 'ngp_action_tag_signup_form_slug');
    register_setting('ngp-action-tag-type-settings', 'ngp_action_tag_contribution_form_slug');
    register_setting('ngp-action-tag-type-settings', 'ngp_action_tag_petition_form_slug');
    register_setting('ngp-action-tag-type-settings', 'ngp_action_tag_volunteer_form_slug');
    
    register_setting('ngp-action-tag-type-settings', 'ngp_action_tag_signup_form_action');
    register_setting('ngp-action-tag-type-settings', 'ngp_action_tag_contribution_form_action');
    register_setting('ngp-action-tag-type-settings', 'ngp_action_tag_petition_form_action');
    register_setting('ngp-action-tag-type-settings', 'ngp_action_tag_volunteer_form_action');
    
    register_setting('ngp-action-tag-type-settings', 'ngp_action_tag_signup_form_message');
    register_setting('ngp-action-tag-type-settings', 'ngp_action_tag_contribution_form_message');
    register_setting('ngp-action-tag-type-settings', 'ngp_action_tag_petition_form_message');
    register_setting('ngp-action-tag-type-settings', 'ngp_action_tag_volunteer_form_message');
    
    register_setting('ngp-action-tag-type-settings', 'ngp_action_tag_signup_form_redirect');
    register_setting('ngp-action-tag-type-settings', 'ngp_action_tag_contribution_form_redirect');
    register_setting('ngp-action-tag-type-settings', 'ngp_action_tag_petition_form_redirect');
    register_setting('ngp-action-tag-type-settings', 'ngp_action_tag_volunteer_form_redirect');
    
    register_setting('ngp-action-tag-type-settings', 'ngp_action_tag_signup_form_template');
    register_setting('ngp-action-tag-type-settings', 'ngp_action_tag_contribution_form_template');
    register_setting('ngp-action-tag-type-settings', 'ngp_action_tag_petition_form_template');
    register_setting('ngp-action-tag-type-settings', 'ngp_action_tag_volunteer_form_template');
    
    register_setting('ngp-action-tag-type-settings', 'ngp_action_tag_signup_form_labels');
    register_setting('ngp-action-tag-type-settings', 'ngp_action_tag_contribution_form_labels');
    register_setting('ngp-action-tag-type-settings', 'ngp_action_tag_petition_form_labels');
    register_setting('ngp-action-tag-type-settings', 'ngp_action_tag_volunteer_form_labels');
    
    register_setting('ngp-action-tag-type-settings', 'ngp_action_tag_signup_form_databag');
    register_setting('ngp-action-tag-type-settings', 'ngp_action_tag_contribution_form_databag');
    register_setting('ngp-action-tag-type-settings', 'ngp_action_tag_petition_form_databag');
    register_setting('ngp-action-tag-type-settings', 'ngp_action_tag_volunteer_form_databag');
    
    register_setting('ngp-action-tag-form-settings', 'ngp_action_tag_form_message');
    register_setting('ngp-action-tag-form-settings', 'ngp_action_tag_form_redirect');
    register_setting('ngp-action-tag-form-settings', 'ngp_action_tag_form_action');
    register_setting('ngp-action-tag-form-settings', 'ngp_action_tag_form_template');
    register_setting('ngp-action-tag-form-settings', 'ngp_action_tag_form_labels');
    register_setting('ngp-action-tag-form-settings', 'ngp_action_tag_form_databag');
    register_setting('ngp-action-tag-form-settings', 'ngp_action_tag_form_selection_type');
    register_setting('ngp-action-tag-form-settings', 'ngp_action_tag_form_selection_form_signup');
    register_setting('ngp-action-tag-form-settings', 'ngp_action_tag_form_selection_form_contribution');
    register_setting('ngp-action-tag-form-settings', 'ngp_action_tag_form_selection_form_petition');
    register_setting('ngp-action-tag-form-settings', 'ngp_action_tag_form_selection_form_volunteer');
  }
  
  public function global_settings() {
    
	  
    include 'templates/global_settings.php';
  }
  
  public function type_settings() {
	  
	  $update_rewrites = false;
	  
	  if(get_option('ngp_action_tag_signup_form_slug') != '') {
      
      $update_rewrites = true;
      add_rewrite_rule('^'.get_option('ngp_action_tag_signup_form_slug').'/(.*)$', 'index.php?ngp_actiontag_type=signup&ngp_actiontag_name=$matches[1]', 'top'); 
    }
    
    if(get_option('ngp_action_tag_contribution_form_slug') != '') {
      
      $update_rewrites = true;
      add_rewrite_rule('^'.get_option('ngp_action_tag_contribution_form_slug').'/(.*)$', 'index.php?ngp_actiontag_type=contribution&ngp_actiontag_name=$matches[1]', 'top'); 
    }
    
    if(get_option('ngp_action_tag_petition_form_slug') != '') {
      
      $update_rewrites = true;
      add_rewrite_rule('^'.get_option('ngp_action_tag_petition_form_slug').'/(.*)$', 'index.php?ngp_actiontag_type=petition&ngp_actiontag_name=$matches[1]', 'top'); 
    }
    
    if(get_option('ngp_action_tag_volunteer_form_slug') != '') {
      
      $update_rewrites = true;
      add_rewrite_rule('^'.get_option('ngp_action_tag_volunteer_form_slug').'/(.*)$', 'index.php?ngp_actiontag_type=volunteer&ngp_actiontag_name=$matches[1]', 'top'); 
    }
    
    global $wp_rewrite;
    $wp_rewrite->flush_rules(false);
    
	  include 'templates/type_settings.php';
	}
	
	public function form_settings() {
		
		$forms = $this->api->load_forms();
		
		$ngp_action_tag_form_message = get_option('ngp_action_tag_form_message');
    $ngp_action_tag_form_redirect = get_option('ngp_action_tag_form_redirect');
    $ngp_action_tag_form_action = get_option('ngp_action_tag_form_action');
    $ngp_action_tag_form_template = get_option('ngp_action_tag_form_template');
    $ngp_action_tag_form_labels = get_option('ngp_action_tag_form_labels');
    $ngp_action_tag_form_databag = get_option('ngp_action_tag_form_databag');
    $ngp_action_tag_form_selection_type = get_option('ngp_action_tag_form_selection_type');
    $ngp_action_tag_form_selection_form_signup = get_option('ngp_action_tag_form_selection_form_signup');
    $ngp_action_tag_form_selection_form_contribution = get_option('ngp_action_tag_form_selection_form_contribution');
    $ngp_action_tag_form_selection_form_petition = get_option('ngp_action_tag_form_selection_form_petition');
    $ngp_action_tag_form_selection_form_volunteer = get_option('ngp_action_tag_form_selection_form_volunteer');
		
		include 'templates/form_settings.php';
	}
}