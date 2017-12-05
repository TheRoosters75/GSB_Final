<html>
    <head>
        <title>Gestion des Composants</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://localhost/GSB/CSS/CSS.css"> 
        <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>JS/lesFonctions.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>JQuery/jquery-3.1.1.js"></script>
        <script type="text/javascript">
        
             $
           (
               function()
                {
                    
                    
                    // Au chargement de la page
                        getLesComposants();
                        
                        
                   }


            ),
          $
           (
               function()
                {
                    
                    $('#lstComposants').change(function(){
                      
                    $('#codeCompo').val($('#lstComposants').val());
                    $('#libelleCompo').val($('#lstComposants option:selected').attr('name'));
                   


                    });
                }
             );
        </script>
    </head>
    
    <body>        
        <h1>Gestion des composants</h1>
        <div class="form-group row">
                 <div class="col-xs-4">
         <select id="lstComposants">
                        <?php 
                        foreach ($lesComposants as $composant ){
                        ?> 
                        <option name="<?php echo $composant->CMP_LIBELLE;?>"
                                value="<?php echo $composant->CMP_CODE;?>"
                                > <?php echo $composant->CMP_LIBELLE;?></option>
                        <?php
                        }
                        ?>
            </select>
                 </div></div>
        
<!--        <p>Code composant</p> <input type="text" id="codeCompo">-->
        
                    <div class="form-group row">
                        <div class="col-xs-4">
                        <label for="Code Composant">Code Composant</label>
                        <input type="text" class="form-control" id="codeCompo" name="Code Composant">
                        </div>
                    </div>
        
<!--        <p>Nom Composant</p> <input type="text" id="libelleCompo">-->
        
                    <div class="form-group row">
                        <div class="col-xs-4">
                        <label for="Libelle">Nom Composant</label>
                        <input type="text" class="form-control" id="libelleCompo" name="Libelle Composant">
                        </div>
                    </div>
        <br> <br>
        <input id="update" type="button" value="Modifier composant" name="update">
                 
           <!-- Fonction de modification dans la BDD /Tableau -->
           <?php 
           
           if($this->input->post('update') !=''  ){
            $codeCompo = $this->input->post('codeCompo'); 
            $libelleCompo = $this->input->post('libelleCompo');
                 
                   
                   
                    $data = array(
                     'CMP_CODE' => $codeCompo,
                     'CMP_LIBELLE' =>$libelleCompo,
                      
                  );
                    $this->db->set('CMP_CODE', $codeCompo);
                    $this->db->set('CMP_LIBELLE', $libelleCompo);
                    
                    
                    $this->db->where('CMP_CODE', $codeCompo);
                    
                    $this->db->update('libelleCompo', $data);
                    
                    header("refresh: 0;");
             
           } 
           
           ?>
           
        
           <br> <br>    
        <div id="Tableau" align="left">
        <div class="col-sm-7">

            <div style="overflow:auto;height:620px;">
       
    <table class="table table-striped" cellspacing="2px" cellpadding="2px;" rules="all" style="border:solid 1px black;">
        <caption>Listes des medicaments</caption>
        <tr> 
            
              <th>Depot legal</th>
              <th>Nom du medicament</th>
              <th>Composition du medicament</th>
             
           
        </tr>    
       
        <?php 
        
        foreach($lesMedicaments as $medicament){
            echo "<tr>";
           
            echo"<td>".$medicament->MED_DEPOTLEGAL."</td>";
            echo"<td>".$medicament->MED_NOMCOMMERCIAL."</td>";
            echo"<td>".$medicament->MED_COMPOSITION."</td>";
            
            
            
            echo "</tr>";
        }
        ?>
        
        
    
    </table> 
           
          </div>
        
        <ul class="pager">
            <li class="previous"><a href="http://localhost/GSB/index.php">Previous</a></li>
        </ul>
        </div>
        </div>
    </body>
</html>

