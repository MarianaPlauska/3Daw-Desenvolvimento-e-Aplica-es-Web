<?php
    //listar uma disciplina no sistema cadastrado

    $sql="SELECT * FROM disciplina WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    $pos = mysqli_fetch_assoc($result);

    echo "Nome: " . $row['nome'] . "<br>";
    echo "Id: " . $row['id'] . "<br>";
    echo "Periodo: " . $row['periodo'] . "<br>";
    echo "IdPreRequisito: " . $row['idPreRequisito'] . "<br>";
    echo "Creditos: " . $row['creditos'] . "<br>";
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <title>Listar uma disciplina</title>
</head>
<body>
<table>
        <tr>
            <th>Disciplina</th>
        </tr>
        <?php
            if($result->num_pos > 0)
            {
                while($pos = $result->fetch_assoc())
                {
                    echo "<tr><td>".$pos["Disciplina"];
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