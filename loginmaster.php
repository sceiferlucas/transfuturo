<?php
ob_start();
    session_start();
    if (isset($_SESSION['usuariosceifer']) && (isset($_SESSION['senhasceifer']))) {
        header("Location:admin.php");
    }
    include('header.php');
    include('conexao.php');

    if (isset($_POST['botão'])) {
        // RECUPERANDO DADOS DO FORM
        $usuario = trim(strip_tags($_POST['Login']));
        $senha = trim(strip_tags($_POST['Senha']));

        // SELECIONAR BANCO DE DADOS
        $select = "SELECT * from master WHERE BINARY usuario=:usuario AND BINARY senha=:senha";

            try{
            $result = $pdo->prepare($select);
            $result->bindParam(':usuario', $usuario, PDO::PARAM_STR);
            $result->bindParam(':senha', $senha, PDO::PARAM_STR);
            $result->execute();
            $contar = $result->rowCount();
            if ($contar>0) {
                $usuario = ['usuario'];
                $senha = ['senha'];
                $_SESSION['usuariosceifer'] = $usuario;
                $_SESSION['senhasceifer'] = $senha;

                echo'logado com sucesso! Redirecionando...';
                header("Refresh:2, admin.php");
            }else{
                echo "Login ou Senha incorretos!.";

            }

        }catch(PDOException $e){
            echo $e;
        }
    }
?>  

    <div id="cinza">
        <div class="direita">
            <label>Area Mestre</label>
        </div>
    <div id="formlogin">
        <form method="POST" action="">
            <label><b>Login:</b><label><br><br>
            <input type="text" placeholder="Seu Login" name="Login" width="100%"></input><br><br>
            <label><b>Senha:</b><label><br><br>
            <input type="password" placeholder="Sua Senha do Sistema" name="Senha"></input><br><br>
            <input id="enviarlogin" type="submit" name="botão" value="Entrar">
        <form>
    </div>
    </div>
    

</div>
<?php
    include('footer.php');
?>