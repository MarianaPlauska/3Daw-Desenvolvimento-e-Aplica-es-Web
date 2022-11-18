<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "dawacademicomanha";
    $mensagem = "";

    if($_SERVER["REQUEST_METHOD"]=="GET")
    {    
        $conn = new mysqli ($servidor, $user, $pass, $banco);
        $sql="SELECT * FROM `alunos`";
        
        $result=$conn->query($sql);
        $alunos[] = array();
        $x = 0;
       
        While ($linha = $result->fetch_assoc())
        {
            $alunos[$x] = $linha;
            $x++;
        }
   
        if ($result=true)
        {
            $retorno=json_encode($alunos);
    
        } 
        else 
        {
            $retorno=json_encode("DEU RUIM!😭😭");
        }
    }
echo $mensagem;
?>