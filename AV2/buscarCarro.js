//função para buscar o carro e validar se ele existe

const buscarCarro = (carros, placa) => {
    const carro = carros.find(carro => carro.placa === placa);
    if (!carro) {
        throw new Error('Carro não encontrado');
    }
    return carro;
}


