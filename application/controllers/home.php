<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends APN_Controller {
    
        public function __construct() {
            parent::__construct();
        }
        
        
	public function index(){
            
            $this->_set('title', "Assured Performance Network");
            
//            test javascript and css files
//            $this->_set('js', "/resources/authenticated/js/enroll");
//            $this->_set('css', "/resources/authenticated/css/enroll");
            $this->_set('css', "/assets/css/common", array()); 
            $this->_set('active', array('active', '', '', '', '', '', '', '')); 
            
            $this->load->view('basic/header/header', $this->_data);
            $this->load->view('basic/content/home');
            $this->load->view('basic/footer/footer');
                
	}
}
