/* ejercicio1

var numero1 = parseInt(prompt("Digite el primer numero"));
var numero2 = parseInt(prompt("Digite el primer segundo numero"));

var suma = numero1 + numero2;
var resta = numero1 - numero2;

console.log(suma);
console.log(resta);

*/


/* ejercicio2

//Entrada

var numero1 = parseInt(prompt("Digite el primer numero"));
var numero2 = parseInt(prompt("Digite el primer numero"));

// Proceso y salida
alert(`las operaciones basicas son:
1.Suma
2.Resta
3.multiplicacion
4.Division`);

var operacion = parseInt( prompt("Digite la operacion que desea hacer "));

//Suma

if (operacion == 1) {
    var suma = numero1 + numero2;
    console.log(suma);
} 
   
if (operacion == 2) {
    var resta = numero1 - numero2;
    console.log(resta);
}
if (operacion == 3) {
    var multiplicacion = numero1 * numero2;
    console.log(multiplicacion);
}
if (operacion == 4) {
    var division = numero1 / numero2;
    console.log(division);
}

// Salida
console.log(suma);
console.log(resta);
console.log(multiplicacion);
console.log(division);
*/

//---Ejercicio 4---

/* Entrada

var ano = parseInt(prompt("Digite el año de Nacimiento:"));


var edad = 2019 - ano
    console.log(edad);


*/
// Ejercicio 3
// Hacer un programa que digite el nombre de una persona, las horas trabajadas y el pago por hora,y mostrar cuyanto va a ganar por las horas trabajadas.


var empleado = {
    nombre: prompt("Digite su Nombre empleado"),
    horas: parseInt(prompt("Digite las horas trabajadas")),
    pagoPorhoras: parserInt(prompt("Digite el pago horas trabajadas")),
}
   document.write(`<h2>${empleado.nombre}, horas trabajadas:${empleado.horas},total a cobrar ${empleado.horas*empleado.pagoPorhoras} </h2>`);








/* ejercicio 5

var ano = parseInt(prompt("Digite numero si es  par"));

if (numero % 2 == 0)
    console.log("El número es par");
else
    console.log("El número es impar");
   
    */

    // positivo y negativo

    /* Hacer un programa que diga si un numero digitado es positivo o negativo

var numero = parseInt(prompt("Digite el numero"));
if (numero >= 0) {
    console.log("Es positivo");
}
else if ( numero === 0) {
    console.log("El numero es 0");
}
else {
    console.log("es negativo");

}
*/
  

