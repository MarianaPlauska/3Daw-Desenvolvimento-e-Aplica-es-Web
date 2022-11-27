<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "copou";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') 
    {
        $selecao = $_POST['id'];
        $sql = "SELECT * FROM jogos WHERE id = $selecao";
        $resultado = mysqli_query($conexao, $sql);
        $jogo = mysqli_fetch_assoc($resultado);

        $sql = "SELECT * FROM confronto WHERE selecao1 = $selecao OR selecao2 = $selecao";

        $resultado = mysqli_query($conexao, $sql);
        $jogos[]= array();

        $i=0;
        while($jogo = mysqli_fetch_assoc($resultado))
        {
            $jogos[$i] = $jogo;
            $i++;
        }

        if ($resultado==false) 
        {
            echo "Erro ao executar a consulta";
        }
        else
        {
            echo json_encode($jogos);
        }
    }
    echo $resultado;
?>