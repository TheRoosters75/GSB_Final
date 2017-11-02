<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Accueil GSB</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/CSS.css">
    </head>
    <body>
        <h1 align="center"> bienvenue dans quelle categories desirer vous entrer</h1>
        
        
    <div id="divGenerale">
            
        <div class="section">  
            
                
            <p>Gestion des medicament</p>
            <ul>
            <li>lister des types d'individus</li>
            <li>lister des médicaments</li>
            <li>insérer une prescription</li>
            <li>créer une liste de médicaments non conseillés</li>
            </ul>  
            <br> <br>
            <a href="index.php/Ctrl_Accueil/AfficherMedicaments"><input type="button" name="consulter " value="Consulter"/></a>

           </div>
        
        <div class="section">
            <p>Gestions des visiteurs</p>  
            <ul>
                <li> lister des régions</li>
                <li>lister des visiteurs</li>
                <li>insérer la région dans laquelle travaille un visiteur</li>
                <li>avoir des statistiques sous forme d'indicateur (nombres, pourcentages, graphiques, …)</li>   
             </ul>   
                
              <a href="index.php/Ctrl_Accueil/AfficherVisiteurs"><input type="button" name="consulter " value="Consulter"/></a>         
        </div>
        
        
        <div class="section">
            
            
            <p>Gestion des composants </p>
            <ul>
                <li>lister des composants</li>
                <li>lister la liste des composants pour un médicament</li>
                <li>insérer dans quelle(s) présentation(s) est formulé un médicament</li>
                <li>avoir des statistiques sous forme d’indicateurs (nombres, pourcentages, graphiques, …)</li>
                
                
            </ul>
             <a href="index.php/Ctrl_Accueil/AfficherComposants"><input type="button" name="consulter " value="Consulter"/></a>  
        </div>
        
        <div class="section">
          
            <p>Gestions des practiciens</p>
            <ul>
                <li>lister des spécialités</li>
                    
                <li>lister pour un praticien la liste de ses spécialités</li>
                <li>Insérer dans quelle(s) activité(s) complémentaire(s) a été invité un praticien</li>
                <li>Avoir des statistiques sous forme d’indicateurs (nombres, pourcentages, graphiques, ...)<li>
                </li>
            </ul>
             <a href="index.php/Ctrl_Accueil/AfficherPracticiens"><input type="button" name="consulter " value="Consulter"/></a>  
        </div>
    </div>
</html>
