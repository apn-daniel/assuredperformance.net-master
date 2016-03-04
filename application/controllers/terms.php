<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Terms extends APN_Controller {
    
        public function __construct() {
            parent::__construct();
        }

    public function index() {
        if($this->input->get()) {
            $get = $this->input->get();

            if(isset($get['back_text']) && isset($get['return_url'])){
                $this->data['back_text'] = $get['back_text'];
                $this->data['return_url'] = $get['return_url'];
            }
        }
        $this->data['title'] = 'Terms &amp; Conditions | Assured Performance';

        $this->data['css'][] = '/assets/css/common';
        
        $this->load->view('basic/content/terms', $this->data);
    }

    public function datamanager() {
        if($this->input->get()) {
            $get = $this->input->get();

            if(isset($get['back_text']) && isset($get['return_url'])){
                $this->data['back_text'] = $get['back_text'];
                $this->data['return_url'] = $get['return_url'];
            }
        }
        $this->data['title'] = 'dataMANAGER | Privacy Statement';

        $this->data['css'][] = '/assets/css/common';
        
        $this->load->view('basic/content/terms_datamanager', $this->data);
    }
}
?>