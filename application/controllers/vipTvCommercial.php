<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class vipTvCommercial extends APN_Controller {
    
        public function __construct() {
            parent::__construct();
        }
         
        
        
	public function index(){
            
            $this->_set('title', "VIP TV Commercials | P: 949-221-0010 | Assured Performance Network");
            
//            test javascript and css files
            $this->_set('js', "/resources/common/js/vipTvCommercial");
            $this->_set('css', "/resources/common/css/vip"); 
            $this->_set('active', array('', '', '', '', '', '', ''));                 
            
            $this->load->view('basic/header/header', $this->_data);
            $this->load->view('basic/content/vipTvCommercial');
            $this->load->view('basic/footer/footer');
                
	}
}