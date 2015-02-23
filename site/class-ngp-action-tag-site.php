<?php
  
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
  
  public function init() {
    
    
  }
  
  public function register_query_vars($vars) {
    
    $vars[] = 'ngp_actiontag_type';
    $vars[] = 'ngp_actiontag_name';
    return $vars;
  }
  
  public function parse_request(&$wp) {
    
    if(isset($wp->query_vars['ngp_actiontag_type'])) {
      
      $this->page_type = $wp->query_vars['ngp_actiontag_type'];
      $this->page_name = $wp->query_vars['ngp_actiontag_name'];
      
      add_filter('the_content', array($this, 'setup_form'));
    }
  }
  
  public function setup_form() {
    
    if($this->setup_complete)
      return;
    
    $form = $this->api->load_form_by_name_or_id($this->page_name, $this->page_type);
    $template_file = locate_template($this->page_type.'-form.php');
    $endpoint = get_option('ngp_action_tag_endpoint');
    
    if(!empty($template_file)) {
      
      $action = get_option('ngp_action_tag_'.$this->page_type.'_form_action');
      $redirect = get_option('ngp_action_tag_'.$this->page_type.'_form_redirect');
      $message = get_option('ngp_action_tag_'.$this->page_type.'_form_message');
      
      include $template_file;
    } else {
      
      include 'templates/'.$this->page_type.'-form.php';
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