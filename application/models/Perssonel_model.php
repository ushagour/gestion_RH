<?php

class Perssonel_model extends CI_Model {

    protected $table = 'perssonel';

    public function __construct() {
        parent::__construct();
    }

  

    public function ajouter($data) {
        $this->db->insert("perssonel", $data);
    return $last_id = $this->db->insert_id();

    }

    public function detail_info($last) {
 
        $this->db->select('*');
        $this->db->from('perssonel');
        $this->db->where('id',$last);
        $query = $this->db->get();
        return $result = $query->result();
    }
    
    
    public function search($cine) {
        $this->db->select('*');
        $this->db->from('perssonel');
        $this->db->where('CIN',$cine);
        $query = $this->db->get();
        return $result = $query->result();

    }



}