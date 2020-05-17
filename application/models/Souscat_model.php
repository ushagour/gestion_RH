<?php
class souscat_model extends CI_Model
{



    public function Add_fs_souscat($data){
        $query = $this->db->insert('fs_sous_cat',$data);
    }


    public function get_fs_sous_cat(){
        $this->db->select('fs_sous_cat.id,fs_cat.name as catname ,fs_sous_cat.name as souscatname');
		$this->db->from('fs_sous_cat');
		$this->db->join('fs_cat', 'fs_sous_cat.id_cat= fs_cat.id');
		$query=$this->db->get();
        return $result=$query->result();
        
    }
//article view
    public function getby($id){
        $this->db->select('fs_sous_cat.id,fs_cat.name as catname ,fs_sous_cat.name as souscatname');
		$this->db->from('fs_sous_cat');
		$this->db->join('fs_cat', 'fs_sous_cat.id_cat= fs_cat.id');
        $this->db->where('id_cat',$id);
		$query=$this->db->get();
        return $result=$query->result();
        
    }

    public function delete_fs_cat($id){
        $this->db->where('id', $id);
		$this->db->delete('fs_sous_cat');
    }

    public function get_by_cat($id){
        $this->db->select('fs_sous_cat.id,fs_cat.name as catname ,fs_sous_cat.name as souscatname');
		$this->db->from('fs_sous_cat');
        $this->db->join('fs_cat', 'fs_sous_cat.id_cat= fs_cat.id');
        $this->db->where('fs_cat.id',$id);
		$query=$this->db->get();
        return $result=$query->result();
        
    }
 

}

?>