<?php 

require('conexao.php');

$sql = $pdo->query("SELECT * FROM tabela_box10 ORDER BY id DESC LIMIT 1");
if ($sql->rowCount() > 0) {
	foreach ($sql->fetchAll() as $value) {
		echo "<h3>BOX 10</h3>";
		echo "<h4>MECANICO: ".$value['mecanico']."</h4>";
		echo "<h4>ORDEM DE SERVIÇO: ".$value['ordem']."</h4>";
		echo "<h4>DATA: ".$value['data']."</h4>";
		echo "<h4>HORARIO INICIAL: ".$value['hora']."</h4>";
		echo "<h4>PLACA: ".$value['placa']."</h4>";
		echo "<h4>SERVIÇO: ".$value['servico']."</h4>";
		echo "<h4>PREVISÃO: ".$value['previsao']." hora(s) </h4>";
		echo "<label id='timer10' style='font-size: 30px;'>00:00:00</label><br><br>";
	}
}else{
	echo('<h3>Nenhum Registro!</h3>');
}