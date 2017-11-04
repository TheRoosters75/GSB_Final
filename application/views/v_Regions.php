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
    </head>
    <body>
        <form method="post">
            
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
            
            
            
            
            
            <div class="form-group">
                <label>Code region:</label> <input type="text" id="codeRegion" name="codeRegion" >
                
            </div> 
            
            <div class="form-group">
                <label>Secteur </label> <input type="text" id="codeSecteur" name="codeSecteur" >
            </div>
            
            <div class="form-group">
                <label>Nom de la region :</label> <input type="text" id="nomRegion" name="nomRegion"/>
            </div>
            
            <div id="update">
               <input type="submit" name="update" value="update" />
           </div>
             
            <!-- fonction de mise a jour des regions -->
            
          <?php
          
            if($this->input->post('update') !=''  ){
            $codeRegion = $this->input->post('codeRegion'); 
                   $codeSecteur = $this->input->post('codeSecteur');
                   $nomRegion = $this->input->post('nomRegion');
  
                   
                    $data = array(
                     'REG_NOM' => $nomRegion,
                     'REG_CODE' => $codeRegion,
                     'SEC_CODE' => $codeSecteur,
          
                  );
                    $this->db->set('REG_NOM', $nomRegion);
                    $this->db->set('REG_CODE', $codeRegion);
                    $this->db->set('SEC_CODE', $codeSecteur);
                  
                    $this->db->where('REG_NOM', $nomRegion);
                  
                    
                    $this->db->update('region',$data);
                    
                    header("refresh: 0;");
             
           } 
          
          
          ?>
            
          
        </form>   
    </body>
</html>
