<?php 
	session_start();
	include('conexao.php');

	?>

	<<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>Relatório</title>
	</head>
	<body>
	<?php 
		$planilha = 'relatorio_box18.xls';

	$html = '';
	$html .= '<table border="1">';
	$html .= '<tr>';
	$html .= '<td colspan="10">Relatório de Serviços</tr>';
	$html .= '</tr>';

	$html .= '<tr>';
	$html .= '<td><b>ID</b></td>';
	$html .= '<td><b>Mecânico</b></td>';
	$html .= '<td><b>Ordem de Serviço</b>';
	$html .= '<td><b>Data</b></td>';
	$html .= '<td><b>Horário Inicial</b></td>';
	$html .= '<td><b>Placa</b></td>';
	$html .= '<td><b>Serviço</b></td>';
	$html .= '<td><b>Previsão</b></td>';
	$html .= '<td><b>Horário Final</b></td>';
	$html .= '<td><b>Observações</b></td>';
	$html .='</tr>';


	$result_relatorio = "SELECT * FROM tabela_box18 ORDER BY id DESC"; 

	$result = $pdo->prepare($result_relatorio);
	$result->execute();

	while($row_relatorio = $result->FETCH(PDO::FETCH_ASSOC)){
			$html .= '<tr>';
			$html .= '<td>'.$row_relatorio["id"].'</td>';
			$html .= '<td>'.$row_relatorio["mecanico"].'</td>';
			$html .= '<td>'.$row_relatorio["ordem"].'</td>';
			$html .= '<td>'.$row_relatorio["data"].'</td>';
			$html .= '<td>'.$row_relatorio["hora"].'</td>';
			$html .= '<td>'.$row_relatorio["placa"].'</td>';
			$html .= '<td>'.$row_relatorio["servico"].'</td>';
			$html .= '<td>'.$row_relatorio["previsao"].'</td>';
			$html .= '<td>'.$row_relatorio["horafinal"].'</td>';
			$html .= '<td>'.$row_relatorio["obs"].'</td>';
			$html .= '</tr>';
			
	}

	// Configurações header para forçar o download
		header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header ("Cache-Control: no-cache, must-revalidate");
		header ("Pragma: no-cache");
		header ("Content-type: application/x-msexcel");
		header ("Content-Disposition: attachment; filename=\"{$planilha}\"" );
		header ("Content-Description: PHP Generated Data" );
		// Envia o conteúdo do arquivo
		echo $html;
		exit; ?>
	?>
	</body>
	</html>

	 
	
	