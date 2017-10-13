<?php
class Getter extends CI_Model{

    //this is for get dashboard view
    function get_dash_content()
    {        
        $query = $this->db->query("SELECT c.id, c.type, c.campaign_name, l.label_name, c.status
        FROM `campaigns` c
        LEFT JOIN labels l ON c.label_id = l.id"
        );

        return $query->result();
   
    }

    function get_campaign($id)
    {        
        function getCampaign($id){
        return $this->db->get_where('campaign',['id' => $id]);
    }
   
    }
}