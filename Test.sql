create database taxis;
use taxis;

create table choferes(
chofer_id int(10) primary key not null auto_increment,
rut int(10),
nombre varchar(25),
apepat varchar(25),
apemat varchar(25),
direccion varchar(50),
celular int(15),
estado int(2));

create table moviles(
movil_id int(10) primary key not null auto_increment,
numero int(10),
patente varchar(10),
chofer_id int(10),
estado int(2));

create table carreras(
carrera_id int(10) primary key not null auto_increment,
pasajero varchar(30),
direccion varchar(25),
horainicio timestamp default current_timestamp,
horatermino timestamp default current_timestamp,
estado int(2),
valor int(15),
observacion varchar(250),
movil_id int(10),
operadora_id int(10),
clientes_id int(10));

create table clientes(
clientes_id int(10) primary key not null auto_increment,
nombre varchar(25),
direccion varchar(25),
telefono int(15),
estado int(2));

create table operadoras(
operadora_id int(10) primary key not null auto_increment,
rut int(10),
nombre varchar(25),
apepat varchar(25),
apemat varchar(25),
direccion varchar(50),
celular int(15),
username varchar(25),
password varchar(260),
estado int(2));

insert into operadoras (rut, nombre, apepat, apemat, direccion, celular, username, password, estado) values (17237986-9,'Guillermo','Fecci','Dittmar','onofre cisterna',53717923,'Guillermo','memofecci',1);