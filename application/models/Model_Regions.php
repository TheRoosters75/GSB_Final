<?php
class Model_Regions extends CI_Model{
    public function getLesRegions(){
        $sql = $this->db->query('select * from region');
       
    return $sql->result();
    }
    
    public function getMAJRegion($codeR,$codeS,$nomR)
    {
        
        $this->db->query("update region set REG_NOM ='".$nomR. "' where REG_CODE = '".$codeR."'");
                  
                    return $sql->result();
        
    }
}