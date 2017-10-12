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
<<<<<<< HEAD

=======
>>>>>>> 30919177384c8b51ffb0dd7f69e743236659e4de
        $this->load->view('userpageView', 'refresh');

    }

		public function dashboardview() {
                       
                $this->load->model('Getter');
<<<<<<< HEAD
                $data['dashboard_content'] = $this->Getter->get_dash_content();                 
                $this->load->view('dashboardView', $data);
		
        }

        // public function toggle($id, $status) {
        //     $id= 
        //         $this->load->model('Getter');
        //         $data['status'] = $this->Getter->toggle($id, $status); 
                
        //         $this->load->view('dashboardView', $data);

        //         // $this->load->view('registerView');
		
        // }
=======
                $data['email'] = $this->Getter->get_dash_sms();
                $data2['email'] = $this->Getter->get_dash_email(); 
                
                $this->load->view('dashboardView', $data, $data2);
		
        }

        // public function toggle-off() {
            
        //         $this->load->model('Getter');
        //         $data['dashboard_content'] = $this->Getter->get_dash_content(); 
        //         $this->load->view('dashboardView', $data);
        // }

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
        
>>>>>>> 30919177384c8b51ffb0dd7f69e743236659e4de
        
}
