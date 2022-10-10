<?php
    //login inicial para conexão com o banco

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bancodedados = "Academico_daw";

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $conn = new mysqli($servidor, $usuario, $senha, $bancodedados);
        
        if($conn->connect_error)
        {
            die("Deu ruim mano.");
        }
    }
?>