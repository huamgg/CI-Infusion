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

        //test function
        public function addCampaign(){    
            
            $newCampaign = [ 
            'campaign_name' => $this->input->post('campaign_name'),
            'sequence_qty' => $this->input->post('sequence_qty'),
            'label_id' => $this->input->post('label_id'),
            'type' => $this->input->post('1'),
            'status' => $this->input->post('0'),
            ];
                    
            $this->db->insert('campaigns',$newCampaign);

            redirect('userCont/dashboardview', 'refresh');
            
        }

        public function smsform(){
            $this->load->view('smsformView');
        }

        public function toggle() {
            
                $this->load->model('Getter');

                $id= $this->uri->segment(3);
                $status= $this->uri->segment(4);
                $data['dashboard_content'] = $this->Getter->get_campaign($id); 

                
                if($status==0){
                    $newStat = ['status' => 1];
                }
                else{
                    $newStat = ['status' => 0];
                }
                $this->db->where('id',$id);
                $this->db->update('campaigns',$newStat);
                redirect('userCont/dashboardview');
		
        }

        
}
