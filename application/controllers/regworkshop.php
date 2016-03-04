<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Regworkshop extends APN_Controller {
    
        public function __construct() {
            parent::__construct();
        }
         
        
        
	public function index(){
            
            
            $congratulations = '';
            if($this->input->post()){
                $post = $this->input->post();
                
                
                $message = "Shop Name: ".$post['shopName']."\n";
                $message .= "Phone Number: ".$post['phoneNumber']."\n";
                $message .= "Contact Name: ".$post['contactName']."\n";
                $message .= "Email: ".$post['email']."\n";
                $message .= "Attendees: \n\n";
                
                foreach($post['attendeeList'] as $attend){
                    $temp = explode('|', $attend);
                    $message .= "name: ".$temp[0]."\n";
                    $message .= "title: ".$temp[1]."\n\n";
                }
                        
                $this->load->library('email');

                $this->email->from($post['email'], $post['contactName']);
                $this->email->to('billy.demauro@assuredperformance.net');

                $this->email->subject('Repairers Only Reception');
                $this->email->message($message);

                $this->email->send();
                
                $congratulations = 'Thank you.  You have successfully registered.';
            }
            
            $this->_set('congratulations', $congratulations);
            
            $this->_set('title', "Workshop Registration");
            
//            test javascript and css files
            $this->_set('js', "/resources/common/js/gmcard");
            $this->_set('css', "/resources/common/css/gmcard"); 
            $this->_set('active', array('', '', '', '', '', '', '')); 
            
            $this->load->view('basic/header/header', $this->_data);
            $this->load->view('basic/content/regworkshop');
            $this->load->view('basic/footer/footer');
                
	}
}
