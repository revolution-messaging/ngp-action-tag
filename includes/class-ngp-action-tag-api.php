<?php
  
class NGPActionTag_API {

  const SIGNUP_FORM = 'signup';
  const CONTRIBUTION_FORM = 'contribution';
  const VOLUNTEER_FORM = 'volunteer';
  const PETITION_FORM = 'petition';

  protected $api_base = null;
  protected $api_key = null;

  public function __construct() {
    
    $this->api_base = get_option('ngp_action_tag_endpoint');
    $this->api_key = get_option('ngp_action_tag_api_key');
    
    $this->api_base = ($this->api_base == '' ? NGPActionTag::NGP_API_ENDPOINT : $this->api_base);
  }
  
  public function load_forms() {
    
    $forms = array();
    $result = $this->do_request('/v2/Forms');
    
    // TODO: See if this can be filtered out on the API call so it doesn't have be done here.
    if(is_object($result) && is_array($result->forms)) {
      
      foreach($result->forms as $form) {
        
        // Make sure to only send back forms with the published status.
        if($form->status == 'Published') {
        	
        	$form->slug = $this->name_to_slug($form->name);
          $forms[] = $form;    
        }
      }
    }
    
    return $forms;
  }
  
  public function load_form_by_name_or_id($id, $type = '') {
    
    $id_match = null;
    $name_match = null;
    $forms = $this->load_forms();
    $selected_form = null;
    
    foreach($forms as $key => $form) {
      
      if($form->slug == $id) {
        
        if($type == self::SIGNUP_FORM && $form->type == 'SignupForm') {
          
          $name_match[] = $forms[$key];
        } elseif($type == self::CONTRIBUTION_FORM && $form->type == 'ContributionForm') {
          
          $name_match[] = $forms[$key];
        } elseif($type == self::VOLUNTEER_FORM && $form->type == 'VolunteerForm') {
          
          $name_match[] = $forms[$key];
        } elseif($type == self::PETITION_FORM && $form->type == 'PetitionForm') {
          
          $name_match[] = $forms[$key];
        }
      } elseif($form->obfuscatedId == $id) {
        
        if($type == self::SIGNUP_FORM && $form->type == 'SignupForm') {
          
          $id_match[] = $forms[$key];
        } elseif($type == self::CONTRIBUTION_FORM && $form->type == 'ContributionForm') {
          
          $id_match[] = $forms[$key];
        } elseif($type == self::VOLUNTEER_FORM && $form->type == 'VolunteerForm') {
          
          $id_match[] = $forms[$key];
        } elseif($type == self::PETITION_FORM && $form->type == 'PetitionForm') {
          
          $id_match[] = $forms[$key];
        }
      }
    }
    
    if(!empty($name_match)) {
      
      $selected_form = $name_match[count($name_match) - 1];
    } elseif(!empty($id_match)) {
      
      $selected_form = $id_match[count($id_match) - 1]; 
    }
    
    return $selected_form;
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
  
  private function name_to_slug($name) {
		
		return trim(trim(strtolower(preg_replace('/[^A-Za-z0-9-]+/', '-', $name))), '-'); 
	}
}