<?php 

include'conexao.php'; 

?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        <?php 
          $consulta = "SELECT COUNT(*) AS total_os FROM tabela_box1";
        $os = $pdo->prepare($consulta);
        $os->execute();
        $exibir = $os->fetch(PDO::FETCH_ASSOC);
          $total1 = $exibir['total_os'];

          $consulta2 = "SELECT COUNT(*) AS total_os2 FROM tabela_box2";
        $os2 = $pdo->prepare($consulta2);
        $os2->execute();
        $exibir2 = $os2->fetch(PDO::FETCH_ASSOC);
          $total2 = $exibir2['total_os2'];

          $consulta3 = "SELECT COUNT(*) AS total_os3 FROM tabela_box3";
        $os3 = $pdo->prepare($consulta3);
        $os3->execute();
        $exibir3 = $os3->fetch(PDO::FETCH_ASSOC);
          $total3 = $exibir3['total_os3'];

          $consulta4 = "SELECT COUNT(*) AS total_os4 FROM tabela_box4";
        $os4 = $pdo->prepare($consulta4);
        $os4->execute();
        $exibir4 = $os4->fetch(PDO::FETCH_ASSOC);
          $total4 = $exibir4['total_os4'];

          $consulta5 = "SELECT COUNT(*) AS total_os5 FROM tabela_box5";
        $os5 = $pdo->prepare($consulta5);
        $os5->execute();
        $exibir5 = $os5->fetch(PDO::FETCH_ASSOC);
          $total5 = $exibir5['total_os5'];

          $consulta6 = "SELECT COUNT(*) AS total_os6 FROM tabela_box6";
        $os6 = $pdo->prepare($consulta6);
        $os6->execute();
        $exibir6 = $os6->fetch(PDO::FETCH_ASSOC);
          $total6 = $exibir6['total_os6'];

          $consulta7 = "SELECT COUNT(*) AS total_os7 FROM tabela_box7";
        $os7 = $pdo->prepare($consulta7);
        $os7->execute();
        $exibir7 = $os7->fetch(PDO::FETCH_ASSOC);
          $total7 = $exibir7['total_os7'];

          $consulta8 = "SELECT COUNT(*) AS total_os8 FROM tabela_box8";
        $os8 = $pdo->prepare($consulta8);
        $os8->execute();
        $exibir8 = $os8->fetch(PDO::FETCH_ASSOC);
          $total8 = $exibir8['total_os8'];

          $consulta9 = "SELECT COUNT(*) AS total_os9 FROM tabela_box9";
        $os9 = $pdo->prepare($consulta9);
        $os9->execute();
        $exibir9 = $os9->fetch(PDO::FETCH_ASSOC);
          $total9 = $exibir9['total_os9'];

          $consulta10 = "SELECT COUNT(*) AS total_os10 FROM tabela_box10";
        $os10 = $pdo->prepare($consulta10);
        $os10->execute();
        $exibir10 = $os10->fetch(PDO::FETCH_ASSOC);
          $total10 = $exibir10['total_os10'];

          $consulta11 = "SELECT COUNT(*) AS total_os11 FROM tabela_box11";
        $os11 = $pdo->prepare($consulta11);
        $os11->execute();
        $exibir11 = $os11->fetch(PDO::FETCH_ASSOC);
          $total11 = $exibir11['total_os11'];

          $consulta12 = "SELECT COUNT(*) AS total_os12 FROM tabela_box12";
        $os12 = $pdo->prepare($consulta12);
        $os12->execute();
        $exibir12 = $os12->fetch(PDO::FETCH_ASSOC);
          $total12 = $exibir12['total_os12'];

          $consulta13 = "SELECT COUNT(*) AS total_os13 FROM tabela_box13";
        $os13 = $pdo->prepare($consulta13);
        $os13->execute();
        $exibir13 = $os13->fetch(PDO::FETCH_ASSOC);
          $total13 = $exibir13['total_os13'];

          $consulta14 = "SELECT COUNT(*) AS total_os14 FROM tabela_box14";
        $os14 = $pdo->prepare($consulta14);
        $os14->execute();
        $exibir14 = $os14->fetch(PDO::FETCH_ASSOC);
          $total14 = $exibir14['total_os14'];

          $consulta15 = "SELECT COUNT(*) AS total_os15 FROM tabela_box15";
        $os15 = $pdo->prepare($consulta15);
        $os15->execute();
        $exibir15 = $os15->fetch(PDO::FETCH_ASSOC);
          $total15 = $exibir15['total_os15'];

          $consulta16 = "SELECT COUNT(*) AS total_os16 FROM tabela_box16";
        $os16 = $pdo->prepare($consulta16);
        $os16->execute();
        $exibir16 = $os16->fetch(PDO::FETCH_ASSOC);
          $total16 = $exibir16['total_os16'];

          $consulta17 = "SELECT COUNT(*) AS total_os17 FROM tabela_box17";
        $os17 = $pdo->prepare($consulta17);
        $os17->execute();
        $exibir17 = $os17->fetch(PDO::FETCH_ASSOC);
          $total17 = $exibir17['total_os17'];

          $consulta18 = "SELECT COUNT(*) AS total_os18 FROM tabela_box18";
        $os18 = $pdo->prepare($consulta18);
        $os18->execute();
        $exibir18 = $os18->fetch(PDO::FETCH_ASSOC);
          $total18 = $exibir18['total_os18'];

          $consulta19 = "SELECT COUNT(*) AS total_os19 FROM tabela_box19";
        $os19 = $pdo->prepare($consulta19);
        $os19->execute();
        $exibir19 = $os19->fetch(PDO::FETCH_ASSOC);
          $total19 = $exibir19['total_os19'];

          $consulta20 = "SELECT COUNT(*) AS total_os20 FROM tabela_box20";
        $os20 = $pdo->prepare($consulta20);
        $os20->execute();
        $exibir20 = $os20->fetch(PDO::FETCH_ASSOC);
          $total20 = $exibir20['total_os20'];

          $consulta21= "SELECT COUNT(*) AS total_os21 FROM tabela_box21";
        $os21 = $pdo->prepare($consulta21);
        $os21->execute();
        $exibir21 = $os21->fetch(PDO::FETCH_ASSOC);
          $total21 = $exibir21['total_os21'];

          $consulta22 = "SELECT COUNT(*) AS total_os22 FROM tabela_box22";
        $os22 = $pdo->prepare($consulta22);
        $os22->execute();
        $exibir22 = $os22->fetch(PDO::FETCH_ASSOC);
          $total22 = $exibir22['total_os22'];
        ?>
        var data = google.visualization.arrayToDataTable([
          ['Total', 'Atendimentos Finalizados', 'Não finalizados', 'Em andamento'],
          ['BOX 1', <?php echo $exibir['total_os'];?>, 0, 0],
          ['BOX 2', <?php echo $exibir2['total_os2'];?>, 0, 0],
          ['BOX 3', <?php echo $exibir3['total_os3'];?>, 0, 0],
          ['BOX 4', <?php echo $exibir4['total_os4'];?>, 0, 0],
          ['BOX 5', <?php echo $exibir5['total_os5'];?>, 0, 0],
          ['BOX 6', <?php echo $exibir6['total_os6'];?>, 0, 0],
          ['BOX 7', <?php echo $exibir7['total_os7'];?>, 0, 0],
          ['BOX 8', <?php echo $exibir8['total_os8'];?>, 0, 0],
          ['BOX 9', <?php echo $exibir9['total_os9'];?>, 0, 0],
          ['BOX 10', <?php echo $exibir10['total_os10'];?>, 0, 0],
          ['BOX 11', <?php echo $exibir11['total_os11'];?>, 0, 0],
          ['BOX 12', <?php echo $exibir12['total_os12'];?>, 0, 0],
          ['BOX 13', <?php echo $exibir13['total_os13'];?>, 0, 0],
          ['BOX 14', <?php echo $exibir14['total_os14'];?>, 0, 0],
          ['BOX 15', <?php echo $exibir15['total_os15'];?>, 0, 0],
          ['BOX 16', <?php echo $exibir16['total_os16'];?>, 0, 0],
          ['BOX 17', <?php echo $exibir17['total_os17'];?>, 0, 0],
          ['BOX 18', <?php echo $exibir18['total_os18'];?>, 0, 0],
          ['BOX 19', <?php echo $exibir19['total_os19'];?>, 0, 0],
          ['BOX 20', <?php echo $exibir20['total_os20'];?>, 0, 0],
          ['BOX 21', <?php echo $exibir21['total_os21'];?>, 0, 0],
          ['BOX 22', <?php echo $exibir22['total_os22'];?>, 0, 0]
        ]);

        var options = {
          chart: {
            title: 'Performance da Empresa',

          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="barchart_material" style="width: 900px; height: 800px;"></div>
  </body>
</html>
