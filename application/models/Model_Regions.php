<?php
class Model_Regions extends CI_Model{
    public function getLesRegions(){
        $sql = $this->db->query('select * from region ');
    return $sql->result();
    }
    
}