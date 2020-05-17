<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

    public function __Construct()
    {
        parent::__Construct();   
        
	}


    public function index()
    {
        IsLogged($this);
        $data['articles'] = $this->Article_model->get_articles();

        $this->load->view('globals/header_view');
        $this->load->view('globals/menu_view');
        $this->load->view('article/see_articles',$data);
        $this->load->view('globals/footer_view');
    }


    public function Add_article()
{
    IsLogged($this);

    $data['cats'] = $this->cat_model->get_fs_cat();
     //   $data['sous_cats'] = $this->souscat_model->get_fs_sous_cat();

        $this->load->view('globals/header_view');
        $this->load->view('globals/menu_view');
        $this->load->view('article/article_view',$data);
        $this->load->view('globals/footer_view');


}
    public function Add_fait_saillant(){
        IsLogged($this);

        $this->form_validation->set_rules('id_cat','id_cat','required|xss_clean');
        $this->form_validation->set_rules('id_sous_cat','id_sous_cat','required|xss_clean');
        $this->form_validation->set_rules('date_evenement','date_evenement','required|xss_clean');
        $this->form_validation->set_rules('date_trait','date_trait','required|xss_clean');
        $this->form_validation->set_rules('source','source','required|xss_clean');
        $this->form_validation->set_rules('synthese','synthese','required|xss_clean');
        // $this->form_validation->set_rules('piece_joint','piece_joint','required|xss_clean');

        $config['upload_path']          = './assets/files';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|webp|pdf|flv|mp4|doc|docx|xls|xlsx|ppt|pptx';
        $config['max_size']             = 10000000;     // 1000KB = 1MO
        $config['max_width']            = 300000;
        $config['max_height']           = 300000;
        $config['encrypt_name']         = TRUE;

        $filename = time()."-".$_FILES["piece_joint"]["name"];

        $config['file_name'] = $filename;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('piece_joint')) {
            $error = array('error' => $this->upload->display_errors());

            print_r($error);
        } else {
            $dataa = $this->upload->data();
            print_r($dataa);
        }

        if($this->form_validation->run()){           
            // $user=$this->session->userdata('id_user');
            $user=1;
  
            $data = array(
                'id_cat' => $this->input->post('id_cat'),
                'id_sous_cat' => $this->input->post('id_sous_cat'),
                'date_evenement' => $this->input->post('date_evenement'),
                'lieu' => $this->input->post('lieu'),

                'date_trait' => $this->input->post('date_trait'),
                'source' => $this->input->post('source'),
                'synthese' => $this->input->post('synthese'),
                'mesure_prise' => $this->input->post('mesure_prise'),
                'piece_joint' => isset($dataa["file_name"])?$dataa["file_name"]:"",
                'id_user'=> $user
                );

              $this->Article_model->Add_fait_saillant($data);
              redirect(base_url()."Article");
      }
      else {
        redirect(base_url()."Article");
      }
    
    }


    

  public function delete_articles_date($id){
    IsLogged($this);

    $this->Article_model->delete_articles_date($id);
    redirect(base_url()."afficher-synthese");
    }
    
    //base_url/2/1
    public function ConfirmArticle($id,$state){
        IsLogged($this);


        $this->Article_model->confirm_article($id,!$state);//kanssiftoo l3ks dyal state ila kant 0 hya state =1
      //  redirect(base_url()."afficher-synthese");
      echo "{'msg':'succese'}";

    }




    public function edit($id){

        IsLogged($this);

        $data['cats'] = $this->cat_model->get_fs_cat();
        $data['item'] = $this->Article_model->articles_to_edit($id)[0];
        $data['sous_cats'] = $this->souscat_model->getby($data['item']->id_cat);

           $this->load->view('globals/header_view');
           $this->load->view('globals/menu_view');
           $this->load->view('article/edit_view',$data);
           $this->load->view('globals/footer_view');

    }

    public function update_article(){
        IsLogged($this);

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
                $this->Article_model->update_article($data,$id);
                redirect(base_url()."afficher-synthese");
      }
      else {
         redirect(base_url()."afficher-synthese");
      }
    
    }

    public function PrintArticles(){
        IsLogged($this);

        $data['cats'] = $this->cat_model->get_fs_cat();
        $data['sous_cats'] = $this->souscat_model->get_by_cat(3);

        $data['articles'] = $this->Article_model->get_art_by_subcat(5);

        // echo '<pre>';
        // print_r($data['cats']);


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

        $this->load->view('article/print_article',$data);
    }
    
    public function SearchArticles(){
        IsLogged($this);

        $mot_cle=(isset($_POST['search_mot'])?$_POST['search_mot']:'');
        $date_cle=(isset($_POST['search_date'])?$_POST['search_date']:'');



         /*************     pagination fes articles resont    ************* */
         $config = array();
         $config['reuse_query_string'] = true ;
         $config["base_url"] = base_url()."Article/SearchArticles/";
         $config["total_rows"] = $this->Article_model->get_count($date_cle, $mot_cle);
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
         $data['serch']=$this->Article_model->searshit($date_cle, $mot_cle, $config["per_page"], $page);

         $data["nbr_page"]=("Nombre d'articles  : ".$config["total_rows"]);
         
         // views
   



           $this->load->view('globals/header_view');
           $this->load->view('globals/menu_view');
           $this->load->view('article/search_view',$data);
           $this->load->view('globals/footer_view');

    }

}
