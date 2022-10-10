<?php
//alterar os dados do banco de dados

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
    
    
    $sql    = "UPDATE `alunosdojo` SET `Nome`='$nome',`Matricula`='$mat'";
    
    $result = $conn->query($sql);
    echo "result?: ". $result;
    echo $sql;
    echo $result;
    echo "Aluno alterado";
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
    <title>Alterar Dados</title>
</head>
<body>
    <form action="dojo_alterar.php" method="POST">
        <fieldset>
            <label for="nome">Nome do Aluno</label><br>
            <input type="text" name="nome"><br>

            <label for="matricula">Matricula do Aluno</label><br>
            <input type="text" name="matricula"><br>

            <input type="submit" value="Alterar">
        </fieldset>
    </form>

    <a href="index.php">Voltar</a>
</body>
</html>
