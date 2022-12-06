<?php
    include_once("servidor.php");

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "dawacademicomanha";

    if($_SERVER["REQUEST_METHOD"]=="GET")
    {   
        $id = $_GET["id"]; 
        $conn = new mysqli ($servidor, $user, $pass, $banco);
        $sql="SELECT * FROM `disciplina` WHERE `id` = $id";
        
        $result=$conn->query($sql);
        
        $discp = $result->fetch_assoc();

        if ($result=true)
        {
            $retorno=json_encode($discp);

        } 
        else 
        {
            $retorno=json_encode("vixx!😭😭");
        }
    }
echo $retorno;
?>