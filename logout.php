<?php 
	if(isset($_REQUEST['sair'])) {
		session_destroy();
		//session_unset($_SESSION['usuariosceifer']); NÃO SEI PQ ESSE BLOCO NAO FUNCIONA
		//session_unset($_SESSION['senhasceifer']);SEM ELES FUNCIONOU ENTÃO, PACIENCIA.
		header("Location:index.php");
	}
?>

<?php 
	if(isset($_REQUEST['voltar'])){
		header("Location:cadastrar.php");
	}
?>