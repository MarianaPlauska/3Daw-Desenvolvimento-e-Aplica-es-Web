<?php
    include "servidor.php";
    
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "dawacademicomanha";
    $mensagem = "";

    if($_SERVER["REQUEST_METHOD"]=="GET")
    {    
        $nome = $_GET["nome"];
        $mat= $_GET["mat"];
        $email= $_GET["email"];
        $cpf= $_GET["cpf"];

        $conn = new mysqli ($servidor, $usario, $senha, $banco);

        $sql="INSERT INTO `alunos`(`nome`, `mat`, `email`) VALUES ('$nome', '$mat', '$email')";

        $result=$conn->query($sql);

        echo $result;
        echo $sql;

        if ($result=true)
        {
            $mensagem="Deu bom mano!👍";
        } else 
        {
            $mensagem="VIx! Deu ruim!😭😭";
        }
    }
echo $mensagem;
?>