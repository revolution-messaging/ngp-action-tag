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

class NGPActionTag_Loader {
  
  protected $actions;
  protected $filters;
  
  public function __construct() {
    
    $this->actions = array();
    $this->filters = array();
  }
  
  public function add_action($hook, $component, $callback) {
    
    $this->actions = $this->add($this->actions, $hook, $component, $callback);
  } 
  
  public function add_filter($hook, $component, $callback) {
    
    $this->filters = $this->add($this->filters, $hook, $component, $callback);
  } 
  
  public function add($hooks, $hook, $component, $callback) {
    
    $hooks[] = array(
      'hook'      => $hook,
      'component' => $component,
      'callback'  => $callback
    );
    
    return $hooks;
  } 
  
  public function run() {
    
    foreach($this->filters as $hook) {
      
      add_filter($hook['hook'], array($hook['component'], $hook['callback']));
    }
    
    foreach($this->actions as $hook) {
      
      add_action($hook['hook'], array($hook['component'], $hook['callback']));
    }
  }
}