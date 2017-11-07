<?php

class Model_Labo extends CI_Model{
    
    function getAllLabo(){
        $sql = $this->db->query('select * from labo');
        return $sql->result();
    }
}