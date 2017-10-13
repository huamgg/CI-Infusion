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

        // public function toggle-off() {
            
        //         $this->load->model('Getter');
        //         $data['dashboard_content'] = $this->Getter->get_dash_content(); 
        //         $this->load->view('dashboardView', $data);
        // }

        // New Campaign Form -------

        public function newemailcampaign(){
                            $this->load->view('newemailcampaignView', 'refresh');
                        }
        public function sequenceform(){                        
                            $this->load->view('sequenceformView', 'refresh');
        }
                               
        public function campaignregist(){
                  //this for validation
                //   if (isset($_POST['campaignregist'])){
                //     $this->form_validation->set_rules('campaign_name', 'campaign name', 'required|is_unique');
                //     $this->form_validation->set_rules('sequence_qty', 'sequence qty', 'required');
                //     $this->form_validation->set_rules('label_id', 'label id', 'required');
                    

                //     if ($this->form_validation->run() == TRUE){
                //                 echo 'form validated';
                    $newcampaign = [
                        'campaign_name' =>$this->input->post('campaign_name'),
                        'sequence_qty'=>$this->input->post('sequence_qty'),
                        'label_id' =>$this->input->post('label_id'),
                        'status' =>$this->input->post('status'),
                        'type' =>$this->input->post('type'),
                         'created_at'=>date('Y-m-d')
                    ];
                    $this->db->insert('campaigns', $newcampaign);
            //     }
            // }
                $this->load->view('newemailcampaignView','refresh');
            }

                
        
}
