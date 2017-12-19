<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Accueil GSB </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/CSS.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="jquery-3.1.1.js"></script>
        <script type="text/javascript">
        var automate;
        $
        (
            function()
            {
                automate = setTimeout('fadeVisiteurs()',0000);
                automate = setTimeout('fadeComposants()',0000);

            }
         );
         
         function fadeVisiteurs()
         {
             $('#titleVis').text("Gestion des visiteurs");
             $('#titleVis').fadeOut(3000);
             $('#titleVis').fadeToggle(3000);
             automate = setTimeout('fadeClement()',3000);
         }
         function fadeClement()
         {
             $('#titleVis').text("Clément");
             $('#titleVis').fadeOut(3000);
             $('#titleVis').fadeToggle(3000);
             automate = setTimeout('fadeVisiteurs()',6000);

         }
         function fadeComposants()
         {
             $('#titleComp').text("Gestion des composants");
             $('#titleComp').fadeOut(3000);
             $('#titleComp').fadeToggle(3000);
             automate = setTimeout('fadeSammy()',3000);
         }
         function fadeSammy()
         {
             $('#titleComp').text("Sammy");
             $('#titleComp').fadeOut(3000);
             $('#titleComp').fadeToggle(3000);
             automate = setTimeout('fadeComposants()',6000);

         }
        </script>
        <style>
            .container {
                padding: 80px 120px;
            }
            .person {
                border: 10px solid transparent;
                margin-bottom: 25px;
                width: 80%;
                height: 80%;
                opacity: 0.7;
            }
            .person:hover {
                border-color: #f1f1f1;
            }
        </style>
    </head>
    <body>
        <!--<img class="imagesB" src="Images/medicament.jpg"/>-->
        <h1 align="center">Espace de Gestion : GSB</h1>
        <!--<img src="Images/Mr._Meeseeks" alt="[GSB]"/>-->
    
        <div class="row">
            <h2 align="center"> Bienvenue dans quelle categories desirer vous entrer</h2>
            <br>
        
            <div id="divGenerale">
            
                <div class="col-sm-3">  
                    <img src="Images/medicament.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
                    <br> <br>
                    <h1 id="titleMed" size="6pt" type="bold" value="Gestion des médicaments">Gestion des médicaments</h1> 
                        <ul>
                        <li>lister des types d'individus</li>
                        <li>lister des médicaments</li>
                        <li>insérer une prescription</li>
                        <li>créer une liste de médicaments non conseillés</li>
                        </ul>  
                    <br> <br> <br>
                    <a href="index.php/Ctrl_General/AfficherMedicaments"> <br><input type="button" class="btn btn-info" name="consulter " value="Consulter"/></a>
                </div>
        
            <div class="col-sm-3" >
                <img src="Images/anony.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
                <br> <br> <br> <br>
                <h1 id="titleVis" size="6pt" type="bold" value="Gestion des médicaments">Gestion des visiteurs</h1> 
                    <ul>
                    <li> lister des régions</li>
                    <li>lister des visiteurs</li>
                    <li>insérer la région dans laquelle travaille un visiteur</li>
                    <li>avoir des statistiques sous forme d'indicateur (nombres, pourcentages, graphiques, …)</li>   
                    </ul>   
                <br>
                <a href="index.php/Ctrl_Accueil/AfficherVisiteurs"> <br> <br><input type="button" class="btn btn-info" name="consulter " value="Consulter"/></a>         
            </div>        
        
            <div class="col-sm-3">            
                <img src="Images/composants.jpg" class="img-circle person" alt="Random Name" width="255" height="255" size="500">
                <br> <br>
                <h1 id="titleComp" size="6pt" type="bold" value="Gestion des composants">Gestion des composants</h1> 
                <ul>
                    <li>lister des composants</li>
                    <li>lister la liste des composants pour un médicament</li>
                    <li>insérer dans quelle(s) présentation(s) est formulé un médicament</li>
                    <li>avoir des statistiques sous forme d’indicateurs (nombres, pourcentages, graphiques, …)</li>               
                </ul>
            <br> <br> <br>
            <a href="index.php/Ctrl_AccueilSF/AfficherComposants"><input type="button" class="btn btn-info" name="consulter " value="Consulter"/></a>  
            </div>
        
            <div class="col-sm-3">
                <img src="Images/medecin.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
                <h1 id="titlePrac" size="6pt" type="bold" value="Gestion des practiciens">Gestion des practiciens</h1> 
                <ul>
                    <li>lister des spécialités</li>                  
                    <li>lister pour un praticien la liste de ses spécialités</li>
                    <li>Insérer dans quelle(s) activité(s) complémentaire(s) a été invité un praticien</li>
                    <li>Avoir des statistiques sous forme d’indicateurs (nombres, pourcentages, graphiques, ...)</li>
                </ul>
            <br> <br>

            <a href="index.php/Ctrl_General/AfficherPracticiens"><input type="button" class="btn btn-info" name="consulter " value="Consulter"/></a>  
            </div>
        </div>
    </div><!--div row -->
    </body>
</html>



<!--


<!DOCTYPE html>

To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <script type="text/javascript" src="jquery-3.1.1.js"></script>
         <script type="text/javascript">
         var automate;
         $
        (
            function()
            {
                automate = setTimeout('boutonText()',0000);
            }
         );
         
         function boutonText()
         {
             $('#btn').val("Text");
             automate = setTimeout('boutonSammy()',2000);
         }
         function boutonSammy()
         {
             $('#btn').val("Sammy");
             automate = setTimeout('boutonText()',2000);
         }
         </script>
        
        
    </head>
    <body>
        <input id="btn" type="button" value="Text">
    </body>
</html>
-->
