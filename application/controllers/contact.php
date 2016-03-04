<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends APN_Controller {
    
        public function __construct() {
            parent::__construct();
        }

    public function index() {
        $this->_set('title', "ASSURED PERFORMANCE | Certified Contact");

        $this->_set('css', "/assets/css/common", array()); 
        $this->_set('active', array('', '', '', '', '', '', '', 'active')); 
        
        $this->load->view('basic/header/header', $this->_data);
        $this->load->view('basic/content/contact');
        $this->load->view('basic/footer/footer');
    }
}
?>