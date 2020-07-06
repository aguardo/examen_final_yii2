CREATE DATABASE IF NOT EXISTS examenFinal;

USE examenFinal;

CREATE TABLE IF NOT EXISTS cursos (
codigoCurso INT NOT NULL AUTO_INCREMENT,
titulo VARCHAR(255),
descripcion VARCHAR(255),
textoCorto TEXT,
textoLargo TEXT,
fechaComienzo DATETIME,
fechaFin DATETIME,
duracionHoras INT,
destacado TINYINT,
fotoPortada VARCHAR(255),
pdf VARCHAR(255),
comenzando TINYINT,
finalizado TINYINT,

PRIMARY KEY (codigoCurso)
);

CREATE TABLE IF NOT EXISTS inscripciones (
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
