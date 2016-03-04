<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class officeDepot extends APN_Controller {
    
        public function __construct() {
            parent::__construct();
        }
        
        
	public function index(){
            
            $this->_set('title', "Assured Performance Network & Office Depot Team Up");
            
//            test javascript and css files
//            $this->_set('js', "/resources/authenticated/js/enroll");
//            $this->_set('css', "/resources/authenticated/css/enroll"); 
            $this->_set('js', "/resources/common/js/certification");
            $this->_set('css', "/resources/common/css/office");
//            $this->_set('active', array('', '', '', '', '', '', ''));             
//            
//            $this->load->view('basic/header/header', $this->_data);
            $this->load->view('basic/content/officeDepot');
            
                
	}
}
