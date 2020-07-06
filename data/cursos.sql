CREATE DATABASE IF NOT EXISTS examenFinal;

USE examenFinal;

CREATE TABLE cursos (
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
)

