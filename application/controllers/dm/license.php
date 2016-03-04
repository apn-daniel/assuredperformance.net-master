<?php
/**
 * Created by PhpStorm.
 * User: TriNguyen
 * Date: 3/7/15
 * Time: 9:28 AM
 */

class License extends APN_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index($contactsID) {

        // if not valid number, redirect to front page
        if ( !$contactsID ) {
            redirect(base_url());
        }
        $query = $this->db->get_where("apn.dm_eula",array("contactsID" => $contactsID));
        if ( $query->num_rows()> 0 ) {
            redirect("dm/end-user-agreement/confirm/".$contactsID);
        }

        if ( $this->input->post() ) {
            $this->form_validation->set_rules("fname","First Name","trim|required|xss_clean");
            $this->form_validation->set_rules("lname","Last Name","trim|required|xss_clean");
            $this->form_validation->set_rules("email","Email Address","trim|required|valid_email|xss_clean");
            $this->form_validation->set_rules("eula","EULA","trim|required|xss_clean");
            $this->form_validation->set_rules("terms","Terms and Condition","trim|required|xss_clean");

            $post = $this->input->post();

            if ( $this->form_validation->run() === FALSE ) {
                $this->session->set_flashdata('fname_error',form_error('fname'));
                $this->session->set_flashdata('lname_error',form_error('lname'));
                $this->session->set_flashdata('email_error',form_error('email'));
                $this->session->set_flashdata('eula_error',form_error('eula'));
                $this->session->set_flashdata('terms_error',form_error('terms'));
                foreach ( $post as $key => $value ) {
                    if ( in_array($key,array("fname","lname","email")) ) {
                        $this->session->set_flashdata($key,$value);
                    }
                }
                redirect(current_url());

            } else {
                $toInsert = array(
                    "contactsID" => $post['contactsID'],
                    "fname" => $post['fname'],
                    "lname" => $post['lname'],
                    "email" => $post['email'],
                    "created" => date("Y-m-d H:i:s")
                );
                $this->db->insert("apn.dm_eula",$toInsert);
                redirect(site_url("dm/end-user-agreement/confirm/".$post['contactsID']));
            }
        }

        $data["title"] = "End User License Agreement and Terms &amp; Conditions";
        $data["css"][] = "assets/css/dm/index.css";
        $data["contactsID"] =  $contactsID;


        $this->load->view("dm/header",$data);
        $this->load->view("dm/index",$data);
        $this->load->view("dm/footer",$data);

    }

    public function confirm($contactsID) {
        // if not valid number, redirect to front page
        if ( !$contactsID ) {
            redirect(base_url());
        }

        $data["title"] = "End User License Agreement and Terms &amp; Conditions";
        $data["css"][] = "assets/css/dm/index.css";

        $this->load->view("dm/header",$data);
        $this->load->view("dm/confirm",$data);
        $this->load->view("dm/footer",$data);
    }

}