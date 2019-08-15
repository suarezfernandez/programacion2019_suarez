// mi cajero
alert("Bienvenidoa Tu BancoNoruego.Seguridad al 100%");
var cliente = {
    tarjeta: 170580, //Una tarjeta de 5 digitos
    nombre: "Suárez",
    apellido:"fernandez",
    edad:37,
    balance: 250000,
    pin: 1111,
    tipoCuenta: "debito"
    
}
// 0. Seleccionar idioma.
var idioma = prompt("Seleccione su idioma");

// 1.Introducir targeta.
var tarjeta = prompt("Introduzca la  tarjeta por favor.");

// Validar que la longitud de digitos sea 12
// Mostrar un mensaje en caso que la longitud sea mayor que 12

while (tarjeta.length !== 6 ) {
    tarjeta = prompt("Introduzca una tarjeta de 6 digitos");

}
// validar que la targeta indicada sea 4
while(tarjeta !=cliente.tarjeta) {
   pin = prompt("tarjeta no encontrada.Intente de nuevo");
}
// 2.Digitar pin.
var pin = prompt("Digitar su pin.");
while(pin.length !== 4) {
    pin("pin invalido");
}

// 3.Mostrar opciones.

var opcion = prompt(`opciones a realizar
1.Retiro
2.Avance
3.revisar balance
4.Deposito.`);
// validar que el usuario solo pueda digitar las opcion

while (opcion > 4 || opcion < 1) {
    opcion = prompt(`opcion validar.Elija opcion a realizar:
    1.Retiro
    2.Avance
    3.Chequear balance
    4.Deposito`);
}

// 4.Seleccionar tipo de cuenta.
 var tipoCuenta = prompt(`Seleccione el tipo de cuenta
1.Cuenta de Ahorro.
2.Tarjeta de Credito.
3.Cuenta de Corriente.`);

// 5.Mostrar opciones de monto.
var opcionMonto = prompt(`Elija el monto que quiere
1.200$.
2.500$.
3.1000$.
4.2000$.
5.2500$.
6.3000$.
7.4000$.
8.Otros`);

// 6.Seleccionar monto.

// 7.Mostrar opcion de recibo.
var quiereComprobante = confirm("¿Desea un Comprobante?");

// 8.Elegir si ó no del comprovante del recibo.

if (quiereComprobante);
    //Imprimir recibo
    alert("Imprimiendo recibo.");
    // si no se hace nada los contrario, podemos eliminar el else
    
  
// 9.mostrar mensaje "retire su dinero" y el dinero sale.
alert("Retirar Dinero");


// 10. mostrar mensaje " retire su targeta" y el usuario retira la targeta.
alert(`"Retire su Tarjeta"`);

