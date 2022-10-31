<?php

$ehGET = true;
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bancodeDados = "3daw_acad_manha";

if ($_SERVER["REQUEST_METHOD"] == "GET")
{
    
    $nome = $_GET["nome"];
    $matricula = $_GET["matricula"];
    $email = $_GET["email"];
    $cpf = $_GET["cpf"];


    $conn = new mysqli($servidor, $usuario, $senha, $bancodeDados);
    if ($conn->connect_error)
    {
        die ("Conexão não funcionou!");
    }
    
    $sql = "INSERT into `alunos` ( `nome`, `matricula`, `email`, `cpf`) VALUES ('$nome', '$matricula', '$email', '$cpf')";

    echo $sql;
    $conn->query($sql);
    
}
else
{
    $ehGET = false;
}

?>