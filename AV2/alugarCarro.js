//alugar o carro

const alugarCarro = (carros, placa) => {
    const carro = buscarCarro(carros, placa);
    carro.disponivel = false;
    return carro;
}
