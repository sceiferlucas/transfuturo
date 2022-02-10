<?php 
	try{
	$pdo = new PDO("mysql:dbname=transfuturo;host=localhost", "root", "");
}catch(PDOException $e){
	echo "Error: " .$e->getMessage();
}

//DATA SERVER NAME = NOME DO BANCO DE DADOS DSN
	// $dsn = 'mysql:host=localhost;dbname=transfuturo';
	// $usuario = 'root';
	// $senha = '';

	// try{
	// 	$conexao = new PDO($dsn, $usuario, $senha);
	// 	$conexao ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// }catch(PDOException $e){
	// 	echo 'ERROR' . $e->getMessage();
	// }