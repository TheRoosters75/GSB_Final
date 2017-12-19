<?php

class Model_StatistiquesClement extends CI_Model{
    
    public function qteLabo() {
         $sql = $this->db->query("SELECT labo.LAB_NOM,count(visiteur.LAB_CODE) as qte
                                    from visiteur,labo
                                    where visiteur.LAB_CODE = labo.LAB_CODE
                                    GROUP BY visiteur.LAB_CODE");
                                         
         return $sql->result();
         
         
    }
    public function qteSecteur(){
       $sql = $this->db->query("SELECT secteur.SEC_LIBELLE,count(visiteur.SEC_CODE) as Qte
                               from visiteur,secteur
                               where visiteur.SEC_CODE = secteur.SEC_CODE
                               GROUP BY secteur.SEC_CODE
                                                                             ");
       
       return $sql->result();
       
       
    }
    
}