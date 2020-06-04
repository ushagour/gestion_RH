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
			$remember = $this->input->post('remember');

			$data['user'] = $this->User_model->Check_user($user,$pass);
			
			if(!empty( $data['user'])){
				print_r($data['user'][0]->nom_user);

				$newdata=array(
				'name'=> $data['user'][0]->nom_user,
				'username'=> $data['user'][0]->login_user,
				'password'=> $data['user'][0]->pass_user,
				'user_id'=> $data['user'][0]->id_user,
				'is_super_admin'=> $data['user'][0]->is_super_admin,
				'logged_in'=> TRUE);//this is the indicator if user logged in or not

				$this->session->set_userdata($newdata);
				redirect(base_url().'home');

				if($remember != 1)
{
    $this->session->sess_expire_on_close = TRUE; //idk if this work or not
    $this->session->sess_expiration = 7200;
}

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

	public function Detail_user() {
		if(!$this->session->userdata('logged_in'))
		{redirect(base_url()."login");}
		$id=$this->session->userdata('user_id');
		$data['user'] = $this->User_model->user_info($id)[0];
		$this->load->view('globals/header.php');
		$this->load->view('globals/navbar.php');

		$this->load->view('user/detail_user.php',$data);
		$this->load->view('globals/footer.php');
	}

	public function Edit_user() {
		if(!$this->session->userdata('logged_in'))
		{redirect(base_url()."login");}
		$id=$this->session->userdata('user_id');
		$data['user'] = $this->User_model->user_info($id)[0];
		$this->load->view('globals/header.php');
		$this->load->view('globals/navbar.php');

		$this->load->view('user/edit_user.php',$data);
		$this->load->view('globals/footer.php');
	}


	public function update(){
        if(!$this->session->userdata('logged_in'))
        {redirect(base_url()."login");}
        $id = $this->session->userdata('user_id');
		$data=array("nom_user"=>$this->input->post("nom"),
            "prenom_user"=>$this->input->post("prenom"),
            "login_user"=>$this->input->post("login"),
            "email"=>$this->input->post("email"),
			"role"=>$this->input->post("role"),
            "pass_user"=>sha1($this->input->post('oldpassword'))
);
		$this->form_validation->set_rules('nom', 'nom', 'required');
		$this->form_validation->set_rules('prenom', 'prenom', 'required');
		$this->form_validation->set_rules('login', 'login', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('role', 'role', 'required');

		if ($this->form_validation->run() == FALSE)//ila kant validation ==false y3nii blii kayn erre f chii champ 
		{
			echo 'err';
			//$this->load->view('myform');
			
		//	redirect(base_url()."Edit_user");

		}
		else //makayn hta err ga3 les champs 3mariin 
		{
			echo'ss';
			//	$this->load->view('formsuccess');
			$this->User_model->update_user($data,$id);
			redirect(base_url()."Detail_user");
		}
	}



	public function Ajouter_user() {
		if(!$this->session->userdata('logged_in'))
		{redirect(base_url()."login");}
	
		$this->load->view('globals/header.php');
		$this->load->view('globals/navbar.php');

		$this->load->view('user/add_user.php');
		$this->load->view('globals/footer.php');
	}

	public function add_user() {
		if(!$this->session->userdata('logged_in'))
        {redirect(base_url()."login");}
		//validations

		$config=array(array('field'=> 'nom', 'label'=> 'nom', 'rules'=> 'trim|required'), //,'errors'=>['required'=>'create your cusstom error '] 
			array('field'=> 'prenom', 'label'=> 'prenom', 'rules'=> 'trim|required'),
			array('field'=> 'email', 'label'=> 'email', 'rules'=> 'trim|required'),
			array('field'=> 'role', 'label'=> 'role', 'rules'=> 'trim|required'),
			array('field'=> 'login', 'label'=> 'login', 'rules'=> 'trim|required'),
			array('field'=> 'password', 'label'=> 'password', 'rules'=> 'trim|required'));
		$this->load->library('form_validation');

		$this->form_validation->set_rules($config);

		if($this->form_validation->run()) {

					$data=array("nom_user"=>$this->input->post("nom"),
				"prenom_user"=>$this->input->post("prenom"),
				"email"=>$this->input->post("email"),
				"role"=>$this->input->post("role"),
				"login_user"=>$this->input->post("login"),
				"pass_user"=> sha1($this->input->post('password'))
				);
                
                $res =	$this->User_model->ajouter($data);
if($res)
{
    $this->session->set_flashdata('success', "L'utilisateure a été enregistré !"); 
}else{
    $this->session->set_flashdata('error', "Erreur veuillez réessayer");
}
            
            echo "<pre>";
			print_r($data);
			redirect(base_url()."Nouveau-Utilisateur");
		}

		else {
			echo'validation err';
		}
	}

	public function Logout() {
		$this->session->sess_destroy();
		redirect(base_url()."login");
	}
}
