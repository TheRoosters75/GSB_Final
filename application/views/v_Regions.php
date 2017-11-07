<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://localhost/GSB/CSS/CSS.css"> 
         <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                 $('#btnMAJ').click(MAJRegion);
                   


                    });
                }
             );
             
        </script>     
    </head>
    <body>
        <form method="post">
            
            <h2>Modifier Le Nom d'une Région</h2>
            <div class="form-group">
            <select id="lstRegions">
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
            
            
            
            <br>
            
            <div class="form-group">
                <label>Code region:</label> 
                <input type="text" class="form-control" id="codeRegion" name="codeRegion" disabled="" >
                
            </div>
            
            <div class="form-group">
                <label>Secteur </label>
                <input type="text" class="form-control" id="codeSecteur" name="codeSecteur" disabled="" >
            </div>
            
            <div class="form-group">
                <label>Nom de la region :</label>
                <input type="text" class="form-control" id="nomRegion" name="nomRegion"/>
            </div>
            
            <div id="update2">
                <input type="submit" id="btnMAJ" class="btn btn-primary btn-md" name="update2" value="Mettre à Jour" />
           </div>
             
            <!-- fonction de mise a jour des regions -->
            
          
            
          
        </form>   
    </body>
</html>
