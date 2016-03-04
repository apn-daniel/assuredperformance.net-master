<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Write extends APN_Controller {
    
        public function __construct() {
            parent::__construct();
            $this->load->model("Refer_model");
        }
         
        
        
	public function index(){
            $this->_set('title', "100% Write Rebate");
            
//          test javascript and css files
            $this->_set('js', "/resources/common/js/write");
            $this->_set('css', "/resources/common/css/write"); 
            $this->_set('active', array('', 'active', '', '', '', '', ''));
            
            $this->load->view('basic/header/header', $this->_data);
            $this->load->view('basic/content/write');
            $this->load->view('basic/footer/footer');
	}
	
	public function refer(){
			$this->_set('title', "100% Write Rebate - Dealer Shop Referral");
            
//          test javascript and css files
            $this->_set('css', "/resources/common/css/write"); 
            $this->_set('active', array('', 'active', '', '', '', '', ''));
            
			if($post = $this->input->post())
            {
            	$this->form_validation->set_rules('dealer_name', 'Dealer Name', 'trim|required|xss_clean');
            	$this->form_validation->set_rules('dealer_code', 'Dealer Code', 'trim|xss_clean');
				
				if ($this->form_validation->run() == true) {
					$toInsert = array();
					
					foreach($post['shop_name'] as $key => $value) {
						if($value != '') {
							$toInsert[$key] = array('dealerName' => $post['dealer_name'], 'dealerCode' => $post['dealer_code'], 'shopName' =>  $this->security->xss_clean($value));
						}
					}
					
					foreach($toInsert as $key => $row) {
						if($post['contact_name'][$key] != '') {
							$toInsert[$key]['contactName'] = $this->security->xss_clean($post['contact_name'][$key]);
						} else {
							unset($toInsert[$key]);
							continue;
						}
						if($post['shop_phone'][$key] != '') {
							$toInsert[$key]['shopPhone'] = $this->strip_non_digits($this->security->xss_clean($post['shop_phone'][$key]));
							$toInsert[$key]['created'] = date('Y-m-d H:i:s');
						} else {
							unset($toInsert[$key]);
							continue;
						}
					}
					
	            	if(sizeof($toInsert) > 0) {
	            		if($this->Refer_model->insertRefer($toInsert)) {
	            			$to = 'juan.clark@assuredperformance.net';
							$subject = "New 100% Write shop referrals from ".ucwords(strtolower($post['dealer_name']));
							
							$headers  = "MIME-Version: 1.0\r\n";
							$headers .= "Content-Type: text/html; charset=iso-8859-1\r\n";
							$headers .= 'From: Assured Performance <no-reply@assuredperformance.net>' . "\r\n";
							$headers .= "Cc: ben.miller@assuredperformance.net, david.koontz@assuredperformance.net\r\n";
							
							$msg = ucwords(strtolower($post['dealer_name']))." has submitted ".count($toInsert)." shops for referral for the 100% Write program. Their info is below.<br/><br/>";
							$msg .= "<b>Referring Dealer:</b> ".ucwords(strtolower($post['dealer_name']));
							if(!empty($post['dealer_code'])){
								$msg .= "<br/><b>Dealer Code:</b> ".$post['dealer_code'];
							}
							$msg .= "<br/><br/>";
							
							$i = 1;
							foreach($toInsert as $referral){
								$msg .= "<b>".$i.".</b> ".ucwords(strtolower($referral['shopName']))." &ndash; ".$referral['shopPhone']."&nbsp;&nbsp;&nbsp;<b>Contact:</b> ".ucwords(strtolower($referral['contactName']))."<br/>";
								$i++;
							}
							
							mail($to,$subject,$msg,$headers);
	            			$this->session->set_flashdata('flash','<ul class="success"><li>Thank you for your submission.</li></ul>');
	            		} else {
	            			$this->session->set_flashdata('flash','<ul class="errors"><li>There was an error processing your referrals. Please try again.</li></ul>');
	            		}
	            	} else {
	            		$this->session->set_flashdata('flash','<ul class="errors"><li>You must enter each item for each individual shop you are referring.</li></ul>');
	            	}
					
				} else {
					$this->session->set_flashdata('flash','<ul class="errors">'.validation_errors('<li>','</li>').'</ul>');
				}
            }
            
            $this->load->view('basic/header/header', $this->_data);
            $this->load->view('basic/content/writeReferral');
            $this->load->view('basic/footer/footer');
	}
	
	protected function strip_non_digits($num) {
		return preg_replace('/[^0-9]/', '', $num);
	}
	
}
