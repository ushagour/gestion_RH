<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __Construct()
    {
        parent::__Construct();
    }
    
    public function index()
    {

    }
	public function login() {
		//echo $this->input->post('username')."-".$this->input->post('password');
		
		if(isset($_POST['username'])){
			$user = $this->input->post('username');
			$pass = sha1($this->input->post('password'));

			$data['user'] = $this->User_model->Check_user($user,$pass);
			
			if(!empty( $data['user'])){
				print_r($data['user'][0]->nom_user);

				$newdata=array(
				'name'=> $data['user'][0]->nom_user,
				'username'=> $data['user'][0]->login_user,
				'user_id'=> $data['user'][0]->id_user,
				'role'=> $data['user'][0]->role,
				'logged_in'=> TRUE);

				$this->session->set_userdata($newdata);
				redirect(base_url().'afficher-synthese');
			}
			else{
				$this->session->set_flashdata('login_err', 'Log ou mdp err');
				$this->load->view('globals/login');
			}

		}
		else{
			if($this->session->userdata('logged_in')){
				redirect(base_url().'afficher-synthese');
			}
			else{
				$this->load->view('globals/login');
			}
		}
	}


	public function Logout() {
		$this->session->sess_destroy();
		redirect(base_url()."login");
	}
}
