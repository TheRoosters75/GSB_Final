<html>
    <head></head>
    <body>
        
        <?php       

            echo "<select id='lstComposant'>";
            foreach ($lesComposants as $composant)
            {
                echo "<option id='opt1' value='".$composant->CMP_CODE."'>".$composant->CMP_LIBELLE."</option>";

            }
            echo "</select>";

            ?>



            <select id="lstComposants">
                        <?php 
                        foreach ($lesComposants as $composant ){
                        ?> 
                        <option name="<?php echo $composant->CMP_LIBELLE;?>"
                                value="<?php echo $composant->CMP_CODE;?>"
                                > <?php echo $visiteur->CMP_LIBELLE;?></option>
                        <?php
                        }
                        ?>
            </select>
    </body>
</html>



