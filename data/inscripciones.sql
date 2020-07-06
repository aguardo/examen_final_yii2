CREATE DATABASE IF NOT EXISTS examenFinal;

USE examenFinal;

CREATE TABLE inscripciones (
id INT NOT NULL AUTO_INCREMENT,
nombre VARCHAR(255),
apellidos VARCHAR(255),
email VARCHAR(255),
fechaNacimiento DATETIME,
estudios VARCHAR(255),
telefono VARCHAR(255),
desempleado TINYINT,
curso INT,

PRIMARY KEY (id),
FOREIGN KEY (curso) REFERENCES cursos(codigoCurso)
)