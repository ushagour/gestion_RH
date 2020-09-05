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

    public function update_user($data){



        $this->db->where('id_user', $this->session->userdata('user_id'));
        $query = $this->db->update('utilisateur',$data);



        // if ($this->input->post("oldpassword")==$this->session->userdata('password');) {
        //     # code...
        // } hta nfker fiiha dyall ld password 
    }
 



    public function tracit($action=""){

        $data_trac=array(
            'action'=>$action,
            'user_id'=> $this->session->userdata('user_id'),
            'date'=>  date('Y-m-d H:i:sa'),
            'adresseIP'=>$_SERVER['REMOTE_ADDR']

          );
        $this->db->insert("pre_trace", $data_trac);
    }


    public function git_notifications($action){

        $this->db->select('*');
        $this->db->from('pre_trace');
        $this->db->like('action', $action);
        $this->db->like('date',date("Y-m-d"));

        $query = $this->db->get();
		return $query->num_rows();
    
    }
}