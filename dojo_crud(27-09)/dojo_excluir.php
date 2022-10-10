<?php
//excluir os dados do aluno do banco de dados

include 'login.php';

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $nome  = $_POST["nome"];
    $mat   = $_POST["matricula"];
    
    $conn  = new mysqli($servidor, $usuario, $senha, $bancodedados);

    if($conn ->connect_error)
    {
        die("Conexao com banco de dados falhou.");
    }
    
    $sql    = "DELETE FROM `alunosdojo` WHERE `Nome`='$nome' AND `Matricula`='$mat'";
    
    $result = $conn->query($sql);
    echo "result?: ". $result;
    echo $sql;
    echo $result;
    echo "Aluno excluido";
    echo "<br<a href='index.php'>Voltar</a>";
}
else
{
    $nome = "";
    $mat  = "";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Excluir aluno</title>
</head>
<body>
    <header>
        <h2 style="color: yellow;">Excluindo aluno</h2>
    </header>

    <form action="dojo_excluir.php" method="POST">
        <fieldset>
            <label for="nome">Nome do Aluno</label><br>
            <input type="text" name="nome"><br>

            <label for="matricula">Matricula do Aluno</label><br>
            <input type="text" name="matricula"><br>

            <input type="submit" value="Excluir">
        </fieldset>
    </form>

    <a href="index.php">Voltar</a>
</body>
</html>