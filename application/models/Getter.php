<?php
class Getter extends CI_Model{

    function get_dash_content()
    {        
        $query = $this->db->query("SELECT c.id, c.campaign_name, l.label_name, c.status
        FROM `campaigns` c
        LEFT JOIN labels l ON c.label_id = l.id"
        );

        return $query->result();
    }

    function toggle_on($id)
    {

        $query = $this->db->query("UPDATE 'campaigns' SET 'status' = '1', 'created_at' = NULL, 'updated_at' = NULL WHERE 'campaigns'.'id' = $id "
        );

        return $query->result();
    }

    
}