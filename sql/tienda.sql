create database if not exists tienda;
use tienda;
create table if not exists clientes(
id int auto_increment primary key,
nombre varchar(80),
apellidos varchar(80),
telefono int,
correo varchar(80),
contrasena varchar(80),
fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP  
ON UPDATE CURRENT_TIMESTAMP
);
create table if not exists administrador(
idadministrador int auto_increment primary key,
nombre varchar(80),
contrasena varchar(80));
insert into administrador(nombre,contrasena) values('madelein','madele1n');

create table if not exists productos(
id INT AUTO_INCREMENT PRIMARY key,
nombre VARCHAR(150),
marca VARCHAR(150),
color VARCHAR(80),
sistemaoperativo VARCHAR(80),
descripcion varchar(80),
precio INT,
imagen VARCHAR(300));
---INSERT--
INSERT INTO productos(nombre,marca,color,sistemaoperativo,precio) VALUES('iphone6','apple','dorado','ios12',160.22);
INSERT INTO productos(nombre,marca,color,sistemaoperativo,precio) VALUES('iphone7 Plus','apple','negro','ios16',350.90);
INSERT INTO productos(nombre,marca,color,sistemaoperativo,precio) VALUES('iphone xs Max','apple','blanco','ios16',1020.50);
INSERT INTO productos(nombre,marca,color,sistemaoperativo,precio) VALUES('Xiaomi Mi A2 Lite','xiaomi','gris','Android 8.1 Oreo',160.70);
INSERT INTO productos(nombre,marca,color,sistemaoperativo,precio) VALUES('Samsung Note 8','Samsung','negro','Android',800.50);
INSERT INTO productos(nombre,marca,color,sistemaoperativo,precio) VALUES('Samsung S9 ','Samsung','morado','Android',900.80);
INSERT INTO productos(nombre,marca,color,sistemaoperativo,precio) VALUES('Huawei P20 Lite','Huawei','gris','Android',410.50);

create table if not exists ventas(
id INT AUTO_INCREMENT PRIMARY key,
fechacompra datetime,
total int
);

create table detallepedido(
id INT AUTO_INCREMENT PRIMARY key,
venta int,
producto int,
cantidad int,
totalpagar int
);
 
CREATE TABLE compras(
id INT AUTO_INCREMENT PRIMARY KEY,
nventas INT,
nombre VARCHAR(180),
imagen VARCHAR(250),
precio INT,
cantidad INT,
subtotal INT);