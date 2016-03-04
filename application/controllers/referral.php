<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Referral extends APN_Controller {
    
        public function __construct() {
            parent::__construct();
        }
        

	public function index(){
            
             if($this->input->post()){
                 
                $to = 'jobs@assuredperformance.net';
                $post = $this->input->post();
                
                
                $content = '';
                
                foreach($post as $k => $v){
                    $content .= $k.': '.$v."\n";
                }
                
                $email = $this->input->post('email');
                
                $subject = 'Referred Inspector'; 
                mail($to,$subject,$content,"From: <$email>");                
            }
            
            $this->_set('title', "REFERRAL");
            $this->_set('css', "/resources/common/css/referral"); 
            
            
            $this->load->view('basic/content/referral', $this->_data);
                
	}
}
