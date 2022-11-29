<?php
     $servidor = "localhost";
     $usuario = "root";
     $senha= "";
     $banco = "carro";

     if($_SERVER["REQUEST_METHOD"]=="GET")
     {    
            $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
            $sql = "SELECT * FROM carro";
            $resultado = mysqli_query($conexao, $sql);
            $carros = array();
            
            while($linha = mysqli_fetch_assoc($resultado))
            {
                 $carros[] = $linha;
            }
            echo json_encode($carros);
         }
         else
         {
            $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
            $sql = "INSERT INTO carro (modelo, marca, ano, cor, placa, valor) VALUES ('".$_POST["modelo"]."', '".$_POST["marca"]."', '".$_POST["ano"]."', '".$_POST["cor"]."', '".$_POST["placa"]."', '".$_POST["valor"]."')";
            $resultado = mysqli_query($conexao, $sql);
            echo json_encode($resultado);
     }
 ?>
