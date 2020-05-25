<?php
class User_model extends CI_Model
{
    public function Check_user($user,$pass){
        $this->db->where('pass_user' , $pass);
        $this->db->where('login_user' , $user);
        $query = $this->db->get('utilisateur');
        return $query->result();
    }
    public function user_info($id) {    
        $this->db->select('*');
        $this->db->from('utilisateur');
        $this->db->where('id_user',$id);
        $query = $this->db->get();
        return $result = $query->result();
       

    }
}