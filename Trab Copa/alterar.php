<?php
    $servidor = "localhost";
    $user = "root";
    $senha = "";
    $banco = "copou";
    
    //pegar as informações do formulário em cadastro.html e alterar os dados no banco de dados
    $selecaoNova = $_POST['selecaoNova'];
    $tecnicoNovo = $_POST['tecnicoNovo'];
    $grupoNovo = $_POST['grupoNovo'];


    //conectar com o banco de dados
    $conexao = mysqli_connect($servidor, $user, $senha, $banco);
    if(!$conexao){
        die("Falha na conexão: " . mysqli_connect_error());
    }
    //alterar os dados no banco de dados
    $sql = "UPDATE selecoes SET tecnico = '$tecnicoNovo', grupo = '$grupoNovo' WHERE selecao = '$selecaoNova'";
    
    if(mysqli_query($conexao, $sql))
    {
        echo "Dados alterados com sucesso!";
    }
    else
    {
        echo "Erro ao alterar os dados: " . mysqli_error($conexao);
    }
    
    mysqli_close($conexao);
    echo "<br><a href='index.html'>Voltar</a>";



?>