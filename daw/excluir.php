<?php
    //criar funcionalidade para excluir as disciplinas

    //include 'index.php';

    $id = $_POST['id'];

    $sql = "DELETE FROM disciplina WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    if ($result) 
    {
        echo "Disciplina excluida com sucesso!";
    } else 
    {
        echo "Erro ao excluir disciplina!";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <title>Excluir</title>
</head>
<body>
<header>
    <h2 style="color: red;">Excluindo disciplina</h2>
</header>

    <form action="excluir.php" method="POST">
        <fieldset>
            <label for="nome">Nome da disciplina</label><br>
            <input type="text" name="nome"><br>

            <label for="matricula">Id da disciplina</label><br>
            <input type="text" name="disciplina"><br>

            <input type="submit" value="Excluir">
        </fieldset>
    </form>

</body>
</html>