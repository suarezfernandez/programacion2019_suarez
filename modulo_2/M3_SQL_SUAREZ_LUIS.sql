#1
SELECT nombre_tienda, estado FROM tiendas WHERE estado='WA'

#2
SELECT DISTINCT TIPO FROM titulos
#4

SELECT titulo,precio FROM titulos WHERE precio > 10

#5
SELECT tipo FROM titulos WHERE tipo = 'business'

#6
SELECT titulo, tipo, precio FROM titulos WHERE tipo='psychology' AND precio >= 20

#7
SELECT tipo precio FROM titulos WHERE precio >2

#8
SELECT titulo, precio FROM titulos WHERE precio BETWEEN '10' AND '20'


#11
SELECT titulo, avance, total_ventas FROM titulos WHERE avance > 5000 AND total_ventas < 4000