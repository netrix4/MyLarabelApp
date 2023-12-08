CREATE DATABASE veterinaria;
USE veterinaria;

CREATE TABLE Usuarios (
	IdU INT PRIMARY KEY,    
	nombreU VARCHAR(255),
	apapU VARCHAR(255),
	apamU VARCHAR(255),
	telU VARCHAR(20),
	nombreM VARCHAR(255),    
	direccion VARCHAR(100),
	TipoDeUsuario VARCHAR(45)
);

CREATE TABLE Mascotas (
	idM INT PRIMARY KEY,
	IdU INT,
	nombreM VARCHAR(255),
	especie VARCHAR(255),
	raza VARCHAR(255),
	edad INT,

	FOREIGN KEY (IdU) REFERENCES Usuarios(IdU)
);

CREATE TABLE Citas (
	idCitas INT PRIMARY KEY,
	hora TIME,
	fecha DATE,
	idM INT,
	idU INT,
	FOREIGN KEY (idM) REFERENCES Mascotas(idM),
	FOREIGN KEY (idU) REFERENCES Usuarios(IdU)
);


INSERT INTO usuarios(nombreU, apapU, apamU, telU, nombreM, direccion, TipoDeUsuario) VALUES ('Chespirito', 'Arias', 'Chanfle', '6461234567', 'Chilaquil', 'Enrique Segoviano #643', 'Cliente' );

INSERT INTO mascotas(idM,IdU,nombreM, especie, raza, edad) VALUES (1,1,'Chilaquil', 'Perro','Perrhijo', 99);
INSERT INTO mascotas(idM,IdU,nombreM, especie, raza, edad) VALUES (2,19,'Chilaquil', 'Perro','Perrhijo', 99);

INSERT INTO citas(idCitas, hora, fecha, idM, idU) VALUES (1, CURTIME(), CURDATE(), 1,1);