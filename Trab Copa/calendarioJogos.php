<?php
    $servidor= "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "copou";

    if ($_SERVER["REQUEST_METHOD"] == "GET") 
    {
        $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
        if (!$conexao) 
        {
            die("Falha na conexão: " . mysqli_connect_error());
        }
        $sql = "SELECT * FROM jogos";
        $resultado = mysqli_query($conexao, $sql);

        if (mysqli_num_rows($resultado) > 0) 
        {
            $i=0;

            while($linha = mysqli_fetch_assoc($resultado)) 
            {
                $jogos[$i] = $linha;
                $i++;
            }
            if ($resultado) 
            {
                echo json_encode($jogos);
            } 
            else 
            {
                echo "Erro: " . $sql . "<br>" . mysqli_error($conexao);
            }
        } 

        mysqli_close($conexao);

    }




?>