<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Temp extends APN_Controller {
    
        public function __construct() {
            parent::__construct();
            redirect('http://assuredperformance.net/enroll');
        }
         
  
}