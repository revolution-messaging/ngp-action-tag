<?php
  
class NGPActionTag_API {

  protected $api_base = null;
  protected $api_key = null;

  public function __construct() {
    
    $this->api_base = get_option('ngp_action_tag_endpoint');
    $this->api_key = get_option('ngp_action_tag_apikey');
    
    $this->api_base = ($this->api_base == '' ? NGPActionTag::NGP_API_ENDPOINT : $this->api_base);
  }
  
  public function load_forms() {
    
    $forms = array();
    $result = $this->do_request('/v2/Forms');
    
    // TODO: See if this can be filtered out on the API call so it doesn't have be done here.
    if(is_object($result) && is_array($result->forms)) {
      
      foreach($result->forms as $form) {
        
        if($form->status == 'Published') {
        
          $forms[] = $form;    
        }
      }
    }
    
    return $forms;
  }
  
  public function load_form_by_id($id) {
    
    $forms = array();
    $result = $this->do_request('/v2/Forms/'.$id);
    print_r($result); exit;
    if(is_object($result) && is_array($result->forms)) {
      
      foreach($result->forms as $form) {
        
        if($form->status == 'Published') {
        
          $forms[] = $form;    
        }
      }
    }
    
    return $forms;
  }
  
  private function do_request($request) {
    
    $return = array();
    
    $request_settings = array();
    $request_settings['headers']['apiKey'] = $this->api_key;
    $request_settings['timeout'] = 30;
    
    $request_url = $this->api_base.$request;
    $response = wp_remote_request($request_url, $request_settings);
    
    if(strpos($response['headers']['content-type'], 'application/json') !== false) {
      
      $return = json_decode($response['body']);
    } else {
      
      $return = array('error' => true);
    }
    
    return $return;
  }
}