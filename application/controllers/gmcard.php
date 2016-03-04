<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class GMCard extends APN_Controller {
    
        public function __construct() {
            parent::__construct();
        }
         
        
        
	public function index(){    
		redirect(base_url());
            $this->_set('title', "GM Card");
            
//            test javascript and css files
            $this->_set('js', "/resources/common/js/gmcard");
            $this->_set('css', "/resources/common/css/gmcard"); 
            $this->_set('active', array('', '', '', '', 'active', '', '')); 
            
            $this->load->view('basic/header/header', $this->_data);
            $this->load->view('basic/content/gmcard');
            $this->load->view('basic/footer/footer');
                
	}
}
