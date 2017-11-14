<?php

class Ctrl_General extends CI_Controller{
      function index(){
        $this->load->view('v_Accueil');
    }
    function AfficherMedicaments(){
        $this->load->view('v_Medicaments');
    }
     function AfficherComposants(){
     $this->load->view('v_Composants');
     
    }
    function AfficherPracticiens(){
        $this->load->view('v_Practiciens');
    }
}