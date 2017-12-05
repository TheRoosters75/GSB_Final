<?php
class Model_ComposantSF extends CI_Model{
    public function getLesComposants(){
        $sql = $this->db->query('select * from composant');
    return $sql->result();
    }
}
