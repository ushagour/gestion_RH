<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashbord extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->add_package_path( APPPATH . 'third_party/fpdf');
        $this->load->library('pdf');
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

	public function check($id,$state) {
		$this->Perssonel_model->check_personnel($id,!$state);
		//redirect(base_url()."affichage");
    // echo $state;
	// echo !$state;
    

	}



	public function edit_personnel($id){

        $data['item'] = $this->Perssonel_model->personnel_to_edit($id)[0];

		$this->load->view('globals/header.php');
		$this->load->view('edit_page.php', $data);
		$this->load->view('globals/footer.php');

    }

    public function update(){
        $id = $this->input->post('id');
        
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
 
        //region Trying to upload a file
        $config['upload_path']='./assets/files';
        $config['allowed_types']='gif|jpg|png';
        $config['max_size']=10000000; // 1000KB = 1MO
        $config['max_width']=300000;
        $config['max_height']=300000;
        $config['encrypt_name']=TRUE;

        $this->upload->initialize($config);

        if (!$this->upload->do_upload()) {
            $error=array('error'=> $this->upload->display_errors());
            print_r($error); // pour affichage des erreur au moment d'uploding files
        }

        else {
            $file=$this->upload->data();
            //print_r($file);
        }
if(true){
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
            "photo"=>isset($file["file_name"])?$file["file_name"]:"no_image.png" //ila kant imag yakhood smytha (be3d incription dylha ) sinn ytb3 liina no imag 
);
            
           
                
                echo 'Here';
                $this->Perssonel_model->update_personnel($data,$id);
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
    
        $this->session->set_userdata('is_check', 0);//todo khassni ndwz variable en parametres 
        $data['canprint'] = $this->Perssonel_model->count_to_print();

		$this->load->view('globals/header.php');
		$this->load->view('see_page.php', $data);
		$this->load->view('globals/footer.php');

	}

    
    public function generateFPDF($id){

        //    pour la configuration du pdf voir fichier *voir therdparty/fpdf/librarys/pdf.php  DFZD
        
            //  $id= $this->uri->segment(3); 
        
           //  $data["infoP"] = $this->Perssonel_model->selectP();
            
            // $data["all"] = $this->Authors_model->showall();
            $data="What multiCell does is to spread the given text into multiple cells,
             this means that the second parameter defines the height of each line (individual cell)
              and not the height of all cells (collectively).";

        
            $this->pdf = new Pdf();
            $this->pdf->Add_Page('P','A4',0);
            $this->pdf->AliasNbPages();    
            $this->pdf->BasicTable($data);// function qui va afficher le tableau dans le fichier pdf  ****voir therdparty/fpdf/librarys/pdf.php  
        
            $this->pdf->Output('page.pdf' , 'I' );
            
            
            
            
        
            }
        

	public function print_etat() {
   

        $data['infoperssonel'] = $this->Perssonel_model->get_per_to_print();

        // echo '<pre>';
        // print_r($data['infoperssonel']);


        // foreach($data['cats'] as $cat){

        //     $arts = $this->Article_model->get_art_by_cat($cat->id);
        //     if(empty($arts)){
        //         continue;
        //     }
            
        //     echo '<br>*************************<br>';
        //     echo $cat->name.'<br>';

        //     $test_var = '';

        //     foreach ($arts as $art) {
        //         if ($test_var != $art->id_sous_cat) {
        //             $test_var = $art->id_sous_cat;
                    
        //             echo '<br>';
        //             echo '  '.$art->fsc_name.'<br>';
        //         }
        //         echo '      '.$art->id.'<br>';
        //     }

        // }

        $this->load->view('print_page', $data);
    }




	public function test() {
		$this->load->view('globals/test2.php');


	}

}
