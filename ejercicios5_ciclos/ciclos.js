/* Ciclos
for(var x=0; x<3; x++){
    alert(x);
    prompt("Digite numero positivo");
}
*/
/*
for (var veces=1; veces<=15; veces++) {

    if(veces == 5){
   continue;
}

document.write(`<p>Soy un parrafo ${veces}</p>`);
}
*/
/*
//2
var edad = parseInt(prompt("Digite su edad"));

while(edad > 18 || edad > 25) {
    edad = parseInt(prompt("Digita un numero entre 18 - 25"));

}
alert(`la edad digitada es ${edad}`);
*/
/* hacer un programa que el usuario no pueda ingesar numeros entre 70 y 99

var edad = parseInt(prompt("Digite su edad"));
while(edad > 70 && edad < 99) {
edad = parseInt(prompt("usted no tiene la edad requerida"));

}
alert(`la edad digitada es ${ edad}`);
*/
//3. hacer un programa que se digite un PIN de 4 digitos.
/* validar que el pin digititado tenga 4 digitos.

var pin = prompt("Digite su pin");

alert(pin,length);

while(pin.length !== 4 ){
    pin = prompt("El PIN digitado tiene mas de 4 digitos intente de nuevo");

}
*/
/* Hacer un programa que el usurio deba digitar un monto valido para abrir su cuenta de banco
// Este monto es de 600 pesos.

var monto = parseInt(prompt("Digite el Monto"));


while (monto < 600) {
    monto = parseInt(prompt("Digite un monto valido"));
}
alert("bienvenido a su cuenta");
*/
/* Hacer un programa que digite su edad validad para entrar a INFOTEP
var edad = parseInt(prompt("Digite su edad"));
while(edad < 16) {
    edad = parseInt(prompt("No tienes edad para inscribirte"));
}
alert("Bienvenido a INFOTEP");
*/
/* Hacer un programa para validar una contraseña.Debe tener como minimo 8 carácteres.
var contraseña = prompt("Digite una contraseña que tenga como minimo 8 caracteres");
while(contraseña.length < 8) {
    contraseña = prompt("Digite una contraseña que tenga un minimo de 8 caracteres");
 }
    alert("La contraseña es valida");
*/
/* hacer un programa que solo digite  numeros negativos( while.)

var numero = parseInt(prompt("Digite numero"));
while(numero >= 0) {
    numero = parseInt(prompt("Digite numero"));
}
*/
/* hacer un programa que solo digite  numeros negativos( do while.)
do {
    var numero = parseInt(prompt("Digite un numero"));

} while(numero > 0);

*/
/* 10. Hacer un programa que se digite solo numeros positivos
//(Usando do...while);
do { 
var numero = parseInt(prompt("Digite numero positivo"));
}while (numero < 0); 
 */   
/* Hacer un programa que se digite solo numeros positivos y par 
//(usando do....while);

do {
    var numero = parseInt(prompt("Digite un numero positivo y par"));

} while(numero > 0 && numero % 2 === 0);

do {
    var numero = parseInt(prompt("Digite un numero positivo y par"));

} while( numero < 0 || numero % 2 === 1);
*/
/* validar que 2 contraseñas digitadas coincidan.

do {
    var contraseña1 = prompt("Digite contraseña");
    var contraseña2 = prompt("Digite la confirmacion de la contraseña");

}while(!(contraseña1 === contraseña2) );
*/
