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
         <!--<link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">-->
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
        
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

         <script type="text/javascript" src="<?php echo base_url();?>JQuery/jquery-3.1.1.js"></script>
         <script type="text/javascript" src="<?php echo base_url();?>JS/lesFonctions.js"></script>
         <script type="text/javascript">
             $(document).ready(function(){
              $('#myTable').DataTable();
            });
         </script>
         
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
       
        <div class="row">
        <div id="visiteur">
            
            <div class="col-sm-6">
        <div id="partieGauche"> 
<!--        <div style="overflow:auto;height:570px;">-->

            <h1>Tableau des visiteurs</h1>

    <table id="myTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
        
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
       
       <ul class="pager">
  <li class="previous"><a href="http://localhost/GSB/">Revenir a l'acceuil GSB</a></li>
  
</ul>
   
        <br> <br>
           
        </div> 
       
        
            
        
         </div>
            
                <div class="col-sm-2">
                    
                </div>
            
            
       <div class="col-sm-4">   
        <div id="partieDroite">
            
         
            
            <h2>Formulaire d'ajout,de modification ou de supression d'un visiteur</h2>
            <br> 
            <!-- Affichage de la liste des visiteur dans un salect -->
            <div class="form-group row">
                 <div class="col-xs-6">
                <select class="form-control" id="lstVisiteurs">
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
                 </div></div> 
            
            
            
            
            <form method="post">
         
                <a href="http://localhost/GSB/index.php/Ctrl_Accueil/AfficherVisiteurs"><input type="button" class="btn btn-danger" value="vider les cases "></a> <br> <br>

 
           <!-- creation des text box et bouton -->
                    <div class="form-group row">
                        <div class="col-xs-6">
                        <label for="Matricule">Matricule</label>
                        <input type="text" class="form-control" id="matricule" name="matricule">
                        </div>
                    </div>
            
                    <div class="form-group row">
                         <div class="col-xs-6">
                        <label for="Nom">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom">
                    </div>
                    </div>
            
                    <div class="form-group row">
                         <div class="col-xs-6">
                        <label for="Penom">Prenom </label>
                        <input type="text" class="form-control" id="prenom" name="prenom">
                    </div>
                    </div>
            
                    <div class="form-group row">
                         <div class="col-xs-6">
                        <label for="Adresse">adresse </label>
                        <input type="text" class="form-control" id="adresse" name="adresse">
                    </div>
                    </div>
            
                    <div class="form-group row">
                         <div class="col-xs-6">
                        <label for="CP">Code Postale </label>
                        <input type="text" class="form-control" id="cp" name="cp">
                    </div>
                    </div>
                        
                    <div class="form-group row">
                         <div class="col-xs-6">
                        <label for="Villes">Ville </label>
                        <input type="text" class="form-control" id="ville" name="ville">
                    </div>
                    </div>
            
                    <div class="form-group row">
                         <div class="col-xs-6">
                        <label for="DateEmbauche">La date d'embauche </label>
                        <input type="text" class="form-control" id="dateEmbauche" name="dateEmbauche">
                    </div>
                    </div>
            
                    <div class="form-group row">
                         <div class="col-xs-6">
                        <label for="codeSec">Code du secteur </label>
                        <select  class="form-control" id="codeSec" name="codeSec">
                            <?php
                                            foreach ($lesSecteurs as $secteur) {
                                           ?>
                            <option value="<?php echo $secteur->SEC_CODE;?>"> <?php echo $secteur->SEC_LIBELLE;?></option>   
                                                 
                            <?php
                                            } 
                           ?>  
                        </select>     
                         </div>
                    </div>
                    
                    <div class="form-group row">
                         <div class="col-xs-6">
                        <label for="codeLab">Code du laboratoire </label>
                        <select  class="form-control" id="codeLab" name="codeLab">
                          <?php 
                foreach ($lesLabos as $labo ){
                ?> 
                <option value="<?php echo $labo->LAB_CODE;?>"> <?php echo $labo->LAB_NOM;?></option>
                <?php
                }
                ?>  
                        </select>    
                    </div>
                    </div>
                        
    <div class="container">       <div  >  
      
           
            <div class="form-group row" id="ajouter"> 
                <div class="col-xs-2">
                <input type="submit" name="insert" value="Creer" class="btn btn-primary btn-block" />
                </div>
            </div>
           
           <div class="form-group row" id="update">
               <div class="col-xs-2">
               <input type="submit" name="update" value="Metre à jour" class="btn btn-success btn-block" />
               </div>
           </div>   
           
           <div class="form-group row" id="delete">
               <div class="col-xs-2">
               <input type="submit" name="delete" value="Supprimer" class="btn btn-danger btn-block" />
               </div>
           </div>
        </div> 
    </div>
           <br> <br> <br>
            </form>     
    
          
           <div class="form-group row">
               <div class="col-xs-8">
                   <h2>Modifications d'une region </h2>
                   <a href="http://localhost/GSB/index.php/Ctrl_Accueil/getLesRegions" > <input type="button"  value="Modification Régions" class="btn btn-success btn-block" /></a>
               </div>
           </div>  
             <div class="form-group row">
               <div class="col-xs-8">
                   <h2>Statistiques</h2>
                   <a href="http://localhost/GSB/index.php/Ctrl_Accueil/StatistiquesVisiteurs" > <input type="button"  value="Modification Régions" class="btn btn-success btn-block" /></a>
               </div>
           </div>     
        
        
       
          
            
            <!-- fonction de mise a jour des regions -->

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
                   $codeSec = $this->input->post('codeSec');
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
           
           if($this->input->post('update') !='' ){
            $matricule = $this->input->post('matricule'); 
                   $nom = $this->input->post('nom');
                   $prenom = $this->input->post('prenom');
                   $adresse = $this->input->post('adresse');
                   $cp = $this->input->post('cp');
                   $ville = $this->input->post('ville');
                   $dateEmbauche = $this->input->post('dateEmbauche');
                   $codeSec = $this->input->post('codeSec');
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
                   $codeSec = $this->input->post('codeSec');
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
    
       
   
           
 </div>
            </div>     
        </div>
            </div>
    </body>
</html>
