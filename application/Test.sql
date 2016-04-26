USE inacap;
DROP TABLE usuarios;
CREATE TABLE Usuarios(
usuario_id INT(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
nombre VARCHAR(25),
apepat VARCHAR(25),
ciudad_id INT(10),
username VARCHAR(25),
password VARCHAR(260));
 
 
DROP TABLE Ciudades;
CREATE TABLE Ciudades(
ciudad_id INT(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
nombre VARCHAR(25));
 
INSERT INTO Usuarios(nombre,apepat,ciudad_id,username,password) VALUES('Ricardo','Toledo',1,'rtoledo','$2y$10$wrWNgDLpkXOMJtDfiBwwAO5r6xOs92.qZt8HjE9Lc7S6rqRPBC1bu');
INSERT INTO Usuarios(nombre,apepat,ciudad_id,username,password) VALUES('Juan','Torres',2,'jtorres','$2y$10$wrWNgDLpkXOMJtDfiBwwAO5r6xOs92.qZt8HjE9Lc7S6rqRPBC1bu');
INSERT INTO Usuarios(nombre,apepat,ciudad_id,username,password) VALUES('Pedro','Contreras',3,'pcontreras','$2y$10$wrWNgDLpkXOMJtDfiBwwAO5r6xOs92.qZt8HjE9Lc7S6rqRPBC1bu');
 
INSERT INTO Ciudades(nombre) VALUES('Punta Arenas');
INSERT INTO Ciudades(nombre) VALUES('Santiago');
INSERT INTO Ciudades(nombre) VALUES('Arica');

