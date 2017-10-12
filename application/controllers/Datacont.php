<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datacont extends CI_Controller {

	//set as default
	public function index(){
        $this->load->model('Getter');
        $data['dashboard_content'] = $this->Getter->get_dash_content(); 
        $data['asd']= 1;
        $this->load->view('dashboardView', $data);
    }
}
