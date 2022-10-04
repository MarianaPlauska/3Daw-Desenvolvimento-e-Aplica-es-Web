<?php
    
    include 'login.php';
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tipo = $_POST['tipo'];
    $perfil = $_POST['perfil'];

    $sql = "INSERT INTO usuario (nome, email, tipo, perfil) VALUES ('$nome', '$email', '$tipo', '$perfil')";
    $result = mysqli_query($conn, $sql);

    if ($result) 
    {
        echo "Usuário cadastrado com sucesso!";
    } else 
    {
        echo "Erro ao cadastrar usuário!";
    }

?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <title>Novo usuário</title>
</head>
<body>
    <form action="novousuario.php" method="post">
        <input type="text" name="nome"><br>
        <input type="text" name="email"><br>
        <input type="text" name="tipo"><br>
        <input type="text" name="perfil"><br>
        <input type="submit" value="Cadastrar">
    </form>

</body>
</html>
</body>
</html>
