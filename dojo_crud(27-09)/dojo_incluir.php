<?php
    
    include 'login.php';

    if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $nome  = $_POST["nome"];
            $mat   = $_POST["matricula"];
            $email = $_POST["email"];
            
            $conn  = new mysqli($servidor, $usuario, $senha, $bancodedados);

            if($conn ->connect_error)
            {
                die("Conexao com banco de dados falhou.");
            }
            
            
            $sql    = "INSERT INTO `alunosdojo`(`Id`, `Nome`, `Matricula`, `Email`) VALUES (NULL, '$nome', '$mat', '$email')";
            
            $result = $conn->query($sql);
            echo "result?: ". $result;
        }
        else
        {
            $nome = "";
            $mat  = "";
        }
        echo "Aluno incluido";
    ?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>

<body>
    <header>
    <h1>Registrando</h1>
    </header>

    <form action="Registrar.php" method="post">
        
        <fieldset>
            
            <label for="nome">Nome do Aluno</label><br>
            <input type="text" name="nome"><br>

            <label for="matricula">Matricula do Aluno</label><br>
            <input type="text" name="matricula"><br>

            <label for="email">Email do Aluno</label><br>
            <input type="text" name="email"><br>
            
            <input type="submit" value="Enviar">

        </fieldset>
    </form>

    <a href="MenuDojo.php">Retornar</a>
    


</body>
</html>