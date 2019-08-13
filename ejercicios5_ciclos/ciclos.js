/* Ciclos
for(var x=0; x<3; x++){
    alert(x);
    prompt("Digite numero positivo");
}
*/

for (var veces=1; veces<=15; veces++) {

    if(veces == 5){
   continue;
}

document.write(`<p>Soy un parrafo ${veces}</p>`);
}