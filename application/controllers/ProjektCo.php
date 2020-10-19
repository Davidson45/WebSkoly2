<?php 
   class ProjektCo extends CI_Controller {
       
       
      function __construct() { 
         parent::__construct(); 
         $this->load->helper('url'); 
         $this->load->helper('form');
         $this->load->database(); 
         $this->load->model('ModelCo'); 
         $this->load->library('googlemaps'); 
         $config['center'] = '49.070963, 17.47193';
         $config['zoom'] = '19';
         $this->googlemaps->initialize($config);
         
         $marker = array();
         $marker['position'] = '49.056656, 17.255367';
         $this->googlemaps->add_marker($marker);
         
         $marker = array();
         $marker['position'] = '49.032687, 17.643536';
         $this->googlemaps->add_marker($marker);
         
         $marker = array();
         $marker['position'] = '49.056656, 17.649707';
         $this->googlemaps->add_marker($marker);
         
         $marker = array();
         $marker['position'] = '49.067784, 17.472572';
         $this->googlemaps->add_marker($marker);
         
         $marker = array();
         $marker['position'] = '49.070963, 17.47193';
         $this->googlemaps->add_marker($marker);
         
         $marker = array();
         $marker['position'] = '49.068893, 17.464523';
         $this->googlemaps->add_marker($marker);
         
         $marker = array();
         $marker['position'] = '49.136834, 17.433056';
         $this->googlemaps->add_marker($marker);
         
         $marker = array();
         $marker['position'] = '49.086178, 17.342145';
         $this->googlemaps->add_marker($marker);
         
         $marker = array();
         $marker['position'] = '49.068425, 17.449208';
         $this->googlemaps->add_marker($marker);
         
         $marker = array();
         $marker['position'] = '49.026792, 17.653584';
         $this->googlemaps->add_marker($marker);
         
         $marker = array();
         $marker['position'] = '49.026235, 17.645464';
         $this->googlemaps->add_marker($marker);
         
         $marker = array();
         $marker['position'] = '49.022996, 17.649707';
         $this->googlemaps->add_marker($marker);
         
         $marker = array();
         $marker['position'] = '49.032687, 17.643536';
         $this->googlemaps->add_marker($marker);    
         
         
      } 

      public function hlavni() {
          
        
       
        $query = $this->db->get("skola"); 
        $data['map'] = $this->googlemaps->create_map();
        $config['center'] = '49.056656, 17.255367';
         $config['zoom'] = 'auto';
         $this->googlemaps->initialize();
         
         $marker = array();
         $marker['position'] = '49.056656, 17.255367';
         $this->googlemaps->add_marker($marker); 
        $data['records'] = $query->result(); 
        
	$config = array();
        $data["main"] = "index";
        $data["title"] = "Hlavní stránka";
       
        
        $data['skola'] = $this->ModelCo->get_skoly($config);
        
        $this->load->view('hlavni', $data);
        
       
        
         
    }
    
    public function mapa() {
        $data["main"] = "mapa";
        $data["title"] = "Mapa";
       
    }

public function mesto() { 
         $query = $this->db->get("mesto"); 
         $data['records'] = $query->result(); 
	$config = array();
       
        
        $data['mesto'] = $this->ModelCo->get_mesta($config);
      

        $this->load->view('mesta.php', $data);
}

public function obor() { 
         $query = $this->db->get("obor"); 
         $data['records'] = $query->result(); 
	$config = array();
       
        
        $data['obor'] = $this->ModelCo->get_obor($config);
      

        $this->load->view('obor.php', $data);
}

public function pocet() { 
         $query = $this->db->get("pocet_prijatych"); 
         $data['records'] = $query->result(); 
	$config = array();
       
        
        $data['pocet'] = $this->ModelCo->get_pocet($config);
      

        $this->load->view('pocet.php', $data);
}

public function get_data_from_form() {
        if ($this->input->post()) {
            
            $skola = $this->input->post("skola");
           
            if ($skola) {
                
                $data["skola"] = $this->ModelCo->get_skoly();
                $data["filter"] = $this->ModelCo->get_data_by_form($skola);
                $data["main"] = "filter";
                $data["title"] = "Filter";
                $this->layout->generate($data);
            } else {
                redirect(base_url() . "/mapa");
            }
        } else {
            redirect(base_url());
        }
    }
    
    
    
   }
