// break

for(var numero = 1; numero <=100; numero++) {
    if (numero == 50) {
        break;
    }
    document.write(`<p>${numero}</p>`);
}

// continue
for(var numero = 1; numero <=100; numero++) {
    if (numero % 2 == 0) {
        continue;
    }

    // Despues de ejecutar el continue
    //No se ejecuta esta parte
    document.write(`<p>${numero}</p>`);
}