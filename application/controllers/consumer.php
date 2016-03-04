<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Consumer extends APN_Controller {
    
        public function __construct() {
            parent::__construct();
        }
         
        
        
	public function index(){
            
            $this->_set('title', "CONSUMER ADVOCACY");
            
//            test javascript and css files
            $this->_set('js', "/resources/common/js/consumer");
            $this->_set('css', "/resources/common/css/consumer"); 
            $this->_set('active', array('', '', '', '', '', 'active', ''));                 
            
            $this->load->view('basic/header/header', $this->_data);
            $this->load->view('basic/content/consumer');
            $this->load->view('basic/footer/footer');
                
	}
}
