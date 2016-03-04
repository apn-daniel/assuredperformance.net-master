<?php


/**
* Marketing email to send to all I-Car shops to introduce about our certifymyshop.com
*/
class GetCertified  extends APN_Controller {
	
	function __construct() {
		parent::__construct();       
		$config['charset'] = 'iso-8859-1';
		$config["priority"] = 1;
		$config["validate"] = TRUE;
		$config["mailtype"] = "html";
		
		$this->email->initialize($config);
	}  
	
	
	
	public function render($dataInfo)
	{                             
		$string = base64_decode($dataInfo,TRUE);
		if (!$string) {
			redirect(base_url());
		}                    
		
		                       
		$data["info"] = $dataInfo;
		
		$this->load->view("marketing/icar_view",$data);
	}
	
	public function notify($info)
	{
		$string = base64_decode($info,TRUE);
		if (!$string) {
			redirect(base_url());
		}
		$result = false;
		list($junk,$id) = explode("_",$string);
		
		$query = $this->db->get_where("new_apn.icar_shops",array("id" => $id));
		if ($query->num_rows()) {
			$info = $query->row_array();

			
			$this->email->clear();
			$this->email->to("lesa.frye@assuredperformance.net");
			$this->email->from("noreply@assuredperformance.net","Assured Performance Network");
			$this->email->subject("Notification - ".$info["OrgName"]);
			$this->email->message($this->notifyContent($info));
			$result = $this->email->send();
		}
		
		if (!$result) {
			redirect(base_url());
		} else {
			redirect("http://www.certifymyshop.com");
		}
	}
	
	protected function notifyContent($info) {
		
		$content[] = "Notification: ".date("m/d/Y g:iA");
		if (!empty($info)) {
			foreach ($info as $key => $value) {
				$content[] = "{$key}: {$value}";
			}
		}
		return implode("<br/>",$content);
	}
	
}


?>