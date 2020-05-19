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



	public function delete($id) {
		$this->Perssonel_model->delete($id);
		redirect(base_url()."affichage");
	

	}



	public function edit_personnel($id){

        $data['item'] = $this->Perssonel_model->personnel_to_edit($id)[0];

		$this->load->view('globals/header.php');
		$this->load->view('edit_page.php', $data);
		$this->load->view('globals/footer.php');

    }

    public function update(){
        // id dyal article li ghadi ytzad
        $id = $this->input->post('id');
        $this->form_validation->set_rules('id_cat','id_cat','required|xss_clean');
        $this->form_validation->set_rules('id_sous_cat','id_sous_cat','required|xss_clean');
        $this->form_validation->set_rules('date_evenement','date_evenement','required|xss_clean');
        $this->form_validation->set_rules('date_trait','date_trait','required|xss_clean');
        $this->form_validation->set_rules('source','source','required|xss_clean');
        $this->form_validation->set_rules('synthese','synthese','required|xss_clean');

        //region Trying to upload a file
        $config['upload_path']          = './assets/files';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|webp|pdf|flv|mp4|doc|docx|xls|xlsx|ppt|pptx';
        $config['max_size']             = 10000000;     // 1000KB = 1MO
        $config['max_width']            = 300000;
        $config['max_height']           = 300000;
        $config['encrypt_name']         = TRUE;

        $filename = time()."-".$_FILES["piece_joint"]["name"];

        $config['file_name'] = $filename;

        $this->load->library('upload', $config);
        $dataa = [];
        if (!$this->upload->do_upload('piece_joint')) {
            $error = array('error' => $this->upload->display_errors());

            print_r($error);
        } else {
            $dataa = $this->upload->data();
        }
        //endregion

        
        // if($this->form_validation->run()){           
        if(true){           
  
            $data = array(
                'id_cat' => $this->input->post('id_cat'),
                'id_sous_cat' => $this->input->post('id_sous_cat'),
                'date_evenement' => $this->input->post('date_evenement'),
                'lieu' => $this->input->post('lieu'),
                'date_trait' => $this->input->post('date_trait'),
                'source' => $this->input->post('source'),
                'synthese' => $this->input->post('synthese'),
                'mesure_prise' => $this->input->post('mesure_prise')
                );

                // ila kan chi file 
                if(isset($dataa["file_name"])){
                    $data['piece_joint'] = $dataa["file_name"];
                    echo 'There is a PJ';
                }
                
                echo 'Here';
                $this->$this->Perssonel_model->update_personnel($data,$id);
                redirect(base_url()."affichage");
      }
      else {
         redirect(base_url()."affichage");
      }
    
    }




	public function SearchPersonnel(){
        $cin=(isset($_POST['CIN'])?$_POST['CIN']:'');



         /*************     pagination fes articles resont    ************* */
         $config = array();
         $config['reuse_query_string'] = true ;
         $config["base_url"] = base_url()."Dashbord/SearchPersonnel/";
         $config["total_rows"] = $this->Perssonel_model->get_count($cin);
         $config["per_page"] = 5;
         $config['num_links'] =1 ;
         $config['reuse_query_string'] = true ;
  
         // Bootstrap 4 Pagination fix
         $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
         $config['prev_tag_open']    = '<li class="page-item"><span class="page-link ">';
         $config['prev_tag_close']   = '</span></li>';
         $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
         $config['num_tag_close']    = '</span></li>';
         $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
         $config['cur_tag_close']    = '</span></li>';
         $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
         $config['next_tag_close']   = '</span></li>';
         $config['last_tag_open'] 	 = '<li class="page-item"><span class="page-link">';
         $config['last_tag_close'] 	 = '</span></li>';
         $config['first_tag_open'] 	 = '<li class="page-item"><span class="page-link">';
         $config['first_tag_close'] 	 = '</span></li>';
         $config['full_tag_close']   = '</ul></nav></div>';





         
 
         $this->pagination->initialize($config);
         if ($this->uri->segment(3)) {
             $page =($this->uri->segment(3));
         } else {
             $page=0;
         }
         $data["links"] = $this->pagination->create_links();
 
         // pagination
         $data['serch']=$this->Perssonel_model->searshit($cin, $config["per_page"], $page);

         $data["nbr_page"]=("Nombre d'articles  : ".$config["total_rows"]);
         
         // views
   
		

		$this->load->view('globals/header.php');
		$this->load->view('search_result.php', $data);
		$this->load->view('globals/footer.php');



    }





	public function affichage_personnel() {

	//	$cine=$this->input->post("CIN");

		$data['infoperssonel']=$this->Perssonel_model->select_p();


		$this->load->view('globals/header.php');
		$this->load->view('see_page.php', $data);
		$this->load->view('globals/footer.php');

	}


	public function test() {
		$this->load->view('globals/test2.php');


	}

}
