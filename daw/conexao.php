
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "teste";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) 
    {
        die("Falha na conexão: " . mysqli_connect_error());
    }
    function mensagem ($texto, $tipo)
    {
        echo "<div class='alert alert-$tipo' role='alert'>$texto</div>";
    }
?>
