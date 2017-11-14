<?php


class Model_TableauMedicamentSF extends CI_Controller{
    public function getLesMedicaments(){
        $sql = $this->db->query("select MED_DEPOTLEGAL,MED_NOMCOMMERCIAL,MED_COMPOSITION from medicament ");
        return $sql->result();
    }
}

