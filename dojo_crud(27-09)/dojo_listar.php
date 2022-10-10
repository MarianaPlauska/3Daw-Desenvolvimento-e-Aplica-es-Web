<?php
    //listar os dados do banco de dados

    include 'login.php';

    $conn = new mysqli($servidor, $usuario, $senha, $bancodedados);
    $sql = "SELECT * FROM `alunosdojo`";
    $result = $conn->query($sql);
    $pos = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista de dados</title>
</head>
<body>
    <header>
        <h3 style="color: yellow;">Lista:</h3>
    </header>

    <table>
        <tr>
            <th>Nome</th>
            <th>Matricula</th>
        </tr>
        <?php
            if($result->num_pos > 0)
            {
                while($pos = $result->fetch_assoc())
                {
                    echo "<tr><td>".$pos["Nome"]."</td><td>".$pos["Matricula"]."</td></tr>";
                }
            }
            else
            {
                echo "0 resultados";
            }
        ?>
    </table>

    <a href="index.php">Voltar</a>
</body>
</html>