<?php
    include "servidor.php";
    $ehPost = true;

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $nome = $_POST ["nome"];
        $mat = $_POST ["mat"];
        $email= $_POST["email"];
        $senha = $_POST ["senha"];
        $tipo= $_POST["tipo"];
        $cpf= $_POST["cpf"];

    if ($nome == null  || $email== null || $senha == null || $tipo == null) 
    {
        echo "Erro <br>";
        
    } 
    elseif (!file_exists("Usuario.txt")) 
    {
        $arq = fopen("atvd.txt", "w");
        $cabecalho = "nome;mat;email;senha;tipo;cpf \n";

        fwrite($arq, $cabecalho);

        $row = ($nome.";".$mat. ";" .$email.";".$senha.";".$tipo. ";" .$cpf. "\n");

        fwrite($arq, $row);

        fclose($arq);
    } 
    else 
    {
        $arq = fopen("atvd.txt", "a");

        $row = ($nome.";".$mat. ";" .$email.";".$senha.";".$tipo. ";" .$cpf. "\n");

        fwrite($arq, $row);

        fclose($arq);
    }


    $arq = fopen('atvd.txt', 'r'); 

    while (!feof($arq)) 
    {
        $linha = fgets($arq);
        $linha = explode(";", $linha);
        $linha = implode(";", $linha);
        echo $linha;
    }
    
    } 
    else 
    {
        $ehPost = false;
    }

?>