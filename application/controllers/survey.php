<?php

class Survey extends APN_Controller {
	
	function __construct() {
		parent::__construct();
	}                 
	
	
	public function index()
	{
		rediect(base_url());
	}      
	    
	
	public function save()
	{
		if (!$this->input->is_ajax_request()) return false;
		
		if ($this->input->post()) {
			$post = $this->input->post();
			
			$toUpdate  = array();
			$contactsID = $post["contactsID"];
			if (isset($post["dealershipname"])) {
				$brand = key($post["dealershipname"]);
				$value = strtoupper($post["dealershipname"][$brand]);
				$toUpdate = array("dealershipname" => htmlentities($value,ENT_QUOTES));
			} elseif (isset($post["city"])) {
				$brand = key($post["city"]);
				$value = strtoupper($post["city"][$brand]);
				$toUpdate = array( "city" => htmlentities($value,ENT_QUOTES));
			} else {
				$brand = key($post["state"]);
				$value = strtoupper($post["state"][$brand]);
				$toUpdate = array("state" => $value);
			}
			$toUpdate["modified"] = date("Y-m-d H:i:s");
			$brand = strtolower($brand);
			$this->db->where("contactsID",$contactsID);
			$result = $this->db->update("new_apn.dl_{$brand}_survey",$toUpdate);
			
			if ($result) {
				echo json_encode(array("status" => true));
			} else {
				echo json_encode(array("status" => false));
			}
			
			
			
			
		}                               
		
	}
	
	public function oem($contactsID=null)
	{
		if (!OEM_SURVEY || !intval($contactsID)) {
			redirect(base_url());
		}                                
		$query = $this->db->get_where("new_apn.dl_survey_track",array("contactsID" => $contactsID));
		if (!$query->num_rows()) {
			redirect(base_url());
		} 
		     
		$toUpdate = array(
			"oem_dealer" => 1,
			"modified" => date("Y-m-d H:i:s")
		);                                 
		$this->db->where("contactsID",$contactsID);
		$this->db->update("new_apn.dl_survey_track",$toUpdate);
		                                                                  
		
		
		$this->_set("contactsID",$contactsID);
		$this->_set("title","OEM WHOLESALE COLLISION REPAIR PARTS DEALER PROFILE");
		$this->_set("css","assets/css/bootstrap.min",array());
		$this->_set("css","assets/css/oemsurvey",array());
		$this->_set("js","assets/js/oemsurvey",array());
		$this->_set("mainbrand",array(
			 "gm" => array(
			 		"logo" => array(
							"width" => 20,
							"height" => 20,
							"src" =>  base_url()."assets/images/gm-logo.png"
					),
					"title" => "GM/GMC/Cadillac...",
					"content" => ""
			 ),
			 "toyota" => array(
			 		"logo" => array(
							"width" => 29,
							"height" => 20,
							"src" =>  base_url()."assets/images/toyota-logo.png"
					),
					"title" => "Toyota",
					"content" => ""
			 ),			
			 "ford" => array(
			 		"logo" => array(
							"width" => 44,
							"height" => 21,
							"src" =>  base_url()."assets/images/ford-logo.png"
					),
					"title" => "Ford/Lincoln",
					"content" => ""
			 ),			
			 "chrysler" => array(
			 		"logo" => array(
							"width" => 21,
							"height" => 21,
							"src" =>  base_url()."assets/images/chrysler-logo.png"
					),
					"title" => "Chrysler",
					"content" => ""
			 ),			
			 "nissan" => array(
			 		"logo" => array(
							"width" => 29,
							"height" => 26,
							"src" =>  base_url()."assets/images/nissan-logo.png"
					),
					"title" => "Nissan",
					"content" => ""
			 ),			
			 "honda" => array(
			 		"logo" => array(
							"width" => 29,
							"height" => 24,
							"src" =>  base_url()."assets/images/honda-logo.png"
					),
					"title" => "Honda",
					"content" => ""
			 ),
			 "hyundai" => array(
			 		"logo" => array(
							"width" => 39,
							"height" => 20,
							"src" =>  base_url()."assets/images/hyundai-logo.png"
					),
					"title" => "Hyundai",
					"content" => ""
			 ),						
			 "volkswagen" => array(
			 		"logo" => array(
							"width" => 20,
							"height" => 20,
							"src" =>  base_url()."assets/images/volkswagen-logo.png"
					),
					"title" => "Volkswagen",
					"content" => ""
			 ),			
		));
		
		$this->load->view("basic/content/survey/oem_view",$this->_data);
	}
	
}
?>
