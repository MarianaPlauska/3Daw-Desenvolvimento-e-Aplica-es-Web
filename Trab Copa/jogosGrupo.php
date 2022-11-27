<?php
    //cria a conexão com o banco de dados para carregamento da tabela de jogos por grupo
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "copou";

    $conn = new mysqli ($servidor, $usuario, $senha, $banco);
    $query = "SELECT * FROM `confronto`";

    //verifica se a conexão foi bem sucedida
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    //verifica se o método de requisição é GET
    if($_SERVER["REQUEST_METHOD"]=="GET")
    {    
        //recebe o grupo selecionado
        $grupo = $_GET["grupo"];
        //cria a query para buscar os jogos do grupo selecionado
        $sql="SELECT `nome` FROM `selecao` WHERE `grupo` = '$grupo'";
        //executa a query
        $result = $conn->query($sql );
   
        //cria um vetor para armazenar os jogos
        $vet[] = array();
        //cria um contador para o vetor
        $i = 0;
        //percorre o resultado da query
        While ($linha = $result->fetch_assoc()){
            //percorre o vetor de seleções
            foreach ($linha as $x) {
                //cria a query para buscar os jogos de cada seleção
                $sqlJogo= "SELECT * FROM `confronto` WHERE `selecaoA` = '$x' OR `selecaoB` = '$x'";
                //executa a query
                $resultJogo= $conn->query($sqlJogo);
                //percorre o resultado da query
                while($linha2 = $resultJogo->fetch_assoc()){
                    //adiciona o jogo no vetor
                    $jogos[$i]=$linha2;
                    //incrementa o contador
                    $i++;
                }
            }
        }
        //remove os jogos duplicados
        $jogos=array_unique($jogos, SORT_REGULAR);
        //retorna o vetor de jogos
        echo json_encode(array_values($jogos));
    }
?>