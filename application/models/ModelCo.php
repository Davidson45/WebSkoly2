<?php 
   class ModelCo extends CI_Model {
	protected $table = 'skoly';
      

    public function __construct() {
        parent::__construct();
    }
    public function get_skoly() {
      $this->db->select("skola.id,skola.nazev,skola.mesto,skola.geo_lat,skola.geo_long")->from("skola");
     
      $data = $this->db->get()->result();
        return $data;
    }
    
    public function get_skola_id($id) {
        $this->db->select("skola.id,skola.nazev,skola.mesto,skola.geo_lat as geo_lat,skola.geo_long as geo_long")->from("skola");
       
        
        $this->db->where("skola.id", $id);
        $data = $this->db->get()->result();
        return $data;
    }
    
   public function get_mesta() {
      return $this->db->select("id, nazev")->from("mesto")->get()->result();
    }
    
    public function get_obor() {
      return $this->db->select("id, nazev")->from("obor")->get()->result();
    }
    public function get_pocet() {
      return $this->db->select("id, obor, skola, pocet, rok")->from("pocet_prijatych")->get()->result();
    }
    
    public function get_data_by_form($skola_id = null) {
         $this->db->select("skola.id as skola_id,skola.nazev as skola, skola.geo-long as geo_long, skola.geo-lat as geo_lat")->from("skola");
        
        
       
        
        if ($skola_id) {
            $this->db->where_in("skola.id", $skola_id);
        }
        
    
        $data = $this->db->get()->result();
        return $data;
    }
    
    
    
   }