<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jobs extends APN_Controller {
    
        public function __construct() {
            parent::__construct();
            $this->load->model("Jobs_model");
        }
         
        
        
	public function index(){
        $this->_set('title', "CAREER OPPORTUNITIES");

       $data['about'] = $this->Jobs_model->getAboutText();
       $data['jobs'] = $this->Jobs_model->getJobPostings();

        $this->_set('css', "/assets/css/common", array());
        $this->_set('css', "/assets/css/news", array());
        $this->_set('active', array('', '', '', '', 'active', '', ''));

        $this->load->view('basic/header/header', $this->_data);
        $this->load->view('basic/content/jobs', $data);
        $this->load->view('basic/footer/footer');
                
	}
}
