<?php 
ob_start();
session_start();
	if (!isset($_SESSION['usuariosceifer']) && (!isset($_SESSION['senhasceifer']))) {
		header("Location:login.php");exit;
	}

	include('header.php');
	include('conexao.php');
	include('logout.php');

	date_default_timezone_set('America/Sao_Paulo');
	 $hora = date('H:i:s');

	if (isset($_POST['enviar'])) {
		$mecanico = trim(strip_tags($_POST['mecanico']));
		$ordem = trim(strip_tags($_POST['ordem']));
		$data =  $_POST['data'];
		$hora = $hora;
		$placa = trim(strip_tags($_POST['placa']));
		$servico = trim(strip_tags($_POST['servico']));
		$previsao = trim(strip_tags($_POST['previsao']));
		$obs = trim(strip_tags($_POST['observacoes']));
		$enviar = filter_input(INPUT_POST, 'enviar', FILTER_SANITIZE_STRING);		
		
	}

	
				
?>

	<div id="menu">
		<b><a href="?voltar">Voltar</a></b> | <b><a href="?sair" onclick="return confirm('Deseja sair?')">Sair</a></b>
	</div>

	<div id="formulario">

		<div id="centro">Formulário Box 17</div>
		<div id="inputs">
		<form method="POST" action=""><br>

			<label>Mecânico:</label>
			<input type="text" name="mecanico" required=""><br><br>
			<label>Ordem de Serviço:</label>
			<input type="text" name="ordem" required=""><br><br>
			<label>Data:</label>
			<input type="date" name="data" required=""><br><br>
			<label>Placa do Veiculo:</label>
			<input type="text" name="placa" required=""><br><br>
			<label>Serviço:</label>
			<input type="text" name="servico" required=""><br><br>
			<label>Previsão:</label>
			<input type="time" name="previsao"><br><br>
			<label>Observações:</label><br><br>
			<textarea wrap="off" cols="70" rows="10" name="observacoes" style="width: 320px; height: 150px;" align="center" placeholder="Observações">
				

			</textarea><br><br>

			<input id="enviarform" type="submit" name="enviar" value="Enviar" onclick="();"><br><br>
			
		</form>
		</div>
	</div>


<?php
	include('footer.php')
?>