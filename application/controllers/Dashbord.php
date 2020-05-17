<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashbord extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {

		$this->load->view('globals/header.php');
		$this->load->view('home_page.php');
		$this->load->view('globals/footer.php');


	}

// add region
	public function ajouter_personnel() {

		$this->load->view('globals/header.php');
		$this->load->view('add_page.php');
		$this->load->view('globals/footer.php');
	}

	public function add() {

		//validations
		$user=1; // $user=$this->session->userdata('id_user');

		$config=array(array('field'=> 'nom', 'label'=> 'nom', 'rules'=> 'trim|required'), //,'errors'=>['required'=>'create your cusstom error '] 
			array('field'=> 'prenom', 'label'=> 'prenom', 'rules'=> 'trim|required'),
			array('field'=> 'date_naissance', 'label'=> 'date_naissance', 'rules'=> 'trim|required'),
			array('field'=> 'CIN', 'label'=> 'CIN', 'rules'=> 'trim|required'),
			// array('field'=> 'tel','label'=> 'tel' , 'rules'=>'required|regex_match[/^[0-9]{10}$/]','errors'=>['required'=>'most be a number'] ),
			array('field'=> 'Address', 'label'=> 'Address', 'rules'=> 'trim|required'),
			array('field'=> 'gender', 'label'=> 'gender', 'rules'=> 'trim|required'),
			array('field'=> 'service', 'label'=> 'service', 'rules'=> 'trim|required'),
			array('field'=> 'poste', 'label'=> 'poste', 'rules'=> 'trim|required'),
			array('field'=> 'salaire', 'label'=> 'salaire', 'rules'=> 'trim|required'));
		$this->load->library('form_validation');

		$this->form_validation->set_rules($config);

		if($this->form_validation->run()) {

			$config['upload_path']='./assets/files';
			$config['allowed_types']='gif|jpg|png';
			$config['max_size']=10000000; // 1000KB = 1MO
			$config['max_width']=300000;
			$config['max_height']=300000;
			$config['encrypt_name']=TRUE;

			$this->upload->initialize($config);

			if ( !$this->upload->do_upload()) {
				$error=array('error'=> $this->upload->display_errors());
				print_r($error); // pour affichage des erreur au moment d'uploding files
			}

			else {
				$file=$this->upload->data();
				//print_r($file);
			}

			$data=array("nom"=>$this->input->post("nom"),
				"prenom"=>$this->input->post("prenom"),
				"date_naissance"=>$this->input->post("date_naissance"),
				"CIN"=>$this->input->post("CIN"),
				"Address"=>$this->input->post("Address"),
				"telephone"=>$this->input->post("telephone"),
				"gender"=>$this->input->post("gender"),
				"service"=>$this->input->post("service"),
				"poste"=>$this->input->post("poste"),
				"salaire"=>$this->input->post("salaire"),
				"photo"=>isset($file["file_name"])?$file["file_name"]:"no_image.png", //ila kant imag yakhood smytha (be3d incription dylha ) sinn ytb3 liina no imag 
				'utilisateur'=> $user);
			$this->Perssonel_model->ajouter($data);
			// echo "<pre>";
			// print_r($data);
			redirect(base_url()."ajouter");
		}

		else {
			echo'validation err';
		}

	}
// end of add region






	public function supprimer_personnel() {

		$this->load->view('globals/header.php');
		$this->load->view('delete_page.php');
		$this->load->view('globals/footer.php');

	}

	public function recherch_personnel() {

		$newdata=array('menu'=> 'edit'
		);

		$this->session->set_userdata($newdata);
		$cine=$this->input->post("CIN");

		$data['infoperssonel']=$this->Perssonel_model->search($cine);


		$this->load->view('globals/header.php');
		$this->load->view('search_page.php', $data);
		$this->load->view('globals/footer.php');

	}


	public function test() {
		$this->load->view('globals/test2.php');


	}

}
