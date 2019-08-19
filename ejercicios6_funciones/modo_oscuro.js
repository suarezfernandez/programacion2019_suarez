// Obtener los elementos
var h3 = document.querySelector("h3");
var p = document.querySelector("p");
var a = document.querySelector("a");
var hr = document.querySelector("hr");
var button = document.querySelector("button");
var body = document.querySelector("body");
var buttonClaro = document.querySelector("button.claro");
var buttonModo = document.querySelector("button.modo");

function intercambiarModo() {
   if (modoOscuroActivado){
       modoClaro()
   }else {
       modoOscuro();

   }
}

function modoOscuro() {
    h3.style.color = "white";
    p.style.color = "white";
    a.style.color = "white";
    hr.style.borderColor = "white";
    button.style.backgroundColor = "lightblue";
   

    body.style.backgroundColor = "#353535";
    
    modoOscuroActivado = true;
    buttonModo.textContent = "Cambiar a modo Claro";
}





function modoClaro() {
    h3.style.color = "black";
    p.style.color = "black";
    a.style.color = "red";
    hr.style.borderColor = "blue";
    button.style.backgroundColor = "black";
    button.style.color = "white";

    body.style.backgroundColor = "white";
    
    modoOscuroActivado = false;
    buttonModo.textContent = "Cambiar a modo Oscuro";

}

button.addEventListener(`click`,modoOscuro);
 buttonClaro.addEventListener("click",modoClaro);
buttonModo.addEventListener("click", intercambiarModo);

