<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __Construct()
    {
        parent::__Construct();
    }
    
    public function index()
    {
        IsLogged($this);

        $this->load->view('globals/header_view');
        $this->load->view('globals/menu_view');
        $this->load->view('globals/footer_view');
    }
    
    public function Categories()
    {    
            IsLogged($this);

        $data['fs_cats'] = $this->cat_model->get_fs_cat();


        $this->load->view('globals/header_view', $data);
        $this->load->view('globals/menu_view');
        $this->load->view('category/ajouter_cat');
        $this->load->view('globals/footer_view');
    }

    public function Add_fs_cat()
    {
        IsLogged($this);

        // 	  $this->form_validation->set_rules('name','name','required|xss_clean');
        // if($this->form_validation->run()){

        $data = array(
'name' => $this->input->post('name')


          );

        $this->cat_model->Add_fs_cat($data);
        redirect(base_url()."Categories");
        //}
    // else {
    // 		$this->index();
    // }
    }


    public function delete_fs_cat($id)
    {
        IsLogged($this);

        $this->cat_model->delete_fs_cat($id);
        echo "{'msg':'succese'}";
    }

    //   public function edite_fs_cat($id){
    // 				$this->cat_model->delete_fs_cat($id);
    // 				redirect(base_url()."Ajoutercat");
    // 	  }


    // section ajou des sous categoris

    public function SupCategories()
    {
        IsLogged($this);

        $data['cats'] = $this->cat_model->get_fs_cat();
        $data['sous_cats'] = $this->souscat_model->get_fs_sous_cat();


        $this->load->view('globals/header_view', $data);
        $this->load->view('globals/menu_view');
        $this->load->view('sup_category/ajouter_sou_cat');
        $this->load->view('globals/footer_view');
    }










  

    public function Add_fs_sou_cat()
    {
        IsLogged($this);

        // 	  $this->form_validation->set_rules('name','name','required|xss_clean');
        // if($this->form_validation->run()){

        $data = array(
		'name' => $this->input->post('souscat'),
		'id_cat' => $_POST['cat_id']
        );

        $this->souscat_model->Add_fs_souscat($data);
        redirect(base_url()."SupCategories");
        //}
  // else {
  // 		$this->index();
  // }
    }

    public function delete_fs_sous_cat($id)
    {
        IsLogged($this);

        $this->souscat_model->delete_fs_cat($id);
        echo "{'msg':'succese'}";
    }
    // public function edite_fs_sous_cat($id){

    // 	$this->souscat_model->edit_fs_cat($id);
    // 	redirect(base_url()."Ajoutercat");

    // }

    

    public function GetSupCat($id)
    {
        IsLogged($this);

        $data = $this->souscat_model->getby($id);
        $res ='<option value="">Choisire....</option>';
        foreach ($data as $val) {
            $res .='<option value='.$val->id.'>'.$val->souscatname.'</option>';
        }
        echo $res;
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
