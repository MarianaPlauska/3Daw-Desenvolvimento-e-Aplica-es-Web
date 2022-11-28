<?php
     $servidor = "localhost";
     $usuario = "root";
     $senha = "";
     $banco = "copou";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
    if(!$conexao)
    {
        die("Falha na conexão: " . mysqli_connect_error());
    }
    else
    {
        if($_SERVER["REQUEST_METHOD"]=="GET")
        {    
            $nome = $_GET["nome"];
            $tecnico= $_GET["tecnico"];
            $grupo= $_GET["grupo"];
        
        $sql="INSERT INTO times (nome, tecnico, grupo) VALUES ('$nome', '$tecnico', '$grupo')";

        if(mysqli_query($conexao, $sql))
        {
            echo "Seleção cadastrado com sucesso!";
        }
        else
        {
            echo "Erro: " . $sql . "<br>" . mysqli_error($conexao);
        }
        mysqli_close($conexao);
        }
    }
?>