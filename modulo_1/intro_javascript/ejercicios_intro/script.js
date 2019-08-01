alert("Welcome chinas");

// Operaciones matematicas
//Declarar variables sin valor, colocamos var y el nombre de la variable
var suma;
var resta;
var multi;
var divi;

// Imprimir variables sin valor
// Cuando una variable no tiene valor, Javascript  nos muestra undefined (No definido)
console.log(suma);
console.log(resta);
console.log(multi);
console.log(divi);

// Asignarle un valor a las variables usando los operadores matematicos
// Nota: Cuando ya declaramos variables, no es necesario volver a declararlas para asignarle un valor
// var suma = 1 + 1; -Esto no lo hacemos, porque ya esta declarada

//Que es declarar una variable:
console.log(potencia);

//Esto nos dara el siguiente error:
// unclaught RefenceError: potencia is not defined
//Para dolucionarlo, declaramos la variable

    var potencia;

    /* Operaciones sin variables */
    console.log("---OPERACIONES SIN VARIABLES---");
    console.log(1+1); // Suma 
    console.log(10 - 3); // Resta
    console.log(5 * 5); // Multiplicacion
    console.log(10 / 2); // Division

    console.log(suma);
    console.log(resta);
    console.log(multi);
    console.log(divi);

    /*INGRESADO POR EL USUARIO */
    prompt("Digita tu nombre");
    prompt("Digita tu ciudad");
    prompt("Digita tu edad");

    // Ingresado y almacenado

    var nombre;
    var ciudad;
    var edad;

    alert("Ahora vamos a perdirte tus datos. Es 100% seguro");

    nombre = prompt("Digita tu nombre");
    ciudad = prompt("Digita tu ciudad");
    edad = prompt("Digita tu edad");

    console.log(nombre);
    console.log(ciudad);
    console.log(edad);

    alert(nombre);
    alert(ciudad);
    alert(edad);

    document.write(nombre);
    document.write(ciudad);
    document.write(edad);

