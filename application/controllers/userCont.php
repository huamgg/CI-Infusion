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
                $data['dashboard_content'] = $this->Getter->get_dash_content(); 
                
                $this->load->view('dashboardView', $data);
		
        }

        public function toggle-off() {
            
                $this->load->model('Getter');
                $data['dashboard_content'] = $this->Getter->get_dash_content(); 
                $this->load->view('dashboardView', $data);
        }

        // New Campaign Form -------

        public function newemailcampaign(){
                
                        if ($_SESSION['user_logged'] == FALSE){
                            $this->session->set_flashdata("error", "Please login first to view this page!! ");
                            redirect("authCont/login");
                        }
                            $this->load->view('newemailcampaignView', 'refresh');
                        }
        public function emailform(){
                        
                                if ($_SESSION['user_logged'] == FALSE){
                                    $this->session->set_flashdata("error", "Please login first to view this page!! ");
                                    redirect("authCont/login");
                                }
                                    $this->load->view('emailformView', 'refresh');
                                }
        
        
}
