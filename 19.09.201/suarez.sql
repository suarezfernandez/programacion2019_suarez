CREATE DATABASE lista_cartas;

USE lista_cartas;

CREATE TABLE registro_cartas
(
  id BIGINT UNSIGNED AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL,
  link VARCHAR(200) NOT NULL,
  price FLOAT(2) NOT NULL,

  PRIMARY KEY (id)
)