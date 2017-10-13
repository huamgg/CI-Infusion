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

<<<<<<< HEAD
        // public function toggle($id, $status) {
            
        //         $this->load->model('Getter');
        //         $data['status'] = $this->Getter->toggle($id, $status); 
                
        //         $this->load->view('dashboardView', $data);
=======
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
>>>>>>> 86d9467bf9e2dd543cc116077010c2359995717e
		
        }

        function edit(){
            //maka dia akan print nama functionnya
            // echo $this->uri->segment(2);
            $this->load->model('model_barang');
            $kode_barang = $this->uri->segment(3);
            $data['barang'] = $this->model_barang->getBarang($kode_barang)->row_array();
            // $this->load->view('edit_barang',$data); lari ke view editor
        }
    
        function edit_data(){
            $id = $this->input->post('id');
            $newData = ['kode_barang' => $this->input->post('kode_barang'),
                        'nama_barang' => $this->input->post('nama_barang'),
                        'price' => $this->input->post('price')
        ];
        $this->db->where('kode_barang',$id);
        $this->db->update('barang',$newData);
    
        redirect('barang');
        }
        
}
