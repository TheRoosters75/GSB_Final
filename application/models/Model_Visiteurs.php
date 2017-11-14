<?php

class Model_Visiteurs extends CI_Model{
    
    function getLesVisiteurs(){
        $sql = $this->db->query('select * from visiteur');
        return $sql->result();
    }
}