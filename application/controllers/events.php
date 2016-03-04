<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Events extends APN_Controller {
    
        public function __construct() {
            parent::__construct();
        }

    public function index() {
        $this->_set('title', "Events | Assured Performance");
        // $this->_set('css', "/assets/css/common", array());

        // $this->_set('active', array('', '', 'active', '', '', '', '')); 
        
        $this->load->view('basic/header/header-conf', $this->_data);
        $this->load->view('basic/content/events-conf');
        // $this->load->view('basic/footer/footer');
    }

    // public function register() { 
    //    $is_success = 0;
      
    //     if ($this->input->post()) {
    //         $post = $this->input->post();
    //         // var_dump($post);
    //         //contactname,contactphone,contactemail,shopname,contactcomments,address,city,shopzip,states
    //         if (!isset($post["states"]) || empty($post["states"])) {$states="";} else {$states=$post["states"];}
    //         if (!isset($post["contactname"]) || empty($post["contactname"])) {$contactname="";} else {$contactname=$post["contactname"];}
    //         if (!isset($post["contactphone"]) || empty($post["contactphone"])) {$contactphone="";} else {$contactphone=$post["contactphone"];}
    //         if (!isset($post["contactemail"]) || empty($post["contactemail"])) {$contactemail="";} else {$contactemail=$post["contactemail"];}
    //         if (!isset($post["shopname"]) || empty($post["shopname"])) {$shopname="";} else {$shopname=$post["shopname"];}
    //         if (!isset($post["contactcomments"]) || empty($post["contactcomments"])) {$contactcomments="";} else {$contactcomments=$post["contactcomments"];}
    //         if (!isset($post["address"]) || empty($post["address"])) {$address="";} else {$address=$post["address"];}
    //         if (!isset($post["city"]) || empty($post["city"])) {$city="";} else {$city=$post["city"];}
    //         if (!isset($post["shopzip"]) || empty($post["shopzip"])) {$shopzip="";} else {$shopzip=$post["shopzip"];}
    //         if (!isset($post["attendees"]) || empty($post["attendees"])) {$attendees="";} else {$attendees=$post["attendees"];}
            

    //         $sql = "INSERT INTO new_apn.gc_events (states,contactname,contactphone,contactemail,shopname,contactcomments,address,city,shopzip,attendees) VALUES ('".$states."','".$contactname."','".$contactphone."','".$contactemail."','".$shopname."','".$contactcomments."','".$address."','".$city."','".$shopzip."','".$attendees."')";
    //         $this->db->query($sql);

    //         $is_success = 1; 
    //     }

    //     $data['success'] = $is_success;
        
    //     // $this->_set("success", $is_success);
    //     $this->load->view('basic/content/events-conf-reg', $data);
    // }
    // public function faq() {
    //     $this->load->view('basic/content/events-conf-faq');
    // }
    // public function payment() {
    //     $this->load->view('basic/content/events-conf-pay');
    // }
    // public function thanks() {
    //     $this->load->view('basic/content/events-conf-thanks');
    // }
    // public function pricingterms() {
    //     $this->load->view('basic/content/events-pricing-terms');
    // }
}