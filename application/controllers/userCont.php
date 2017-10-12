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

		public function dashboardview() {
            
                $this->load->model('Getter');
                $data['email'] = $this->Getter->get_dash_sms();
                $data2['email'] = $this->Getter->get_dash_email(); 
                
                $this->load->view('dashboardView', $data, $data2);
		
        }

}
