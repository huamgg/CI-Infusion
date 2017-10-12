<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class userCont extends CI_Controller {

	//set as default
	public function __construct(){
        
        parent::__construct();
        if ($_SESSION['user_logged'] == FALSE){
            $this->session->set_flashdata("error", "Please login first to view this page!! ");
            redirect("authCont/login");
        }
    }

    //for get userpage after user login
    public function userpage(){

        if ($_SESSION['user_logged'] == FALSE){
            $this->session->set_flashdata("error", "Please login first to view this page!! ");
            redirect("authCont/login");
        }
        
            $this->load->view('userpageView', 'refresh');
        
    }
}