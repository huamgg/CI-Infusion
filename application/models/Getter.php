<?php
class Getter extends CI_Model{

    //this is for get dashboard view
    function get_dash_email()
    {        
<<<<<<< HEAD
        $query = $this->db->query("SELECT c.id, c.type, c.campaign_name, l.label_name, c.status
=======
        // this is for email
        $query = $this->db->query("SELECT c.id, c.campaign_name, l.label_name, c.status
>>>>>>> 30919177384c8b51ffb0dd7f69e743236659e4de
        FROM `campaigns` c
        LEFT JOIN labels l ON c.label_id = l.id
        WHERE c.type = 0"
        );

        return $query->result();

<<<<<<< HEAD
    // function toggle($id, $status)
    // {
    //     if ($status==0) {
    //         $query = $this->db->query("UPDATE 'campaigns' SET 'status' = '1', 'created_at' = NULL, 'updated_at' = NULL WHERE 'campaigns'.'id' = $id "
    //         );
    //     }
    //     else{
    //         $query = $this->db->query("UPDATE 'campaigns' SET 'status' = '0', 'created_at' = NULL, 'updated_at' = NULL WHERE 'campaigns'.'id' = $id "
    //         );
    //     }

    //     return $query->result();
    // }
=======
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
    
>>>>>>> 30919177384c8b51ffb0dd7f69e743236659e4de

    
}