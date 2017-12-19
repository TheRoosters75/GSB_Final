<html>
  <head>
      
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          <?php
          foreach ($qteLabo as $labo) {
               echo"['".$labo->LAB_NOM."',".$labo->qte."],";
              
          }
          ?>
        ]);

        var options = {
          title: 'Le nombres de visiteurs en fonction de leurs laboratoires',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
    
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          <?php 
          foreach ($qteSecteur as $secteur) {
               echo"['".$secteur->SEC_LIBELLE."',".$secteur->Qte."],";
              
          }
          ?>
        ]);

        var options = {
          title: 'Le nombres de visiteurs en fonction de leurs localisation',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
    
  </head>
  <body>
      <div class="row">
          <div class="col-sm-6">
          
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
    </div>
          <div class="col-sm-6">
          
        <div id="donutchart" style="width: 900px; height: 500px;"></div> 
        </div>
      </div>
      
       <ul class="pager">
  <li class="previous"><a href="http://localhost/GSB_Final-BrancheClement-Local/index.php/Ctrl_Accueil/AfficherVisiteurs">Revenir a l'acceuil</a></li>
  
</ul>
  </body>
</html>
