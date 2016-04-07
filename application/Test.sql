use inacap;
drop table Usuarios;
create table Usuarios(
usuario_id int(10) primary key not null auto_increment,
nombre varchar(25),
apepat varchar(25),
ciudad_id int (10));

drop table ciudades;
create table ciudades(
ciudad_id int(10) primary key not null auto_increment,
nombre varchar(25));

insert into usuarios(nombre, apepat, ciudad_id) values ('Carlos','Berridos','1');
insert into usuarios(nombre, apepat, ciudad_id) values ('Karina','Berridos','2');
insert into usuarios(nombre, apepat, ciudad_id) values ('Katerine','Berridos','3');

insert into ciudades(nombre) values ('Punta Arenas');
insert into ciudades(nombre) values ('Puerto Natales');
insert into ciudades(nombre) values ('Porvenir');


