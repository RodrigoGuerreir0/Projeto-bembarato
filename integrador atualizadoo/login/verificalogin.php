<?php
    $usuario = $_POST['usuario'];
    $senha   = $_POST['senha'];
    function validarLogin($usuario, $senha){
        $conexao = new PDO("mysql:host=localhost;dbname=login_caixa", "root", "");
    
        $script = "SELECT * FROM usuario WHERE usuario ='" . $usuario . "' AND senha ='" . $senha . "' ";

    
        $resultado = $conexao->query($script);
        $lista = $resultado->fetchAll();
    
        if(empty($lista)){
            header('Location:login.php?mensagem=1');
        } else {
            header('Location:../caixanovo/caixa.php');
        }
    }
    
    validarLogin($usuario, $senha);
    ?>