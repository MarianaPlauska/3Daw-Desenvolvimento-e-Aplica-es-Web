<?php
    /*Criar as funcionalidades de Criar disciplina, alterar disciplina, listar todas disciplinas, listar uma disciplina  e excluir disciplina.
    A disciplina terá nome, id da disciplina, periodo, idPreRequisito e creditos.*/
    //include 'index.php';
    include 'conexao.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $conn = new mysqli($servidor, $usuario, $senha, $bancodeDados);
        if ($conn->connect_error) 
        {
            die("Falha na conexão com o banco de dados.");
        }
        else
        {
            $nome = $_POST['nome'];
            $id = $_POST['id'];
            $periodo = $_POST['periodo'];
            $idPreRequisito = $_POST['idPreRequisito'];
            $creditos = $_POST['creditos'];

            $sql = "INSERT INTO disciplina (nome, id, periodo, idPreRequisito, creditos) VALUES ('$nome', '$id', '$periodo', '$idPreRequisito', '$creditos')";
            $result = mysqli_query($conn, $sql);

            if ($result) 
            {
                echo "Disciplina cadastrada com sucesso!";
            } 
            else 
            {
                echo "Erro ao cadastrar disciplina!";
            }   
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastro de disciplinas</h1>
    <div class="container">
        <div class="row">
        <form action="cadastro.php" method="post">
        
        <fieldset>
            
            <label for="nome">Nome da disciplina</label><br>
            <input type="text" name="nome"><br>

            <label for="matricula">Pré requisitos</label><br>
            <input type="text" name="preRequisitos"><br>

            <label for="email">Período</label><br>
            <input type="text" name="periodo"><br>
            
            <input type="submit" value="Enviar">

        </fieldset>
    </form>

           <a href="index.php" class="btn btn-primary">Voltar</a>
        </div>
    </div>
</body>
</html>