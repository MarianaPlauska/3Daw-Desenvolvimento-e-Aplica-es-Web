<?php
     $servidor = "localhost";
     $usuário = "root";
     $senha = "";
     $banco = "carro";
     $retorno = "";
    
    if($_SERVER["REQUEST_METHOD"]=="GET")
    {    
        $conn = new mysqli ($servidor, $usuário, $senha, $banco);
        $sql="SELECT * FROM `carros`";
        
        $result=$conn->query($sql);
        $alugar[] = array();
        
        $i = 0;
        
        While ($row = $result->fetch_assoc()){
            $alugar[$i] = $row;
            $i++;
        }

        if ($result=true)
        {
            $retorno=json_encode($alugar);

        } 
        else 
        {
            $retorno=json_encode("Vixx! deu ruim");
        }
    }
echo $retorno;
?>