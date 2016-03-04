<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rewards extends APN_Controller {
    
        public function __construct() {
            parent::__construct();
        }

    public function index() {
        $is_success = 0;
        if ($this->input->post()) {
            $post = $this->input->post();
            if (!isset($post["fca"]) || empty($post["fca"])) { $fca = "0"; } else { $fca = 1; }
            if (!isset($post["gm"]) || empty($post["gm"])) { $gm = 0; } else { $gm = 1; }
            if (!isset($post["nissan"]) || empty($post["nissan"])) { $nissan = 0; } else { $nissan=1; }
            if (!isset($post["others"]) || empty ($post["others"])) {$others = ""; } else {$others = $post["others"]; }
            if (!isset($post["oeconnection"]) || empty($post["oeconnection"])) { $oeconn = 0; } else {$oeconn = 1;}
            if (!isset($post["tba"]) || empty($post["tba"])) { $tba = 0; } else {$tba = 1;}

            $sql = "INSERT INTO apn.rebateApplications (shopname,address,city,state,zip,contactName,phone,email,comments,nissan,fca,others,oeconn,gm,tba,created) VALUES ('".$post["shopname"]."','".$post["address"]."','".$post["city"]."','".$post["state"]."','".$post["zip"]."','".$post["contactname"]."','".$post["phone"]."','".$post["email"]."','".$post["comments"]."','".$nissan."','".$fca."','".$others."','".$oeconn."','".$gm."','".$tba."', NOW())";
            $this->db->query($sql);
            $is_success =1;
        }
        $this->_set("success", $is_success);
        $this->_set('title', "Certified Rewards | Assured Performance");
        $this->_set('css', "/assets/css/common", array()); 
        $this->_set('active', array('', '', 'active', '', '', '', '')); 
        
        $this->load->view('basic/header/header', $this->_data);
        $this->load->view('basic/content/rewards');
        $this->load->view('basic/footer/footer');
    }
}