USE inacap;
DROP TABLE usuario;
CREATE TABLE Usuarios(
usuario_id INT(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
nombre VARCHAR(25),
apepat VARCHAR(25),
ciudad_id INT(10),
username VARCHAR(25),
password VARCHAR(25));
 
 
DROP TABLE Ciudad;
CREATE TABLE Ciudades(
ciudad_id INT(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
nombre VARCHAR(25));
 
INSERT INTO Usuarios(nombre,apepat,ciudad_id,username,password) VALUES('Ricardo','Toledo',1,'rtoledo','1234');
INSERT INTO Usuarios(nombre,apepat,ciudad_id,username,password) VALUES('Juan','Torres',2,'jtorres','1234');
INSERT INTO Usuarios(nombre,apepat,ciudad_id,username,password) VALUES('Pedro','Contreras',3,'pcontreras','1234');
 
INSERT INTO Ciudades(nombre) VALUES('Punta Arenas');
INSERT INTO Ciudades(nombre) VALUES('Santiago');
INSERT INTO Ciudades(nombre) VALUES('Arica');

