// relaciones

var carro = {
    tieneBateria: true,
    tengoLlave: true,
}

if (carro.tieneBateria && carro.tengoLlave) {
    console.log("El carro va a encender");
} else {
    console.log("No enciende");
}

// Poder comer
var mesa = {
    hayCuchara:true,
    hayTenedor:true,
}
if (mesa.hayCuchara || mesa.hayTenedor) {
    console.log("puedo comer :D");
}
else {
    Console.log("No puedo comer :(");
}