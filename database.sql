create database login;
use login;

create table usuario(
	id_usuario int primary key auto_increment,
    email text,
    pass text
);

create table producto (
	num_referencia int primary key,
    nombre varchar(100),
    marca text,
    tipo_producto varchar(100),
    num_serie varchar(20),
    fecha_vencimiento date,
    fecha_importacion date,
    tamano varchar(50),
    color varchar(50),
    funcionalidad varchar(50),
    diseño varchar(50),
    material varchar(50),
    forma varchar(50),
    peso varchar(10),
    derechos_autor text,
    precio float
);

insert into usuario (email, pass) values ("kevin@gmail.com", "1234");