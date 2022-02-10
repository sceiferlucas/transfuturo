<?php
	function Finalizar(){
	date_default_timezone_set('America/Sao_Paulo');
	$hora = date('H:i:s');

		if (isset($_POST['terminar1'])) {
			$hora = $hora;
		}

		$insert = 'UPDATE tabela_box1 SET horafinal = :hora ORDER BY id DESC LIMIT 1';

		try{

			$result = $pdo->prepare($insert);
			$result->bindParam(':hora', $hora, PDO::PARAM_STR);
			$result->execute();
			$contar = $result->rowCount();
			if ($insert) {

				echo "Finalizado com sucesso! Você ja pode fechar essa janela.";
								
			}else{
				echo "algo deu errado";

			}

			}catch(PDOException $e){
			 echo $e;
		}
}