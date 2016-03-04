<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class join extends APN_Controller {
    
        public function __construct() {
            parent::__construct();
        }
         
        
        
	public function index(){
            
            $this->_set('title', "JOIN");
            
//            test javascript and css files
            $this->_set('js', "/resources/common/js/consumer");
            $this->_set('css', "/resources/common/css/join"); 
            $this->_set('active', array('', '', '', '', '', '', ''));                 
            
            $this->load->view('basic/header/header', $this->_data);
            $this->load->view('basic/content/joinCoOp');
            $this->load->view('basic/footer/footer');
                
	}
}