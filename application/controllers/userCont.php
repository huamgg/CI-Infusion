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
        $this->load->view('dashboardView', 'refresh');

    }

		public function dashboardview() {
                       
                $this->load->model('Getter');
                $data['dashboard_content'] = $this->Getter->get_dash_content();                 
                $this->load->view('dashboardView', $data);
		
        }
        
        public function emailcampaign(){
            $this->load->view('newemailcampaignView');
        }

        public function emailform(){
            $this->load->view('emailformView');
        }

        public function smscampaign(){
            $this->load->view('newsmscampaignView');
        }

        public function smsform(){
            $this->load->view('smsformView');
        }

        // public function toggle($id, $status) {
            
        //         $this->load->model('Getter');
        //         $data['status'] = $this->Getter->toggle($id, $status); 
                
        //         $this->load->view('dashboardView', $data);
		
        // }
        
}
