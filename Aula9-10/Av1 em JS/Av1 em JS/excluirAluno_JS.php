<?php
    include "servidor.php";
    
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "dawacademicomanha";
    $mensagem = "";

    if($_SERVER["REQUEST_METHOD"]=="GET")
    {    
        $mat = $_GET["mat"];
        $conn = new mysqli ($servidor, $usuario, $senha, $banco);

        $sql="DELETE FROM `alunos` WHERE mat = '$mat'";

        $result=$conn->query($sql);

        echo $result;
        echo $sql;

        if ($result=true)
        {
            $mensagem="Deu bom mano!👍";
        } 
        else 
        {
            $mensagem="VIx! Deu ruim!😭😭";
        }
    }
?>