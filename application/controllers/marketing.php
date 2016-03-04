<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Marketing extends APN_Controller {
    
    public function __construct() {
        parent::__construct();

		$this->_set('success',base64_encode('/authenticated/marketing-promotion/nissan-special'));
		$this->_set('failure',base64_encode(current_url().'?show_error=1'));
		$this->_set('url','http://certifymyshop.com/apn/splash/easyLogin');
    }
        
	public function index()
	{
		//redirect('marketing/nissan');
	}

    public function responses(){
            $data['title'] = "Marketing Responses";
            
            $data['css'][] = "/assets/css/common";
            $data['css'][] = "/assets/css/nissan";

            $data['active'] = array('', '', '', '', '', '', '', '');
            $data["regTitle"] = "";
            $data["description"] = "";
            if ($this->input->get()) {
                $get = $this->input->get();
                $data["program"] = $get["program"]; 
                $sql = "SELECT title, description FROM new_apn.gc_marketingPrograms WHERE program = '".$get["program"]."'";
                $query = $this->db->query($sql);
                if ($query) {
                    foreach ($query->result_array() as $val) {
                        $data["regTitle"] = $val["title"];
                        $data["description"] = $val["description"];
                    }
                }
            }
            $data["completed"] = 0;
            if ($this->input->post()) {
                $data["completed"] = 1;
                $post = $this->input->post();
                if (!isset($post["callme"]) || empty($post["callme"])) { $callme = 0; } else { $callme = 1; }
                if (!isset($post["addshop"]) || empty($post["addshop"])) { $addshop = 0; } else { $addshop = 1; }
                $sql = "INSERT INTO new_apn.gc_marketingResponses (shopname,contactname,city,state,phone,callme,addshop,program,created) VALUES ('".$post["shopname"]."','".$post["contactname"]."','".$post["city"]."','".$post["state"]."','".$post["phone"]."','".$callme."','".$addshop."', '".$post["program"]."', NOW())";
                $this->db->query($sql);
            }
            // $this->load->view('basic/header/header', $this->_data);
            $this->load->view('marketing/responses', $data);
            $this->load->view('basic/footer/footer');
                
    }
        
	public function nissan(){
            $this->_set('title', "NISSAN MARKETING");
            
            $this->_set('css', "/assets/css/common", array()); 
            $this->_set('css', "/assets/css/nissan", array()); 

            $this->_set('active', array('', '', '', '', '', '', '', '')); 
           
            $this->load->view('basic/header/header', $this->_data);
            $this->load->view('marketing/nissan');
            $this->load->view('basic/footer/footer');
                
	}

    public function infiniti(){
        $this->_set('title', "INFINITI MARKETING");
        
        $this->_set('css', "/assets/css/common", array()); 
        $this->_set('css', "/assets/css/nissan", array()); 
		
        $this->_set('active', array('', '', '', '', '', '', '', '')); 

        
        $this->load->view('basic/header/header', $this->_data);
        $this->load->view('marketing/infiniti');
        $this->load->view('basic/footer/footer');
                
    }
}
