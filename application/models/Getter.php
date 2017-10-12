<?php
class Getter extends CI_Model{

    //this is for get dashboard view
    function get_dash_email()
    {        
        // this is for email
        $query = $this->db->query("SELECT c.id, c.campaign_name, l.label_name, c.status
        FROM `campaigns` c
        LEFT JOIN labels l ON c.label_id = l.id
        WHERE c.type = 0"
        );

        return $query->result();

    }

    //this is for get dashboard sms
    public function get_dash_sms(){
        //this is for sms
        $query2 = $this->db->query("SELECT c.id, c.campaign_name, l.label_name, c.status 
        FROM `campaigns` c
        LEFT JOIN labels l ON c.label_id = l.id
        WHERE c.type = 1"
        );

        return $query2->result();

    }
    

    
}