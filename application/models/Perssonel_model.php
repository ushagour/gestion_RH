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
    public function delete($id){
        $this->db->where('id', $id);
		$this->db->delete('perssonel');
    }
 
    public function check_personnel($id,$state){//red lbal men trtiib dyll les parametres 

        $this->db->set('checked', $state);
        $this->db->where('id', $id);
        $this->db->update("perssonel");
        // echo $state; pour le test des variabes apre lexecution du requette
        }
    
    public function personnel_to_edit($id){
        $this->db->select('*');
        $this->db->from('perssonel');
    
        $this->db->where('id', $id);
     
        $query = $this->db->get();
        return $result = $query->result();
    }

    public function update_personnel($data,$id){
        $query = $this->db->update('perssonel',$data,array('id'=> $id));
    }
    
    
    public function select_p() {
        $this->db->select('*');
        $this->db->from('perssonel');
      //  $this->db->where('CIN',$cine);
      $this->db->order_by('id', 'desc');

        $query = $this->db->get();
        return $result = $query->result();

    }
    public function get_per_to_print() {
        $this->db->select('*');
        $this->db->from('perssonel');
        $this->db->where('checked',1);
        $this->db->order_by('id', 'desc');

        $query = $this->db->get();
        return $result = $query->result();

    }

    public function count_to_print() {	
        $this->db->select('*');
        $this->db->from('perssonel');
        $this->db->where('checked',1);
		$query=$this->db->get();
		return $result=$query->num_rows();
	  }
    // region search 
    public function get_count($cin) {	
        $this->db->select('*');
        $this->db->from('perssonel');
        $this->db->like('CIN ',$cin);
		$query=$this->db->get();
		return $result=$query->num_rows();
	  }

    public function searshit($cin,$limit, $start){
    
        $this->db->select('*');
        $this->db->from('perssonel');
        $this->db->like('CIN ',$cin);
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $result = $query->result();
    }
    



}