<?php

class Model_Secteur extends CI_Model{
    
    function getAllSec(){
        $sql = $this->db->query('select * from secteur');
        return $sql->result();
    }
}