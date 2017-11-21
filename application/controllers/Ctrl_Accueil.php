<?php
class Ctrl_Accueil extends CI_Controller{
   
  
    
    
    function AfficherVisiteurs(){
        
        $this->load->model('Model_Visiteurs');
        $data['lesVisiteurs'] = $this->Model_Visiteurs->getLesVisiteurs();
        $this->load->model('Model_Labo');
        $data['lesLabos'] = $this->Model_Labo->getAllLabo();
        $this->load->model('Model_Secteur');
        $data['lesSecteurs'] = $this->Model_Secteur->getAllSec();
        
        $this->load->view('v_Visiteurs',$data);   
    }
    
            function MAJRegion()
    {
                 $codeRegion = $_GET['codeR'];
                 $codeSecteur = $_GET['codeS'];
                   $nomRegion = $_GET['nomR'];
 
                   
                   
                 
                    $this->load->model('Model_Regions');   
                   // echo var_dump($data);
        $data['lesRegions'] = $this->Model_Regions->getMAJRegion($codeRegion,$codeSecteur,$nomRegion); 
        
        
                    
    }
     function getLesRegions(){
        
        $this->load->model('Model_Regions');   
        $data['lesRegions'] = $this->Model_Regions->getLesRegions();  
        $this->load->view('v_Regions',$data);
        }
        
        
   
}
