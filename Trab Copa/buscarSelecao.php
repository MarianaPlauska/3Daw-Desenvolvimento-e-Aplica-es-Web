<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "copou";

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
       $nome = $_GET["nome"];
       $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
         if(!$conexao){
              die("Falha na conexão: " . mysqli_connect_error());
         }
            $sql = "SELECT * FROM selecoes WHERE selecao = '$nome'";
            $resultado = mysqli_query($conexao, $sql);
            if(mysqli_num_rows($resultado) > 0)
            {
                while($linha = mysqli_fetch_assoc($resultado))
                {
                    echo "Seleção: " . $linha["selecao"] . "<br>";
                    echo "Técnico: " . $linha["tecnico"] . "<br>";
                    echo "Grupo: " . $linha["grupo"] . "<br>";
                }
            }
            else
            {
                echo "Nenhum resultado encontrado";
            }
            mysqli_close($conexao);
    }
?>