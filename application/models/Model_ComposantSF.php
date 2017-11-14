<?php
class Model_ComposantSF extends CI_Model{
    public function getLesComposants(){
        $sql = $this->db->query('select CMP_CODE,CMP_LIBELLE from composant');
    return $sql->result();
    }
}
