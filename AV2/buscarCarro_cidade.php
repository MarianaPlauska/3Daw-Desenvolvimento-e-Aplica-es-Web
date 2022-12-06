<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "carros";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $cidade = $_POST["cidade"];
        $conn = new mysqli($servidor, $usuario, $senha, $banco);

        $sql = "SELECT * FROM carros WHERE cidade = '$cidade'";
    
        $resultado = mysqli_query($conexao, $sql);

        $resultado = $conn->query($sql);
        $carros[]=array();
        $i = 0;

        if ($resultado->num_rows > 0) 
        {
            while($row = $resultado->fetch_assoc()) 
            {
                $carros[$i] = $row;
                $i++;
            }
        } 
        else 
        {
        echo "0 results";
        }

    $conn->close();
    echo json_encode($carros);

    }
?>