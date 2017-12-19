<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Modification des regions</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS -->
        <link rel="stylesheet" href="http://localhost/GSB/CSS/CSS.css"> 
        <!-- Boostrap -->
         <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       <!--Boostrap -->
       
       <!--JavaScript -->
         <script type="text/javascript" src="<?php echo base_url();?>JQuery/jquery-3.1.1.js"></script>
         <script type="text/javascript" src="<?php echo base_url();?>JS/lesFonctions.js"></script>
         <script type="text/javascript">
             
          
          
          $
           (
               function()
                {
                    
                    $('#lstRegions').change(function(){
                      
                    $('#codeRegion').val($('#lstRegions').val());
                    $('#nomRegion').val($('#lstRegions option:selected').attr('name'));
                    $('#codeSecteur').val($('#lstRegions option:selected').attr('name2'));
                
                   


                    });
                }
             );
             
        </script>  
        <!--JavaScript -->
    </head>
    <body>
      
          <h2>Modifier Le Nom d'une Région</h2>
            <div class="form-group row">
                <div class="col-xs-4">
            <select class="form-control" id="lstRegions">
                <?php
                foreach ($lesRegions as $region){
                    
                
                ?>
                <option name="<?php echo $region->REG_NOM;?>"
                        value="<?php echo $region->REG_CODE;?>"
                        name2="<?php echo $region->SEC_CODE;?>"
                
                        
                        
                    
                        
                        > <?php echo $region->REG_NOM;?></option>
                   
                        
                      
        
            <?php
            }
            ?>
                 </select> 
                </div>
            </div>
          <form method="post">
     <div class="form-group row">
                        <div class="col-xs-4">
                        <label for="codeRegion">Code Region :</label>
                        <input type="text" class="form-control" id="codeRegion" name="codeRegion" >
                        </div>
                    </div>
                    
            
                    <div class="form-group row">
                         <div class="col-xs-4">
                        <label for="codeSecteur">Nom</label>
                        <input type="text" class="form-control" id="codeSecteur" name="codeSecteur" >
                    </div>
                    </div>
            
                    <div class="form-group row">
                         <div class="col-xs-4">
                        <label for="nomRegion">Prenom </label>
                        <input type="text" class="form-control" id="nomRegion" name="nomRegion" >
                    </div>
                    </div>
      
           <div class="form-group row" >
               <div class="col-xs-4">
                   <input type="submit" name="update" value="Update" class="btn btn-success btn-block" />
               </div>
           </div>  
              
       <ul class="pager">
  <li class="previous"><a href="http://localhost/GSB_Final-BrancheClement-Local/index.php/Ctrl_Accueil/AfficherVisiteurs">Revenir a l'acceuil</a></li>
  
</ul>
        
          <?php 
               if($this->input->post('update') != ''){
        $codeRegion = $this->input->post('codeRegion');
        $codeSecteur = $this->input->post('codeSecteur');
        $nomRegion = $this->input->post('nomRegion');
        $data = array(
        'REG_CODE' => $codeRegion,
        'SEC_CODE' => $codeSecteur,
        'REG_NOM'  => $nomRegion,
    );
        $this->db->set('REG_CODE',$codeRegion);
        $this->db->set('SEC_CODE',$codeSecteur);
        $this->db->set('REG_CODE',$nomRegion);
        $this->db->where('REG_CODE', $codeRegion);
        
         $this->db->update('region',$data);
         header("refresh: 0;");
         
     

    
    }
             
           
           
           ?>
                
                        
            </form>     
            
    </body>
</html>
