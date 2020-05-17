<?php
class Article_model extends CI_Model
{
    public function Add_fait_saillant($data){
        $query = $this->db->insert('fait_saillant',$data);
    }

    public function get_articles($date = null){

        $this->db->select('fc.name as fc_name, fsc.name as fsc_name,synthese,valider,piece_joint, date_evenement, date_trait, source,fs.id,lieu	,mesure_prise');
        $this->db->from('fait_saillant fs');

        $this->db->join('fs_cat fc', 'fc.id = fs.id_cat');
        $this->db->join('fs_sous_cat fsc ', ' fsc.id = fs.id_sous_cat');

        if($date == null){
            $this->db->like('date_trait',date('Y-m-d'));
        }
        else{
            $this->db->like('date_trait',$date);
        }

        $query = $this->db->get();
        return $result = $query->result();
    }

    public function delete_articles_date($id){
        $this->db->where('id', $id);
		$this->db->delete('fait_saillant');
    }
    
    public function confirm_article($id,$state){
        $this->db->set('valider', $state);
        $this->db->where('id', $id);
        $this->db->update("fait_saillant");
    }


    public function articles_to_edit($id){
       
        $this->db->select('fc.name as fc_name, fsc.name as fsc_name,synthese,valider,piece_joint, date_evenement, date_trait, source,fs.id,lieu	,fs.id_cat, fs.id_sous_cat, mesure_prise');
        $this->db->from('fait_saillant fs');
        $this->db->where('fs.id', $id);
        $this->db->join('fs_cat fc', 'fc.id = fs.id_cat');
        $this->db->join('fs_sous_cat fsc ', ' fsc.id = fs.id_sous_cat');
        $query = $this->db->get();
        return $result = $query->result();
    }

    public function update_article($data,$id){
        $query = $this->db->update('fait_saillant',$data,array('id'=> $id));
    }

    public function get_art_by_subcat($id){
        $this->db->select('fs.id, fs.id_cat,fs.id_sous_cat,fc.name as fc_name, fsc.name as fsc_name,synthese,valider,piece_joint, date_evenement, date_trait, source,fs.id,lieu	,mesure_prise');
        $this->db->from('fait_saillant fs');

        $this->db->join('fs_cat fc', 'fc.id = fs.id_cat');
        $this->db->join('fs_sous_cat fsc ', ' fsc.id = fs.id_sous_cat');

        $this->db->like('date_trait',date('Y-m-d'));
        $this->db->where('fs.id_sous_cat',$id);
        $this->db->where('valider',true);

        $query = $this->db->get();
        return $result = $query->result();
    }

    public function get_art_by_cat($id){
        $this->db->select('fs.id, fs.id_cat,fs.id_sous_cat,fc.name as fc_name, fsc.name as fsc_name,synthese,valider,piece_joint, date_evenement, date_trait, source,fs.id,lieu	,mesure_prise');

        $this->db->from('fait_saillant fs');

        $this->db->join('fs_cat fc', 'fc.id = fs.id_cat');
        $this->db->join('fs_sous_cat fsc ', ' fsc.id = fs.id_sous_cat');

        $this->db->like('date_trait',date('Y-m-d'));
        $this->db->where('fs.id_cat',$id);
        $this->db->where('valider',true);

        $query = $this->db->get();
        return $result = $query->result();
    }

// region search 
    public function get_count($date_cle,$mot_cle) {	
        $this->db->select('fs.id, fs.id_cat,fs.id_sous_cat,fc.name as fc_name, fsc.name as fsc_name,synthese,valider,piece_joint, date_evenement, date_trait, source,fs.id,lieu	,mesure_prise');

        $this->db->from('fait_saillant fs');

        $this->db->join('fs_cat fc', 'fc.id = fs.id_cat');
        $this->db->join('fs_sous_cat fsc ', ' fsc.id = fs.id_sous_cat');

        $this->db->like('date_trait',$date_cle);
        $this->db->like('synthese ',$mot_cle);
		$this->db->order_by('date_trait', 'desc');
		
		$query=$this->db->get();
		return $result=$query->num_rows();
	  }

    public function searshit($date_cle,$mot_cle,$limit, $start){
        $this->db->select('fs.id, fs.id_cat,fs.id_sous_cat,fc.name as fc_name, fsc.name as fsc_name,synthese,valider,piece_joint, date_evenement, date_trait, source,fs.id,lieu	,mesure_prise');

        $this->db->from('fait_saillant fs');

        $this->db->join('fs_cat fc', 'fc.id = fs.id_cat');
        $this->db->join('fs_sous_cat fsc ', ' fsc.id = fs.id_sous_cat');

        $this->db->like('date_trait',$date_cle);
        $this->db->like('synthese ',$mot_cle);

        $this->db->limit($limit, $start);

		$this->db->order_by('date_trait', 'desc');
		
       // $this->db->where('valider',true);//a changer

        $query = $this->db->get();
        return $result = $query->result();
    }
    


}