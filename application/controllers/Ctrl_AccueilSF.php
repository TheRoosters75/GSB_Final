<?php

class Ctrl_AccueilSF extends CI_Controller{
    public function index(){
       $this->load->model('Model_TableauMedicamentSF');
       $data ['lesMedicaments'] = $this->Model_TableauMedicamentSF->getLesMedicaments();
        $this->load->view('v_AccueilSF',$data);
        
    } 

    public function getLesComposants(){
     
        $this->load->model('Model_ComposantSF');
        $data['lesComposants'] = $this->Model_ComposantSF->getLesComposants();
        $this->load->view('v_AfficherComposantSF',$data);
        
    }
  
}
