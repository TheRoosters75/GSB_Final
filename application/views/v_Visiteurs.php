<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Gestion des visiteurs </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://localhost/GSB/CSS/CSS.css"> 
         <script type="text/javascript" src="<?php echo base_url();?>JQuery/jquery-3.1.1.js"></script>
         <script type="text/javascript" src="<?php echo base_url();?>JS/lesFonctions.js"></script>
         <script type="text/javascript">
         
             $
           (
               function()
                {
                    
                    $('#lstVisiteurs').change(function(){
                      
                    $('#matricule').val($('#lstVisiteurs').val());
                    $('#nom').val($('#lstVisiteurs option:selected').attr('name'));
                    $('#prenom').val($('#lstVisiteurs option:selected').attr('name2'));
                    $('#adresse').val($('#lstVisiteurs option:selected').attr('name3'));
                    $('#cp').val($('#lstVisiteurs option:selected').attr('name4'));
                    $('#ville').val($('#lstVisiteurs option:selected').attr('name5'));
                    $('#dateEmbauche').val($('#lstVisiteurs option:selected').attr('name6'));
                    $('#codeSec').val($('#lstVisiteurs option:selected').attr('name7'));
                    $('#codeLab').val($('#lstVisiteurs option:selected').attr('name8'));
                   


                    });
                }
             );
      
                    
         
        </script>
        
        
    </head>
    <body>
        <div id="partieGauche">  
     <p>Tableau de tous les visiteurs existants </p>
        <label>CLiquer sur un matricule pour acceder au formulaire du visiteur voulus</label>
        
        
    
       
    <table cellspacing="2px" cellpadding="2px;" rules="all" style="border:solid 1px black;">
        <caption><h4>Listes des visiteurs</h4></caption>
        <tr> 
            
              <th>Matricule</th>
              <th>Nom</th>
              <th>Prenom</th>
              <th>Ville</th>
           
        </tr>    
       
        <?php 
        
        foreach($lesVisiteurs as $visiteur){
            echo "<tr>";
           
            echo"<td>".$visiteur->VIS_MATRICULE."</td>";
            echo"<td>".$visiteur->VIS_NOM."</td>";
            echo"<td>".$visiteur->Vis_PRENOM."</td>";
            echo"<td>".$visiteur->VIS_VILLE."</td>";
            
            
            echo "</tr>";
        }
        ?>
           
    </table> 
              
        
        
        
        <br> <br>   
        <a href="http://localhost/GSB/index.php"><input type="button" value="retour a la page d'accueil"></a>
        </div> 
        
        <div id="partieDroite">
            
            <p>formualire ajout de visiteurs</p>
            
            <!-- Affichage de la liste des visiteur dans un salect -->
            <select id="lstVisiteurs">
                <?php 
                foreach ($lesVisiteurs as $visiteur ){
                ?> 
                <option name="<?php echo $visiteur->VIS_NOM;?>"
                        value="<?php echo $visiteur->VIS_MATRICULE;?>"
                        name2="<?php echo $visiteur->Vis_PRENOM;?>"
                        name3="<?php echo $visiteur->VIS_ADRESSE;?>"
                        name4="<?php echo $visiteur->VIS_CP;?>"
                        name5="<?php echo $visiteur->VIS_VILLE;?>"
                        name6="<?php echo $visiteur->VIS_DATEEMBAUCHE;?>"
                        name7="<?php echo $visiteur->SEC_CODE;?>"
                        name8="<?php echo $visiteur->LAB_CODE;?>"
                        
                        
                    
                        
                        > <?php echo $visiteur->VIS_NOM;?></option>
                <?php
                }
                ?>
            </select>
            
            
            
            
            <form method="post">
            
            
           <!-- creation des text box et bouton -->
                    <div class="form-group">
                        <label for="Matricule">Matricule</label>
                        <input type="text" id="matricule" name="matricule">
                    </div>
            
                    <div class="form-group">
                        <label for="Nom">Nom</label>
                        <input type="text" id="nom" name="nom">
                    </div>
            
                    <div class="form-group">
                        <label for="Penom">Prenom </label>
                        <input type="text" id="prenom" name="prenom">
                    </div>
            
                    <div class="form-group">
                        <label for="Adresse">adresse </label>
                        <input type="text" id="adresse" name="adresse">
                    </div>
            
                    <div class="form-group">
                        <label for="CP">Code Postale </label>
                        <input type="text" id="cp" name="cp">
                    </div>
            
                    <div class="form-group">
                        <label for="Villes">Ville </label>
                        <input type="text" id="ville" name="ville">
                    </div>
            
                    <div class="form-group">
                        <label for="DateEmbauche">La date d'embauche </label>
                        <input type="text" id="dateEmbauche" name="dateEmbauche">
                    </div>
            
                    <div class="form-group">
                        <label for="codeSec">Code du secteur </label>
                        <input type="text" id="codeSec" name="codeSec">
                    </div>
                    
                    <div class="form-group">
                        <label for="codeLab">Code du laboratoire </label>
                        <input type="text" id="codeLab" name="codeLab">
                    </div>
            
           
            <div id="ajouter"> 
                <input type="submit" name="insert" value="INSERTTTT" />
            </div>
           
           <div id="update">
               <input type="submit" name="update" value="Update" />
           </div>
           
           <div id="delete">
               <input type="submit" name="delete" value="Delete"/>
           </div>
           <!--Fonction d'ajout dans la base de donnée/tableau     -->
                <?php 
                
                if($this->input->post('insert') !=''){
                   $matricule = $this->input->post('matricule'); 
                   $nom = $this->input->post('nom');
                   $prenom = $this->input->post('prenom');
                   $adresse = $this->input->post('adresse');
                   $cp = $this->input->post('cp');
                   $ville = $this->input->post('ville');
                   $dateEmbauche = $this->input->post('dateEmbauche');
                   $codeSec = $this->input->post('$codeSec');
                   $codeLab = $this->input->post('codeLab');
                   
                   $data = array(
                     'VIS_MATRICULE' => $matricule,
                     'VIS_NOM' =>$nom,
                     'Vis_PRENOM' =>$prenom,
                     'VIS_ADRESSE' =>$adresse,
                     'VIS_CP' =>$cp,
                     'VIS_VILLE' =>$ville,
                     'VIS_DATEEMBAUCHE' =>$dateEmbauche,
                     'SEC_CODE' =>$codeSec,
                     'LAB_CODE' =>$codeLab,  
                   );
                   $this->db->insert('visiteur',$data);
                   header("refresh: 0;");
                }
                ?>
                
           <!-- Fonction de modification dans la BDD /Tableau -->
           <?php 
           
           if($this->input->post('update') !=''  ){
            $matricule = $this->input->post('matricule'); 
                   $nom = $this->input->post('nom');
                   $prenom = $this->input->post('prenom');
                   $adresse = $this->input->post('adresse');
                   $cp = $this->input->post('cp');
                   $ville = $this->input->post('ville');
                   $dateEmbauche = $this->input->post('dateEmbauche');
                   $codeSec = $this->input->post('$codeSec');
                   $codeLab = $this->input->post('codeLab');
                   
                    $data = array(
                     'VIS_MATRICULE' => $matricule,
                     'VIS_NOM' =>$nom,
                     'Vis_PRENOM' =>$prenom,
                     'VIS_ADRESSE' =>$adresse,
                     'VIS_CP' =>$cp,
                     'VIS_VILLE' =>$ville,
                     'VIS_DATEEMBAUCHE' =>$dateEmbauche,
                     'SEC_CODE' =>$codeSec,
                     'LAB_CODE' =>$codeLab,  
                  );
                    $this->db->set('VIS_NOM', $nom);
                    $this->db->set('Vis_PRENOM', $prenom);
                    $this->db->set('VIS_ADRESSE', $adresse);
                    $this->db->set('VIS_CP', $cp);
                    $this->db->set('VIS_VILLE', $ville);
                    $this->db->set('VIS_DATEEMBAUCHE', $dateEmbauche);
                    $this->db->set('SEC_CODE', $codeSec);
                    $this->db->set('LAB_CODE', $codeLab);
                    
                    $this->db->where('VIS_MATRICULE', $matricule);
                    
                    $this->db->update('visiteur', $data);
                    
                    header("refresh: 0;");
             
           } 
           
           ?>
           
           <?php 
                
                if($this->input->post('delete') !=''){
                   $matricule = $this->input->post('matricule'); 
                   $nom = $this->input->post('nom');
                   $prenom = $this->input->post('prenom');
                   $adresse = $this->input->post('adresse');
                   $cp = $this->input->post('cp');
                   $ville = $this->input->post('ville');
                   $dateEmbauche = $this->input->post('dateEmbauche');
                   $codeSec = $this->input->post('$codeSec');
                   $codeLab = $this->input->post('codeLab');
                   
                   $data = array(
                     'VIS_MATRICULE' => $matricule,
                     'VIS_NOM' =>$nom,
                     'Vis_PRENOM' =>$prenom,
                     'VIS_ADRESSE' =>$adresse,
                     'VIS_CP' =>$cp,
                     'VIS_VILLE' =>$ville,
                     'VIS_DATEEMBAUCHE' =>$dateEmbauche,
                     'SEC_CODE' =>$codeSec,
                     'LAB_CODE' =>$codeLab,  
                   );
                   
                   $this->db->delete('visiteur', array('VIS_MATRICULE' => $matricule));
                   header("refresh: 0;");
                }
                ?>
           
           
           
     
            
            </form>
        </div>
    </body>
</html>
