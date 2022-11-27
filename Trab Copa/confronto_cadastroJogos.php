<?php
    //pegar dados de confrontos.html formulário
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "copou";

    $conn = new mysqli ($servidor, $usuario, $senha, $banco);
    $sql = "SELECT * FROM `confronto`";
    $result = $conn->query($sql);

    if ($_SERVER["REQUEST_METHOD"]=="GET")
    {
        $selecao1 = $_GET["selecao1"];
        $selecao2 = $_GET["selecao2"];
        $gols1 = $_GET["gols1"];
        $gols2 = $_GET["gols2"];
        $data = $_GET["data"];
        $hora = $_GET["hora"];
        $local = $_GET["local"];

        $sql = "INSERT INTO `confronto`(`selecao1`, `selecao2`, `gols1`, `gols2`, `data`, `hora`, `local`)
        VALUES ('$selecao1', '$selecao2', '$gols1', '$gols2', '$data', '$hora', '$local')";
        $result = $conn->query($sql);

        if ($gols1 > $gols2)
        {
            $sql = "UPDATE `selecao` SET `pontos` = `pontos`+3 WHERE `nome` = '$selecao1'";
            $result = $conn->query($sql);
        }
        else
        {
            if ($gols2 > $gols1)
            {
                $sql = "UPDATE `selecao` SET `pontos` = `pontos`+3 WHERE `nome` = '$selecao2'";
                $result = $conn->query($sql);
            }
            else
            {
                $sql = "UPDATE `selecao` SET `pontos` = `pontos`+1 WHERE `nome` = '$selecao1' or `nome` = '$selecao2'";
                $result = $conn->query($sql);
            }
        }
    }

    $sql = "SELECT * FROM `confronto`";
    $result = $conn->query($sql);

    if ($result->num_rows > 0)
    {
        while ($row = $result->fetch_assoc())
        {
            echo "Time 1: " . $row["selecao1"] . " - Gols: " . $row["gols1"] . "<br>";
            echo "Time 2: " . $row["selecao2"] . " - Gols: " . $row["gols2"] . "<br>";
            echo "Data: " . $row["data"] . "<br>";
            echo "Hora: " . $row["hora"] . "<br>";
            echo "Local: " . $row["local"] . "<br><br>";
        }
    }
    else
    {
        echo "Nenhum jogo cadastrado";
    }

    $conn->close();
    

?>