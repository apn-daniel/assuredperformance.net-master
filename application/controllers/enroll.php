<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

exit('This page is deprecated and used only by spam bots');

class Enroll extends APN_Controller {
    
        public function __construct() {
            parent::__construct();
        }
         
        
        
	public function index(){
            
            
            if($this->input->post()){

                $post = $this->input->post();
                
                $EmailTo = "enrollments@assuredperformance.net";
                
                //(isset($post['referral_url'])) ? trim(stripslashes($post['referral_url'])) : 

                $Subject = "100% Write Application Form";
                $name= trim(stripslashes($post['firstName'])).' '.trim(stripslashes($post['lastName']));
                $busName = trim(stripslashes($post['busName']));
                $phone = trim(stripslashes($post['phone']));
                $email = trim(stripslashes($post['email']));

                //
                $address1 = trim(stripslashes($post['address1']));
                $address2 = trim(stripslashes($post['address2']));
                $city = trim(stripslashes($post['city']));
                $state = trim(stripslashes($post['state']));
                $zip = trim(stripslashes($post['zip']));
                //


                $purchaseStatsTotalSales = trim(stripslashes($post['purchaseStats-totalSales']));

                //
                $purchaseStatsYearFounded = trim(stripslashes($post['purchaseStats-yearFounded']));
                //
                $purchaseStatsPartsRevenueD = trim(stripslashes($post['purchaseStats-partsRevenueD']));
                $purchaseStatsPartsRevenueP = trim(stripslashes($post['purchaseStats-partsRevenueP']));
                $purchaseStatsLaborRevenueD = trim(stripslashes($post['purchaseStats-laborRevenueD']));
                $purchaseStatsLaborRevenueP = trim(stripslashes($post['purchaseStats-laborRevenueP']));
                $purchaseStatsConsumerPaySourceD = trim(stripslashes($post['purchaseStats-consumerPaySourceD']));
                $purchaseStatsConsumerPaySourceP = trim(stripslashes($post['purchaseStats-consumerPaySourceP']));
                $purchaseStatsInsurancePaySourceD = trim(stripslashes($post['purchaseStats-insurancePaySourceD']));
                $purchaseStatsInsurancePaySourceP = trim(stripslashes($post['purchaseStats-insurancePaySourceP']));
                $purchaseStatsDrpSourceD = trim(stripslashes($post['purchaseStats-drpSourceD']));
                $purchaseStatsDrpSourceP = trim(stripslashes($post['purchaseStats-drpSourceP']));
                $purchaseStatsDorfSourceD = trim(stripslashes($post['purchaseStats-dorfSourceD']));
                $purchaseStatsDorfSourceP = trim(stripslashes($post['purchaseStats-dorfSourceP']));
                $purchaseStatsAfterMarketUsageD = trim(stripslashes($post['purchaseStats-afterMarketUsageD']));
                $purchaseStatsAfterMarketUsageP = trim(stripslashes($post['purchaseStats-afterMarketUsageP']));
                $purchaseStatsUsedUsageD = trim(stripslashes($post['purchaseStats-usedUsageD']));
                $purchaseStatsUsedUsageP = trim(stripslashes($post['purchaseStats-usedUsageP']));
                $purchaseStatsTotalOemUsageD = trim(stripslashes($post['purchaseStats-totalOemUsageD']));
                $purchaseStatsTotalOemUsageP = trim(stripslashes($post['purchaseStats-totalOemUsageP']));
                $purchaseStatsGmUsageD = trim(stripslashes($post['purchaseStats-gmUsageD']));
                $purchaseStatsGmUsageP = trim(stripslashes($post['purchaseStats-gmUsageP']));
                $purchaseStatsToyotaUsageD = trim(stripslashes($post['purchaseStats-toyotaUsageD']));
                $purchaseStatsToyotaUsageP = trim(stripslashes($post['purchaseStats-toyotaUsageP']));
                $purchaseStatsFordUsageD = trim(stripslashes($post['purchaseStats-fordUsageD']));
                $purchaseStatsFordUsageP = trim(stripslashes($post['purchaseStats-fordUsageP']));
                $purchaseStatsHondaUsageD = trim(stripslashes($post['purchaseStats-hondaUsageD']));
                $purchaseStatsHondaUsageP = trim(stripslashes($post['purchaseStats-hondaUsageP']));
                $purchaseStatsChryslerUsageD = trim(stripslashes($post['purchaseStats-chryslerUsageD']));
                $purchaseStatsChryslerUsageP = trim(stripslashes($post['purchaseStats-chryslerUsageP']));
                $purchaseStatsNissanUsageD = trim(stripslashes($post['purchaseStats-nissanUsageD']));
                $purchaseStatsNissanUsageP = trim(stripslashes($post['purchaseStats-nissanUsageP']));
                $purchaseStatsAllOtherUsageD = trim(stripslashes($post['purchaseStats-allOtherUsageD']));
                $purchaseStatsAllOtherUsageP = trim(stripslashes($post['purchaseStats-allOtherUsageP']));
                //
                $purchaseStatsDRPRad = (isset($post['purchaseStats-DRPRad']) && !empty($post['purchaseStats-DRPRad']))?trim(stripslashes($post['purchaseStats-DRPRad'])):'';
                $purchaseStatsDRPName = trim(stripslashes($post['purchaseStats-DRPName']));
                //
                $paintBrand = trim(stripslashes($post['paintBrand']));
                $purchaseStatsMainJobber = trim(stripslashes($post['purchaseStats-mainJobber']));
                $purchaseStatsLiquidPurchase = trim(stripslashes($post['purchaseStats-liquidPurchase']));
                $purchaseStatsContracted = (isset($post['purchaseStats-DRPRad']) && !empty($post['purchaseStats-contracted']))?trim(stripslashes($post['purchaseStats-contracted'])):'';
                $purchaseStatsMaterialBrand = trim(stripslashes($post['purchaseStats-materialBrand']));

                //
                $eSig = trim(stripslashes($post['eSig']));
                $shopName = trim(stripslashes($post['shopName']));
                $completedDate = trim(stripslashes($post['month'])).'/'.trim(stripslashes($post['day'])).'/'.trim(stripslashes($post['year']));
                $referralURL = trim(stripslashes($post['referral_url']));
                $repname = trim(stripslashes($post['repname']));
                //


                // prepare email body text
                $body = "";
                $body .= "Name: $name \n";
                $body .= "Business Name: $busName \n";
                $body .= "Phone: $phone \n";
                $body .= "Email: $email \n";
                $body .= "Address 1: $address1 \n";
                $body .= "Address 2: $address2 \n";
                $body .= "City: $city \n";
                $body .= "State: $state \n";
                $body .= "Zip: $zip \n\n";


                $body .= "Annual Figures \n";
                $body .= "Total Sales: $" . "$purchaseStatsTotalSales \n";
                $body .= "Year Founded:" . "$purchaseStatsYearFounded \n\n";

                $body .= "Revenue \n";
                $body .= "Parts: $" . "$purchaseStatsPartsRevenueD, $purchaseStatsPartsRevenueP% \n";
                $body .= "Labor: $" . "$purchaseStatsLaborRevenueD, $purchaseStatsLaborRevenueP% \n\n";

                $body .= "Source \n";
                $body .= "Consumer Pay: $" . "$purchaseStatsConsumerPaySourceD, $purchaseStatsConsumerPaySourceP% \n";
                $body .= "Insurance Pay: $" . "$purchaseStatsInsurancePaySourceD, $purchaseStatsInsurancePaySourceP% \n";
                $body .= "DRP: $" . "$purchaseStatsDrpSourceD, $purchaseStatsDrpSourceP% \n";
                $body .= "Dealer or Fleet Referral: $" . "$purchaseStatsDorfSourceD, $purchaseStatsDorfSourceP% \n\n";

                $body .= "Parts \n";
                $body .= "After Market: $" . "$purchaseStatsAfterMarketUsageD, $purchaseStatsAfterMarketUsageP% \n";
                $body .= "Used: $" . "$purchaseStatsUsedUsageD, $purchaseStatsUsedUsageP% \n";
                $body .= "Total OEM: $" . "$purchaseStatsTotalOemUsageD, $purchaseStatsTotalOemUsageP% \n";
                $body .= "GM: $" . "$purchaseStatsGmUsageD, $purchaseStatsGmUsageP% \n";
                $body .= "Toyota: $" . "$purchaseStatsToyotaUsageD, $purchaseStatsToyotaUsageP% \n";
                $body .= "Ford: $" . "$purchaseStatsFordUsageD, $purchaseStatsFordUsageP% \n";
                $body .= "Honda: $" . "$purchaseStatsHondaUsageD, $purchaseStatsHondaUsageP% \n";
                $body .= "Chrysler: $" . "$purchaseStatsChryslerUsageD, $purchaseStatsChryslerUsageP% \n";
                $body .= "Nissan: $" . "$purchaseStatsNissanUsageD, $purchaseStatsNissanUsageP% \n";
                $body .= "All Other OEM: $" . "$purchaseStatsAllOtherUsageD, $purchaseStatsAllOtherUsageP% \n";
                $body .= "Participant in DRP?" . "$purchaseStatsDRPRad \n";
                $body .= "DRP Name" . "$purchaseStatsDRPName \n\n";

                $body .= "Paint & Material Profile \n";
                $body .= "Paint Brand: $paintBrand \n";
                $body .= "Main Jobber: $purchaseStatsMainJobber \n";
                $body .= "Approx. Annual Liquid Purchase: $" . "$purchaseStatsLiquidPurchase \n";
                $body .= "Currently Under Long Term Paint Purchase Contract: $purchaseStatsContracted \n";
                $body .= "Main Material Brand: $purchaseStatsMaterialBrand\n\n";

                $body .= "E-Signature: $eSig\n";
                $body .= "Shop Name: $shopName\n";
                $body .= "Completed Date: $completedDate\n";
                $body .= "Referral URL: $referralURL";
                $body .= "Repname: $repname";
                $email = filter_var($email, FILTER_SANITIZE_EMAIL);
//                $GMDealerEmail1 = filter_var($GMDealerEmail1, FILTER_SANITIZE_EMAIL);
//                $GMDealerEmail2 = filter_var($GMDealerEmail2, FILTER_SANITIZE_EMAIL);
//                $GMDealerEmail3 = filter_var($GMDealerEmail3, FILTER_SANITIZE_EMAIL);
//                $GMDealerEmail4 = filter_var($GMDealerEmail4, FILTER_SANITIZE_EMAIL);
//                $GMDealerEmail5 = filter_var($GMDealerEmail5, FILTER_SANITIZE_EMAIL);
//
//                if ($GMDealerName2 != '') {
//                        $body .= "Parts Dealer 2 \nGM Dealer Name: $GMDealerName2 \nGM Dealer Address: $GMDealerAddress2 \nGM Dealer City: $GMDealerCity2 \nGM Dealer State: $GMDealerState2 \nGM Dealer Zip Code: $GMDealerZip2 \nGM Dealer Rep Name: $GMDealerRepName2 \nGM Dealer Phone: $GMDealerPhone2 \nGM Dealer Email: $GMDealerEmail2 \n\n";
//                }
//
//                if ($GMDealerName3 != '') {
//                        $body .= "Parts Dealer 3 \nGM Dealer Name: $GMDealerName3 \nGM Dealer Address: $GMDealerAddress3 \nGM Dealer City: $GMDealerCity3 \nGM Dealer State: $GMDealerState3 \nGM Dealer Zip Code: $GMDealerZip3 \nGM Dealer Rep Name: $GMDealerRepName3 \nGM Dealer Phone: $GMDealerPhone3 \nGM Dealer Email: $GMDealerEmail3 \n\n";
//                }
//
//                if ($GMDealerName4 != '') {
//                        $body .= "Parts Dealer 4 \nGM Dealer Name: $GMDealerName4 \nGM Dealer Address: $GMDealerAddress4 \nGM Dealer City: $GMDealerCity4 \nGM Dealer State: $GMDealerState4 \nGM Dealer Zip Code: $GMDealerZip4 \nGM Dealer Rep Name: $GMDealerRepName4 \nGM Dealer Phone: $GMDealerPhone4 \nGM Dealer Email: $GMDealerEmail4 \n\n";
//                }
//
//                if ($GMDealerName5 != '') {
//                        $body .= "Parts Dealer 5 \nGM Dealer Name: $GMDealerName5 \nGM Dealer Address: $GMDealerAddress5 \nGM Dealer City: $GMDealerCity5 \nGM Dealer State: $GMDealerState5 \nGM Dealer Zip Code: $GMDealerZip5 \nGM Dealer Rep Name: $GMDealerRepName5 \nGM Dealer Phone: $GMDealerPhone5 \nGM Dealer Email: $GMDealerEmail5 \n\n";
//                }

                // send email 
                $success = mail($EmailTo, $Subject, $body, "From: <noreply@asssuredperformance.net>");
								// @mail("youraccountmanager@assuredperformance.net", $Subject, $body, "From: <noreply@asssuredperformance.net>");
								// @mail("rachel.weisman@assuredperformance.net", $Subject, $body, "From: <$email>");								
								// @mail("harvey.bunting@assuredperformance.net", $Subject, $body, "From: <$email>");								 
                // redirect to success page 
                if ($success){
                    print "Thank you for applying and we will contact you shortly.";
                } else {
                    print "There was an error.  Please resubmit the info again.";
                }

                return;
            }
            
            $this->_set('title', "Join the Co-Op | P: 949-221-0010 | Assured Performance Network");
            
//            test javascript and css files
            $this->_set('js', "/resources/common/js/enroll");
            $this->_set('css', "/resources/common/css/enroll"); 
            $this->_set('active', array('', '', '', '', '', '', ''));             
            
            $this->load->view('basic/header/header', $this->_data);
            $this->load->view('basic/content/enroll');
            $this->load->view('basic/footer/footer');
                
	}
}

?>