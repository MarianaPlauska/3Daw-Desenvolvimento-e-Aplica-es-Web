<?php
    //validar login do usuario
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
    $result = mysqli_query($conexao, $sql);
    $row = mysqli_num_rows($result);

    if($row > 0)
    {
        echo "Login efetuado com sucesso";
    }
    else
    {
        echo "Login ou senha incorretos";
    }

?>