<?php
ob_start();
session_start();
  if (!isset($_SESSION['usuariosceifer']) && (!isset($_SESSION['senhasceifer']))) {
    header("Location:loginmaster.php");exit;
  }


	include('conexao.php');
	include('header.php');
  include('logout.php');
?>

<div id="menu">
      
      <a href="index.php"><b>Home</b></a> | <a href="index.php" target="_blank"><b>Documentação</b></a> | <a href="?sair" onclick="return confirm('Deseja sair?')"><b>Sair</b></a>
</div><br>
<div id="area-admin">
  <div id="status">
   <div id="direita">
     <div id="icone">
       <img src="icone/comunidade.png">
       <h3>Relação Numero de OS</h3>
     </div>
   </div> 
  </div>
  <div id="status">
    <div id="direita">
     <div id="icone">
       <img src="icone/procurar.png">
       <h3>Ultímas OS</h3>
     </div>
   </div> 
  </div>
  <div id="status">
     <div id="direita">
     <div id="icone">
       <img src="icone/conversacao.png">
       <h3>Ultímas Mensagens</h3>
     </div>
   </div> 
  </div>
</div>
<hr><br>
  	<div id="area-admin">
    <div id="primeirografico">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Mês', 'Box 1', 'Box 2', 'Box 3', 'Box 4', 'Box 5', 'Box 6', 'Box 7', 'Box 8', 'Box 9', 'Box 10', 'Box 11', 'Box 12', 'Box 13', 'Box 14', 'Box 15', 'Box 16', 'Box 17', 'Box 18', 'Box 19', 'Box 20', 'Box 21', 'Box 22'],
          ['Agosto', 1000, 400, 200, 120, 589, 545, 952, 1590, 839, 984, 1233, 899, 693, 598, 312, 201, 132, 976, 267, 109, 728, 186]
    
        ]);

        var options = {
          chart: {
            title: 'Relação de Ordem de Serviço',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    <div id="columnchart_material" style="width: 600px; height: 300px"></div>
    </div>
    <div id="">
      <div id="relatorios">
    <h3>Relatórios - Ecxel</h3>
    <div id="direita-admin">
    <a id="botaoverde" href="relatorio.php">Box 1</a>
    <a id="botaoverde" href="relatorio2.php">Box 2</a>
    <a id="botaoverde" href="relatorio3.php">Box 3</a>
    <a id="botaoverde" href="relatorio4.php">Box 4</a>
    <a id="botaoverde" href="relatorio5.php">Box 5</a>
    <a id="botaoverde" href="relatorio6.php">Box 6</a>
    <a id="botaoverde" href="relatorio7.php">Box 7</a>
    <a id="botaoverde" href="relatorio8.php">Box 8</a>
    <a id="botaoverde" href="relatorio9.php">Box 9</a>
    <a id="botaoverde" href="relatorio10.php">Box 10</a>
    <a id="botaoverde" href="relatorio11.php">Box 11</a>
    <a id="botaoverde" href="relatorio12.php">Box 12</a>
    <a id="botaoverde" href="relatorio13.php">Box 13</a>
    <a id="botaoverde" href="relatorio14.php">Box 14</a>
    <a id="botaoverde" href="relatorio15.php">Box 15</a>
    <a id="botaoverde" href="relatorio16.php">Box 16</a>
    <a id="botaoverde" href="relatorio17.php">Box 17</a>
    <a id="botaoverde" href="relatorio18.php">Box 18</a>
    <a id="botaoverde" href="relatorio19.php">Box 19</a>
    <a id="botaoverde" href="relatorio20.php">Box 20</a>
    <a id="botaoverde" href="relatorio21.php">Box 21</a>
    <a id="botaoverde" href="relatorio22.php">Box 22</a>
    </div>
    </div>
    </div>
</div><!-- Deixar essa /div -->
<?php
	include('footer.php');
?>