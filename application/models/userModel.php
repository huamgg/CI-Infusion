<?php //for get data from database use model

class userModel extends CI_Model{

    public function __constract(){
		parent:: __constract();
	}
	
	public function getCampaign(){
		$userId = $this->session->userdata('user_id');
		$query= $this->db->get('campaigns');
		return $query->result();
	}

}