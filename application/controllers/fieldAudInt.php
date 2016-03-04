<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class fieldAudInt extends APN_Controller {
    
        public function __construct() {
            parent::__construct();
        }
         
        
        
	public function index(){
            
            if($this->input->post('submit')){
                
                $post = $this->input->post();
                
                $EmailTo =  "jobs@assuredperformance.net";
                $Subject = "APN Field Auditor Interview";

                $dateInterviewed = trim(stripslashes($post['month_int'])).'/'.trim(stripslashes($post['day_int'])).'/'.trim(stripslashes($post['year_int']));
                $howYouHeard = trim(stripslashes($post['how_you_heard_about_apn']));
                //
                $name = trim(stripslashes($post['name']));
                $company = trim(stripslashes($post['company']));
                $officePhone = trim(stripslashes($post['office_phone']));
                $mobilePhone = trim(stripslashes($post['mobile_phone']));
                $address = trim(stripslashes($post['address']));
                $cityStateZip = trim(stripslashes($post['city'])).', '.trim(stripslashes($post['state'])).', '.trim(stripslashes($post['zip']));
                //
                $email = trim(stripslashes($post['email']));
                $areasCovered = trim(stripslashes($post['areas_covered']));
                $standardAppraisalRate = trim(stripslashes($post['standard_appraisal_rate']));
                $tripCharges = trim(stripslashes($post['trip_charges']));
                $otherRateHourly = trim(stripslashes($post['other_rate_hourly']));
                $yearsExp = trim(stripslashes($post['years_exp_in_collision']));
                //
                $industryExp = trim(stripslashes($post['industry_exp']));
                $examplesOfExp = trim(stripslashes($post['examples_of_your_exp']));

                // prepare email body text
                $body = "";
                $body .= "Date of Application: $dateInterviewed \n";
                $body .= "How You Heard About APN: $howYouHeard \n";
                $body .= "Name: $name \n";
                $body .= "Company: $company \n";
                $body .= "Office Phone: $officePhone \n";
                $body .= "Mobile Phone: $mobilePhone \n";
                $body .= "Address: $address \n";
                $body .= "City, State, Zip: $cityStateZip \n";


                $body .= "Email:  " . "$email \n";
                $body .= "Areas Covered:  " . "$areasCovered \n";
                $body .= "Standard Appraisal Rate:  " . "$standardAppraisalRate \n";
                $body .= "Trip Charges (if any):  " . "$tripCharges \n";
                $body .= "Other Rate (Hourly):  " . "$otherRateHourly \n";
                $body .= "Years Experience In Collision:  " . "$yearsExp \n";
                $body .= "Industry Experience: (incl. job role, years, position, duties, etc.):  " . "$industryExp \n";

                $body .= "Give examples of your experience with collision repair equipment:" . "$examplesOfExp \n";

                $email = filter_var($email, FILTER_SANITIZE_EMAIL);



                $success = mail($EmailTo, $Subject, $body, "From: {$email}");



                if ($success){
                  print "<span class='bold' style='font-weight:15px;'>Thank you for applying and we will contact you shortly.</span>";
                }
                else{
                  print "<span class='bold' style='font-weight:15px;'>There was an error.  Please resubmit the info again.</span>";
                }


            }
            $this->_set('title', "Field Audit Interview | P: 949-221-0010 | Assured Performance Network");
            
//            test javascript and css files
            $this->_set('js', "/resources/common/js/vip");
            $this->_set('css', "/resources/common/css/vip"); 
            $this->_set('active', array('', '', '', '', '', '', ''));                 
            
            $this->load->view('basic/header/header', $this->_data);
            $this->load->view('basic/content/fieldAudInt');
            $this->load->view('basic/footer/footer');
                
	}
}