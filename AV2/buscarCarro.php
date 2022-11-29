<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "carros";
   
    //verificar se o carro existe na cidade
    $carro = $_POST['carro'];
    $cidade = $_POST['cidade'];
    $banco = $_POST['banco'];
    $sql = "SELECT * FROM carros WHERE cidade = '$cidade' AND carro = '$carro'";
    $result = mysqli_query($conexao, $sql);
    $row = mysqli_num_rows($result);

    if($row > 0)
    {
        echo "Carro encontrado";
    }
    else
    {
        echo "Carro não encontrado";
    }

?>