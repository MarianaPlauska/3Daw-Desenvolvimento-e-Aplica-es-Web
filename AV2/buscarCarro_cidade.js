//buscar o carro por cidade
function buscarCarro_cidade() {
    let cidade = document.getElementById("cidade").value;
    let xhttp = new XMLHttpRequest();
    
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) 
        {
            let obj = JSON.parse(this.responseText);
            let x=0;

            for (x=0; x<obj.length; x++)
            {
                if (cidade == obj[x].cidade)
                {
                    document.getElementById("resultado").innerHTML = "Carro encontrado: " + obj[x].nome;
                    break;
                }
                else
                {
                    document.getElementById("resultado").innerHTML = "Carro não encontrado";
                }
            }
        }
    };
    xhttp.open("GET", "carros.json", true);
    xhttp.send();
}

function criarTabela(linha){
    let tabela = document.getElementById("tabela");
    let tr = document.createElement("tr");
    
    let marca = document.createElement("td");
    textnode = document.createTextNode(linha.marca);
    marca.appendChild(textnode);
    tr.appendChild(marca);

    let modelo = document.createElement("td");
    textnode = document.createTextNode(linha.modelo);
    modelo.appendChild(textnode);
    tr.appendChild(modelo);

    let ano = document.createElement("td");
    textnode = document.createTextNode(linha.ano);
    ano.appendChild(textnode);
    tr.appendChild(ano);

    let cor = document.createElement("td");
    textnode = document.createTextNode(linha.cor);
    cor.appendChild(textnode);
    tr.appendChild(cor);

    let cidade = document.createElement("td");
    textnode = document.createTextNode(linha.cidade);
    cidade.appendChild(textnode);
    tr.appendChild(cidade);

    tabela.appendChild(tr);

    let disponivel = document.createElement("td");
    
    if (linha.disponivel == true)
    {
        textnode = document.createTextNode("Sim");
    }
    else
    {
        textnode = document.createTextNode("Não");
    }
    disponivel.appendChild(textnode);
    tr.appendChild(disponivel);

    tabela.appendChild(tr);

    
}