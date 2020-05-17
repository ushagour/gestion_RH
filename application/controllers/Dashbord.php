<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashbord extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}
	public function index() {

		$newdata = array(
			'menu'  => 'home'
		);

		$this->session->set_userdata($newdata);


		$this->load->view('globals/header.php');
        $this->load->view('home_page.php');
		$this->load->view('globals/footer.php');


	}
	
	public function test(){
        $this->load->view('globals/test.php');


	}
    public function ajouter_personnel() {
		$newdata = array(
			'menu'  => 'ajouter'
		);

		$this->session->set_userdata($newdata);
        if(isset($_POST["ok"])) {

				  //validations

            $config=array(array('field'=> 'nom', 'label'=> 'nom' ,'rules'=> 'trim|required'),//,'errors'=>['required'=>'create your cusstom error '] 
            array('field'=> 'prenom','label'=> 'prenom' , 'rules'=> 'trim|required'),
            array('field'=> 'dn','label'=> 'dn' , 'rules'=> 'trim|required'),
			array('field'=> 'cin','label'=> 'cin' , 'rules'=> 'trim|required'),
			// array('field'=> 'tel','label'=> 'tel' , 'rules'=>'required|regex_match[/^[0-9]{10}$/]','errors'=>['required'=>'most be a number'] ),
            array('field'=> 'adresse','label'=> 'adresse' , 'rules'=> 'trim|required'),
            array('field'=> 'gender','label'=> 'gender' , 'rules'=> 'trim|required'),
            array('field'=> 'service','label'=> 'service' , 'rules'=> 'trim|required'),
            array('field'=> 'poste','label'=> 'poste' , 'rules'=> 'trim|required'),
            array('field'=> 'salaire','label'=> 'salaire' , 'rules'=> 'trim|required')
		
               );
               $this->load->library('form_validation');

$this->form_validation->set_rules($config);

if ($this->form_validation->run()==false) {



}
else{


	$config['upload_path']          = './uploads/';
	$config['allowed_types']        = 'gif|jpg|png';
	$config['max_size']             = 100;
	$config['max_width']            = 1024;
	$config['max_height']           = 768;
	

	$this->upload->initialize($config);

	if (!$this->upload->do_upload())
	{ 
			$error = array('error' => $this->upload->display_errors());
			$image = 'no_image.png';   

	}
   
		else {
			$data=array('upload_data'=> $this->upload->data());
			$image = $_FILES['userfile']['name']; 
		  }

            $data=array(
                "nom"=>$this->input->post("nom"),
                "prenom"=>$this->input->post("prenom"),
                "date_naissance"=>$this->input->post("dn"),
				"CIN"=>$this->input->post("cin"),
				"Address"=>$this->input->post("adresse"),
				"telephone"=>$this->input->post("tel"),
				"gender"=>$this->input->post("gender"),
                "service"=>$this->input->post("service"),
				"poste"=>$this->input->post("poste"),
				"salaire"=>$this->input->post("salaire"),
				"photo"=>$image
			);






   $last= $this->Perssonel_model->ajouter($data);
//    $this->session->set_userdata('id_personne', $last);

    // redirect(base_url()."editionEtat/".$last); // redirection to localhost/test/conttrooler/function/parametters
}

        }
    	$this->load->view('globals/header.php');
        $this->load->view('add_page.php');
		$this->load->view('globals/footer.php');

	}
	





	public function supprimer_personnel() {

		$this->load->view('globals/header.php');
        $this->load->view('delete_page.php');
		$this->load->view('globals/footer.php');

    }
	public function recherch_personnel() {
	
		$newdata = array(
			'menu'  => 'edit'
		);

		$this->session->set_userdata($newdata);
		$cine=$this->input->post("CIN");
		
		$data['infoperssonel']=$this->Perssonel_model->search($cine);

	
		$this->load->view('globals/header.php');
        $this->load->view('search_page.php',$data);
		$this->load->view('globals/footer.php');

    }
}
