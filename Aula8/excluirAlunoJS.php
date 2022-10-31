<?php
    //excluir os dados do aluno do banco de dados com javascript
    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "dawacademicomanha";
    $mensagem = "";

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $nome  = $_POST["nome"];
        $mat   = $_POST["matricula"];
        $email= $_GET["email"];
        $cpf= $_GET["cpf"];

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
echo $mensagem;
?>
