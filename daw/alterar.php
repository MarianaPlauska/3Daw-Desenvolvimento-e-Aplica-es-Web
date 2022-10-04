<?php
    include 'conexao.php';
    $ehPost=false;

    $nome = $_POST["nome"];
    $periodo = $_POST["periodo"];
    $idReq = $_POST["idReq"];
    $credito = $_POST["credito"];
    
    $sqlAlt="UPDATE `disciplina` SET
    `nome`='{$nome}',
    `periodo`='{$periodo}',
    `idReq`='{$idReq}',
    `credito`='{$credito}'

    WHERE nome=".$_REQUEST["nome"];
        

    if (!$conn->query($sqlAlt)) 
    {
        echo ("Erro: " . $conn->error);
    } 
    else 
    {
        echo "";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="alterar.php" class="row g-3" method="POST">
    <div class="mb-3">
        <h1>Alterar</h1>
        

        <label for="nome" class="form-label">Disciplina</label>
        <input type="text" name="nome" placeholder="Disciplina a ser alterada" class="form-control"><br>

        <label for="nome" class="form-label">Disciplina:</label>
        <input type="text" class="form-control" name="nome" placeholder="Nova disciplina"><br>

        <label for="periodo" class="form-label">Período:</label>
        <input type="periodo" class="form-control" name="periodo" placeholder="Novo período"><br>
        
        <label for="idpre" class="form-label">Id do Pré requisito:</label>
        <input type="idpre" class="form-control" name="idpre" placeholder="Nova id"><br>
        
        <label for="credito" class="form-label">Credito:</label>
        <input type="credito" class="form-control" name="credito" placeholder="Novo credito"><br>
        
        <input name="botaoAlt" class="botao" type="submit" value="Alterar">
        <?php 
            if ($ehPost == true) 
            {
                echo "Disciplina Alterada com sucesso.";
            } 
        ?>
        </form>
        </div>

        <a href="index.php">Voltar</a>

</body>
</html>