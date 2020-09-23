<?php
class conge_model extends CI_Model
{

  protected $table="congé";


    public function get_conges(){
        $this->db->select('*');
        $this->db->from("congé");
        $query = $this->db->get();
        return $query;
    }
 
    
    public function ajouter($data) {
        $this->db->insert("congé", $data);
          echo "'msg':'succes'";
    }
    
}