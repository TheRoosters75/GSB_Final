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
                    
    
     function getLesRegions(){
        
        $this->load->model('Model_Regions');   
        $data['lesRegions'] = $this->Model_Regions->getLesRegions();  
        $this->load->view('v_Regions',$data);
        }
        
        
        function StatistiquesVisiteurs(){
            $this->load->model('Model_StatistiquesClement');
            $data['qteLabo'] = $this->Model_StatistiquesClement->qteLabo();
            $data['qteSecteur'] = $this->Model_StatistiquesClement->qteSecteur();
             $this->load->model('Model_Visiteurs');
        $data['lesVisiteurs'] = $this->Model_Visiteurs->getLesVisiteurs();
            
            $this->load->view('v_StatsVisiteurs',$data);
            
        }
        
      
        
   }

