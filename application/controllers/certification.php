<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Certification extends APN_Controller {
    
        public function __construct() {
            parent::__construct();
        }
        
        
	public function index(){
            
            $this->_set('title', "Certification");
            
//            test javascript and css files
//            $this->_set('js', "/resources/authenticated/js/enroll");
//            $this->_set('css', "/resources/authenticated/css/enroll"); 
            $this->_set('js', array(
				"resources/common/js/certification",
				"resources/common/js/galleria/galleria-1.2.9.min",
            	"resources/common/js/galleria/themes/classic/galleria.classic.min"
            ));
            $this->_set('css', array(
				"resources/common/css/certification",
				"resources/common/js/galleria/themes/classic/galleria.classic"
            ));
            $this->_set('active', array('', '', 'active', '', '', '', ''));             
            
            $this->load->view('basic/header/header', $this->_data);
            $this->load->view('basic/content/certification');
            $this->load->view('basic/footer/footer');
                
	}
}
