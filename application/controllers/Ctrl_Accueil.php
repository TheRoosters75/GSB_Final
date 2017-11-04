<?php
class Ctrl_Accueil extends CI_Controller{
   
    function index(){
        $this->load->view('v_Accueil');
    }
    
    function AfficherMedicaments(){
        $this->load->view('v_Medicaments');
    }
    
    function AfficherVisiteurs(){
        
        $this->load->model('Model_Visiteurs');
        $data['lesVisiteurs'] = $this->Model_Visiteurs->getLesVisiteurs();
        $this->load->view('v_Visiteurs',$data);   
    }
    
     function getLesRegions(){
         
        $this->load->model('Model_Regions');   
        $data['lesRegions'] = $this->Model_Regions->getLesRegions();  
        $this->load->view('v_Regions',$data);
        }
        
        
    function AfficherComposants(){
     $this->load->view('v_Composants');
     
    }
    function AfficherPracticiens(){
        $this->load->view('v_Practiciens');
    }
}
