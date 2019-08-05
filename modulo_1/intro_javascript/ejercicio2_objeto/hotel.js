// MI HOTEL ESPECIAL 

var nombreHotel = "El resbalon";
var ratingHotel = 3.8;
var habitacionesHotel = 10;
var reservacionesHotel = 8;
var tieneGymHotel = false;


console.log(nombreHotel);
console.log(ratingHotel);
console.log(habitacionesHotel);
console.log(reservacionesHotel);
console.log(tieneGymHotel);

var Hotel = {
    nombre: "El resbalon",
    rating: 3.8,
    habitaciones: 10,
    reservaciones: 8,
    tieneGym: false,

}

console.log(Hotel.nombre);
console.log(Hotel.rating);
console.log(Hotel.habitaciones);
console.log(Hotel.reservaciones);
console.log(Hotel.tieneGym);

//concatenar vs template String
console.log(`Hola, soy un 
template`);

console.log("Bienvenido al Hotel " + Hotel.nombre + " que tiene " + Hotel.rating +  " de rating ");

console.log("El Hotel tiene " + Hotel.reservaciones + " reservaciones");
console.log(`El Hotel tiene ${Hotel.reservaciones} reservaciones`);
console.log("El Hotel tiene " + Hotel.habitaciones + " habitaciones");
console.log(`El Hotel tiene ${Hotel.habitaciones - Hotel.habitaciones} habitaciones`);

console.log("El Hotel tiene " + Hotel.reservaciones + " reservaciones " + Hotel.habitaciones + " habitaciones ");

document.write(`<h1>Bienvenidos a ${Hotel.nombre}</h1>
<p>Este hotel es de ${Hotel.rating} Estrelas</p>
<P> Actualmente tenemos ${Hotel.habitaciones} habitaciones de las cuales ${Hotel.reservaciones} estan reservadas.</P>`);
