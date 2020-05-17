<?php
class cat_model extends CI_Model
{



    public function Add_fs_cat($data){
        $query = $this->db->insert('fs_cat',$data);
    }


    public function get_fs_cat(){
        $query = $this->db->get('fs_cat');
        return $query->result();
    }

    public function delete_fs_cat($id){
        $this->db->where('id', $id);
		$this->db->delete('fs_cat');
    }

 

}

?>