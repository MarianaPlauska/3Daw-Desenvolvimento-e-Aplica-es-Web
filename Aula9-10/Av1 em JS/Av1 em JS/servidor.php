<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bancode = "dawacademicomanha";

    $listar = false;
    $incluir = false;
    $alterar = false;
    $excluir = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $conn = new mysqli($servidor, $usuario, $senha, $bancodeDados);

        if ($conn->connect_error) 
        {
            die("Erro na conexão: " . $conn->connect_error);
        }
    }

?>