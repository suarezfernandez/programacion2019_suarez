function cambiarColor() {


    var color = prompt("Digite un color en ingles");
    var body = document.querySelector("body");
    body.style.backgroundColor = color;
}

var deseaCambiar = confirm("¿Desea cambiar el color?");

if (deseaCambiar) {
    cambiarColor();
}

document.addEventListener("click",cambiarColor);
document.addEventListener("keyup", cambiarColor);
