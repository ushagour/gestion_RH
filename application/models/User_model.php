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
    public function ajouter($data) {
        $this->db->insert("utilisateur", $data);
    return $last_id = $this->db->insert_id();

    }

    public function update_user($data,$id){
        $query = $this->db->update('utilisateur',$data,array('id_user'=> $id));

        // if ($this->input->post("oldpassword")==$this->session->userdata('password');) {
        //     # code...
        // } hta nfker fiiha dyall ld password 
    }
}